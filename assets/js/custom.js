$(document).ready(function($){
	$("#hero-slider").owlCarousel({
		// rtl: true,
		loop:true,
		margin:0,
		responsiveClass:true,
		autoplay:false,
		// animateOut: 'fadeOut',
		autoplayTimeout: 6000,
		// autoHeight : true,
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

	$("#testimonial").owlCarousel({
		// rtl: true,
		loop:true,
		margin:0,
		responsiveClass:true,
		autoplay:true,
		// animateOut: 'fadeOut',
		autoplayTimeout: 5000,
		// autoHeight : true,
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
	})

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


});