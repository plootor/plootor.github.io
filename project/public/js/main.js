/**
 * Created by niunea on 11/16/14.
 */
$(function () {
    'use strict';
    if ($('.fluidbox').length) {
        $('.fluidbox').fluidbox()
            .on('openstart', function(){ $('footer').css('z-index', 9); })
            .on('closeend', function(){ $('footer').css('z-index', 12); });
    }
    if ($('.nano').length) {
        $('.nano').nanoScroller();
    }
    if ($('.slider').length) {
    $('.slider').bxSlider({
        mode: 'fade',
        speed: 1500,
        infiniteLoop: true,
        auto: true,
        pause: 6000,
        autoControls: true,
        autoControlsCombine: true,
        controls: false,
        onSlideBefore: function ($slideElement, oldIndex, newIndex) {
            var selectedIndex = newIndex + 1;

            $('.slide.active').removeClass('active');
            $slideElement.addClass('active');            
            $('.bg-home>:visible').css('opacity', 0);
            $('.bg-home div:nth-child(' + selectedIndex + ')').css('opacity', 1);
        }
    });
    }
});
