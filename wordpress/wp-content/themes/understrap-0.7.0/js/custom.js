jQuery(function() {
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

  jQuery('.scroll-to .elementor-button-link').click(function() {
      jQuery('html, body').animate({
          scrollTop: jQuery('#reservationForm').offset().top - 200
      }, 1000);
      return false;
  });
});