
var $ = jQuery.noConflict();
$(document).ready(function() {
    $('.our-office-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            autoplay: false,
            autoplaySpeed: 3000,
            variableWidth: true,
            responsive: [
                {
                breakpoint: 1023,
                    settings: {
                        vertical: false,
                        autoplay: false,
                    }
                }
            ]
    });

    $('.news-event-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 3000,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 1023,
                    settings: {
                    vertical: false,
                    autoplay: false,
                    slidesToShow: 2,
                }
            }
        ]
    });

    $('.presenters-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 3000,
        variableWidth: true,
        responsive: [
            {
            breakpoint: 1023,
                settings: {
                    vertical: false,
                    autoplay: false,
                }
            }
        ]
    });

    $('.timeline-slider-for').slick({
        centerMode: true,
        centerPadding: '278px',
        dots: false,
        infinity: false,
        speed: 300,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        focusOnSelect: true,
        asNavFor: '.timeline-slider-nav',
    });
    $('.timeline-slider-nav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        autoplay: false,
        draggable: false,
        asNavFor: '.timeline-slider-for',
    });


    $('.community-event-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        prevArrow: '<div class="slick-arrow slick-prev"><span class="slick-btn fa-light fa-angle-left flex flex-center"></span></div>',
        nextArrow: '<div class="slick-arrow slick-next"><span class="slick-btn fa-light fa-angle-right flex flex-center"></span></div>',
        autoplay: false,
        autoplaySpeed: 3000,
        variableWidth: true,
        responsive: [
            {
            breakpoint: 1024,
                settings: {
                    vertical: false,
                    autoplay: false,
                    arrows: false,
                }
            },
            {
                breakpoint: 768,
                    settings: {
                        vertical: false,
                        autoplay: false,
                        arrows: false,
                    }
                }
        ]
    });
  
    $('.careers-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        prevArrow: '<div class="slick-arrow slick-prev"><span class="slick-btn fa-light fa-angle-left flex flex-center"></span></div>',
        nextArrow: '<div class="slick-arrow slick-next"><span class="slick-btn fa-light fa-angle-right flex flex-center"></span></div>',
        autoplay: false,
        autoplaySpeed: 3000,
        variableWidth: true,
        responsive: [
            {
            breakpoint: 1024,
                settings: {
                    vertical: false,
                    autoplay: false,
                    arrows: false,
                }
            },
            {
                breakpoint: 768,
                    settings: {
                        vertical: false,
                        autoplay: false,
                        arrows: false,
                    }
                }
        ]
    });
    
if($(window).width() >= 1024){
  $('.buffalo-slider-for').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        prevArrow: '<div class="slick-arrow slick-prev"><span class="slick-btn fa-light fa-angle-left flex flex-center"></span></div>',
        nextArrow: '<div class="slick-arrow slick-next"><span class="slick-btn fa-light fa-angle-right flex flex-center"></span></div>',
        focusOnSelect: true,
        vertical: true,
        verticalSwiping: true,
        asNavFor: '.buffalo-slider-nav',
  });

    $('.buffalo-slider-nav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.buffalo-slider-for',
    });
}
if($(window).width() <= 1023){
    $('.buffalo-slider-nav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        infinity: true,
        focusOnSelect: true,
    });
}

});