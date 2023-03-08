
var $ = jQuery.noConflict();
$(document).ready(function(){
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

    let countSlides = $('.news-event-slider').slick({
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
            },
            {
            breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: false,
                }
            }
        ]
    });
    countSlides.on('setPosition', function(event, slick){
        if (slick.slideCount <= 3) {
           $('.slick-dots').hide();
        }
     });

    $('.timeline-slider-for').slick({
        dots: false,
        infinity: false,
        speed: 300,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        variableWidth: true,
        focusOnSelect: true,
        asNavFor: '.timeline-slider-nav',
        responsive: [
            {
            breakpoint: 1023,
                settings: {
                    dots: true,
                }
            },
            {
            breakpoint: 767,
                settings: {
                    dots: true,
                }
            }
        ]
    });
    $('.timeline-slider-nav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<span class="slick-arrow slick-prev"></span>',
        nextArrow: '<span class="slick-arrow slick-next"></span>',
        autoplay: false,
        draggable: false,
        asNavFor: '.timeline-slider-for',
        responsive: [
            {
            breakpoint: 1023,
                settings: {
                    arrows: false,
                }
            },
            {
            breakpoint: 767,
                settings: {
                    arrows: false,
                }
            }
        ]
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
  
    $('.careers-slick-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '200px',
        autoplay: true,
        autoplaySpeed: 3000,
        variableWidth: true,
        dots: true,
        arrows: true,
        prevArrow: '<div class="slick-arrow slick-prev"><span class="slick-btn fa-light fa-angle-left flex flex-center"></span></div>',
        nextArrow: '<div class="slick-arrow slick-next"><span class="slick-btn fa-light fa-angle-right flex flex-center"></span></div>',
        responsive: [
            {
            breakpoint: 1024,
                settings: {
                    centerPadding: '100px',        
                    variableWidth: false,
                }
            },
            {
            breakpoint: 767,
                settings: {
                    centerPadding: '30px',  
                    variableWidth: false,
                }
            }
        ]
    });

    $('.video-sec-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<div class="slick-arrow slick-prev"><span class="slick-btn fa-light fa-angle-left flex flex-center"></span></div>',
        nextArrow: '<div class="slick-arrow slick-next"><span class="slick-btn fa-light fa-angle-right flex flex-center"></span></div>',
        focusOnSelect: true
    });

    $('.testimonial-sider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        prevArrow: '<div class="slick-arrow slick-prev"><span class="slick-btn fa-light fa-angle-left flex flex-center"></span></div>',
        nextArrow: '<div class="slick-arrow slick-next"><span class="slick-btn fa-light fa-angle-right flex flex-center"></span></div>',
        responsive: [
            {
                breakpoint: 1024,
                    settings: {
                        arrows: false,
                        variableWidth: true,
                        centerMode: true,
                        centerPadding: '100px',
                    }
            },
            {
            breakpoint: 768,
                settings: {
                    arrows: false,
                }
            }
        ]
    });
    
    if($(window).width() >= 1024){
        $('.buffalo-slider-for').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: false,
            dots: false,
            arrows: true,
            prevArrow: '<div class="slick-arrow slick-prev flex flex-center fa-light fa-angle-up"></div>',
            nextArrow: '<div class="slick-arrow slick-next flex flex-center fa-light fa-angle-down"></div>',
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

let mobileMedia = function(){
    if($(window).width() <= 767){        
        let countList = $(".partners-default-list");
        for(let i=0; i<countList.length; i+=6 ) {
            countList.slice(i, i+6).wrapAll("<div class='partners-row flex'></div>");
        }
        $('.partners-default-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            focusOnSelect: true,
        });
        $('.dei-point-feature').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
        });
        $('.affinity-main').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
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
    }      
}
$(window).resize(function () { mobileMedia(); });
$(document).on('ready', function () { mobileMedia(); });