/**
 *	jQuery Document
 */
jQuery( document ).ready( function($) {
	// Slim Scroll
	function slimScroll() {
		$( '#sidebar .sidebar-content' ).slimScroll({
			width: false,
			height: $( window ).height(),
			position: 'right',
			railVisible: true,
			alwaysVisible: true,
			color: '#32a4fc',
			opacity: 1,
			railColor: '#fafafa'
		});
	}

	// Called Functions
	$( function() {
		$( window ).load( function() {
			// Slim Scroll
			slimScroll();
		});
	});
});