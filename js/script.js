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
    let reverseHeader = $('.home-page');
    if(reverseHeader !='undefined' && reverseHeader.length > 0){
        $('.main-header').addClass('sticky_header');
        $('.site-main-cover').addClass('no_space');
    }
    $('.header_srch_btn input').on('click', function(e){
        e.preventDefault();
        $('.header_srch').addClass('open');
    });
    $('.accordion-header').on('click', function(e){
        e.preventDefault();
        $(this).parent().siblings().removeClass('accordion-active');
        $(this).parent().addClass("accordion-active");
        $(this).parent().siblings().find('.accordion-content').slideUp(300);
        $(this).siblings('.accordion-content').slideDown(300);
    })
});