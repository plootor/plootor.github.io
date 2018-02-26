"use strict";
(function () {

	if (!jQuery('.navbar').hasClass('block-affix')) {
		jQuery(window).on('scroll', function (event) {
			var scrollValue = jQuery(window).scrollTop();
			if (scrollValue > 100) {
				jQuery('.navbar').removeClass('affix-top').addClass('affix');
			} else {
				jQuery('.navbar').addClass('affix-top').removeClass('affix');
			}
		});
		jQuery(window).trigger("scroll");
		jQuery('body').scrollspy({
			target: '#mainNav',
			offset: 100
		});
	}



	var toolbar = document.querySelector(".portfolio-nav");
	if (toolbar) {
		toolbar.addEventListener("click", function (e) {
			jQuery('.portfolio-nav a.active').removeClass('active');
			jQuery(e.target).addClass('active');
			var anchor = jQuery(e.target).attr('data-name');
			if (!anchor) {
				return false;
			}
			runFunc(anchor);
			e.preventDefault();
			e.stopPropagation();
		});
	}

	//TODO: add a check for slick
	//if (typeof slick !== 'undefined' && $.isFunction(slick)) {
	//	jQuery('.slick-carousel').slick();
	//}
})(); // End of use strict

function runFunc(type) {
	switch (type) {
		case 'all':
			jQuery('.item1').show();
			jQuery('.item2').show();
			jQuery('.item3').show();
			jQuery('.item4').show();
			jQuery('.item5').show();
			jQuery('.item6').show();
			break;
		case 'first':
			jQuery('.item1').hide();
			jQuery('.item2').hide();
			jQuery('.item3').hide();
			jQuery('.item6').hide();
			jQuery('.item4').show();
			jQuery('.item5').show();
			break;
		case 'second':
			jQuery('.item4').hide();
			jQuery('.item5').hide();
			jQuery('.item6').hide();
			jQuery('.item1').show();
			jQuery('.item2').show();
			jQuery('.item3').show();
			break;
		case 'third':
			jQuery('.item2').hide();
			jQuery('.item3').hide();
			jQuery('.item1').show();
			jQuery('.item4').show();
			jQuery('.item5').show();
			jQuery('.item6').show();
			break;
	}
	jQuery('.grid').masonry();
}