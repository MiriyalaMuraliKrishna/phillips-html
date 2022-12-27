var $ = jQuery.noConflict();
$(document).ready(function(){
    $(window).on('scroll', function(){
        var scroll = $(this).scrollTop();
        if(scroll > 4){
            $('.main-header').addClass('fixed_header');
        }
        else{
            $('.main-header').removeClass('fixed_header');
        }
    });
    
});