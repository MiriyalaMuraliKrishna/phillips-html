var $ = jQuery.noConflict();
$(document).ready(function(){
    $(window).on('scroll load', function(){
        var scroll = $(this).scrollTop();
        if(scroll > 5){
            $('.main-header').addClass('fixed_header');
        }
        else{
            $('.main-header').removeClass('fixed_header');
        }
    });
    let reverseHeader = $('.home');
    if(reverseHeader !='undefined' && reverseHeader.length > 0){
        $('.main-header').addClass('sticky_header');
        $('.site-main-cover').addClass('no_space');
    }    
});