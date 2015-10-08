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


function startSecond(selector, type, fromTotal) {
var element = document.getElementById(selector);
var seconds = new ProgressBar.Circle(element, {
    duration: 200,
    /*color: "#FCB03C",*/
    color: "#000000",
    strokeWidth: 4,
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
if (currentType == 'seconds'){
    contextType = second;
} else if (currentType == 'minutes'){
    contextType = minute;
} else if (currentType == 'hours') {
    contextType = hour;
} else if (currentType == 'days') {
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

//startSecond('example-clock-container', 'days', 365);
//startSecond('example-clock-container2', 'hours', 24);
//startSecond('example-clock-container3', 'minutes', 60);
//startSecond('example-clock-container4', 'seconds', 60);

$(document).ready(function () {
    //rotation speed and timer
    var speed = 5000;

    var run = setInterval(rotate, speed);
    var slides = $('.slide');
    var container = $('#slides ul');
    var elm = container.find(':first-child').prop("tagName");
    var item_width = container.width();
    var previous = 'prev'; //id of previous button
    var next = 'next'; //id of next button
    slides.width(item_width); //set the slides to the correct pixel width
    container.parent().width(item_width);
    container.width(slides.length * item_width); //set the slides container to the correct total width
    container.find(elm + ':first').before(container.find(elm + ':last'));
    resetSlides();


    //if user clicked on prev button

    $('#buttons a').click(function (e) {
        //slide the item

        if (container.is(':animated')) {
            return false;
        }
        if (e.target.id == previous) {
            container.stop().animate({
                'left': 0
            }, 1500, function () {
                container.find(elm + ':first').before(container.find(elm + ':last'));
                resetSlides();
            });
        }

        if (e.target.id == next) {
            container.stop().animate({
                'left': item_width * -2
            }, 1500, function () {
                container.find(elm + ':last').after(container.find(elm + ':first'));
                resetSlides();
            });
        }

        //cancel the link behavior
        return false;

    });

    //if mouse hover, pause the auto rotation, otherwise rotate it
    container.parent().mouseenter(function () {
        clearInterval(run);
    }).mouseleave(function () {
        run = setInterval(rotate, speed);
    });


    function resetSlides() {
        //and adjust the container so current is in the frame
        container.css({
            'left': -1 * item_width
        });
    }

});
//a simple function to click next link
//a timer will call this function, and the rotation will begin

function rotate() {
    $('#next').click();
}