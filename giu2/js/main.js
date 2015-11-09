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

    $( ".time-show" ).click(function() {
            $( ".timer-block" ).toggle('slow', 'swing');
       /* $( ".hourglass").mouseleave(function(){
            $( ".timer-block" ).hide('slow', 'swing');
        }); */
    });

})(jQuery);

// bind to C2's bootstrap event in order to get a reference to the API object
$('.cycle-slideshow').on('cycle-bootstrap', function(e, opts, API) {
    // add a new method to the C2 API:
    API.customGetImageSrc = function( slideOpts, opts, slideEl ) {
        return $( slideEl ).attr('title');
    }
});


function startSecond(selector, type, fromTotal) {
var element = document.getElementById(selector);
var seconds = new ProgressBar.Circle(element, {
    duration: 200,
    /*color: "#FCB03C",*/
    color: "#000000",
    strokeWidth: 1,
    trailColor: "#ddd"
});

setInterval(function() {
    var second = new Date().getSeconds(),
        minute = new Date().getMinutes(),
        hour = new Date().getHours(),
        //SET DATE HERE
        day = daysUntil(2015, 12, 25),
        currentType = type,
        contextType;
if (currentType == 'S'){
    contextType = second;
} else if (currentType == 'M'){
    contextType = minute;
} else if (currentType == 'H') {
    contextType = hour;
} else if (currentType == 'D') {
    contextType = (365 - day);
}
    seconds.animate((fromTotal-contextType) / fromTotal, function() {
        if ((fromTotal-contextType) == 1){
            seconds.setText((fromTotal - contextType) + ' ' + currentType.substring(0, currentType.length - 1));
        } else {
            seconds.setText((fromTotal - contextType) + ' ' + currentType);
        }
    });
}, 1000);

}

function daysUntil(year, month, day) {
    var now = new Date(),
        dateEnd = new Date(year, month - 1, day), // months are zero-based
        days = (dateEnd - now) / 1000/60/60/24;   // convert milliseconds to days

    return Math.round(days);
}
startSecond('example-clock-container', 'D', 365);
startSecond('example-clock-container2', 'H', 24);
startSecond('example-clock-container3', 'M', 60);
startSecond('example-clock-container4', 'S', 60);