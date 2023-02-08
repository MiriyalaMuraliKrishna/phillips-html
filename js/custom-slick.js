
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
    const $dotsContainer = $(".our-office-slider ul.slick-dots");
    if (typeof $dotsContainer !== "undefined" && $dotsContainer.length > 0){
        $dotsContainer.addClass('office-slick-dots');
    }
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
                }
            }
        ]
    });
    const $newsContainer = $(".news-event-slider ul.slick-dots");
   if (typeof $newsContainer !== "undefined" && $newsContainer.length > 0){
      $newsContainer.addClass('news-slick-dots');
    }
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
    const $presentersContainer = $(".presenters-slider ul.slick-dots");
    if (typeof $presentersContainer !== "undefined" && $presentersContainer.length > 0){
        $presentersContainer.addClass('news-slick-dots');
    }

    $('.timeline-slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        asNavFor: '.timeline-slider-for',
    });
    $('.timeline-slider-nav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        asNavFor: '.timeline-slider-for',
        prevArrow: '<span class="timeline-arrow prev-arrow fa-light fa-angle-left flex flex-center"></span>',
        nextArrow: '<span class="timeline-arrow next-arrow fa-light fa-angle-right flex flex-center"></span>',
        autoplay: false,
        autoplaySpeed: 2000,
    });
    
});