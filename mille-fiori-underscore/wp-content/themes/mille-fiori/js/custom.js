jQuery(document).ready(function () {
	"use strict";

	var slick = jQuery('.slick-carousel');
	if (slick.length) {
		slick.slick({dots: true});
	}

	if (window.location.pathname != '/' && !jQuery('body').hasClass('home')) {
		jQuery('#mainNav').find('.nav-link').on('click', function () {
			jQuery(location).attr('href', '/' + jQuery(this).attr("href"));
		});
	}

	jQuery(".navbar-toggler").click(function () {
		jQuery(".navbar-collapse").toggle("slow", function () {
		});
	});

	jQuery('.navbar-nav>li>a').on('click', function () {
		jQuery(".navbar-collapse").toggle();
	});

	var $grid = jQuery('.grid').masonry({
		itemSelector: '.grid-item',
		percentPosition: true,
		columnWidth: '.grid-sizer'
	});
	$grid.imagesLoaded().progress(function () {
		$grid.masonry();
	});

	var navChildren = jQuery(".navbar-nav li").children();
	var aArray = [];
	for (var i = 0; i < navChildren.length; i++) {
		var aChild = navChildren[i];
		var ahref = jQuery(aChild).attr('href');
		aArray.push(ahref);
	}

	if (jQuery('body.home').length) {
		jQuery(window).scroll(function () {
			var windowPos = jQuery(window).scrollTop();
			for (var i = 0; i < aArray.length; i++) {
				var theID = aArray[i];
				var secPosition = jQuery(theID).offset().top;
				secPosition = secPosition - 66;
				var divHeight = jQuery(theID).height();
				divHeight = divHeight + 200;
				if (windowPos >= secPosition && windowPos < (secPosition + divHeight)) {
					jQuery(".navbar-nav a.active").removeClass("active");
					jQuery("a[href='" + theID + "']").addClass("active");
				}
			}
		});
	}


	if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		// You are in mobile browser
		jQuery('.fade-animate').addClass("hide-el").viewportChecker({
			classToAdd: 'show-el animated fadeInUp',
			offset: 80
		});
	}

	// Get the modal
	var modal = document.getElementById('myModal');
	var element = '';

	jQuery('.portfolio-link').on('click', function (event) {
		element = jQuery(this).attr('href');
		jQuery('body').addClass('body-modal');
		jQuery(element).addClass('modal-show');
	});


	// When the user clicks on <span> (x), close the modal
	jQuery('.close-modal, .close-button').on('click', function () {
		jQuery('body').removeClass('body-modal');
		jQuery('.modal').removeClass('modal-show');
	});


	jQuery('.form-alert').on("click", ".close", function() {
		jQuery('.alert').hide();
	});


	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function (event) {
		if (event.target === modal) {
			modal.style.display = "none";
		}
	}

	var navbar = jQuery('.navbar');
	if (!navbar.hasClass('block-affix')) {
		jQuery(window).on('scroll', function () {
			var scrollValue = jQuery(window).scrollTop();
			if (scrollValue > 100) {
				navbar.removeClass('affix-top').addClass('affix');
			} else {
				navbar.addClass('affix-top').removeClass('affix');
			}
		});
		jQuery(window).trigger("scroll");
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

});

function runFunc(type) {
	var item1 = jQuery('.item1'),
		item2 = jQuery('.item2'),
		item3 = jQuery('.item3'),
		item4 = jQuery('.item4'),
		item5 = jQuery('.item5'),
		item6 = jQuery('.item6');

	switch (type) {
		case 'all':
			item1.show();
			item2.show();
			item3.show();
			item4.show();
			item5.show();
			item6.show();
			break;
		case 'first':
			item1.hide();
			item2.hide();
			item3.hide();
			item6.hide();
			item4.show();
			item5.show();
			break;
		case 'second':
			item4.hide();
			item5.hide();
			item6.hide();
			item1.show();
			item2.show();
			item3.show();
			break;
		case 'third':
			item2.hide();
			item3.hide();
			item1.show();
			item4.show();
			item5.show();
			item6.show();
			break;
	}
	jQuery('.grid').masonry();
}