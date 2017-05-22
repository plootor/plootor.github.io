// Agency Theme JavaScript

(function($) {
   // "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function(){ 
            $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

  var toolbar = document.querySelector(".portfolio-nav");
  toolbar.addEventListener("click", function(e) {
    var anchor = $(e.target).attr('class');
    if(!anchor) return false;
    runFunc(anchor);
    event.preventDefault();
    event.stopPropagation();
  });

})(jQuery); // End of use strict

function runFunc(type) {
  switch (type) {
    case 'all':
      $('.item1').show();
      $('.item2').show();
      $('.item3').show();
      $('.item4').show();
      $('.item5').show();
      $('.item6').show();
      break;
    case 'first':
      $('.item4').hide();
      $('.item5').hide();
      break;
    case 'second':
      $('.item1').hide();
      break;
    case 'third':
      $('.item3').hide();
      break;
  }
  $('.grid').masonry();
}