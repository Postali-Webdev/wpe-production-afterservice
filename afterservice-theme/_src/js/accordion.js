/*
    accordion
*/
(function($){

	$('.c-accordion__content.active').show();

	$(".c-accordion__panel").click(function(){

		$(this).each( function() {

			//Add/Remove active class from accordion on click
			if ( $(this).children('.c-accordion__title').hasClass('active') ) {
				 $(this).children('.c-accordion__title').removeClass('active');
			} else {
				$(this).children('.c-accordion__title.active').removeClass('active');
				$(this).children('.c-accordion__title').addClass('active');
			}

			//Hide other accordions on click
			$(this).siblings().children('.c-accordion__title').removeClass('active');
			$(this).siblings().children('.c-accordion__content').removeClass('active');

			//Show accordion on click
			$(this).children('.c-accordion__content').slideToggle();

			//Hide other accordions on click
			$(this).siblings().children('.c-accordion__content').slideUp();

		});
	});

})( jQuery, this); //-- end jQuery/AUI
