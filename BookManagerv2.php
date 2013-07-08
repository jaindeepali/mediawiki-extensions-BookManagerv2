<?php
/**
 * BookManagerv2 extension.
 *
 * @file
 * @ingroup BookManagerv2
 * @ingroup Extensions
 *
 * @author Molly White
 * @author Ori Livneh
 *
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
 * 
 */

$wgExtensionCredits['parserhook'][] = array(
	'path'          => __FILE__,
	'name'          => 'BookManagerv2',
	'author'        => array( 'Molly White', 'Ori Livneh' ),
	'version'        => '0.0.1',
	'url'            => 'http://www.mediawiki.org/wiki/Extension:BookManagerv2',
	'descriptionmsg' => 'bookmanagerv2-desc',
);

// Define namespaces

define( 'NS_BOOK', 240 );
define( 'NS_BOOK_TALK', 241 );

//Configuration

$dir = __DIR__;

/**
 * @var bool|string: URI or false if not set.
 * URI of api.php on schema wiki.
 *
 * @example string: 'http://meta.wikimedia.org/w/api.php
 */
$wgBookManagerv2SchemaApiUri = 'http://meta.wikimedia.org/w/api.php';

/**
 * Takes a string of JSON and formats it for readability.
 * @param string $json
 * @return string|null: Formatted JSON or null if input was invalid
 */
function beautifyJson( $json ) {
	$decoded = FormatJson::decode( $json, true );
	if ( !is_array( $decoded ) ) {
		return NULL;
	}
	return FormatJson::encode( $decoded, true );
}

/**
 * Validates object against JSON schema.
 *
 * @throws JsonException: If the object fails to validate.
 * @param array $object Object to be validated.
 * @param array $schema Schema to validate against (defaults to JSON schema)
 * @return bool True
 */
function jsonValidate( $object, $schema = NULL ) {
	if ( NULL == $schema ) {
		//Default to using JSON schema
		$json = file_get_contents( $dir . '/schemas/bookschema.json' );
		$schema = FormatJson::decode( $json, true );
	}

	$root = new JsonTreeRef( $object );
	$root->attachSchema( $schema );
	return $root->validate();
}

/* Setup */

// Register files
$wgAutoloadClasses += array(
	//Hooks
	'BookManagerv2Hooks' => $dir . '/BookManagerv2.hooks.php',
	'JsonHooks' => $dir . '/includes/JsonHooks.php',

	//ContentHandler
	'JsonBookContent' => $dir . '/includes/JsonContent.php',

	//ResourceLoaderModule
	'RemoteSchema' => $dir . '/includes/RemoteSchema.php',

	//Json
	'JsonTreeRef' => $dir . '/includes/JsonSchema.php',
	'JsonSchemaException' => $dir . '/includes/JsonSchema.php',

	//API
	'ApiJsonSchema' => $dir . '/includes/ApiJsonSchema.php',
);

// Register hooks
$wgHooks['BeforePageDisplay'][] = 'BookManagerv2Hooks::onBeforePageDisplay';

// Load resources
$wgResourceModules['ext.BookManagerv2'] = array(
	'scripts' => 'ext.BookManagerv2.js',
	'styles' => 'ext.BookManagerv2.css',
	'localBasePath' => dirname(__FILE__) . '/modules',
	'remoteExtPath' => 'BookManagerv2/modules'
);

// Register hook and content handlers for the JSON schema content iff
// running on the MediaWiki instance housing the schemas.
$wgExtensionFunctions[] = 'JsonHooks::registerHandlers';
