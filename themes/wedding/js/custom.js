jQuery(document).ready(function () {
	"use strict";

	var slick = jQuery('.slick-carousel');
	if (slick.length) {
		slick.slick({dots: true});
	}
});