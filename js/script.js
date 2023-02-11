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
        $('ul.main_menu').toggleClass('hide-menu');
        $('.header_srch').toggleClass('open');
    });
    $('.toggle_icon').on('click', function(e){
        e.preventDefault();
        $('.navigation').toggleClass('open');
    });
    $('.accordion-header').on('click', function(e){
        e.preventDefault();
        $(this).parent().siblings().removeClass('accordion-active');
        $(this).parent().addClass("accordion-active");
        $(this).parent().siblings().find('.accordion-content').slideUp(300);
        $(this).siblings('.accordion-content').slideDown(300);
    });
});

// mobileMenu starts here
$("ul.main_menu > li.expertise-nav-item > ul > li > ul > li.menu-item-has-children > a").on("click", function(event){
    event.preventDefault();
    $('ul.main_menu > li.expertise-nav-item > ul').toggleClass('expertise-submenu');
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

