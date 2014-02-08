<?php
/**
 * JSON book content model
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

/**
 * Represents the content of a JSON book page
 */
class JsonBookContent extends TextContent {

	function __construct( $text ) {
		parent::__construct( $text, 'Json' );
	}

	/**
	 * Decodes the JSON block into a PHP associative array.
	 * @return array: JSON block array
	 */
	function getJsonData() {
		return FormatJson::decode( $this->getNativeData(), true );
	}

	/**
	 * @throws JsonSchemaException: If invalid
	 * @return bool: True if valid
	 */
	function validate() {
		$block = $this->getJsonData();
		if ( !is_array( $block ) ) {
			throw new JsonSchemaException(
				wfMessage( 'bookmanagerv2-invalid-json' )->parse() );
		}
		return jsonValidate( $block );
	}

	/**
	 * @return bool: Whether content is valid JSON
	 */
	function isValid() {
		try {
			return $this->validate();
		} catch ( JsonSchemaException $e ) {
			return false;
		}
	}

	/**
	 * Beautifies JSON prior to save.
	 * @param Title $title Title
	 * @param User $user User
	 * @param ParserOptions $popts
	 * @return JsonBookContent
	 */
	function preSaveTransform( Title $title, User $user,
		ParserOptions $popts ) {
			return new JsonBookContent(
				beautifyJson( $this->getNativeData() ) );
		}

	/**
	 * Constructs an HTML representation of a JSON object.
	 * @param Array $mapping
	 * @return string: HTML
	 */
	static function objectTable( $mapping ) {
		$rows = array();

		foreach ( $mapping as $key => $val ) {
			$rows[] = self::objectRow( $key, $val );
		}

		return Xml::tags( 'table', array( 'class' => 'mw-json-book' ),
			Xml::tags( 'tbody', array(), join( "\n", $rows ) )
		);
	}

	/**
	 * Constructs an HTML representation of a single key-value pair.
	 * @param string $key
	 * @param mixed $val
	 * @return string: HTML
	 */
	static function objectRow( $key, $val ) {
		$th = Xml::elementClean( 'th', array(), $key );
		if ( is_array( $val ) ) {
			$td = Xml::tags( 'td', array(),
				self::objectTable( $val ) );
		} else {
			if ( is_string( $val ) ) {
				$val = '"' . $val . '"';
			} else {
				$val = FormatJson::encode( $val );
			}

			$td = Xml::elementClean( 'td',
				array( 'class' => 'value' ), $val );
		}

		return Xml::tags( 'tr', array(), $th . $td );
	}

	/**
	 * Wraps HTML representation of book structure.
	 *
	 * @param Title $title
	 * @param int|null $revId Revision ID
	 * @param ParserOptions|null $options
	 * @param boolean $generateHtml Whether or not to generate HTML
	 * @return ParserOutput
	 */
	public function getParserOutput( Title $title, $revId = null,
		ParserOptions $options = null, $generateHtml = true ) {
		$out = parent::getParserOutput( $title, $revId, $options,
			$generateHtml );

		return $out;
	}

	/**
	 * Generates HTML representation of book structure.
	 * @return string: HTML representation
	 */
	function getHighlightHtml() {
		$block = $this->getJsonData();
		return is_array( $block ) ? self::objectTable( $block ) : '';
	}
}
