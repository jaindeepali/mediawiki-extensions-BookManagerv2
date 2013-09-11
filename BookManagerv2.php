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
	'path'              => __FILE__,
	'name'              => 'BookManagerv2',
	'author'            => array( 'Molly White', 'Ori Livneh' ),
	'version'           => '0.0.1',
	'url'               => 'http://www.mediawiki.org/wiki/Extension:BookManagerv2',
	'descriptionmsg'    => 'bookmanagerv2-desc',
);

// Declare namespace & associated content handler.

define( 'NS_BOOK', 240 );
define( 'NS_BOOK_TALK', 241 );
$wgContentHandlers[ 'JsonBook' ] = 'JsonBookContentHandler';

// Configuration

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
		// Default to using JSON schema
		$json = file_get_contents( __DIR__ . '/schemas/bookschema.json' );
		$schema = FormatJson::decode( $json, true );
	}

	$root = new JsonTreeRef( $object );
	$root->attachSchema( $schema );
	return $root->validate();
}

/* Setup */

// Register files
$wgAutoloadClasses += array(
	// Hooks
	'BookManagerv2Hooks' => __DIR__ . '/BookManagerv2.hooks.php',

	// ContentHandler
	'JsonBookContent' => __DIR__ . '/includes/JsonContent.php',
	'JsonBookContentHandler' => __DIR__ . '/includes/JsonBookContentHandler.php',

	// ResourceLoaderModule
	'RemoteSchema' => __DIR__ . '/includes/RemoteSchema.php',

	// Json
	'JsonTreeRef' => __DIR__ . '/includes/JsonSchema.php',
	'JsonSchemaException' => __DIR__ . '/includes/JsonSchema.php',
	'JsonUtil' => __DIR__ . '/includes/JsonSchema.php',
	'TreeRef' => __DIR__ . '/includes/JsonSchema.php',
	'JsonSchemaIndex' => __DIR__ . '/includes/JsonSchema.php',
	'JsonEditor' => __DIR__ . '/JsonEditor.php',

	// API
	'ApiJsonSchema' => __DIR__ . '/includes/ApiJsonSchema.php',
);

// Messages
$wgExtensionMessagesFiles += array(
	'BookManagerv2' => __DIR__ . '/BookManagerv2.i18n.php',
	'BookManagerv2Namespaces' => __DIR__ . '/BookManagerv2.namespaces.php',
	'JsonSchema' => __DIR__ . '/includes/JsonSchema.i18n.php'
);

// Declare namespace. If the namespace name has been localized, the
// localized name will be used. If you'd like to override the default
// and specify a custom namespace name for your wiki, you may do so
// by adding these two lines to LocalSettings.php, immediately below
// the code that loads the extension:
//   $wgExtraNamespaces[NS_BOOK] = 'YourCustomName';
//   $wgExtraNamespaces[NS_BOOK_TALK] = 'YourCustomName_talk';
$wgHooks['CanonicalNamespaces'][] = function( array &$namespaces ) {
	$namespaces[NS_BOOK] = 'Book';
	$namespaces[NS_BOOK_TALK] = 'Book_talk';
	return true;
} ;

// Register hooks
$wgHooks['BeforePageDisplay'][] = 'BookManagerv2Hooks::onBeforePageDisplay';
$wgHooks['EditFilterMerged'][] = 'BookManagerv2Hooks::onEditFilterMerged';
$wgHooks['CustomEditor'][] = 'BookManagerv2Hooks::onCustomEditor';

// Load resources
$wgResourceModules['ext.BookManagerv2'] = array(
	'styles' => 'ext.BookManagerv2.css',
	'localBasePath' => __DIR__ . '/modules',
	'remoteExtPath' => 'BookManagerv2/modules'
);
$wgResourceModules['ext.BookManagerv2js'] = array(
	'scripts' => 'ext.BookManagerv2.js',
	'styles' => 'ext.BookManagerv2js.css',
	'localBasePath' => __DIR__ . '/modules',
	'remoteExtPath' => 'BookManagerv2/modules'
);
$wgResourceModules['ext.BookManagerv2.editor'] = array(
	'styles' => 'ext.BookManagerv2.editor.css',
	'localBasePath' => __DIR__ . '/modules',
	'remoteExtPath' => 'BookManagerv2/modules',
);
$wgResourceModules['ext.BookManagerv2.editorjs'] = array(
	'scripts' => 'ext.BookManagerv2.editor.js',
	'styles' => 'ext.BookManagerv2.editorjs.css',
	'localBasePath' => __DIR__ . '/modules',
	'remoteExtPath' => 'BookManagerv2/modules',
	'dependencies' => array(
		'jquery.ui.sortable',
		'mediawiki.jqueryMsg',
		'jquery.json',
		'mediawiki.util'
	),
	'messages' => array(
		'bookmanagerv2-move-alt',
		'bookmanagerv2-remove-alt',
		'hidetoc',
		'showtoc',
		'bookmanagerv2-done',
		'cancel',
		'bookmanagerv2-section-name',
		'bookmanagerv2-section-link',
		'editlink',
		'bookmanagerv2-rename'
	)
);

// User configuration

/**
 * @var bool
 * If disabled, navigation bars will not be added to any pages.
 */
$wgBookManagerv2NavigationBars = true;

/**
 * @var bool
 * If enabled, this adds an example navigation bar to every mainspace
 * page, drawing the information from examples/book.json.
 * $wgBookManagerv2NavigationBars must also be set to true.
 */
$wgBookManagerv2ExampleNavigation = false;

/**
 * @var array|null
 * If null, the navigation bars are added to the $wgContentNamespaces
 * namespaces. Otherwise, the navigation bars are added to the
 * namespaces in this array.
 */
$wgBookManagerv2NavigationNamespaces = null;

/**
 * @var bool
 * If set to false, this hides the metadata from the navigation bar.
 */
$wgBookManagerv2Metadata = true;

/**
 * @var bool
 * If set to false, this hides the chapter list from the navigation bar.
 */
$wgBookManagerv2ChapterList = true;

/**
 * @var bool
 * If set to false, this hides the previous/next links from the navigation bar.
 */
$wgBookManagerv2PrevNext = true;

/**
 * @var string
 * Location of the local JSON schema, relative to the extension directory.
 */
$wgBookManagerv2LocalSchema = '/schemas/bookschema.json';

/**
 * @var string|bool
 * Title of the page containing the remote schema, or false if not set.
 */
$wgBookManagerv2SchemaTitle = false;

/**
 * @var string|bool
 * URI of API.php on the schema wiki, or false if not set.
 * @example string: 'http://meta.wikimedia.org/w/api.php'
 */
$wgBookManagerv2ApiUri = false;

/**
 * @var string|bool
 * Value of $wgDBname for the MediaWiki instance housing schemas, or false if
 * not set.
 */
$wgBookManagerv2SchemaDBname = false;
