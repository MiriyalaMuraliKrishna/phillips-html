
jQuery(document).ready(function(){
    jQuery('.our-office-slider').slick({
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
    let countSlides = jQuery('.news-event-slider').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: false,
        dots: false,
        arrows: true,
        prevArrow: '<div class="slick-arrow slick-prev"><span class="slick-btn fa-light fa-angle-left flex flex-center"></span></div>',
        nextArrow: '<div class="slick-arrow slick-next"><span class="slick-btn fa-light fa-angle-right flex flex-center"></span></div>',
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
        if (slick.slideCount <= 1) {
            jQuery('.slick-dots').hide();
        }
     });

     jQuery('.timeline-slider-for').slick({
        dots: false,
        infinity: true,
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

    jQuery('.timeline-for-slide.slick-slide').click(function(){
        jQuery(this).closest('.slick-list').addClass('slick-new');
    });
    jQuery('.slick-slide').hover(function(){ jQuery(this).prevAll().addClass('prev-slides'); }, function(){ jQuery(this).prevAll().removeClass('prev-slides'); });

    jQuery('.timeline-slider-nav').slick({
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

    jQuery('.community-event-slider').slick({
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
  
    jQuery('.careers-slick-slider').slick({
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

    jQuery('.video-sec-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<div class="slick-arrow slick-prev"><span class="slick-btn fa-light fa-angle-left flex flex-center"></span></div>',
        nextArrow: '<div class="slick-arrow slick-next"><span class="slick-btn fa-light fa-angle-right flex flex-center"></span></div>',
        focusOnSelect: true
    });

    jQuery('.testimonial-sider').slick({
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
    
    if(jQuery(window).width() >= 1024){
        jQuery('.buffalo-slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: false,
            dots: false,
            speed: 1000,
            arrows: true,
            prevArrow: '<div class="slick-arrow slick-prev flex flex-center fa-light fa-angle-up"></div>',
            nextArrow: '<div class="slick-arrow slick-next flex flex-center fa-light fa-angle-down"></div>',
            vertical: true,
            verticalSwiping: true,
            swipeToSlide: true,
            focusOnSelect: true,
            asNavFor: '.buffalo-slider-nav',
        }).on('setPosition', function() {
            jQuery('.buffalo-slider-for .slick-list').css('height', '445px');
        });
    
        jQuery('.buffalo-slider-nav').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            speed: 1000,
            fade: true,
            focusOnSelect: true,
            asNavFor: '.buffalo-slider-for',
        });

    }
    if(jQuery(window).width() <= 1023){
        jQuery('.buffalo-slider-nav').on('init', function(event, slick){
            if (slick.slideCount <= 1) {
                jQuery('.slick-dots').hide();
              }
        });
        jQuery('.buffalo-slider-nav').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            arrows: true,
            prevArrow: '<div class="slick-arrow slick-prev"><span class="slick-btn fa-light fa-angle-left flex flex-center"></span></div>',
            nextArrow: '<div class="slick-arrow slick-next"><span class="slick-btn fa-light fa-angle-right flex flex-center"></span></div>',
            dots: false,
            infinity: true,
            focusOnSelect: true,
        });
    }
});

let mobileMedia = function(){
    if(jQuery(window).width() <= 767){       
        let countList = jQuery(".partners-default-list");
        for(let i=0; i<countList.length; i+=6 ) {
            countList.slice(i, i+6).wrapAll("<div class='partners-row flex'></div>");
        }
        let $testSlider =  jQuery('.partners-default-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            focusOnSelect: true,
        });
        jQuery('.dei-point-feature').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
        });
        jQuery('.affinity-main').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
        });
        jQuery('.presenters-slider').slick({
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
jQuery(window).resize(function () { mobileMedia(); });
jQuery(document).on('ready', function () { mobileMedia(); });

let ipadAbove = function(){
    if(jQuery(window).width() >= 768){ 
        jQuery('.partners-default-slider').slick('unslick');
    }
}   
jQuery(window).resize(function () { ipadAbove(); });
jQuery(document).on('ready', function () { ipadAbove(); });

