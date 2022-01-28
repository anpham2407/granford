/**
 * File primary-navigation.js.
 *
 * Required to open and close the mobile navigation.
 */

/**
 * tabs function
 */

jQuery(document).ready(function($) {

	$("#tile-1 .nav-tabs a").on('click', function(e) {
		e.preventDefault();
		// e.stopImmediatePropagation();
		var position = $(this).parent().position();
		var width = $(this).parent().width();
		$("#tile-1 .slider").css({"left":+ position.left,"width":width});
	});
	var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
	var actPosition = $("#tile-1 .nav-tabs .active").position();
	$("#tile-1 .slider").css({"left":+ actPosition.left,"width": actWidth});

	AOS.init();
});
