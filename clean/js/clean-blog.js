(function($) {
  "use strict"; // Start of use strict

    var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
        percentPosition: true,
        columnWidth: '.grid-sizer'
    });
    $grid.imagesLoaded().progress(function () {
        $grid.masonry();
    });

})(jQuery); // End of use strict
