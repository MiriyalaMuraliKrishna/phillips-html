
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
});