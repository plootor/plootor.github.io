"use strict";
jQuery(document).ready(function () {

  //Add top navigation adjustments based on scroll
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

  jQuery('.navbar-nav>li>a').on('click', function () {
    jQuery('.navbar-collapse').collapse('hide');
  });

  //Portfolio masonry grid code
  var grid = jQuery('.grid').masonry({
    itemSelector: '.grid-item',
    percentPosition: true,
    columnWidth: '.grid-sizer'
  });
  grid.imagesLoaded().progress(function () {
    grid.masonry();
  });

  // Top navigation click handler
  // If on home page easing scrolling else redirect to homepage with anchor "#about"
  if (window.location.pathname == '/' && jQuery('body').hasClass('home')) {
    var toolbar = document.querySelector("#navbarNavDropdown");
    toolbar.addEventListener("click", function (event) {
      var anchor = jQuery(e.target).attr('href');
      if (!anchor) {
        return false;
      }
      jQuery('html, body').stop().animate({
        scrollTop: (jQuery(anchor).offset().top - 50)
      }, 1250, 'easeInOutExpo');
      event.preventDefault();
      event.stopPropagation();
    });
  } else {
    jQuery('#mainNav .nav-link').on('click', function () {
      jQuery(location).attr('href', '/' + jQuery(this).attr("href"));
    });
  }

  var navigation = document.querySelector(".portfolio-nav");
  if (navigation) {
    navigation.addEventListener("click", function (e) {
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