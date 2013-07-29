<?php
/**
 * Hooks for the BookManagerv2 extension
 *
 * @file
 * @ingroup Extensions
 *
 * @author Molly White
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
 */

class BookManagerv2Hooks {

	/**
	 * Validates that the revised contents of an NS_BOOK page are valid JSON.
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
			$wgMemc->set( $cacheKey,
				FormatJson::decode( $content->getNativeData(), false ));
		}

		return true;
	}

	/**
	 * Adds a navigation bar to the page
	 *
	 * @param object $prev Object representing the preceding page; contains
	 * 		"link" and "name" properties.
	 * @param object $next Object representing the following page; contains
	 * 		"link" and "name" properties.
	 * @param string $chapterList String containing the chapter list HTML
	 * @param string $metadata String containing the metadata HTML
	 * @return string HTML string
	 */
	public static function readingInterfaceUX( $prev, $next, $chapterList, $metadata ) {
		global $wgExtensionAssetsPath;
		$imagePath = $wgExtensionAssetsPath . "/BookManagerv2/images/";

		$html = Html::openElement( 'div', array( 'class' => 'mw-bookmanagerv2-nav-wrap' ) )
		. Html::openElement( 'div', array( 'class' => 'mw-bookmanagerv2-nav-constrain' ) )
		. Html::openElement( 'div', array( 'class' => 'mw-bookmanagerv2-nav-bar' ) )
		. Html::openElement( 'a', array(
				'class' => array(
					'mw-bookmanagerv2-nav-icon',
					'mw-bookmanagerv2-nav-data' )
				)
			)
		. Html::element( 'img', array(
				'class' => 'mw-bookmanagerv2-nav-data',
				'src' => $imagePath . 'Info_sign_font_awesome.png',
				'alt' => wfMessage( 'bookmanagerv2-metadata' )->text(),
				'title' => wfMessage( 'bookmanagerv2-metadata' )->text()
			), '' )
		. Html::closeElement( 'a' )
		. Html::openElement( 'a', array(
				'class' => array(
					'mw-bookmanagerv2-nav-icon',
					'mw-bookmanagerv2-nav-toc' )
				)
			)
		. Html::element( 'img', array(
				'class' => 'mw-bookmanagerv2-nav-toc',
				'src' => $imagePath . 'Ul_font_awesome.png',
				'alt' => wfMessage( 'bookmanagerv2-contents' )->text(),
				'title' => wfMessage( 'bookmanagerv2-contents' )->text()
			), '' )
		. Html::closeElement( 'a' );
		if ( $prev ) {
			$html .= Linker::link(
				Title::newFromText( $prev->link ),
				$prev->title,
				array( 'class' => 'mw-bookmanagerv2-nav-prev' )
			);
		}
		if ( $next ) {
			$html .= Linker::link(
				Title::newFromText( $next->link ),
				$next->title,
				array( 'class' => 'mw-bookmanagerv2-nav-next' )
			);
		}
		$html .= Html::closeElement( 'div' )
		. Html::rawElement( 'div', array(
				'class' => array(
					'mw-bookmanagerv2-nav-dropdown',
					'mw-bookmanagerv2-nav-data' )
				),
				$metadata
			)
		. Html::openElement( 'div', array(
				'class' => array(
					'mw-bookmanagerv2-nav-dropdown',
					'mw-bookmanagerv2-nav-toc' )
				)
			)
		. Html::rawElement( 'div', array(
			'class' => 'mw-bookmanagerv2-nav-scrollable'
			),
				$chapterList
			)
		. Html::closeElement( 'div' )
		. Html::closeElement( 'div' )
		. Html::closeElement( 'div' );
		return $html;
	}

	/**
	 * Pulls the text from an indicated page, decodes it as JSON.
	 *
	 * @param Title $title Title of the page from which the JSON is pulled
	 * @return object JSON object
	 */
	public static function getJson( Title $title ) {
		if ( !$title->exists() ) {
			return false;
		}
		$jsonPage = WikiPage::factory( $title );
		return json_decode( $jsonPage->getText( Revision::FOR_PUBLIC ) );
	}

	/**
	 * Creates a list item element with a comma-separated list of the array values
	 *
	 * @param string $key Name of the JSON property
	 * @param array $array Array of strings
	 * @return string HTML list item element
	 */
	public static function addArray( $key, $array ) {
		global $wgContLang;
		$output = Html::element( 'li', array(),
			wfMessage( 'bookmanagerv2-' . $key )
				->numParams( count( $array ) )
				->params( $wgContLang->commaList( $array ) )
				->text() );
		return $output;
	}

