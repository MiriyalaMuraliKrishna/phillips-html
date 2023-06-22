var $ = jQuery.noConflict();
$(document).ready(function(){

    $('.another-short-wrap').each(function(){ if( $(this).text().trim() === "" ) { noentry = true; $(this).addClass("no_content_jq"); } else { $(this).removeClass("no_content_jq"); } });

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
    $('.header_secondary_btn').on('click', function(e){
        $(this).addClass('hide');
        $(this).parent().addClass('search_open');
        $('ul.main_menu').toggleClass('hide-menu');
        $('.header_srch').toggleClass('open');
    });
    $('.toggle_icon').on('click', function(e){
        e.preventDefault();
        $('.main-header').toggleClass('header_mobile');
        $(this).toggleClass('active');
        $('.navigation:not(nav.pagination)').toggleClass('open');
        $('.search-main').toggleClass('search_hide');
    });

    $('.accordion-header').on('click', function(e){
        e.preventDefault();
        $(this).parent('.accordion').siblings().removeClass('accordion-active');
        $(this).parent('.accordion').toggleClass("accordion-active");
        $(this).parent().siblings().find('.accordion-content').removeClass('open').hide();
        $(this).siblings('.accordion-content').addClass('open').slideToggle();
    });

    $('.filter_icon').on('click', function(e){
        e.preventDefault();
        $(this).toggleClass('open');
        $('.our-people-letter').fadeToggle(700);
        $('.our-people-dropdown').fadeToggle(700);
    });
    $('ul.common-banner-item li:first').addClass('active');
    $('ul.common-banner-item li > a').on('click', function(e){
        $(this).parent().siblings().removeClass('active');
        $(this).parent().addClass('active');
    });
    $("ul.alphabet-list li").click(function () {
        $("ul.alphabet-list li").removeClass("active");
        $(this).addClass("active");
    });
    $(".bio-people-text li a").click(function () {
        $(".bio-people-text li a").removeClass("active");
        $(this).addClass("active");
    });

    
    $('.wheel-sm-circle:first').addClass('active');
    $('.wheel-content:first').addClass('active-wheel');
    $('.wheel-sm-circle').on('click', function(e){
        e.preventDefault();
        $('.short-headline-section').addClass('wheel-pos');
        $('.wheel-overlay-bg').fadeIn();
        $('.wheel-container').fadeIn();
        $('.wheel-sm-circle').removeClass('active');
        $(this).addClass('active');
        $('.wheel-content').removeClass('active-wheel').hide();
        let wheelAttr = $(this).attr('data-value');
        $('.wheel-content[data-target="' + wheelAttr + '"]').fadeIn().addClass('active-wheel');
    });
    $('.wheel-close').on('click', function(e){
        e.preventDefault();
        $('.short-headline-section').removeClass('wheel-pos');
        $('.wheel-overlay-bg').fadeOut(700);
        $('.wheel-container').fadeOut(700);
        $('.wheel-sm-circle').removeClass('active');
        $('.wheel-content').removeClass('active-wheel');
        let wheelAttr = $(this).attr('data-value');
        $('.wheel-content[data-target="' + wheelAttr + '"]').addClass('active-wheel');
    });
});

let desktopScn = function(){
    if($(window).width() >= 1024){
        // desktop menu starts here
        $("ul.main_menu > li.expertise-nav-item > ul > li > ul > li.menu-item-has-children").hover(function(event){
            event.preventDefault();
            $(this).parent().parent().siblings('li').toggleClass('expertise-submenu');
        });
        $("ul.main_menu > li.expertise-nav-item > ul > li.no_underline").remove();
    }
}
$(document).on('ready', function () { desktopScn(); });


