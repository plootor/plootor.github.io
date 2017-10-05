/*! scrollVert transition plugin for Cycle2;  version: 20140128 */
$.fn.cycle.transitions.scrollVert = {
    before: function( opts, curr, next, fwd ) {
        opts.API.stackSlides( opts, curr, next, fwd );
        var height = opts.container.css('overflow','hidden').height();
        opts.cssBefore = { top: fwd ? height : -height, left: 0, opacity: 1, display: 'block', visibility: 'visible' };
        opts.animIn = { top: 0 };
        opts.animOut = { top: fwd ? -height : height };
    }
};

(function($) {
    "use strict";

    pageLoading({
        barColor:'#3D3C3C',
        barTop:'75px',
        textTop:'100px',
        backColor:'rgba(255,255, 255, 0.90)',
        backBarColor:'#dfe8ea',
        text:'Loading <b>{process} %</b>',
        textVisible:false,
        loadOut:true
    });


    //SVG fix for firefox an IE
    document.querySelector('.shape').setAttribute("width", document.querySelector('.main').offsetWidth-30);
    document.querySelector('.shape').setAttribute("height", document.querySelector('.main').offsetHeight-30);

    // bind to C2's bootstrap event in order to get a reference to the API object
    $('.cycle-slideshow').on('cycle-bootstrap', function(e, opts, API) {
        // add a new method to the C2 API:
        API.customGetImageSrc = function( slideOpts, opts, slideEl ) {
            return $( slideEl ).attr('title');
        }
    });
    $( ".lab-container" ).click(function() {
        if ($(window).width() > 900) {
            $( ".subscribe-form" ).toggle('slow', 'swing');
        } else {
            $("html, body").animate({ scrollTop: $(document).height()-$(window).height() });
        }
        $( ".subscribe").mouseleave(function(){
            $( ".subscribe-form" ).hide('slow', 'swing');
        });
    });

    var newYear = new Date();
    newYear = new Date(newYear.getFullYear() + 1, 1 - 1, 1);
    $('.timer').countdown({until: newYear, layout:
        '<div><time class="text">{dl}</time> <time class="number">{d<}{dn}</time></div>'
        +'<div><time class="text">{hl}</time><time class="number">{d>} {hn}</time></div>'
        +'<div><time class="text">{ml}</time><time class="number">{mn}</time></div>'
        +'<div><time class="text">{sl}</time><time class="number">{sn}</time></div>'}
    );
})(jQuery);