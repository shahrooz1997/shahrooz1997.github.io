(function ($) {

    "use strict";

        // PRE LOADER
        $(window).load(function(){
          $('.preloader').fadeOut(1000); // set duration in brackets    
        });


        // navigation Section
        $('.navbar-collapse a').on('click',function(){
          $(".navbar-collapse").collapse('hide');
        });


        // Parallax Js
        function initParallax() {
          $('#home').parallax("50%", 50);
          $('#service').parallax("50%", 40);
          $('#about').parallax("50%", 20);
          $('#work').parallax("50%", 30);
          $('#contact').parallax("50%", 10);
          }
        initParallax();
        

        // smoothscroll js
        // $(function() {
        //   $('#home a').bind('click', function(event) {
        //     var $anchor = $(this);
        //     $('html, body').stop().animate({
        //         scrollTop: $($anchor.attr('href')).offset().top - 49
        //     }, 1000);
        //     event.preventDefault();
        //   });
        // });  


        // WOW Animation js
        new WOW({ mobile: false }).init();

	/*---------------------
	 TOP Menu Stick
	--------------------- */
		var s = $("#sticker");
		var pos = s.position();					   
		$(window).scroll(function() {
			var h = document.getElementById('home').clientHeight - document.getElementById('sticker').clientHeight;
			var windowpos = $(window).scrollTop();
			if (windowpos > h) {
				s.addClass("stick");
				$(".navbar-left").addClass("my-hidden-class");
			} else {
				$(".navbar-left").removeClass("my-hidden-class");
				s.removeClass("stick");	
			}
		});
	/*----------------------------
	 Navbar nav
	------------------------------ */

		$(window).scroll(function() {
			var home = document.getElementById('home').clientHeight - document.getElementById('sticker').clientHeight;
			var about = document.getElementById('home').clientHeight + document.getElementById('about').clientHeight - document.getElementById('sticker').clientHeight;
			var service = document.getElementById('home').clientHeight + document.getElementById('about').clientHeight + document.getElementById('service').clientHeight - document.getElementById('sticker').clientHeight;
			// var contact = document.getElementById('contact').clientHeight - document.getElementById('sticker').clientHeight;
			
			var windowpos = $(window).scrollTop();
			if (windowpos < home) {
				$(".main-menu ul.navbar-nav li").removeClass("active");
				$(".main-menu ul.navbar-nav li:nth-child(1)").addClass("active");
			}
			else if (windowpos < about && windowpos > home) {
				$(".main-menu ul.navbar-nav li").removeClass("active");
				$(".main-menu ul.navbar-nav li:nth-child(2)").addClass("active");
			}
			else if (windowpos < service && windowpos > about) {
				$(".main-menu ul.navbar-nav li").removeClass("active");
				$(".main-menu ul.navbar-nav li:nth-child(3)").addClass("active");
			}
			else if (windowpos > service) {
				$(".main-menu ul.navbar-nav li").removeClass("active");
				$(".main-menu ul.navbar-nav li:nth-child(4)").addClass("active");
			}
		});

		$(".main-menu ul.navbar-nav li ").on('click', function(){
			$(".main-menu ul.navbar-nav li").removeClass("active");
			$(this).addClass("active");
		});	

	/*----------------------------
	 Header Images
	------------------------------ */
		$(".header-img").height($(window).height());

		$(window).resize(function(){
			$(".header-img").height($(window).height());
		});

	/*----------------------------
	Page Scroll
	------------------------------ */

/*	jQuery('a.page-scroll').bind('click', function(event) {
		var $anchor = $(this);
		  $('html, body').stop().animate({
			  scrollTop: $($anchor.attr('href')).offset().top - 55
			}, 1500, 'easeInOutExpo');
		event.preventDefault();
	}); 
*/
	/*----------------------------
	 Counter js active
	------------------------------ */

		/*$('.counter').counterUp({
			delay: 40,
			time: 3000
		});*/
	/*---------------------
	 mixItUp
	--------------------- */	

	/*	$('.awesome-portfolio-content').mixItUp({
			animation: {
			  effects: 'rotateZ',
			  duration: 1000,
			}
		});
	*/
	/*---------------------
	 testimonial-curosel
	--------------------- */
		$('.testimonial-carousel').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			dots:false,
			animateOut: 'slideOutUp',
			animateIn: 'zoomInRight',
			navText:["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			autoplay:false,
			smartSpeed:3000,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1000:{
					items:1
				}
			}
		});

	/*---------------------
	 Blog-curosel
	--------------------- */
		$('.blog-item ').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			dots:false,
			animateOut: 'slideOutDown',
			animateIn: 'zoomInLeft',
			navText:["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			autoplay:false,
			smartSpeed:3000,
			responsive:{
				0:{
					items:1
				},
				768:{
					items:2
				},
				1000:{
					items:3
				}
			}
		});

})(jQuery);
