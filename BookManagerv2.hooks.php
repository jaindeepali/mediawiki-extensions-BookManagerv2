<?php
/**
 * Hooks for the BookManagerv2 extension
 *
 * @file
 * @ingroup Extensions
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

	public static function readingInterfaceUX( $out, $prev, $next, $chapterList, $metadata ) {
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
				'src' => $imagePath . 'Info_sign_font_awesome.png'
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
				'src' => $imagePath . 'Ul_font_awesome.png'
			), '' )
			. Html::closeElement( 'a' )
			. Html::openElement( 'a', array(
				'class' => 'mw-bookmanagerv2-nav-prev',
				'href' => $prev->link )
			)
			. Html::element( 'img', array(
				'class' => 'mw-bookmanagerv2-nav-prev',
				'src' => $imagePath . 'Angle_left_font_awesome.png'
			), '' )
			. $prev->title
			. Html::closeElement( 'a' )
			. Html::openElement( 'a', array(
				'class' => 'mw-bookmanagerv2-nav-next',
				'href' => $next->link )
			)
			. $next->title
			. Html::element( 'img', array(
				'class' => 'mw-bookmanagerv2-nav-next',
				'src' => $imagePath . 'Angle_right_font_awesome.png'
			), '' )
			. Html::closeElement( 'a' )
			. Html::closeElement( 'div' )
			. Html::rawElement( 'div', array(
				'class' => array(
					'mw-bookmanagerv2-nav-dropdown',
					'mw-bookmanagerv2-nav-data' )
				),
				$metadata
			)
			. Html::rawElement( 'div', array(
				'class' => array(
					'mw-bookmanagerv2-nav-dropdown',
					'mw-bookmanagerv2-nav-toc' )
				),
				$chapterList
			)
			. Html::closeElement( 'div' )
			. Html::closeElement( 'div' );

			$out->prependHTML( $html );
	}

	public static function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {
		// Check that the navigation bar is only added to mainspace pages.
		if ( $out->getTitle()->getNamespace() == NS_MAIN ) {
			if ( $out->getRevisionId() != null ) {
				$out->addModules( "ext.BookManagerv2" );
				$prev = (object) array( "link" => "/prev.html", "title" => "Previous" );
				$next = (object) array( "link" => "/next.html", "title" => "Next" );
				$chapterList = Html::element( 'p', array(), 'Chapter 1' )
					. Html::element( 'p', array(), 'Chapter 2' )
					. Html::element( 'p', array(), 'Chapter 3' );
				$metadata = Html::openElement( 'p', array() )
					. 'Title: '
					. Html::element( 'span', array( 'class' => 'title' ), 'Title' )
					. Html::closeElement( 'p' )
					. Html::element( 'p', array(), 'Author: Author' );
				self::readingInterfaceUX( $out, $prev, $next, $chapterList, $metadata );
			}
		}
		return true;
	}

}
