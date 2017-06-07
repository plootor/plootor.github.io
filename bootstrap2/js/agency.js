// Agency Theme JavaScript

(function($) {
  // "use strict"; // Start of use strict

  // Highlight the top nav as scrolling occurs
  $('body').scrollspy({
      target: '.navbar-fixed-top',
      offset: 51
  });

  $('section').viewportChecker({
    classToAdd: 'visible',
    offset: 500,
    repeat: false
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
  });

  var $grid = $('.grid').masonry({
    itemSelector: '.grid-item',
    percentPosition: true,
    columnWidth: '.grid-sizer'
  });
  $grid.imagesLoaded().progress(function () {
    $grid.masonry();
  });

  var toolbar = document.querySelector(".portfolio-nav");
  toolbar.addEventListener("click", function(e) {
    $('.portfolio-nav a.active').removeClass('active');
    $(e.target).addClass('active');
    var anchor = $(e.target).attr('name');
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
      $('.item1').hide();
      $('.item2').hide();
      $('.item3').hide();
      $('.item6').hide();
      $('.item4').show();
      $('.item5').show();
      break;
    case 'second':
      $('.item4').hide();
      $('.item5').hide();
      $('.item6').hide();
      $('.item1').show();
      $('.item2').show();
      $('.item3').show();
      break;
    case 'third':
      $('.item1').show();
      $('.item2').hide();
      $('.item3').hide();
      $('.item4').show();
      $('.item5').show();
      $('.item6').show();
      break;
  }
  $('.grid').masonry();
}