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


function startSecond(selector, type) {
var element = document.getElementById(selector);
var seconds = new ProgressBar.Circle(element, {
    duration: 200,
    color: "#FCB03C",
    trailColor: "#ddd"
});

setInterval(function() {
    var second = new Date().getSeconds(),
        minute = new Date().getMinutes(),
        hour = new Date().getHours(),
        date = new Date().getDate(),
        currentType = type;


    seconds.animate(second / 60, function() {
        seconds.setText(second);
    });
}, 1000);

}

startSecond('example-clock-container', 'second');
startSecond('example-clock-container2', 'minute');
startSecond('example-clock-container3', 'hour');
startSecond('example-clock-container4', 'date');