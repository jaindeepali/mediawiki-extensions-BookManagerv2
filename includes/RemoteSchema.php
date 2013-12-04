<?php
/**
 * Represents a schema revision on a remote wiki.
 * Handles retrieval (via HTTP) and local caching.
 *
 * @note When we switch to PHP 5.4, add 'implements JsonSerializable'
 *
 * @file
 * @ingroup Extensions
 * @ingroup BookManagerv2
 *
 * @author Molly White
 * @author Ori Livneh <ori@wikimedia.org>
 * @section LICENSE
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

class RemoteSchema {

	const LOCK_TIMEOUT = 20;

	var $cache;
	var $http;
	var $key;
	var $revision;
	var $title;
	var $content = false;


	/**
	 * Constructor.
	 * @param string $title
	 * @param integer $revision
	 * @param ObjectCache $cache (optional) cache client.
	 * @param Http $http (optional) HTTP client.
	 */
	function __construct( $title, $revision = NULL, $cache = NULL, $http = NULL ) {
		global $wgBookManagerv2SchemaDBname;

		$this->title = $title;
		$this->cache = $cache ?: wfGetCache( CACHE_ANYTHING );
		$this->http = $http ?: new Http();
		$this->revision = self::getLatestRevId();
		if ( $this->revision === false ) {
			return false;
		}
		$this->key = "schema:{$wgBookManagerv2SchemaDBname}:{$title}:{$revision}";
	}


	/**
	 * Retrieves schema content.
	 * @return array|bool: Schema or false if irretrievable.
	 */
	function get() {
		if ( $this->content ) {
			return $this->content;
		}

		$this->content = $this->memcGet();
		if ( $this->content ) {
			return $this->content;
		}

		$this->content = $this->httpGet();
		if ( $this->content ) {
			$this->memcSet();
		}

		return $this->content;
	}


	/**
	 * Retrieves content from memcached.
	 * @return array:bool: Schema or false if not in cache.
	 */
	function memcGet() {
		return $this->cache->get( $this->key );
	}


	/**
	 * Store content in memcached.
	 */
	function memcSet() {
		return $this->cache->set( $this->key, $this->content );
	}


	/**
	 * Acquire a mutex lock for HTTP retrieval.
	 * @return bool: Whether lock was successfully acquired.
	 */
	function lock() {
		return $this->cache->add( $this->key . ':lock', 1, self::LOCK_TIMEOUT );
	}


	/**
	 * Gets the latest revision ID of the schema on the remote wiki.
	 * @return int: Revision ID.
	 */
	function getLatestRevId() {
		global $wgBookManagerv2SchemaApiUri, $wgBookManagerv2SchemaTitle;

		$q = array(
			'action' =>  'query',
			'format' =>  'json',
			'prop'   =>  'info',
			'titles' =>  $wgBookManagerv2SchemaTitle,
		);

		$queryString = wfAppendQuery( $wgBookManagerv2SchemaApiUri, $q );
		$result = FormatJson::decode( $this->http->get(
			$queryString, self::LOCK_TIMEOUT * 0.8 ) );
		$pageId = key( $result->query->pages );
		return $result->query->pages->$pageId->lastrevid;
	}

	/**
	 * Constructs URI for retrieving schema from remote wiki.
	 * @return string: URI.
	 */
	function getUri() {
		global $wgBookManagerv2SchemaApiUri;

		if ( substr( $wgBookManagerv2SchemaApiUri, -10 ) === '/index.php' ) {
			// Old-style request (index.php)
			$q = array(
				'action' =>  'raw',
				'oldid'  =>  $this->revision,
			);
		} else {
			// New-style request (api.php)
			$q = array(
				'action' =>  'jsonschema',
				'revid'  =>  $this->revision
			);
		}

		return wfAppendQuery( $wgBookManagerv2SchemaApiUri, $q );
	}


	/**
	 * Returns an object containing serializable properties.
	 * @implements JsonSerializable
	 */
	function jsonSerialize() {
		return array(
			'schema'   => $this->get() ?: new StdClass(),
			'revision' => $this->revision
		);
	}


	/**
	 * Retrieves the schema using HTTP.
	 * Uses a memcached lock to avoid cache stampedes.
	 * @return array|boolean: Schema or false if unable to fetch.
	 */
	function httpGet() {
		if ( !$this->lock() ) {
			return false;
		}
		$raw = $this->http->get( $this->getUri(), self::LOCK_TIMEOUT * 0.8 );
		return FormatJson::decode( $raw, true ) ?: false;
	}
}
