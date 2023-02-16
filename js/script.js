var $ = jQuery.noConflict();
$(document).ready(function(){
    $(window).on('scroll load', function(){
        var scroll = $(this).scrollTop();
        if(scroll > 4){
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
        $('ul.main_menu').toggleClass('hide-menu');
        $('.header_srch').toggleClass('open');
    });
    $('.toggle_icon').on('click', function(e){
        e.preventDefault();
        $('.main-header').toggleClass('header_mobile');
        $(this).toggleClass('active');
        $('.navigation').toggleClass('open');
    });
    $('.accordion-header').on('click', function(e){
        e.preventDefault();
        $(this).parent().siblings().removeClass('accordion-active');
        $(this).parent().toggleClass("accordion-active");
        $(this).parent().siblings().find('.accordion-content').slideUp(500);
        $(this).siblings('.accordion-content').slideToggle(500);
    });
});

// mobileMenu starts here
$("ul.main_menu > li.expertise-nav-item > ul > li > ul > li.menu-item-has-children").hover(function(event){
    event.preventDefault();
    $(this).parent().parent().siblings('li').toggleClass('expertise-submenu')
});


let mobileIpad = function(){
    if($(window).width() <= 1023){
        $("ul.main_menu > li.menu-item-has-children > a").on("click", function(event){
          event.preventDefault();
          $('ul.main_menu > li.menu-item-has-children > a').not($(this)).removeClass('active');
          $(this).toggleClass("active");
          $(this).parent().siblings().find('ul.sub-menu').slideUp();
          $(this).siblings('ul.main_menu > li > ul.sub-menu').slideToggle();
          $(this).parent().siblings().toggleClass('sib');
        });
        $("ul.main_menu ul > li.menu-item-has-children > a").on("click", function(event){
          event.preventDefault();
          $('ul.main_menu ul > li.menu-item-has-children > a').not($(this)).removeClass('active');
          $(this).toggleClass("active");
          $(this).parent().siblings().find('ul.sub-menu').slideUp();
          $(this).siblings('ul.main_menu ul > li > ul.sub-menu').slideToggle();
        });

    }
}
$(window).resize(function () { mobileIpad(); });
$(document).on('ready', function () { mobileIpad(); });

$(document).ready(function(){
    $('.banner-category-mobile').on('click', function(e){
        e.preventDefault();
        $(this).toggleClass('open');
        $('ul.banner-category').slideToggle(900);
    });
    $('ul.banner-category li a').on('click', function(e){
        e.preventDefault();
        let text = $(this).text();
        $('.banner-category-mobile span').text(text);
        $('ul.banner-category').slideUp();
    });
    $('.share-icon').on("click", function(e){
        e.preventDefault();
        $('.social-share-icons').toggleClass('open');
    });

    $('.common-dropdown').on('click', function(e){
        e.preventDefault();
        $(this).toggleClass('open');
        $('ul.banner-category').slideToggle(900);
    });
    $('ul.banner-category li a').on('click', function(e){
        e.preventDefault();
        let text = $(this).text();
        $('.banner-category-mobile span').text(text);
        $('ul.common-banner-item').slideUp();
    });
    $('.filter_icon').on('click', function(e){
        e.preventDefault();
        $(this).toggleClass('open');
        $('.our-people-letter').fadeToggle(700);
        $('.our-people-dropdown').fadeToggle(700);
    });
});