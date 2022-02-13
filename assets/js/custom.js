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
	$('.post-slider').slick({
		lazyLoad: 'ondemand',
		slidesToShow: 3,
		slidesToScroll: 1,
		variableWidth: true,
	});

});
