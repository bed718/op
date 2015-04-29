Drupal.behaviors.init = {
	attach: function (context, settings) {
		(function ($) {
 			
 			
			// MENU TWEAKS!!!
 			//===================================
 			$('.menu-toggle').click(function(){
				$('#nav-main').slideToggle(300);
				return false;
			});

			$("#menu-header, #press-header, #info-header").attr('data-bottom-top', 'background-position: 50% 100px;')
	 			.attr('data-top-bottom', 'background-position: 50% -100px;');

	 		$('#menu-header').attr('data-scroll-index', '1');
	 		$('#press-header').attr('data-scroll-index', '2');
	 		$('#info-header').attr('data-scroll-index', '3');
	 		$('#about').attr('data-scroll-index', '0');


	 		var content = $("#content-main");
	 		var win = $(window);
	 		var body = $("body");

	 		win.scroll(function(event) {
	 			var head_top = content.offset().top - 25;
	 			var win_top = win.scrollTop();

	 			if(win_top >= head_top){
	 				body.addClass('nav-top');
	 			}else{
	 				body.removeClass('nav-top');
	 			}
	 		});

	 		// MASONRY!!!
 			//===================================
			var masonry_container = $('.view-press');
			
			masonry_container.imagesLoaded(function(){
				masonry_container.masonry({
				  itemSelector: '.press'
				});
			});


			// SKROLR!!!
 			//===================================
			if($(window).width() > 500){
	 				var s = skrollr.init({
	 				forceHeight: false,
	 			});
	 		}


	 		$.scrollIt({
			  scrollTime: 1000,       
			  activeClass: 'active', 
			  topOffset: -25           
			});


	 		$('#map_canvas1').addClass('scrolloff'); // set the pointer events to none on doc ready
        $('#canvas1').on('click', function () {
            $('#map_canvas1').removeClass('scrolloff'); // set the pointer events true on click
        });

        // you want to disable pointer events when the mouse leave the canvas area;

        $("#map_canvas1").mouseleave(function () {
            $('#map_canvas1').addClass('scrolloff'); // set the pointer events to none when mouse leaves the map area
        });

	 		


		}(jQuery));
	}	
}

