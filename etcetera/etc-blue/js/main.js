(function($) {
    "use strict";
    
    $('.cycle-slideshow').on('cycle-bootstrap', function(e, opts, API) {
        API.customGetImageSrc = function( slideOpts, opts, slideEl ) {
            return $( slideEl ).attr('name');
        }
    });

    $( ".time-show" ).click(function() {
        if($( ".timer-block" ).is(':visible')) {
            setTimeout(function (){
                $( "#slides" ).fadeToggle('slow', 'swing');
                $( ".headline_small" ).fadeToggle('slow', 'swing');
                $( ".social" ).fadeToggle('slow', 'swing');
            }, 500);
            $( ".timer-block" ).fadeToggle('slow', 'swing');
        } else {
            setTimeout(function (){
                $( ".timer-block" ).fadeToggle('slow', 'swing');
            }, 500);
            $( "#slides" ).fadeToggle('slow', 'swing');
            $( ".headline_small" ).fadeToggle('slow', 'swing');
            $( ".social" ).fadeToggle('slow', 'swing');
        }
    });

    //initialize timer
    startSecond('example-clock-container', '1', 365);
    startSecond('example-clock-container2', '2', 24);
    startSecond('example-clock-container3', '3', 60);
    startSecond('example-clock-container4', '4', 60);

    //initialize maps
    google.maps.event.addDomListener(window, 'load', initialize);
})(jQuery);

function startSecond(selector, type, fromTotal) {
var element = document.getElementById(selector);
var seconds = new ProgressBar.Circle(element, {
    duration: 200,
    /*color: "#FCB03C",*/
    color: "#0078ad",
    strokeWidth: 1,
    trailColor: "#ffffff"
});

setInterval(function() {
    var second = new Date().getSeconds(),
        minute = new Date().getMinutes(),
        hour = new Date().getHours(),
        //SET DATE HERE
        day = daysUntil(2016, 12, 25),
        currentType = type,
        contextType;
if (currentType == '4'){
    contextType = second;
} else if (currentType == '3'){
    contextType = minute;
} else if (currentType == '2') {
    contextType = hour;
} else if (currentType == '1') {
    contextType = (365 - day);
}
    seconds.animate((fromTotal-contextType) / fromTotal, function() {
        if ((fromTotal-contextType) == 1){
            seconds.setText((fromTotal - contextType));
        } else {
            seconds.setText((fromTotal - contextType));
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

$.fn.cycle.transitions.scrollVert = {
    before: function( opts, curr, next, fwd ) {
        opts.API.stackSlides( opts, curr, next, fwd );
        var height = opts.container.css('overflow','hidden').height();
        opts.cssBefore = { top: fwd ? height : -height, left: 0, opacity: 1, display: 'block', visibility: 'visible' };
        opts.animIn = { top: 0 };
        opts.animOut = { top: fwd ? -height : height };
    }
};

function initialize() {
    var mapCanvas = document.getElementById('map');
    var mapOptions = {
        center: new google.maps.LatLng(44.5403, -78.5463),
        zoom: 8,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions)
}
