 /**
 * @file
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
 **/
( function ( mw, $ ) {
	function updateJson( $json ) {
		$( 'input#json-editor-sections' ).val( $.toJSON( $json ) );
	}

	function showOrHide( $element ) {
		var showMessage = mw.message( 'showtoc' ).text(),
			hideMessage = mw.message( 'hidetoc' ).text();
		if ( $element.hasClass( 'mw-bookmanagerv2-hide' ) ) {
			$element.text( showMessage )
				.removeClass( 'mw-bookmanagerv2-hide' )
			.addClass( 'mw-bookmanagerv2-show' );
		} else {
			$element.text( hideMessage )
				.removeClass( 'mw-bookmanagerv2-show' )
				.addClass( 'mw-bookmanagerv2-hide' );
		}
		return false;
	}

	var imagePath = mw.config.get( 'wgExtensionAssetsPath' ) + '/BookManagerv2/images/',
		sectionJson = $.evalJSON( $( 'input#json-editor-sections' ).val() ),
		noSectionsExist = sectionJson.length === 0,
		moveAlt = mw.message( 'bookmanagerv2-move-alt' ).text(),
		removeAlt = mw.message( 'bookmanagerv2-remove-alt' ).text(),
		$moveIcon = $( '<img>' )
			.prop( 'src', imagePath + 'Resize_vertical_font_awesome_666666.png' )
			.prop( 'class', 'mw-bookmanagerv2-move' )
			.prop( 'alt', moveAlt )
			.prop( 'title', moveAlt ),
		$removeIcon = $( '<img>' )
			.prop( 'src', imagePath + 'Close_symbol.png' )
			.prop( 'class', 'mw-bookmanagerv2-remove' )
			.prop( 'alt', removeAlt )
			.prop( 'title', removeAlt ),
		tabindex = $( 'li.mw-bookmanagerv2-section' ).last().prop( 'tabindex' ) + 10,
		newSectionNumber = 1;

	function initiate() {
		$( 'li.mw-bookmanagerv2-section' ).on( 'click', removeSection );
	}

	initiate();

	// Add move and remove section icons
	$( 'li.mw-bookmanagerv2-section' ).prepend( $moveIcon ).append( $removeIcon );

	// Make sections sortable
	$('#sortable').sortable({
		start: function( event, ui ) {
			var startIndex = ui.item.index() - 1;
			ui.item.data( 'startIndex', startIndex );
		},
		update: function( event, ui ) {
			if ( ui.item.hasClass( 'mw-bookmanagerv2-section' ) ) {
				var startIndex = ui.item.data( 'startIndex' ),
					endIndex = $( ui.item ).index() - 1,
					$temp = sectionJson[ startIndex ];
				sectionJson.splice( startIndex, 1 );
				sectionJson.splice( endIndex, 0, $temp );
				updateJson( sectionJson );
			}
		},
		items: '> li'
	});

	// Add tabindexes to remove buttons
	$( 'li.mw-bookmanagerv2-section' ).each( function() {
		var prevTabindex = $( this ).find( 'a.mw-bookmanagerv2-rename' ).prop( 'tabindex' );
		$( this ).find( 'img.mw-bookmanagerv2-remove' ).prop( 'tabindex', prevTabindex + 1 );
	});

	// Update existing tabindexes to follow the new ones.
	// TODO: Better way to accomplish this?
	$( 'input#wpSummary' ).prop( 'tabindex', tabindex++ );
	$( 'input#wpMinoredit' ).prop( 'tabindex', tabindex++ );
	$( 'input#wpWatchthis' ).prop( 'tabindex', tabindex++ );
	$( 'input#wpSave' ).prop( 'tabindex', tabindex++ );
	$( 'input#wpPreview' ).prop( 'tabindex', tabindex++ );
	$( 'input#wpDiff' ).prop( 'tabindex', tabindex++ );

	// Remove a section when the remove icon is clicked
	function removeSection() {
		var $li = $(this).parent(),
			id = $li.prop( 'id' ),
				sortable = $('#sortable').sortable( 'toArray' ),
				index = sortable.indexOf( id );
		if ( !$li.is( 'li' ) ) {
			$li = $(this);
		}
		if ( $li.hasClass( 'mw-bookmanagerv2-new-section' ) ) {
			$li.remove();
		} else {
			if ( index >= 0 ) {
				sectionJson.splice( index, 1 );
				updateJson( sectionJson );
				$li.remove();
			}
		}
	}

	// Allow users to rename sections
	$(document).on( 'click', 'li.mw-bookmanagerv2-section a.mw-bookmanagerv2-rename', function() {
		var $li = $(this).parent().parent(),
			$sectionList = $( 'li.mw-bookmanagerv2-section' ),
			index = $sectionList.index( $li ),
			$sectionA = $li.find( 'a.mw-bookmanagerv2-section-link' ),
			$sectionName = $( '<input>' ).prop( 'type', 'text' )
				.prop( 'class', 'mw-bookmanagerv2-rename-input-name' )
				.prop( 'id', 'mw-bookmanagerv2-rename-input-name' )
				.prop( 'size', 30 )
				.prop( 'value', sectionJson[ index ].name ),
			$sectionLink = $( '<input>' ).prop( 'type', 'text' )
				.prop( 'class', 'mw-bookmanagerv2-rename-input-link' )
				.prop( 'id', 'mw-bookmanagerv2-rename-input-link' )
				.prop( 'size', 30 )
				.prop( 'value', sectionJson[ index ].link ),
			$doneButton = $( '<input>' ).prop( 'type', 'button' )
				.prop( 'class', 'mw-bookmanagerv2-rename-done' )
				.prop( 'value', mw.message( 'bookmanagerv2-done' ).text() ),
			$cancelButton = $( '<input>' ).prop( 'type', 'button' )
				.prop( 'class', 'mw-bookmanagerv2-rename-cancel' )
				.prop( 'value', mw.message( 'cancel' ).text() ),
			$inputs = $( '<div>' )
					.addClass( 'mw-bookmanagerv2-input-section' )
					.append( $( '<div>' )
						.addClass( 'mw-bookmanagerv2-input-wrapper ' )
						.append( $( '<label>' )
							.prop( 'for', 'mw-bookmanagerv2-rename-input-name' )
							.text( mw.message( 'bookmanagerv2-section-name' ).text() )
						)
						.append( $sectionName )
					)
					.append( $( '<div>' )
						.addClass( 'mw-bookmanagerv2-input-wrapper' )
						.append( $( '<label>' )
							.prop( 'for', 'mw-bookmanagerv2-rename-input-link' )
							.text( mw.message( 'bookmanagerv2-section-link' ).text() )
						)
						.append( $sectionLink )
					),
			$buttons = $( '<div>' )
					.addClass( 'mw-bookmanagerv2-button-wrapper' )
					.append( $doneButton )
					.append( $cancelButton);

		$sectionA.hide();
		$(this).parent().hide();
		$li.addClass( 'mw-bookmanagerv2-rename' );
		$li.find( 'img.mw-bookmanagerv2-move' ).after( $inputs );
		$li.find( 'img.mw-bookmanagerv2-remove' ).after( $buttons );

		// "Enter" key is equivalent to pressing "done"
		$sectionName.keydown( function( e ) {
			if ( e.keyCode === 13 ) {
				$doneButton.click();
			}
		});
		return false;
	});

	$(document).on( 'click', 'input.mw-bookmanagerv2-rename-cancel', function() {
		var $li = $(this).parent().parent();
		$li.find( 'div.mw-bookmanagerv2-input-section' ).remove();
		$li.find( 'a.mw-bookmanagerv2-section-link' ).show();
		$li.find( 'span.mw-bookmanagerv2-edit-rename' ).show();
		$li.removeClass( 'mw-bookmanagerv2-rename' );
		$li.find( 'div.mw-bookmanagerv2-button-wrapper' ).remove();
	});

	$(document).on( 'click', 'input.mw-bookmanagerv2-rename-done', function() {
		var $li = $(this).parent().parent(),
			newName = $li.find( 'input.mw-bookmanagerv2-rename-input-name' ).val(),
			newLink = $li.find( 'input.mw-bookmanagerv2-rename-input-link' ).val(),
			$sectionLink = $li.find( 'a.mw-bookmanagerv2-section-link' ),
			$sectionList = $( 'li.mw-bookmanagerv2-section' ),
			index = $sectionList.index( $li );
		$li.removeClass( 'mw-bookmanagerv2-rename' );
		$sectionLink.text( newName ).prop( 'href', mw.util.wikiGetlink( newLink ) );
		sectionJson[ index ].name = newName;
		sectionJson[ index ].link = newLink;
		updateJson( sectionJson );
		$li.find( 'div.mw-bookmanagerv2-input-section' ).remove();
		$sectionLink.show();
		$li.find( 'span.mw-bookmanagerv2-edit-rename' ).show();
		$li.find( 'div.mw-bookmanagerv2-button-wrapper' ).remove();
	});

	// Allow new sections to be added
	$( 'div.mw-bookmanagerv2-add-section a.mw-bookmanagerv2-add' ).click( function() {
		var $sectionName = $( '<input>' ).addClass( 'mw-bookmanagerv2-new-section-name' )
			.prop( 'id', 'mw-bookmanagerv2-new-section-name' ).prop( 'type', 'text' )
			.prop( 'size', 30 ),
			$sectionLink = $( '<input>' ).addClass( 'mw-bookmanagerv2-new-section-link' )
			.prop( 'id', 'mw-bookmanagerv2-new-section-link' ).prop( 'type', 'text' )
			.prop( 'size', 30 ),
			$submitButton = $( '<input>' ).prop( 'type', 'button' )
				.prop( 'value', mw.message( 'bookmanagerv2-done' ).text() ),
			$removeButton = $removeIcon.clone(),
			$newSection = $( '<li>' )
				.addClass( 'mw-bookmanagerv2-new-section' )
				.append( $moveIcon.clone() )
				.append( $( '<div>' )
					.addClass( 'mw-bookmanagerv2-input-section' )
					.append( $( '<div>' )
						.addClass( 'mw-bookmanagerv2-input-wrapper ' )
						.append( $( '<label>' )
							.prop( 'for', 'mw-bookmanagerv2-new-section-name' )
							.text( mw.message( 'bookmanagerv2-section-name' ).text() )
						)
						.append( $sectionName )
					)
					.append( $( '<div>' )
						.addClass( 'mw-bookmanagerv2-input-wrapper' )
						.append( $( '<label>' )
							.prop( 'for', 'mw-bookmanagerv2-new-section-link' )
							.text( mw.message( 'bookmanagerv2-section-link' ).text() )
						)
						.append( $sectionLink )
					)
				)
				.append( $removeButton )
				.append( $( '<div>' )
					.addClass( 'mw-bookmanagerv2-button-wrapper' )
					.append( $submitButton )
				);

		$removeButton.on( 'click', removeSection );

		if ( $(this).attr( 'id' ) === 'top-section' ) {
			$( 'input#json-editor-sections' ).after( $newSection );
		} else {
			$( 'ul.mw-bookmanagerv2-section-list' ).append( $newSection );
		}

		$submitButton.click( function() {
			if ( $sectionName.val() !== '' && $sectionLink.val() !== '' ) {
				// Save to JSON block
				var sectionName = $sectionName.val(),
					sectionLink = $sectionLink.val(),
					sectionUrl = mw.util.wikiGetlink( sectionLink ),
					querySeparator = sectionUrl.indexOf( '?' ) === -1 ? '?' : '&',
					newSectionJson = {
						name: sectionName,
						link: sectionLink
					},
					index = $( 'ul.mw-bookmanagerv2-section-list li' ).index( $newSection ),
					$link = $( '<a>' ).addClass( 'mw-bookmanagerv2-section-link' )
						.prop( 'title', sectionName )
						.prop( 'href', mw.util.wikiGetlink( sectionLink ) )
						.text( sectionName ),
					editQuery = { action: 'edit' },
					$editRename = $( '<span>' ).addClass( 'mw-bookmanagerv2-edit-rename' )
						.append( $( '<span>' ).addClass( 'mw-bookmanagerv2-link-bracket' )
							.text( '[' )
						)
						.append( $( '<a>' ).prop( 'title', sectionName )
							.prop( 'href', sectionUrl + querySeparator + $.param( editQuery ) )
							.text( mw.message( 'editlink' ).text() )
						)
						.append( $( '<span>' ).addClass( 'mw-bookmanagerv2-link-divider' )
							.text( '|' )
						)
						.append( $( '<a>' ).addClass( 'mw-bookmanagerv2-rename' )
							.prop( 'href', '#' )
							.text( mw.message( 'bookmanagerv2-rename' ).text() )
						)
						.append( $( '<span>' ).addClass( 'mw-bookmanagerv2-link-bracket' )
							.text( ']' )
						);

				sectionJson.splice( index, 0, newSectionJson );
				updateJson( sectionJson );

				// Update the section styling
				$newSection.prop( 'id', 'new-section-' + newSectionNumber.toString() );
				$newSection.find( 'div.mw-bookmanagerv2-input-section' ).remove();
				$newSection.find( 'div.mw-bookmanagerv2-button-wrapper' ).remove();
				$newSection.removeClass( 'mw-bookmanagerv2-new-section' )
					.addClass( 'mw-bookmanagerv2-section' );
				$newSection.append( $link ).append( $editRename );
				newSectionNumber++;
			}
		});
		return false;
	});

	// Add a new section if the section list is empty
	if ( noSectionsExist ) {
		$( 'div.mw-bookmanagerv2-add-section a.mw-bookmanagerv2-add' ).first().click();
	}

	// Show or hide collapsible sections
	$( 'a#show-hide-metadata' ).click( function() {
		$( 'table.mw-bookmanagerv2-edit-form' ).toggle();
		return showOrHide( $(this) );
	});

	$( 'a#show-hide-sections' ).click( function() {
		$( 'ul.mw-bookmanagerv2-section-list' ).toggle();
		return showOrHide( $(this) );
	});
}( mediaWiki, jQuery ) );
