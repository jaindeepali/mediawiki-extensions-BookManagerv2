<?php
/**
 * Hooks for the BookManagerv2 extension
 * 
 * @file
 * @ingroup Extensions
 */

class BookManagerv2Hooks {
	
	public static function readingInterfaceUX( $out, $prev, $next, $chapterList, $metadata ) {
		
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
				'src' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Info_sign_font_awesome.svg/20px-Info_sign_font_awesome.svg.png'
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
				'src' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Ul_font_awesome.svg/20px-Ul_font_awesome.svg.png'
			), '' )
			. Html::closeElement( 'a' )
			. Html::openElement( 'a', array(
				'class' => 'mw-bookmanagerv2-nav-prev',
				'href' => $prev->link )
			)
			. Html::element( 'img', array(
				'class' => 'mw-bookmanagerv2-nav-prev',
				'src' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/Chevron_left_font_awesome.svg/15px-Chevron_left_font_awesome.svg.png'
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
				'src' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/Chevron_right_font_awesome.svg/15px-Chevron_right_font_awesome.svg.png'
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
				$prev = (object) array( "link"=>"/prev.html", "title"=>"Previous" );
				$next = (object) array( "link"=>"/next.html", "title"=>"Next" );
				$chapterList = Html::element( 'p', array(), 'Chapter 1' )
					. Html::element( 'p', array(), 'Chapter 2' )
					. Html::element( 'p', array(), 'Chapter 3' );
				$metadata = Html::openElement( 'p', array() )
					. 'Title: '
					. Html::element( 'span', array( 'class' => 'title' ), 'Title' )
					. Html::closeElement( 'p' )
					. Html::element( 'p', array(), 'Author: Author');
				self::readingInterfaceUX( $out, $prev, $next, $chapterList, $metadata );
			}	
		}
		return true;
	}

}
