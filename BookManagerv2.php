<?php
/**
 * BookManagerv2 extension.
 *
 * @file
 * @ingroup Extensions
 */

if ( version_compare( $wgVersion, '1.20', '<' ) ) {
	echo "Extension:BookManagerv2 requires MediaWiki 1.20 or higher.\n";
	exit( 1 );
}

$wgExtensionCredits['parserhook'][] = array(
	'path'          => __FILE__,
	'name'          => 'BookManagerv2',
	'author'        => array( 'Molly White', 'Timo Tijhof' ),
	'version'        => '0.0.1',
	'url'            => '',
	'descriptionmsg' => 'bookmanagerv2-desc',
);

/* Setup */

$dir = __DIR__;

// Register files
$wgAutoloadClasses['BookManagerv2Hooks'] = $dir . '/BookManagerv2.hooks.php';

// Register hooks
$wgHooks['BeforePageDisplay'][] = 'BookManagerv2Hooks::onBeforePageDisplay';

// Load resources
$wgResourceModules['ext.BookManagerv2'] = array(
	'scripts' => 'ext.BookManagerv2.js',
	'styles' => 'ext.BookManagerv2.css',
	'localBasePath' => dirname(__FILE__) . '/modules',
	'remoteExtPath' => 'BookManagerv2/modules'
);
