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
		if ( !$pageTitle->inNamespace( NS_BOOK ) ) {
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
			// Add to cache
			$cacheKey = wfMemcKey( 'BookManagerv2', $pageTitle->getArticleID(), 'json' );
			$wgMemc->set( $cacheKey,
				FormatJson::decode( $content->getNativeData(), false ) );
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
	public static function readingInterfaceUX( $prev, $next, $chapterList, $metadata,
		$currentPageTitle
	) {
		if ( $prev === null && $next === null && $chapterList === null
				&& $metadata === null ) {
			return '';
		}

		global $wgExtensionAssetsPath;
		$imagePath = $wgExtensionAssetsPath . "/BookManagerv2/images/";

		$html = Html::openElement( 'div', array( 'class' => 'mw-bookmanagerv2-nav-wrap' ) )
		. Html::openElement( 'div', array( 'class' => 'mw-bookmanagerv2-nav-constrain' ) )
		. Html::openElement( 'div', array( 'class' => 'mw-bookmanagerv2-nav-bar' ) );
		if ( $metadata ) {
			$imgHtml = Html::element( 'img', array(
					'class' => 'mw-bookmanagerv2-nav-data',
					'src' => $imagePath . 'Info_sign_font_awesome.png',
					'alt' => wfMessage( 'bookmanagerv2-metadata' )->text(),
					'title' => wfMessage( 'bookmanagerv2-metadata' )->text()
				), '' );
			$html .= Linker::link(
				$currentPageTitle,
				$imgHtml,
				array( 'class' => array(
						'mw-bookmanagerv2-nav-icon',
						'mw-bookmanagerv2-nav-data' ) ),
				array(),
				array()
			);
		}
		if ( $chapterList ) {
			$imgHtml = Html::element( 'img', array(
					'class' => 'mw-bookmanagerv2-nav-toc',
					'src' => $imagePath . 'Ul_font_awesome.png',
					'alt' => wfMessage( 'bookmanagerv2-contents' )->text(),
					'title' => wfMessage( 'bookmanagerv2-contents' )->text()
				), '' );
			$html .= Linker::link(
				$currentPageTitle,
				$imgHtml,
				array( 'class' => array(
						'mw-bookmanagerv2-nav-icon',
						'mw-bookmanagerv2-nav-toc' ) ),
				array(),
				array()
			);
		}
		if ( $prev ) {
			$html .= Linker::link(
				Title::newFromText( $prev->link ),
				$prev->title,
				array(
					'class' => 'mw-bookmanagerv2-nav-prev',
					'title' => wfMessage( 'bookmanagerv2-prev-title' )
						->params( $prev->title )
						->escaped()
			   	)
			);
		}
		if ( $next ) {
			$html .= Linker::link(
				Title::newFromText( $next->link ),
				$next->title,
				array(
					'class' => 'mw-bookmanagerv2-nav-next',
					'title' => wfMessage( 'bookmanagerv2-next-title' )
						->params( $next->title )
						->escaped()
				)
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
	 * @param string $i18n Name of the JSON property
	 * @param array $array Array of strings
	 * @return string HTML list item element
	 */
	public static function addArray( $i18n, $array ) {
		global $wgContLang;
		// Give grep a chance to find the usages:
		// bookmanagerv2-alternate-titles, bookmanagerv2-authors, bookmanagerv2-translators,
		// bookmanagerv2-editors, bookmanagerv2-illustrators
		$output = Html::element( 'li', array(),
			wfMessage( $i18n )
				->numParams( count( $array ) )
				->params( $wgContLang->commaList( $array ) )
				->text() );
		return $output;
	}

	/**
	 * Creates a list item element with a string
	 *
	 * @param string $i18n Name of the JSON property
	 * @param string $string Name of the string value
	 * @return string HTML list item element
	 */
	public static function addString( $i18n, $string ) {
		// Give grep a chance to find the usages:
		// bookmanagerv2subtitle, bookmanagerv2-series-title, bookmanagerv2-volume,
		// bookmanagerv2-edition, bookmanagerv2-publisher, bookmanagerv2-publication-city,
		// bookmanagerv2-printer, bookmanagerv2-language, bookmanagerv2-description,
		// bookmanagerv2-isbn, bookmanagerv2-lccn, bookmanagerv2-oclc
		$output = Html::element( 'li', array(),
			wfMessage( $i18n, $string )->text() );
		return $output;
	}

	/**
	 * Creates a list item element with a date.
	 *
	 * @param string $i18n The key name, to be used to label the value
	 * @param string $date The date string, which must match the format
	 * @param string $format The format, which is a string containing 'y',
	 * 'm', or 'd' in any order.
	 * @return string HTML list item element
	 */
	public static function addDate( $i18n, $date, $format ) {
		global $wgLang, $wgUser;

		$year = $month = $day = null;
		if ( strlen( $date ) >= 4 && stristr( $format, 'y' ) !== false ) {
			$year = substr( $date, 0, 4 );
			$date = substr( $date, 4 );
		}
		if ( strlen( $date ) >= 2 && stristr( $format, 'm' ) !== false ) {
			$month = substr( $date, 0, 2 );
			$date = substr( $date, 2 );
		}
		if ( strlen( $date ) >= 2 && stristr( $format, 'd' ) !== false ) {
			$day = substr( $date, 0, 2 );
		}

		// Basic validation of inputs
		if ( !$month || (int)$month < 1 || (int)$month > 12 ) {
			$month = null;
		}

		if ( !$day || (int)$day < 1 || (int)$day > 31 ) {
			$day = null;
		}

		if ( $year && !$month ) {
			// Having a day without a month doesn't make much sense
			$date = $year;
			$datetime = $year;
		} else if ( $year && $month && !$day ) {
			$ts = $year . $month . "01000000";
			$format = $wgLang->getDateFormatString( 'monthonly',
				$wgUser->getDatePreference() ? : 'default' );
			$date = $wgLang->sprintfDate( $format, $ts );
			$datetime = $year . "-" . $month;
		} else {
			$ts = $year . $month . $day . "000000";
			$format = $wgLang->getDateFormatString( 'date',
				$wgUser->getDatePreference() ? : 'default' );
			$date = $wgLang->sprintfDate( $format, $ts );
			$datetime = $year . "-" . $month . "-" . $day;
		}
		$output = Html::openElement( 'li', array() )
			. Html::openElement( 'time', array( 'datetime' => $datetime ) )
			. wfMessage( $i18n, $date )->text()
			. Html::closeElement( 'time' )
			. Html::closeElement( 'li' );
		return $output;
	}

	/**
	 * Adds a header to the dropdowns. The header labels the dropdown as
	 * metadata or contents, and adds [read|edit] links that direct the
	 * user to the JSON schema page.
	 *
	 * @param Title $jsonPageTitle Title object for the JSON page
	 * @param string $title Localization message key for the title of the
	 * dropdown
	 * @return string HTML div element
	 */
	public static function addJsonPageLink( $jsonPageTitle, $title ) {
		$html = Html::openElement( 'div', array(
			'class' => 'mw-bookmanagerv2-dropdown-header' ) )
			. Html::element( 'span', array(
				'class' => 'mw-bookmanagerv2-header-name'
			), wfMessage( $title )->text() )
			. Html::openElement( 'span', array(
				'class' => 'mw-bookmanagerv2-edit-json-link' ) )
			. Html::element( 'span', array(
				'class' => 'mw-bookmanagerv2-link-bracket'
			), '[' )
			. Linker::link( $jsonPageTitle,
				wfMessage( 'bookmanagerv2-read' )->escaped(),
				array( 'title' => wfMessage(
					'bookmanagerv2-read-json-block' )->escaped() ),
				array(),
				array()
			)
			. Html::element( 'span', array(
				'class' => 'mw-bookmanagerv2-link-divider'
			), '|' )
			. Linker::link( $jsonPageTitle,
				wfMessage( 'editlink' )->escaped(),
				array( 'title' => wfMessage(
					'bookmanagerv2-edit-json-block' )->escaped() ),
				array( 'action' => 'edit' ),
				array()
			)
			. Html::element( 'span', array(
				'class' => 'mw-bookmanagerv2-link-bracket'
			), ']' )
			. Html::closeElement( 'span' )
			. Html::closeElement( 'div' );
		return $html;
	}

	/**
	 * Generates HTML for the chapter list. All pages except the current one
	 * will be linked.
	 *
	 * @param object $sections Sections property of the JSON
	 * @param string $currentPageTitle Title of the page that's being viewed
	 * @return string HTML ordered list element
	 */
	public static function formatChapterList( $sections, $jsonPageTitle = null,
		$currentPageTitle = null )
	{
		$html = '';
		if ( $jsonPageTitle !== null ) {
			$html .= self::addJsonPageLink( $jsonPageTitle,
				'bookmanagerv2-contents-header' );
		}
		$html .= Html::openElement( 'ol', array() );
		foreach ( $sections as $key => $val ) {
			if ( $val->link !== $currentPageTitle ) {
				if ( isset( $val->indentation ) ) {
					$html .= Html::openElement( 'li', array(
						'class' => 'indent-' . (string)$val->indentation
					) );
				} else {
					$html .= Html::openElement( 'li', array() );
				}
				$html .= Linker::link(
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
	public static function formatMetadata( $jsonBook, $jsonPageTitle = null ) {
		$schema = FormatJson::decode(
			file_get_contents( __DIR__ . '/schemas/bookschema.json' ) );
		$metadata = '';
		if ( $jsonPageTitle !== null ) {
			$metadata = self::addJsonPageLink( $jsonPageTitle,
				'bookmanagerv2-metadata-header' );
		}
		$metadata .= Html::openElement( 'ul', array() );
		foreach ( $jsonBook as $key => $val ) {
			if ( $key === 'sections' ) {
				continue;
			}
			$schemaVal = $schema->properties->$key;
			$type = $schemaVal->type;

			$i18n = $schemaVal->additionalProperties->i18n;

			if ( $type === 'string' ) {
				if ( isset( $schemaVal->additionalProperties->date_format ) ) {
					$format = $schemaVal->additionalProperties->date_format;
					$date = $jsonBook->$key;
					$metadata .= self::addDate( $i18n, $date, $format );
				} else {
					$metadata .= self::addString( $i18n, $jsonBook->$key );
				}
			} else if ( $type === 'array' ) {
				$metadata .= self::addArray( $i18n, $jsonBook->$key );
			} else if ( $type === 'number' || $type === 'integer' ) {
				$metadata .= self::addString( $i18n, (string)$jsonBook->$key );
			}
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
		global $wgContentNamespaces, $wgBookManagerv2NavigationNamespaces,
			$wgBookManagerv2Metadata, $wgBookManagerv2ChapterList,
			$wgBookManagerv2PrevNext, $wgBookManagerv2JsonFrontend,
			$wgBookManagerv2NavigationBars;

		$request = $out->getRequest();

		if ( !$wgBookManagerv2NavigationBars || !is_null( $request->getCheck( 'wpDiff' ) ) ) {
			return true;
		}

		// Navbars will be added to namespaces in the
		// $wgBookManagerv2NavigationNamespaces array if it's set, otherwise
		// the $wgContentNamespaces
		if ( is_array( $wgBookManagerv2NavigationNamespaces ) ) {
			$navigationNamespaces = $wgBookManagerv2NavigationNamespaces;
		} else {
			$navigationNamespaces = $wgContentNamespaces;
		}

		if ( $out->getTitle()->inNamespaces( $navigationNamespaces ) ) {
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
				if ( $wgBookManagerv2PrevNext ) {
					$currentPageNumber = null;
					foreach ( $jsonBook->sections as $key => $val ) {
						// Find the entry that corresponds to this page
						if ( $val->link === $currentPageTitle ) {
							$currentPageNumber = $key;
							// If this isn't the first section, set previous link
							if ( $key !== 0 ) {
								$prev = (object) array();
								$prev->title =
									$jsonBook->sections[ $key - 1 ]->name;
								$prev->link =
									$jsonBook->sections[ $key - 1 ]->link;
							}
							// If this isn't the last section, set the next link
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

					// Couldn't find this page in the section list; set the "next" link
					// to the first section
					if ( $currentPageNumber === null
						&& count( $jsonBook->sections ) > 0
					) {
						$next = (object) array();
						$next->title =
							$jsonBook->sections[ 0 ]->name;
						$next->link =
							$jsonBook->sections[ 0 ]->link;
					}
				} else {
					$prev = $next = null;
				}

				if ( $wgBookManagerv2ChapterList ) {
					$chapterList = self::formatChapterList( $jsonBook->sections,
						$jsonPageTitle, $currentPageTitle );
				} else {
					$chapterList = null;
				}
				if ( $wgBookManagerv2Metadata ) {
					$metadata = self::formatMetadata( $jsonBook, $jsonPageTitle );
				} else {
					$metadata = null;
				}
				$navbar = self::readingInterfaceUX( $prev, $next, $chapterList,
					$metadata, $jsonPageTitle );
				$out->prependHtml( $navbar );
			}
		} else if ( $out->getTitle()->inNamespace( NS_BOOK ) && $wgBookManagerv2JsonFrontend ) {
			self::formatJsonView( $out, $skin );
		}
	return true;
	}

	/**
	 * Formats the JSON page so that the metadata and chapter list are nicely
	 * readable.
	 *
	 * @param OutputPage &$out OutputPage object
	 * @param Skin &$skin Skin object
	 * @return true
	 **/
	public static function formatJsonView( OutputPage &$out, Skin &$skin ) {
		if ( $out->getRevisionId() !== null ) {
			$currentPageTitle = $out->getTitle();
			$json = json_decode( $out->getWikiPage()->getText( Revision::FOR_PUBLIC ) );
			if ( $json ) {
				$out->addModuleStyles( "ext.BookManagerv2" );
				$out->clearHTML();
				$metadata = Html::openElement( 'div',
					array( 'class' => 'mw-bookmanagerv2-json-data' ) )
					. self::formatMetadata( $json )
					. Html::closeElement( 'div' );
				$chapterList = Html::openElement( 'div',
				array( 'class' => 'mw-bookmanagerv2-json-contents' ) )
				. self::formatChapterList( $json->sections )
				. Html::closeElement( 'div' );

				$out->addWikiText( "==" .
					wfMessage( 'bookmanagerv2-metadata-header' )->text()
					. "==" );
				$out->addHTML( $metadata );
				$out->addWikiText( "==" .
					wfMessage( 'bookmanagerv2-contents-header' )->text()
					. "==" );
				$out->addHTML( $chapterList );
			}
		}
		return true;
	}

	/**
	 * Add a custom editor for JSON blocks.
	 *
	 * @param $article Article being edited
	 * @param $user User performing the edit
	 * @return bool True to use the normal editor, false to add the custom editor
	 **/
	public static function onCustomEditor( $article, $user ) {
		// Set up custom edit form if the article is in the JSON namespace.
		global $wgBookManagerv2JsonEditor;
		if ( $article->getTitle()->inNamespace( NS_BOOK ) && $wgBookManagerv2JsonEditor ) {
			$editor = new JsonEditor( $article );
			$editor->edit();
			return false;
		}
		return true;
	}
}
