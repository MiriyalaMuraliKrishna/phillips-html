
var $ = jQuery.noConflict();
$(document).ready(function() {

$('.community-event-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    prevArrow: '<span class="timeline-arrow prev-arrow fa-light fa-angle-left flex flex-center"></span>',
    nextArrow: '<span class="timeline-arrow next-arrow fa-light fa-angle-right flex flex-center"></span>',
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

const $presentersContainer = $(".community-event-slider ul.slick-dots");
    if (typeof $presentersContainer !== "undefined" && $presentersContainer.length > 0){
        $presentersContainer.addClass('news-slick-dots');
    }

$('.careers-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    prevArrow: '<span class="timeline-arrow prev-arrow fa-light fa-angle-left flex flex-center"></span>',
    nextArrow: '<span class="timeline-arrow next-arrow fa-light fa-angle-right flex flex-center"></span>',
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
const $presentersContainer1 = $(".careers-slider ul.slick-dots");
    if (typeof $presentersContainer1 !== "undefined" && $presentersContainer1.length > 0){
        $presentersContainer1.addClass('news-slick-dots');
    }

});