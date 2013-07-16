<?php
/**
 * JSON Schema Content Handler
 *
 * @file
 * @ingroup Extensions
 * @ingroup BookManagerv2
 *
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

class JsonBookContentHandler extends TextContentHandler {

	public function __construct( $modelId = 'JsonSchema' ) {
		parent::__construct( $modelId, array( CONTENT_FORMAT_JSON ) );
	}

	/**
	 * Unserializes a JsonSchemaContent object.
	 *
	 * @param string $text Serialized form of the content
	 * @param null|string $format The format used for serialization
	 *
	 * @return Content the JsonSchemaContent object wrapping $text
	 */
	public function unserializeContent( $text, $format = null ) {
		$this->checkFormat( $format );
		return new JsonSchemaContent( $text );
	}

	/**
	 * Creates an empty JsonSchemaContent object.
	 *
	 * @return Content
	 */
	public function makeEmptyContent() {
		return new JsonSchemaContent( '' );
	}

	/** JSON Schema is English **/
	public function getPageLanguage( Title $title, Content $content = null ) {
		return wfGetLangObj( 'en' );
	}

	/** JSON Schema is English **/
	public function getPageViewLanguage( Title $title, Content $content = null ) {
		return wfGetLangObj( 'en' );
	}
}
