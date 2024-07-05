/**
 * Main JS
 */

jQuery(document).ready( function($) {
	/** Disabling Zoom-in **/
	document.addEventListener('gesturestart', function (e) {
	    e.preventDefault();
	});

	/** Hamburger Menu **/
	var $hamburger = $(".hamburger");
	$hamburger.on("click touchstart", function(e) {
	    $hamburger.toggleClass("is-active");
		//alert('Im click');
	});
	
	$(window).resize(function() {
		var viewport = $(window).width();
		if(viewport >1160) {
			var $hamburger = $('.hamburger');
        	$hamburger.removeClass('is-active');
        	$.slidebars.close();
			//console.log('tawag ako');
		}
    });

	$('#sb-site').on('touchend click', function(event) {
        var $hamburger = $(".hamburger");
        $hamburger.removeClass('is-active');
    });
});