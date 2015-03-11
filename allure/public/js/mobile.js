/**
 * Created by niunea on 11/16/14.
 */
$(function () {
    'use strict';
    $(".four, .five").click(function () {
        if(!$(this).hasClass('activate')){
            $(this).addClass('activate');
            return false;
        }
    });
});
