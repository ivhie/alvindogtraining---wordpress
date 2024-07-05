// Custom Scripts

jQuery(document).ready(function($) {
	
	
	

	/** jQuery($.browser) depreciate function fix **/
	

	var matched, browser;



	jQuery.uaMatch = function( ua ) {

	    ua = ua.toLowerCase();



	    var match = /(chrome)[ \/]([\w.]+)/.exec( ua ) ||

	        /(webkit)[ \/]([\w.]+)/.exec( ua ) ||

	        /(opera)(?:.*version|)[ \/]([\w.]+)/.exec( ua ) ||

	        /(msie) ([\w.]+)/.exec( ua ) ||

	        ua.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec( ua ) ||

	        [];



	    return {

	        browser: match[ 1 ] || "",

	        version: match[ 2 ] || "0"

	    };

	};



	matched = jQuery.uaMatch( navigator.userAgent );

	browser = {};



	if ( matched.browser ) {

	    browser[ matched.browser ] = true;

	    browser.version = matched.version;

	}



	// Chrome is Webkit, but Webkit is also Safari.

	if ( browser.chrome ) {

	    browser.webkit = true;

	} else if ( browser.webkit ) {

	    browser.safari = true;

	}



	jQuery.browser = browser;
    
	



	/** Sticky Header **/
   
   
	$(window).scroll(function() {

		if($(this).scrollTop() > 50){  

			$('body').addClass('gsticky');

		} else {

			$('body').removeClass('gsticky');

		}

	});
	





	/** Superfish menu animation **/

	$('.site-header ul.sf-menu').superfish({

		animation: { opacity: 'show', height: 'show' },

		delay: 1000,

		speed: 'normal',

		autoArrows: false,
		/*disableHI: true*/

	});





	/** Mobile Menu Caret **/

	$('#mobile-menu .menu-item-has-children').each(function(index, el) {

		$(this).prepend('<span class="caret"></span>');

	});



	$('#mobile-menu > li > .caret').on('click', function(event) {

		event.preventDefault();

		$('#mobile-menu > li > .sub-menu').not($(this).siblings('.sub-menu').slideToggle()).hide('slide');

		$('#mobile-menu > li').not($(this).parent().toggleClass('par-active')).removeClass('par-active');

	});



	$('#mobile-menu .sub-menu > li > .caret').on('click', function(event) {

		event.preventDefault();

		$('#mobile-menu .sub-menu li > .sub-menu').not($(this).siblings('.sub-menu').slideToggle()).hide('slide');

		$('#mobile-menu .sub-menu > li').not($(this).parent().toggleClass('par-active')).removeClass('par-active');

	});





	/** Pop-up Form **/

	$('.popup-media-toggle').magnificPopup({

		type: 'inline',

		preloader: false,

		focus: ''

	});





	/** SO Image Lightbox Fetch and Append Link **/

	//var lbox = $( '#fancy-lightbox .sow-image-container img' ).attr( 'src' );

	//$( '#fancy-lightbox .sow-image-container' ).wrap( '<a href="' + lbox  + '" class="everlightbox-trigger"></a>' );

	$('.has-lity .sow-image-container img').each(function() {
			 
		
		$(this).closest( ".has-lity a" ).attr('data-lity','true');
		$(this).closest( ".has-lity a" ).css('border','0px solid red');
		$(this).closest( ".has-lity" ).removeClass('lity');
		
	   
   })



	/** Back to Top Button **/

	if ($('#back-top').length) {

	    var scrollTrigger = 300,

	    backToTop = function () {

	        var scrollTop = $(window).scrollTop();

	        if(scrollTop > scrollTrigger) {

	            $('#back-top').addClass('show');

	        } else {

	            $('#back-top').removeClass('show');

	        }

	    };



	    backToTop();



	    $(window).on('scroll', function () {

	        backToTop();

	    });



	    $('#back-top').on('click', function (e) {

	        e.preventDefault();

	        $('html,body').animate({

	            scrollTop: 0

	        }, 700);

	    });

	}





	/** Initialize Slidebars **/

    $.slidebars({disableOver: 2000});
	
	
	
	/*Add Inline CSS On hover*/
	/*
	$(function() {

	  $('#primary-menu ').hover(
		function(){$(this).next().stop(false, true).fadeIn(500);},
		function(){$(this).next().stop(false, true).fadeOut(500);}
	  );

	});
	*/
	
	

	$("#masthead").mouseenter(function() {
		//$('.site-header').css('-webkit-transition','all 0s ease-in-out 0s');
		//$('.site-header').css('-moz-transition','all 0s ease-in-out 0s');
		//$('.site-header').css('-o-transition','all 0s ease-in-out 0s');
		//$('.site-header').css('transition','all 0s ease-in-out 0s');
		//console.log('mouse-in');
	
	}).mouseleave(function() {
		//$('.site-header').attr('style','');
		//console.log('mouse-out');
	});
	
	
	
	
	
	
	

});




