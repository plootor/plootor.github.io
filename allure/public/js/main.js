/**
 * Created by niunea on 11/16/14.
 */
$(document).ready(function(){

    var winHeight = $( window ).height();
    $(".background div").each(function() {
        $(this).height(winHeight);
    });

    $('.background').cycle({
        fx:    'fade',
        speed:  1500
    });
});