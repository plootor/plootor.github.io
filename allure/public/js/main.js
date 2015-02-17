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
        controls: false,
        onSlideAfter: function(){
            // do mind-blowing JS stuff here
            var selectedIndex = $(".slider > :visible").index() + 1;
            console.log('Slide index: ' + selectedIndex);
            $('.background  > :visible').fadeOut( "slow" );
console.log('current: ' + selectedIndex);
            $('.background div:nth-child(' + selectedIndex + ')').fadeTo( "slow", 1 );
        }

    });
});