if($(window).width() <= 1023){
    $("ul.main_menu > li.menu-item-has-children > a").on("click", function(event){
        event.preventDefault();
        $('ul.main_menu > li.menu-item-has-children > a').not($(this)).removeClass('active');
        $(this).toggleClass("active");
        $(this).parent().siblings().find('ul.sub-menu').slideUp();
        $(this).next('ul.sub-menu').slideToggle();
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

let mobileScreen = function(){
    if($(window).width() <= 767){
        
        $('.banner-category-mobile').on('click', function(e){
            e.preventDefault();
            $(this).toggleClass('open');
            $('ul.banner-category').slideToggle(900);
        });
        $('ul.banner-category li a').on('click', function(e){
            e.preventDefault();
            $('.banner-category-mobile').removeClass('open');
            let text = $(this).text();
            $('.banner-category-mobile span').text(text);
            $('ul.banner-category').slideUp();
        });
        $('.share-icon').on("click", function(e){
            e.preventDefault();
            $('.social-share-icons').toggleClass('open');
        });

        $('.bio-expertise-list h4').on('click', function(e){
            e.preventDefault();
            $(this).parent().siblings().find('h4').removeClass('active');
            $(this).toggleClass('active');
            $(this).parent().siblings().find('.bio-expertise-desc').slideUp(500);
            $(this).siblings('.bio-expertise-desc').slideToggle(500);
        });

        $('.bio-people-list h2').on('click', function(e){
            e.preventDefault();
            $(this).children("a").remove();
            $(this).parent().siblings().find('h4').removeClass('active');
            $(this).toggleClass('active');
            $(this).parent().siblings().find('.bio-people-text').slideUp(500);
            $(this).siblings('.bio-people-text').slideToggle(500);
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
            $('ul.common-banner-item').slideUp('normal');
        });

        $('.banner-dropdown').on('click', function(e){
            e.preventDefault();
            $(this).toggleClass('open');
            $('ul.common-banner-item').slideToggle('normal');
        });
        $('ul.common-banner-item li > a').on('click', function(e){
            let text = $(this).text();
            $('.banner-dropdown span').text(text);
            $('ul.common-banner-item').slideUp('normal');
        });

        $('.filter-category-mobile').on('click', function(e){
            e.preventDefault();
            $(this).toggleClass('open');
            $('ul.filter-list').slideToggle(900);
        });
        $('ul.filter-list li a').on('click', function(){
            $('.filter-category-mobile').removeClass('open');
            let text = $(this).text();
            $('.filter-category-mobile h4').text(text);
            $('ul.filter-list').slideUp();
        });
    }
}
$(document).on('ready', function () { mobileScreen(); });

$(document).ready(function(){
    if($(".bio-people-main").length > 0 ){
        $(window).on("scroll load", function(){
        let headHeight = $('.main-header').outerHeight(true);
        var height = $(".common-banner-section").outerHeight(true);
        let totHeight = headHeight + height;
        var scroll = $(this).scrollTop();
            if( scroll >= totHeight ){
                $(".bio-people-main").addClass("sticky_sidebar"); 
            }
            else{
                $(".bio-people-main").removeClass("sticky_sidebar");
            }
        });
    }
    let countLi = $('ul.common-banner-item > li').length;
    if(countLi<=5){
        $('ul.common-banner-item').addClass('center');
    }

    $('.product-liability-text > ul').each(function(){
        if($(this).find('li').length > 10) {
            $(this).addClass('ul-count-2');
        }
    });   

    let biolists = $('.bio-people-expand-content');
    biolists.each(function(){
        var biolist = jQuery(this);
        var biolistItems = biolist.children('.bio-people-news-list');
        if(biolistItems.length > 3) {
            biolistItems.slice(3).hide();
            biolist.after('<a href="javascript:void(0);" class="show-more">Read More</a>');
            var button = biolist.next('.show-more');
            button.on('click', function() {
                biolistItems.slice(3).fadeToggle('fast');
                $(this).toggleClass('expanded');
                $(this).text($(this).text() == 'Read More' ? 'Read Less' : 'Read More');
            });
        }
    });

    var lists = $('ul.read-more-list');
    lists.each(function(){
        var list = jQuery(this);
        var listItems = list.children('li');
        if(listItems.length > 8) {
            listItems.slice(8).hide();
            list.after('<a href="javascript:void(0);" class="show-more">Read More</a>');
            var button = list.next('.show-more');
            button.on('click', function() {
                listItems.slice(8).fadeToggle('fast');
                $(this).toggleClass('expanded');
                $(this).text($(this).text() == 'Read More' ? 'Read Less' : 'Read More');
            });
        }
    });
    
});