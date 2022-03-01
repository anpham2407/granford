/**
 * File primary-navigation.js.
 *
 * Required to open and close the mobile navigation.
 */

/**
 * Trigger a callback when 'this' image is loaded:
 * @param {Function} callback
 */
 (function($){
    $.fn.imgLoad = function(callback) {
        return this.each(function() {
            if (callback) {
                if (this.complete || /*for IE 10-*/ $(this).height() > 0) {
                    callback.apply(this);
                }
                else {
                    $(this).on('load', function(){
                        callback.apply(this);
                    });
                }
            }
        });
    };
})(jQuery);

/**
 * tabs function
 */

jQuery(document).ready(function($) {

	$('.content-slider').slick({
		infinite: false,
		cssEase: 'ease-in-out',
		arrows: false,
		dotsClass: 'slick-dots top',
		dots: true,
		customPaging: function(slider, i) {
			return '<div><i class="' + $(slider.$slides[i]).attr('icon') + '"></i><span class="value">' + $(slider.$slides[i]).attr('title') + '</span></div>';
		},
		responsive: [
			{
			  breakpoint: 760,
			  settings: "unslick"
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		  ]
	});
	AOS.init();
	// Run when slides change
	$('.content-slider').on('beforeChange', function(event, slick, currentSlide) {
		$('.content-slider .aos-init').removeClass('aos-animate')
	});
	$('.content-slider').on('afterChange', function(event, slick, currentSlide) {
		$('.content-slider .aos-init').addClass('aos-animate')
	});
	$('.header-banner').addClass('loading');

	$('.header-banner .aos-animate').removeClass('aos-animate');
	$('.hero-banner-img').imgLoad(function(){
		$('.header-banner .aos-init').addClass('aos-init aos-animate');
		$('.header-banner').removeClass('loading').addClass('loaded');
	});

	//post slider

	$('.post-slider').on('init', function(event, slick){
		// get first description item
		var dataDes = $(slick.$slides[0]).data('des');
		$('.news-block .left-text').empty().text(dataDes);
	});

	$('.post-slider').slick({
		lazyLoad: 'ondemand',
		slidesToShow: 3,
		slidesToScroll: 1,
		variableWidth: true,
		responsive: [
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				variableWidth: false,
				dots: true,
				arrows: false
			  }
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		  ]
	});

	$('.post-slider').on('afterChange', function(event, slick, currentSlide) {
		var dataDes = $(slick.$slides[currentSlide]).data('des');
		$('.news-block .left-text').empty().text(dataDes);
	});

	// handle submit contact form 7
	// $('body').off('click','.wpcf7-submit').on('click','.wpcf7-submit', function(e){
	// 	e.preventDefault();
	// 	console.log('ahihi');
	// 	return;
	// })
	document.addEventListener( 'wpcf7invalid', function( event ) {
		document.querySelector(".wpcf7").scrollIntoView({ behavior: 'smooth' });
	}, false );
});