	/**
	 * Creates a list item element with a string
	 *
	 * @param string $key Name of the JSON property
	 * @param string $string Name of the string value
	 * @return string HTML list item element
	 */
	public static function addString( $key, $string ) {
		$output = Html::element( 'li', array(),
			wfMessage( 'bookmanagerv2-' . $key, $string )->text() );
		return $output;
	}

	/**
	 * Creates a list item element with a date.
	 *
	 * @param int|null $year Year
	 * @param int|null $month Month
	 * @param int|null $day Day
	 * @return string HTML list item element
	 */
	public static function addDate( $year, $month, $day ) {
		// TODO: This needs to be localized.
		$output = Html::openElement( 'li', array() );
		if ( $day && !$month ) {
			// Having a day without a month doesn't make much sense
			$date = $year;
		} else {
			$date = $day ? $day . "/" : "";
			$date .= $month ? $month . "/" : "";
			$date .= $year ? $year : "";
		}
		$output .= wfMessage( 'bookmanagerv2-publication-date',
			$date )->text()
			. Html::closeElement( 'li' );
		return $output;
	}

	/**
	 * Generates HTML for the chapter list. All pages except the current one
	 * will be linked.
	 *
	 * @param object $sections Sections property of the JSON
	 * @param string $currentPageTitle Title of the page that's being viewed
	 * @return string HTML ordered list element
	 */
	public static function formatChapterList( $sections, $currentPageTitle ) {
		$html = Html::openElement( 'ol', array() );
		foreach ( $sections as $key => $val ) {
			if ( $val->link !== $currentPageTitle ) {
				$html .= Html::openElement( 'li', array() )
				. Linker::link(
						Title::newFromText( $val->link ),
						$val->name
					)
				. Html::closeElement( 'li' );
			} else {
				$html .= Html::element( 'li', array(), $val->name );
			}
		}
		$html .= Html::closeElement( 'ol' );
		return $html;
	}

	/**
	 * Generates HTML for the metadata list.
	 *
	 * @param object $jsonBook JSON representation of the book
	 * @return string HTML unordered list element
	 */
	public static function formatMetadata( $jsonBook ) {
		$metadata = Html::openElement( 'ul', array() )
		. Html::openElement( 'li', array() )
		. wfMessage( 'bookmanagerv2-title',
			$jsonBook->title )->text()
		. Html::closeElement( 'li' );
		if ( isset( $jsonBook->alternate_titles ) ) {
			$metadata .= self::addArray( "alternate-titles",
				$jsonBook->alternate_titles );
		}
		if ( isset( $jsonBook->authors ) ) {
			$metadata .= self::addArray( "authors", $jsonBook->authors );
		}
		if ( isset( $jsonBook->translators ) ) {
			$metadata .= self::addArray( "translators",
				$jsonBook->translators );
		}
		if ( isset( $jsonBook->editors ) ) {
			$metadata .= self::addArray( "editors", $jsonBook->editors );
		}
		if ( isset( $jsonBook->illustrators ) ) {
			$metadata .= self::addArray( "illustrators",
				$jsonBook->illustrators );
		}
		if ( isset( $jsonBook->subtitle ) ) {
			$metadata .= self::addString( "subtitle", $jsonBook->subtitle );
		}
		if ( isset( $jsonBook->series_title ) ) {
			$metadata .= self::addString( "series-title",
				$jsonBook->series_title );
		}
		if ( isset( $jsonBook->volume ) ) {
			$metadata .= self::addString( "volume",
				(string)$jsonBook->volume );
		}
		if ( isset( $jsonBook->edition ) ) {
			$metadata .= self::addString( "edition",
				(string)$jsonBook->edition );
		}
		if ( isset( $jsonBook->publisher ) ) {
			$metadata .= self::addString( "publisher", $jsonBook->publisher );
		}
		if ( isset( $jsonBook->publication_city ) ) {
			$metadata .= self::addString( "publication-city",
				$jsonBook->publication_city );
		}
		if ( isset( $jsonBook->publication_year ) ) {
			$year = isset( $jsonBook->publication_year ) ?
				$jsonBook->publication_year : null;
			$month = isset( $jsonBook->publication_month ) ?
				$jsonBook->publication_month : null;
			$day = isset( $jsonBook->publication_day ) ?
				$jsonBook->publication_day : null;
			$metadata .= self::addDate( $year, $month, $day );
		}
		if ( isset( $jsonBook->printer ) ) {
			$metadata .= self::addString( "printer", $jsonBook->printer );
		}
		if ( isset( $jsonBook->language ) ) {
			// TODO: Transform the language code to the correct long-form language
			$metadata .= self::addString( "language", $jsonBook->language );
		}
		if ( isset( $jsonBook->description ) ) {
			$metadata .= self::addString( "description",
				$jsonBook->description );
		}
		if ( isset( $jsonBook->isbn ) ) {
			$metadata .= self::addString( "isbn", $jsonBook->isbn );
		}
		if ( isset( $jsonBook->lccn ) ) {
			$metadata .= self::addString( "lccn", $jsonBook->lccn );
		}
		if ( isset( $jsonBook->oclc ) ) {
			$metadata .= self::addString( "oclc", $jsonBook->oclc );
		}
		$metadata .= Html::closeElement( 'ul' );

		return $metadata;
	}

