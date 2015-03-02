/**
 * Created by niunea on 11/16/14.
 */
$(function () {

    if($('.fluidbox').length){
        $('.fluidbox').fluidbox();
    }

    if($('.nano').length){
        $('.nano').nanoScroller();
    }

    $('.slider').bxSlider({
        mode: 'fade',
        speed: 1500,
        infiniteLoop: true,
        auto: true,
        pause: 6000,
        controls: true,
        autoControls: true,
        onSlideBefore: function($slideElement, oldIndex, newIndex){

            //for css3 effects
            $('.slide.active').removeClass('active');
            $slideElement.addClass('active');

            var selectedIndex = newIndex + 1;
            $('.bg-home  > :visible').css('opacity', 0);
            $('.bg-home div:nth-child(' + selectedIndex + ')').css('opacity', 1);
        }
    });
});