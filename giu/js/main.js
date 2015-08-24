(function($) {
    "use strict";

    $.fn.cycle.transitions.scrollVert = {
        before: function( opts, curr, next, fwd ) {
            opts.API.stackSlides( opts, curr, next, fwd );
            var height = opts.container.css('overflow','hidden').height();
            opts.cssBefore = { top: fwd ? height : -height, left: 0, opacity: 1, display: 'block', visibility: 'visible' };
            opts.animIn = { top: 0 };
            opts.animOut = { top: fwd ? -height : height };
        }
    };

})(jQuery);

// bind to C2's bootstrap event in order to get a reference to the API object
$('.cycle-slideshow').on('cycle-bootstrap', function(e, opts, API) {
    // add a new method to the C2 API:
    API.customGetImageSrc = function( slideOpts, opts, slideEl ) {
        return $( slideEl ).attr('title');
    }
});