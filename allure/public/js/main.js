/**
 * Created by niunea on 11/16/14.
 */
$(function () {

    var winHeight = $( window ).height();
    $(".background div").each(function() {
        $(this).height(winHeight);
    });

    $('.background').cycle({
        fx:    'fade',
        speed:  1500
    });

    $('.fluidbox').fluidbox();

    $('.scroll').jScrollPane();
});