	/**
	 * Adds the navigation bar if the page is in the mainspace, and if it contains
	 * a category of the format [[Category:Book:Book Title]], where
	 * [[Book:Book Title]] is an existing page that contains a valid JSON
	 * block.
	 */
	public static function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {
		// Check that the navigation bar is only added to mainspace pages.
		global $wgContentNamespaces;
		if ( in_array( $out->getTitle()->getNamespace(), $wgContentNamespaces ) ) {
			if ( $out->getRevisionId() !== null ) {
				global $wgContLang, $wgBookManagerv2ExampleNavigation, $wgMemc;
				$categories = $out->getCategories();
				$namespace = $wgContLang->convertNamespace( NS_BOOK ) . ":";
				$out->addModuleStyles( "ext.BookManagerv2" );
				$out->addModules( "ext.BookManagerv2js" );
				$currentPageTitle = $out->getTitle()->getText();
				$prev = $next = $jsonBook = null;
				foreach ( $categories as $cat ) {
					if ( substr( $cat, 0, strlen( $namespace ) ) === $namespace ) {
						$jsonPageTitle = Title::newFromText( $cat );
						if ( $jsonPageTitle->exists() ) {
							// Check for cached version of the JSON block, otherwise
							// get it from the DB and set the value in the cache.
							$cacheKey = wfMemcKey(  'BookManagerv2', $jsonPageTitle->getArticleID(), 'json' );
							$jsonBook = $wgMemc->get( $cacheKey );
							if ( $jsonBook === false ) {
								$jsonBook = self::getJson( $jsonPageTitle );
								$wgMemc->set( $cacheKey, $jsonBook );
							}
							break;
						}
					}
				}

				if ( !$jsonBook && $wgBookManagerv2ExampleNavigation ) {
					$jsonBook = json_decode(
						file_get_contents( __DIR__ . '/examples/book.json' ) );
					$out->setSubtitle(
						wfMessage( 'bookmanagerv2-example-nav' )->text() );
				}

				if ( !$jsonBook ) {
					// No Category:Book on this page, and the example
					// navigation is disabled
					return true;
				}

				// Get the previous/next pages
				$currentPageNumber = null;
				foreach ( $jsonBook->sections as $key => $val ) {
					if ( $val->link === $currentPageTitle ) {
						$currentPageNumber = $key;
						if ( $key !== 0 ) {
							$prev = (object) array();
							$prev->title =
								$jsonBook->sections[ $key - 1 ]->name;
							$prev->link =
								$jsonBook->sections[ $key - 1 ]->link;
						}
						if ( $key !== ( count( $jsonBook->sections ) - 1 ) ) {
							$next = (object) array();
							$next->title =
								$jsonBook->sections[ $key + 1 ]->name;
							$next->link =
								$jsonBook->sections[ $key + 1 ]->link;
						}
						break;
					}
				}

				if ( $currentPageNumber === null
					&& count( $jsonBook->sections ) > 0
				) {
					$next = (object) array();
					$next->title =
						$jsonBook->sections[ 0 ]->name;
					$next->link =
						$jsonBook->sections[ 0 ]->link;
				}

				$chapterList = self::formatChapterList( $jsonBook->sections,
					$currentPageTitle );
				$metadata = self::formatMetadata( $jsonBook );
				$navbar = self::readingInterfaceUX( $prev, $next, $chapterList,
					$metadata );
				$out->prependHtml( $navbar );
			}
		}
		return true;
	}
}
