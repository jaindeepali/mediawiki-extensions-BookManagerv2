$(function () {
	$('a.mw-bookmanagerv2-nav-data').click( function() {
		if ( $('div.mw-bookmanagerv2-nav-toc').is(':visible') ) {
			$('div.mw-bookmanagerv2-nav-toc').hide();
		}
		$('div.mw-bookmanagerv2-nav-data').toggle();
	});
	$('a.mw-bookmanagerv2-nav-toc').click( function() {
		if ( $('div.mw-bookmanagerv2-nav-data').is(':visible') ) {
			$('div.mw-bookmanagerv2-nav-data').hide();
		}
		$('div.mw-bookmanagerv2-nav-toc').toggle();
	});
});
