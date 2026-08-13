/*
	mainScripts
*/
(function($){

	/* ====================
		Devices
	==================== */

	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	 	$('html').addClass('is-device');
	}

	/* ====================
		Inview
	==================== */

	var $animation_elements = $('.c-animate');

	var $window = $(window);

	function check_if_in_view() {
		var window_height = $window.height();
		var window_top_position = $window.scrollTop();
		var window_bottom_position = (window_top_position + window_height);

		$.each($animation_elements, function() {
			var $element = $(this);
			var element_height = $element.outerHeight();
			var element_top_position = $element.offset().top;
			var element_bottom_position = (element_top_position + element_height);

			//check to see if this current container is within viewport
			if ((element_bottom_position >= window_top_position) &&
				(element_top_position <= window_bottom_position)) {
				$element.addClass('c-animate--view');
			}
		});
	}

	$window.on('scroll resize', check_if_in_view);
	$window.trigger('scroll');

	/* ====================
		Fixed Navigation
	==================== */

	if (window.matchMedia("(min-width: 991px)").matches) {
		$('.js-nav').scrollToFixed({
			preFixed: function() { $(this).addClass('c-nav__hightlight'); },
			postFixed: function() { $(this).removeClass('c-nav__hightlight'); }
		});
	}

	/* ====================
		Offcanvas Trigger
	==================== */

    $('.js-toggle').click(function() {
		$('body').toggleClass('is-active');
		$(".c-nav__toggle--close").focus();
		return false;
	});

    $(document).on('keydown', function(event) {
	   if (event.key == "Escape") {
	       $('body').removeClass('is-active');
	    	return false;
	   }
	});

	var capture = $( ".capture" )
	.attr( "tabindex", "-1" )
	.focus()
	.keydown(
		function handleKeydown( event ) {
			if ( event.key.toLowerCase() !== "tab" ) {
				return;
			}
			var tabbable = $()
				.add( capture.find( "button, input, select, textarea" ) )
				.add( capture.find( "[href]" ) )
				.add( capture.find( "[tabindex]:not([tabindex='-1'])" ) )
			;
			var target = $( event.target );
			if ( event.shiftKey ) {
				if ( target.is( capture ) || target.is( tabbable.first() ) ) {
					event.preventDefault();
					tabbable.last().focus();
				}
				} else {
					if ( target.is( tabbable.last() ) ) {

						event.preventDefault();
						tabbable.first().focus();
					}
				}
			}
	);

	/* ====================
		Navigation
	==================== */

	$('#menu-main-navigation li:has(ul)').doubleTapToGo();

	//$('.c-nav__dropdown').closest(".menu-item").prepend('<span class="c-nav__dropdown--toggle"></span>');

	$('.c-nav__item--children > .c-nav__link').on("click", function(e){
		$(this).closest(".menu-item").children(".c-nav__dropdown").slideToggle();
	});

	$('.c-sidebar__list > li.menu-item-has-children > a').on("click", function(e){
	 e.preventDefault();		
		$(this).closest(".menu-item").children(".sub-menu").slideToggle();
	});

	/* ====================
		Responsive Embed
	==================== */

	var $all_oembed_videos = $("iframe[data-original*='youtube'], iframe[data-original*='vimeo'], iframe[src*='youtube'], iframe[src*='google'], iframe[src*='vimeo']");

	$all_oembed_videos.each(function() {

		$(this).removeAttr('height').removeAttr('width').wrap( "<div class='c-embed c-embed--respond'></div>" );

	});

	/* ====================
		Match Height
	==================== */

	$('.match-height').matchHeight();


	/* ====================
		Carousel
	==================== */

	$('.c-carousel').slick({
		dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
	});

	$('.c-carousel__reviews-sidebar').slick({
		dots: false,
		arrows: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1
	});

	$('.c-carousel__awards').slick({
		dots: false,
		arrows: true,
        infinite: true,
        speed: 500,
        slidesToShow: 2,
        slidesToScroll: 1,
	});

	var $slickReviews = $('.c-carousel__reviews');
	var $status = $('.c-reviews__counter');

	$slickReviews.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
	  //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
	  var i = (currentSlide ? currentSlide : 0) + 1;
	  $status.text(i + '/' + slick.slideCount);
	});

	$slickReviews.slick({
		dots: false,
		arrows: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true
	});

	$('.c-carousel__cases').slick({
		dots: true,
		arrows: true,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        responsive: [
		    {
		      breakpoint: 1199,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		      }
		    },
		    {
		      breakpoint: 968,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		      }
		    },
	    ]
	});

	/* ====================
		Lazyload
	==================== */

	function lazyLoad() {
		var bLazy = new Blazy({
			src: 'data-original', // Default is data-src
			offset: 0
		});
	}

	lazyLoad();

	$(window).resize(function() {
		lazyLoad(); // Rerun blazy on window resize
	});

	/* ====================
		Smooth Scroll
	==================== */

	$('.u-scroll').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top - 200
				}, 1000);
				return false;
			}
		}
	});

	/* ====================
		Scroll Header
	==================== */

    $(window).scroll(function() {

    	var scroll = $(window).scrollTop();

    	if (scroll >= 100) {
    		$(".c-header").addClass("active");
    	} else {
    		$(".c-header").removeClass("active");
    	}

    });

	/* ====================
		Procedure list
	==================== */

    $('.js-toggle-btn').click(function() {
        $(this).next('.js-list').slideToggle();
        $(this).parent().siblings().find('.js-list').slideUp();
    });

    /* ====================
		Lightbox
	==================== */

    Fancybox.bind("[data-fancybox]", {
	  // Your custom options
	});

})( jQuery, this); //-- end jQuery/AUI