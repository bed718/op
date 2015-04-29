Drupal.behaviors.init = {
	attach: function (context, settings) {
		

		var win = jQuery(window);
		var doc = jQuery(document);
		var head_in = jQuery('#header-inner');
		var logo = jQuery('#logo');
		var win_w = win.width();
		var win_h = win.height();
		var windowScroll = win.scrollTop();
		var max_nav_h = windowScroll;



		win.resize(function(){
			windowResized();
		});

		jQuery(window).scroll(function (e) {
		    var windowScroll = jQuery(window).scrollTop();
		    var ww = jQuery(window).width();
		    var speed = 1.8;
		    var upos = -windowScroll * speed;
		    var dpos = 80 - windowScroll * speed;
		    var toppos = 200;


		    if(ww > 700){
				 
				 	jQuery('#logo-big').css('top',  upos );
			 		jQuery('#d-big').css('top',  dpos );
				

			}

		});

		function showSmallLogo(){
			jQuery('.front #ud-sm').animate({top: 0}, 500);
			jQuery('.front #header .bot').slideDown(500);
			udsmopen = true;
		}

		function hideSmallLogo(){
			jQuery('.front #ud-sm').animate({top: -180}, 500);
			jQuery('.front #header .bot').slideUp(500);
			udsmopen = false;
		}
	

		jQuery('#contact-link').click(function() {
		  jQuery("html, body").animate({ scrollTop: jQuery(document).height() + 1000 }, {duration: 2000, easing: 'easeInOutQuad'});
		  return false;
		});

		//jQuery('.field-name-field-resume-section').append('<div class="divider"><span></span></div>');
		jQuery('.field-name-field-clip-reference a').html('view clip');



		//jQuery('.image-post_full').parent().addClass('image-holder');

		var jQuerycontainer = jQuery('.view-press .view-content');
		
		// initialize
		jQuerycontainer.imagesLoaded(function(){

			jQuerycontainer.masonry({
			  itemSelector: '.press-teaser'
			});
			
			//jQuery('.thumbs').animate({'opacity' : 1}, 1000);
			
			
		});



		// MOBILE STUFF
		jQuery('.menu-toggle').click(function(){
			jQuery('#nav').stop(false, true).slideToggle();
		});

		




		function windowResized(){

			
			var win_w = jQuery(window).width();
			var win_h = jQuery(window).height();

			var targ_w = 1350 / jQuery('#main').width();
			var targ_h = 900 / targ_w;
			
			
			
			if(win_w < 1000){
				jQuery('body').addClass('mobile');
			}else{
				jQuery('body').removeClass('mobile');
			}

			if(!jQuery('body').hasClass('mobile')){
				jQuery('#featured-projects, .images-holder').css('height', targ_h);
			}

			//console.log(win_w);
		}

		windowResized();
		if(!jQuery('body').hasClass('mobile')){
			//onScroll();
		}

	}
}


