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

	/**
	 * Pulls the schema from the local schema file and decodes it.
	 */
	static function getSchema() {
		global $wgBookManagerv2SchemaTitle, $wgBookManagerv2SchemaDBname,
			$wgBookManagerv2LocalSchema;
		if ( $wgBookManagerv2SchemaTitle && $wgBookManagerv2SchemaDBname ) {
			$remoteSchema = new RemoteSchema( $wgBookManagerv2SchemaTitle );
			if ( $remoteSchema !== false ) {
				$schema = $remoteSchema->get();
				if ( $schema !== false ) {
					return FormatJson::decode(
						FormatJson::encode( $schema ) );
				}
			}
		}
		// If we couldn't get the remote schema, fall back to the local
		// schema.
		return FormatJson::decode(
			file_get_contents( __DIR__ . $wgBookManagerv2LocalSchema ) );
	}

	/**
	 * Adds a field (consisting of a label and an input field) to the
	 * edit form.
	 *
	 * @param string $key The name of the JSON key
	 * @param object $val The value of the key in the schema
	 * @param string $original The current value of the key in this JSON
	 * 		block
	 * @param array $inputAttributes An array of HTML attributes to be
	 * 		added to the input element
	 * @return HTML tr element containing the label and input elements
	 */
	protected function addField( $key, $val, $original,
		$inputAttributes = array()
	) {
		$key = htmlentities( $key );
		$type = $val->type;
		$i18n = $val->additionalProperties->i18n;
		if ( $type === 'array' ) {
			// TODO: Array handling
			$inputType = 'text';
		} else if ( $type === 'string' ) {
			if ( isset( $val->additionalProperties->date_format ) ) {
				$inputType = 'date';
			} else {
				$inputType = 'text';
			}
		} else if ( $type === 'number' || $type === 'integer' ) {
			$inputType = 'number';
		}

		$inputAttributes[ 'name' ] = 'json-editor-' . $key;
		$inputAttributes[ 'id' ] = 'json-editor-' . $key;
		if ( $val->required ) {
			$inputAttributes[ 'required' ] = 'required';
		}

		if ( $inputType === 'date' ) {
			// Handle dates separately
			return self::addDateField( $key, $val, $original, $inputAttributes );
		}

		$inputAttributes[ 'type' ] = $type;
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

	/**
	 * Adds the [add] button to various places in the pages, such
	 * as where new sections can be added to the section list.
	 *
	 * @param integer $tabindex The tabindex value to set for this link
	 * @param string $id The ID to add to the link
	 * @return HTML span element
	 */
	protected function addDateField( $key, $val, $original, $inputAttributes ) {
		global $wgLang, $wgUser;
		$inputFormat = $val->additionalProperties->date_format;
		$preferenceFormat = $wgLang->getDateFormatString( 'date', $wgUser->getDatePreference() ?: 'default' );

		$inputAttributes[ 'type' ] = 'number';
		$tabindex = $inputAttributes[ 'tabindex' ];
		$yearInput = $monthInput = $dayInput = null;

		if ( stristr( $inputFormat, 'y' ) !== false ) {
			$yearInputAttributes = $inputAttributes;
			if ( strlen( $original ) >= 4 ) {
				$yearInputAttributes[ 'value' ] = (int)substr( $original, 0, 4 );
				$original = substr( $original, 4 );
			}
			$yearInputAttributes[ 'name' ] = $yearInputAttributes[ 'name' ] . '-year';
			$yearInputAttributes[ 'tabindex' ] = $tabindex++;
			$yearInputAttributes[ 'size' ] = 4;
			$yearInputAttributes[ 'min' ] = 0;
			$yearInputAttributes[ 'max' ] = 9999;
			$yearInputAttributes[ 'placeholder' ] = wfMessage(
				'bookmanagerv2-year-placeholder' )->escaped();
			$yearInput = Html::element( 'input', $yearInputAttributes, '' );
		} else {
			// This must, at the very least, contain a year
			return '';
		 }

		if ( stristr( $inputFormat, 'm' ) !== false ) {
			$monthInputAttributes = $inputAttributes;
			if ( strlen( $original ) >= 2 ) {
				$monthInputAttributes[ 'value' ] = (int)substr( $original, 0, 2 );
				$original = substr( $original, 2 );
			}
			$monthInputAttributes[ 'name' ] = $monthInputAttributes[ 'name' ] . '-month';
			$monthInputAttributes[ 'tabindex' ] = $tabindex++;
			$monthInputAttributes[ 'size' ] = 2;
			$monthInputAttributes[ 'min' ] = 1;
			$monthInputAttributes[ 'max' ] = 12;
			$monthInputAttributes[ 'placeholder' ] = wfMessage(
				'bookmanagerv2-month-placeholder' )->escaped();
			$monthInput = Html::element( 'input', $monthInputAttributes, '' );
		}

		if ( stristr( $inputFormat, 'd' ) !== false ) {
			$dayInputAttributes = $inputAttributes;
			if ( strlen( $original ) >= 2 ) {
				$dayInputAttributes[ 'value' ] = (int)substr( $original, 0, 2 );
			}
			$dayInputAttributes[ 'name' ] = $dayInputAttributes[ 'name' ] . '-day';
			$dayInputAttributes[ 'tabindex' ] = $tabindex++;
			$dayInputAttributes[ 'size' ] = 2;
			$dayInputAttributes[ 'min' ] = 1;
			$dayInputAttributes[ 'max' ] = 31;
			$dayInputAttributes[ 'placeholder' ] = wfMessage(
				'bookmanagerv2-day-placeholder' )->escaped();
			$dayInput = Html::element( 'input', $dayInputAttributes, '' );
		}

		if ( $dayInput && !$monthInput ) {
			// Having a date with a day and not a month doesn't make sense
			$dayInput = null;
		}

		$yearInd = stripos( $preferenceFormat, 'y' );
		$monthInd = stripos( $preferenceFormat, 'f' );
		$dayInd = stripos( $preferenceFormat, 'j' );
		$dateInputs = null;

		if ( $dayInd < $monthInd && $monthInd < $yearInd ) {
			// j F Y (day, month, year)
			$dateInputs = $dayInput . $monthInput . $yearInput;
		} else if ( $monthInd < $dayInd && $dayInd < $yearInd ) {
			// F j, Y (month, day, year)
			$dateInputs = $monthInput . $dayInput . $yearInput;
		} else {
			// Default to Y F j (year, month, day)
			$dateInputs = $yearInput . $monthInput . $dayInput;
		}

		$html = Html::openElement( 'tr' )
			. Html::openElement( 'th', array( 'scope' => 'row' ) )
			. Html::element( 'label', array(
				'for' => $key ),
				wfMessage( $val->additionalProperties->i18n . '-field' )->text() )
			. Html::closeElement( 'th' )
			. Html::openElement( 'td' )
			. $dateInputs
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
				continue;
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
			if ( isset( $schemaAttribs->additionalProperties->date_format ) ) {
				// Allow extra tabindices for dates
				$inputAttributes[ 'tabindex' ] = $tabindex;
				$tabindex += 3;
			} else {
				$inputAttributes[ 'tabindex' ] = $tabindex++;
			}

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
				'value' => FormatJson::encode( $sections ) ?: ''
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
				$indentClass = '';
				$indentation = 0;
				if ( isset( $section->indentation ) ) {
					$indentation = (int)$section->indentation;
					if ( $indentation > 0 && $indentation <= 5 ) {
						$indentClass = 'indent-' . (string)$indentation;
					}
				}
				$html .= Html::openElement( 'li', array(
					'class' => array(
							'mw-bookmanagerv2-section',
							$indentClass
						),
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

	/**
	 * Extract the form values
	 *
	 * @param $request WebRequest
	 * @return JSON block
	 */
	protected function importContentFormData( &$request ) {
		$schema = self::getSchema();
		$data = array();
		foreach ( $schema->properties as $key => $val ) {
			if ( $key === 'sections' ) {
				continue;
			}

			if ( isset( $val->additionalProperties->date_format ) ) {
				$format = $val->additionalProperties->date_format;
				if ( stristr( $format, 'y' ) !== false ) {
					$year = $this->safeUnicodeInput( $request,
						'json-editor-' . $key . '-year' );
				}
				if ( stristr( $format, 'm' ) !== false ) {
					$month = $this->safeUnicodeInput( $request,
						'json-editor-' . $key . '-month' );
					if ( (int)$month < 1 || (int)$month > 12 ) {
						// Don't save invalid value
						$month = '';
					}
				}
				if ( stristr( $format, 'd' ) !== false ) {
					$day = $this->safeUnicodeInput( $request,
						'json-editor-' . $key . '-day' );
					if ( (int)$day < 1 || (int)$day > 31 ) {
						// Don't save invalid value
						$day = '';
					}
				}
				if ( strlen( $year ) > 0 ) {
					$yearStr = str_pad( (string)$year, 4, "0", STR_PAD_LEFT );
					$data[ $key ] = $yearStr;
					if ( strlen( $month ) > 0 ) {
						$monthStr = str_pad( (string)$month, 2, "0", STR_PAD_LEFT );
						$data[ $key ] = $yearStr . $monthStr;
						if ( strlen( $day ) > 0 ) {
							$dayStr = str_pad( (string)$day, 2, "0", STR_PAD_LEFT );
							$data[ $key ] = $yearStr . $monthStr . $dayStr;
						}
					}
				}
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
