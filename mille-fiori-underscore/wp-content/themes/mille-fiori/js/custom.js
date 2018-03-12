"use strict";
(function () {


	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the button that opens the modal
	var btn = document.getElementsByClassName("portfolio-link");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal
	// btn.onclick = function() {
	// 	console.log('open modal');
	// 	modal.style.display = "block";
	// }
var element = '';

	jQuery('.portfolio-link').on('click', function (event) {
		element = jQuery(this).attr('href');
		console.log(element);
		jQuery('body').addClass('body-modal');
		jQuery(element).addClass('modal-show');
	});



	// When the user clicks on <span> (x), close the modal
	jQuery('.close-modal, .close-button').on('click', function() {
		jQuery('body').removeClass('body-modal');
		jQuery('.modal').removeClass('modal-show');
	});


	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}

	jQuery('.elementor-section-wrap section').waypoint(function() {
		var element = '';
		element = jQuery('.nav-container a[href="#' + this.element.id + '"]');
		if (element.length) {
			jQuery(".nav-container ul li").children().removeClass("active");
			element.addClass("active");
		}
	}, { offset: 66 });

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
		// jQuery('body').scrollspy({
		// 	target: '#mainNav',
		// 	offset: 100
		// });
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