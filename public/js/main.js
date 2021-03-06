jQuery(function($) {'use strict',

	//#main-slider
	$(document).ready(function() {
		$('#main-slider').find('.carousel').carousel({
			interval: 8000,
			pause: false,
			wrap: true
		});
	});


	// accordian
	$('.accordion-toggle').on('click', function(){
		$(this).closest('.panel-group').children().each(function(){
		$(this).find('>.panel-heading').removeClass('active');
		 });

	 	$(this).closest('.panel-heading').toggleClass('active');
	});

	//Initiat WOW JS
	new WOW().init();

	// portfolio filter
	$(window).load(function(){'use strict';
		var $portfolio_selectors = $('.portfolio-filter >li>a');
		var $portfolio = $('.portfolio-items');
		$portfolio.isotope({
			itemSelector : '.portfolio-item',
			layoutMode : 'fitRows'
		});
		
		$portfolio_selectors.on('click', function(){
			$portfolio_selectors.removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			$portfolio.isotope({ filter: selector });
			return false;
		});
	});

	// Contact form
	var form = $('#main-contact-form');
	form.submit(function(event){
		event.preventDefault();
		var form_status = $('<div class="form_status col-sm-10 col-sm-offset-1"></div>');
		$.ajax({
			url: $(this).attr('action'),
			method: 'post',
			data: {
				name: $('#contact-name').val(),
				email: $('#contact-email').val(),
				phone: $('#contact-phone').val(),
				company: $('#contact-company').val(),
				subject: $('#contact-subject').val(),
				message: $('#message').val()
			},
			headers: {
		        'X-CSRF-Token': $('#contact-token').attr('value')
		    },

			beforeSend: function(){
				form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Slanje poruke...</p>').fadeIn() );
			}
		}).done(function(response){
			if(response.status)
				form_status.html('<p class="text-success">' + response.message + '</p>').delay(3000).fadeOut();
			else
				form_status.html('<p class="text-danger">' + response.message + '</p>').delay(3000).fadeOut();
		});
	});

	
	//goto top
	$('.gototop').click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $("body").offset().top
		}, 500);
	});	

	//Pretty Photo
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});	
});