jQuery(document).ready(function($) {
	
	
	
	
	
//$(document).ready(function() {
	
		
		/*
		$(window).resize(function() {
			
			
			
			viewportWidth = $(document ).width();
			
			console.log('resize-window:'+viewportWidth);
			
			
			if(viewportWidth<=1286){
				//console.log(viewportWidth);
				//$('#btn-1,#btn-2').wrapAll('<div id="wrapp-button-here"></div>');
				
					if ( $('#wrapp-button-here').length){
						//$('#btn-1,#btn-2').wrapAll('<div id="wrapp-button-here"></div>');
					} else {
						
						//$('#btn-1,#btn-2').wrapAll('<div id="wrapp-button-here"></div>');
					}
					
					banner_height = $('#slider .rev_slider_wrapper').height();
					
					banner_height = parseInt(banner_height);
					topPx =  banner_height - 70;
					$('#wrapp-button-here ').css('margin-top',topPx+'px');
				
				
				   if(viewportWidth<=936){
					   
					   topPx =  banner_height - 60;
					   $('#wrapp-button-here ').css('margin-top',topPx+'px');
					  
				   }
				
				
		   } else {
					//$('#btn-1,#btn-2').unwrap('<div id="wrapp-button-here"></div>');
					
			}
			
		//	console.log($('#wrapp-button-here').length);
			
		});
		
		*/
		
		//$('.home-row-make-picture-background').css();
		
		
		//add-image-here
		//console.log(img1_url);
		
		
		//get each url by id
		
		/*Version 1*/
		$('.get-image-url img').each(function() {
			  //console.log('dfdf'+$(this).attr('src'));
			// console.log($(this).attr('src'));
			 //img1_url = $(this).attr('src');
			 // console.log(img1_url);
			 $(this).closest( ".add-image-here" ).css('background-image','url('+$(this).attr('src')+')');
			 
			  imgWidth = $(this).width();
			  imgHeight = $(this).height();
			 // console.log(imgWidth);
			 // console.log(imgHeight);
			 $(this).closest( ".add-image-here" ).css('background-size',imgWidth+'px'+' '+imgHeight+'px');
			 $(this).closest( ".add-image-here" ).css('background-repeat','no-repeat');
		     $(this).closest( ".add-image-here img" ).css('visibility','hidden');
			 $(this).closest( ".add-image-here img" ).css('width',imgWidth+'px');
			 $(this).closest( ".add-image-here img" ).css('height',imgHeight+'px');
			 //$(this).closest( ".add-image-here img" ).css('visibility','hidden');
			 
		})
		
		
		
		/*Version 2 Cover*/
		$('.get-image-url-2 img').each(function() {
			  //console.log('dfdf'+$(this).attr('src'));
			// console.log($(this).attr('src'));
			 //img1_url = $(this).attr('src');
			 // console.log(img1_url);
			 $(this).closest( ".add-image-here" ).css('background-image','url('+$(this).attr('src')+')');
			 
			  imgWidth = $(this).width();
			  imgHeight = $(this).height();
			  //console.log(imgWidth);
			 // console.log(imgHeight);
			  
			 $(this).closest( ".add-image-here" ).css('background-size','cover');
			 $(this).closest( ".add-image-here" ).css('background-repeat','no-repeat');
		     $(this).closest( ".add-image-here img" ).css('visibility','hidden');
			 $(this).closest( ".add-image-here img" ).css('width',imgWidth+'px');
			 $(this).closest( ".add-image-here img" ).css('height',imgHeight+'px');
			 //$(this).closest( ".add-image-here img" ).css('visibility','hidden');
			 
		})
		
		
		
				
	    viewportWidth = $(document ).width();
		if(viewportWidth<=680){
			 $( ".add-image-here img" ).attr('style','');
	    }
		
				
		/*Remove Ligthbox Trigger*/		
	    jQuery('.remove-trigger').removeClass('everlightbox-trigger');
	
		
		
		
		
});

