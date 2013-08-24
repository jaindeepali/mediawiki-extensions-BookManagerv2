<?php
/**
 * JSON block editor for the BookManagerv2 extension
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

class JsonEditor extends EditPage {

	protected function isSectionEditSupported() {
		return false;
	}

	static function getSchema() {
		return FormatJson::decode(
			file_get_contents( __DIR__ . '/schemas/bookschema.json' ) );
	}

	protected function addField( $key, $val, $original,
		$inputAttributes = array()
	) {
		$key = htmlentities( $key );
		$type = $val->type;
		$i18n = $val->additionalProperties->i18n;
		switch ( $type ) {
		case 'string':
		case 'array':
			$inputType = 'text';
			break;
		case 'number':
		case 'integer':
			$inputType = 'number';
			break;
		}
		$inputAttributes[ 'type' ] = $type;
		$inputAttributes[ 'name' ] = 'json-editor-' . $key;
		$inputAttributes[ 'id' ] = 'json-editor-' . $key;
		if ( $val->required ) {
			$inputAttributes[ 'required' ] = 'required';
		}
		if ( $inputType === 'text' ) {
			$inputAttributes[ 'size' ] = 60;
		}
		if ( $original ) {
			$inputAttributes[ 'value' ] = $original;
		}
		$html = Html::openElement( 'tr' )
			. Html::openElement( 'th', array( 'scope' => 'row' ) )
			. Html::element( 'label', array(
				'for' => $key ),
				wfMessage( $i18n )->text() )
			. Html::closeElement( 'th' )
			. Html::openElement( 'td' )
			. Html::element( 'input', $inputAttributes, '' )
			. Html::closeElement( 'td' )
			. Html::closeElement( 'tr' );
		return $html;
	}

	protected function addAddButton( $tabindex, $id = null ) {
		$addHtml = Html::openElement( 'span', array(
			'class' => 'mw-bookmanagerv2-add'
		) )
		. Html::element( 'span', array(
			'class' => 'mw-bookmanagerv2-link-bracket'
		), '[' )
		. Html::element( 'a', array(
			'href' => '#',
			'class' => 'mw-bookmanagerv2-add',
			'title' => wfMessage(
				'bookmanagerv2-add-section-title' )->escaped(),
			'id' => $id,
			'tabindex' => $tabindex
		), wfMessage( 'bookmanagerv2-add' )->text() )
		. Html::element( 'span', array(
			'class' => 'mw-bookmanagerv2-link-bracket'
		), ']' )
		. Html::closeElement( 'span' );
		return $addHtml;
	}

	protected function showContentForm() {
		global $wgOut;
		$schema = self::getSchema();
		$originalContent = $this->getContent();
		if ( $originalContent !== '' ) {
			$originalJson = FormatJson::decode( $originalContent );
		} else {
			// We're creating the page for the first time
			$originalJson = null;
		}

		$pageLang = $this->mTitle->getPageLanguage();
		$inputAttributes = array(
			'lang' => $pageLang->getCode(),
			'dir' => $pageLang->getDir()
		);
		$tabindex = 1;

		$html = Html::openElement( 'h2', array(
			'class' => 'mw-bookmanagerv2-metadata-heading'
		) )
			. Html::element( 'span', array(
				'class' => 'mw-headline'
			), wfMessage( 'bookmanagerv2-metadata-heading' )->text() )
			. Html::openElement( 'span', array(
				'class' => 'mw-bookmanagerv2-show-hide' ) )
			. Html::element( 'span', array(
				'class' => 'mw-bookmanagerv2-link-bracket'
			), '[' )
			. Html::element( 'a', array(
				'href' => '#',
				'id' => 'show-hide-metadata',
				'class' => 'mw-bookmanagerv2-hide',
				'tabindex' => $tabindex++
			), wfMessage( 'hidetoc' )->text() )
			. Html::element( 'span', array(
				'class' => 'mw-bookmanagerv2-link-bracket'
			), ']' )
			. Html::closeElement( 'span' )
			. Html::closeElement( 'h2' )
			. Html::openElement( 'table', array(
				'class' => 'mw-bookmanagerv2-edit-form' ) );

		foreach ( $schema->properties as $key => $schemaAttribs ) {
			if ( $key === 'sections' ) {
				break;
			}
			$original = null;
			if ( $originalJson ) {
				// If the page already exists, populate the fields with the
				// existing values.
				if ( property_exists( $originalJson, $key ) ) {
					// TODO: No handling for objects
					// TODO: Arrays
					$original = $originalJson->$key;
					$originalType = gettype( $original );
					if ( $originalType === 'array' ) {
						$original = $original[0];
					} else if ( $originalType === 'double'
						|| $originalType === 'integer'
					) {
						$original = (string)$original;
					}
					if ( gettype( $original ) !== 'string' ) {
						$original = null;
					}
				}
			}
			$inputAttributes[ 'tabindex' ] = $tabindex++;

			// Add each property to the form, with the current value if there
			// is one.
			$html .= self::addField( $key, $schemaAttribs, $original,
				$inputAttributes );
		}
		$html .= Html::closeElement( 'table' )
			. Html::openElement( 'h2', array(
			'class' => 'mw-bookmanagerv2-sections-heading'
		) )
			. Html::element( 'span', array(
				'class' => 'mw-headline'
			), wfMessage( 'bookmanagerv2-sections-heading' )->text() )
			. Html::openElement( 'span', array(
				'class' => 'mw-bookmanagerv2-show-hide' ) )
			. Html::element( 'span', array(
				'class' => 'mw-bookmanagerv2-link-bracket'
			), '[' )
			. Html::element( 'a', array(
				'href' => '#',
				'class' => 'mw-bookmanagerv2-hide',
				'id' => 'show-hide-sections',
				'tabindex' => $tabindex++
			), wfMessage( 'hidetoc' )->text() )
			. Html::element( 'span', array(
				'class' => 'mw-bookmanagerv2-link-bracket'
			), ']' )
			. Html::closeElement( 'span' )
			. Html::closeElement( 'h2' )
			. Html::openElement( 'div', array(
				'class' => 'mw-bookmanagerv2-add-section'
			) )
			. self::addAddButton( $tabindex++, 'top-section' )
			. Html::closeElement( 'div' )
			. Html::openElement( 'ul', array(
				'class' => 'mw-bookmanagerv2-section-list',
				'id' => 'sortable'
			) );
		if ( $originalJson ) {
			global $wgExtensionAssetsPath;
			$index = 0;
			$imagePath = $wgExtensionAssetsPath . '/BookManagerv2/images/';
			$sections = $originalJson->sections;
			$html .= Html::element( 'input', array(
				'type' => 'hidden',
				'name' => 'json-editor-sections',
				'id' => 'json-editor-sections',
				'value' => FormatJson::encode( $sections ) ? : ''
			) );
			foreach ( $sections as $section ) {
				$sectionTitle = Title::newFromText( $section->link );
				if ( $sectionTitle->exists() ) {
					$sectionLinkName = wfMessage( 'editlink' )->text();
					$sectionLinkTitle = wfMessage(
						'bookmanagerv2-edit-title' )->escaped();
				} else {
					$sectionLinkName = wfMessage( 'bookmanagerv2-create' )->text();
					$sectionLinkTitle = wfMessage(
						'bookmanagerv2-create-title' )->escaped();
				}
				$html .= Html::openElement( 'li', array(
					'class' => 'mw-bookmanagerv2-section',
					'id' => 'section-' . (string)$index,
					'tabindex' => $tabindex++
				) )
				. Linker::link(
					$sectionTitle,
					$section->name,
					array(
						'class' => 'mw-bookmanagerv2-section-link',
						'tabindex' => $tabindex++,
					),
					array(),
					array()
				)
				. Html::openElement( 'span', array(
					'class' => 'mw-bookmanagerv2-edit-rename'
				) )
				. Html::element( 'span', array(
					'class' => 'mw-bookmanagerv2-link-bracket'
				), '[' )
				. Linker::link(
					$sectionTitle,
					$sectionLinkName,
					array(
						'tabindex' => $tabindex++,
						'title' => $sectionLinkTitle
					),
					array( 'action' => 'edit' ),
					array( 'noclasses' )
				)
				. Html::element( 'span', array(
					'class' => 'mw-bookmanagerv2-link-divider'
				), '|' )
				. Html::element( 'a', array(
					'class' => 'mw-bookmanagerv2-rename',
					'href' => '#',
					'tabindex' => $tabindex++,
					'title' => wfMessage(
						'bookmanagerv2-rename-title' )->escaped()
				), wfMessage( 'bookmanagerv2-rename' ) )
				. Html::element( 'span', array(
					'class' => 'mw-bookmanagerv2-link-bracket'
				), ']' )
				. Html::closeElement( 'span' )
				. Html::closeElement( 'li' );
				$index++;

				// Incrementing this once more to leave room for
				// the tabindex for the "remove" button
				$tabindex++;
			}
		} else {
			$html .= Html::element( 'input', array(
				'type' => 'hidden',
				'name' => 'json-editor-sections',
				'id' => 'json-editor-sections',
				'value' => '[]'
			) );
		}

		$html .= Html::closeElement( 'ul' )
			. Html::openElement( 'div', array(
				'class' => 'mw-bookmanagerv2-add-section'
			) )
			. self::addAddButton( $tabindex++, 'bottom-section' )
			. Html::closeElement( 'div' );
		$wgOut->addHTML( $html );
		$wgOut->addModuleStyles( 'ext.BookManagerv2.editor' );
		$wgOut->addModules( 'ext.BookManagerv2.editorjs' );
	}

	protected function importContentFormData( &$request ) {
		$schema = self::getSchema();
		$data = array();
		foreach ( $schema->properties as $key => $val ) {
			if ( $key === 'sections' ) {
				continue;
			}
			$inputType = $val->type;
			$inputValue = $this->safeUnicodeInput( $request,
				'json-editor-' . $key );
			if ( $inputValue === '' ) {
				// Ignore empty fields
				continue;
			}
			if ( $inputType === 'array' ) {
				$inputValue = (array)$inputValue;
			} else if ( $inputType === 'number' ) {
				if ( is_numeric( $inputValue ) ) {
					$inputValue = (float)$inputValue;
				} else {
					// TODO: Throw error
					break;
				}
			} else if ( $inputType === 'integer' ) {
				if ( is_int( $inputValue ) ) {
					$inputValue = (int)$inputValue;
				} else {
					// TODO: Throw error
					break;
				}
			}
			$data[ $key ] = $inputValue;
		}
		$data[ 'sections' ] = FormatJson::decode( $this->safeUnicodeInput( $request,
			'json-editor-sections' ) );
		$jsonData = FormatJson::encode( (object)$data );
		return $jsonData;
	}
}
