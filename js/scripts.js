(function ($) {

	function task_2() {
		$(window).load(function() {
			var $grid = $('.grid').imagesLoaded( function() {
				$grid.masonry({
					itemSelector: '.grid-item'
					// percentPosition: true,
					// columnWidth: '.grid-sizer'
				}); 
			});
		});
	}

	function task_1() {
		// mouse scroll script
		$('#mouse-scroll').click(function(event) {
			var id = $(this).attr("href");
			var offset = 60;
			var target = $(id).offset().top - offset;
			$('html, body').animate({
				scrollTop: target
			}, 500);
			event.preventDefault();
		});
		// top scroll script
		$("a[href='#top']").click(function() {
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});
	}

	function hero_slider() {
		$("#hero-slider").owlCarousel({
			loop:true,
			margin:0,
			responsiveClass:true,
			autoplay:false,
			autoplayTimeout: 6000,
			navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
			responsive:{
				0:{
					items:1,
					nav:false
				},
					600:{
					items:1,
					nav:false
				},
					1000:{
					items:1,
					nav:true,
					loop:true
				}
			}
		})
	}

	function testi_car() {
		$("#testimonial").owlCarousel({
			loop:true,
			margin:0,
			responsiveClass:true,
			autoplay:true,
			autoplayTimeout: 5000,
			navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
			responsive:{
				0:{
					items:1,
					nav:false
				},
					600:{
					items:1,
					nav:false
				},
					1000:{
					items:1,
					nav:false,
					loop:true
				}
			}
		});
	}

	$('#toggle').click(function() {
		$(this).toggleClass('active');
		$('#overlay').toggleClass('open');
	});

	$(window).on("scroll", function(e){
		if ($(window).scrollTop() >= 20) {
			$('header').addClass('fixed-header');
		}
		else {
			$('header').removeClass('fixed-header');
		}
	});

	// Call
	task_2();
	task_1();
	testi_car();
	hero_slider();

})(jQuery);
