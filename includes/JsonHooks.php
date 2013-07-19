<?php
/**
 * Hooks for managing JSON Schema namespace and content model.
 *
 * @file
 * @ingroup Extensions
 * @ingroup BookManagerv2
 *
 * @author Molly White
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

class JsonHooks {

	/**
	 * Registers hook and content handlers.
	 * @return bool: Whether hooks and handler were registered.
	 */
	static function registerHandlers() {
		global $wgHooks, $wgContentHandlers;

		$wgContentHandlers[ 'JsonBook' ] =
			'JsonBookContentHandler';

		$wgHooks[ 'CanonicalNamespaces' ][] =
			'JsonHooks::onCanonicalNamespaces';
		$wgHooks[ 'EditFilterMerged' ][] =
				'JsonHooks::onEditFilterMerged';

		return true;
	}

	/**
	 * Registers the Book namespaces and assigns edit rights.
	 * @param array &$namespaces Mapping of numbers to namespace names.
	 * @return bool
	 */
	static function onCanonicalNamespaces( array &$namespaces ) {
		global $wgNamespaceContentModels;

		$namespaces[ NS_BOOK ] = 'Book';
		$namespaces[ NS_BOOK_TALK ] = 'Book_talk';

		$wgNamespaceContentModels[ NS_BOOK ] = 'javascript';

		return true;
	}

	/**
	 * Validates that the revised contents are valid JSON.
	 * If not valid, rejects edit with error message.
	 * @param EditPage $editor
	 * @param string $text Content of the revised article
	 * @param string &$error Error message to return
	 * @param string $summary Edit summary provided for edit.
	 * @return True
	 */
	static function onEditFilterMerged( $editor, $text, &$error, $summary ) {
		$pageTitle = $editor->getTitle();
		if ( $pageTitle->getNamespace() !== NS_BOOK ) {
			return true;
		}

		global $wgMemc;
		$content = new JsonBookContent( $text );

		try {
			$content->validate();
			$blockIsValid = true;
		} catch ( JsonSchemaException $e ) {
			$error = $e->getMessage();
			$blockIsValid = false;
		}

		if ( $blockIsValid ) {
			//Add to cache
			$cacheKey = wfMemcKey( 'BookManagerv2', $pageTitle->getArticleID(), 'json' );
			$wgMemc->set( wfMemcKey( $cacheKey ),
				FormatJson::decode( $content->getNativeData(), false ));
		}

		return true;
	}
}
