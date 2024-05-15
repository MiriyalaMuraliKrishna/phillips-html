
jQuery(document).ready(function(){
    jQuery('.another-short-wrap').each(function(){ if( jQuery(this).text().trim() === "" ) { noentry = true; jQuery(this).addClass("no_content_jq"); } else { jQuery(this).removeClass("no_content_jq"); } });
    jQuery(window).on('scroll load', function(){
        var scroll = jQuery(this).scrollTop();
        if(scroll > 4){
            jQuery('.main-header').addClass('fixed_header');
        }
        else{
            jQuery('.main-header').removeClass('fixed_header');
        }
    });
    let reverseHeader = jQuery('.home-page');
    if(reverseHeader !='undefined' && reverseHeader.length > 0){
        jQuery('.main-header').addClass('sticky_header');
        jQuery('.site-main-cover').addClass('no_space');
    }
    jQuery('.header_secondary_btn').on('click', function(e){
        jQuery(this).addClass('hide');
        jQuery(this).parent().addClass('search_open');
        jQuery('ul.main_menu').toggleClass('hide-menu');
        jQuery('.header_srch').toggleClass('open');
    });
    jQuery('.toggle_icon').on('click', function(e){
        e.preventDefault();
        jQuery('.main-header').toggleClass('header_mobile');
        jQuery(this).toggleClass('active');
        jQuery('.navigation:not(nav.pagination)').toggleClass('open');
        jQuery('.search-main').toggleClass('search_hide');
    });


    jQuery('.accordion-header').on('click', function(e){
        e.preventDefault();
        jQuery(this).parent('.accordion').siblings().removeClass('accordion-active');
        jQuery(this).parent('.accordion').toggleClass("accordion-active");
        jQuery(this).parent().siblings().find('.accordion-content').removeClass('open').hide();
        jQuery(this).siblings('.accordion-content').addClass('open').slideToggle();
    });

    jQuery('.filter_icon').on('click', function(e){
        e.preventDefault();
        jQuery(this).toggleClass('open');
        jQuery('.our-people-letter').fadeToggle(700);
        jQuery('.our-people-dropdown').fadeToggle(700);
    });
    jQuery('ul.common-banner-item li:first').addClass('active');
    jQuery('ul.common-banner-item li > a').on('click', function(e){
        jQuery(this).parent().siblings().removeClass('active');
        jQuery(this).parent().addClass('active');
    });
    jQuery("ul.alphabet-list li").click(function () {
        jQuery("ul.alphabet-list li").removeClass("active");
        jQuery(this).addClass("active");
    });
    jQuery(".bio-people-text li a").click(function () {
        jQuery(".bio-people-text li a").removeClass("active");
        jQuery(this).addClass("active");
    });

    
    jQuery('.wheel-sm-circle:first').addClass('active');
    jQuery('.wheel-content:first').addClass('active-wheel');
    jQuery('.wheel-sm-circle').on('click', function(e){
        e.preventDefault();
        jQuery('.short-headline-section').addClass('wheel-pos');
        jQuery('.wheel-overlay-bg').fadeIn();
        jQuery('.wheel-container').fadeIn();
        jQuery('.wheel-sm-circle').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.wheel-content').removeClass('active-wheel').hide();
        let wheelAttr = jQuery(this).attr('data-value');
        jQuery('.wheel-content[data-target="' + wheelAttr + '"]').fadeIn().addClass('active-wheel');
    });
    jQuery('.wheel-close').on('click', function(e){
        e.preventDefault();
        jQuery('.short-headline-section').removeClass('wheel-pos');
        jQuery('.wheel-overlay-bg').fadeOut(700);
        jQuery('.wheel-container').fadeOut(700);
        jQuery('.wheel-sm-circle').removeClass('active');
        jQuery('.wheel-content').removeClass('active-wheel');
        let wheelAttr = jQuery(this).attr('data-value');
        jQuery('.wheel-content[data-target="' + wheelAttr + '"]').addClass('active-wheel');
    });
});

let desktopScn = function(){
    if(jQuery(window).width() >= 1024){
        // desktop menu starts here
        jQuery("ul.main_menu > li.expertise-nav-item > ul > li > ul > li.menu-item-has-children").hover(function(event){
            event.preventDefault();
            jQuery(this).parent().parent().siblings('li').toggleClass('expertise-submenu');
        });
        jQuery("li.no_underline").remove();
    }
}
jQuery(document).on('ready', function () { desktopScn(); });


if(jQuery(window).width() <= 1023){
    jQuery("ul.main_menu > li.menu-item-has-children > a").on("click", function(event){
        event.preventDefault();
        jQuery('ul.main_menu > li.menu-item-has-children > a').not(jQuery(this)).removeClass('active');
        jQuery(this).toggleClass("active");
        jQuery(this).parent().siblings().find('ul.sub-menu').slideUp();
        jQuery(this).next('ul.sub-menu').slideToggle();
        jQuery(this).parent().siblings().toggleClass('sib');
    });
    jQuery("ul.main_menu ul > li.menu-item-has-children > a").on("click", function(event){
        event.preventDefault();
        jQuery('ul.main_menu ul > li.menu-item-has-children > a').not(jQuery(this)).removeClass('active');
        jQuery(this).toggleClass("active");
        jQuery(this).parent().siblings().find('ul.sub-menu').slideUp();
        jQuery(this).siblings('ul.main_menu ul > li > ul.sub-menu').slideToggle();
    });
}

let mobileScreen = function(){
    if(jQuery(window).width() <= 767){
        
        jQuery('.banner-category-mobile').on('click', function(e){
            e.preventDefault();
            jQuery(this).toggleClass('open');
            jQuery('ul.banner-category').slideToggle(900);
        });
        jQuery('ul.banner-category li a').on('click', function(e){
            e.preventDefault();
            jQuery('.banner-category-mobile').removeClass('open');
            let text = jQuery(this).text();
            jQuery('.banner-category-mobile span').text(text);
            jQuery('ul.banner-category').slideUp();
        });
        jQuery('.share-icon').on("click", function(e){
            e.preventDefault();
            jQuery('.social-share-icons').toggleClass('open');
        });

        jQuery('.bio-expertise-list h4').on('click', function(e){
            e.preventDefault();
            jQuery(this).parent().siblings().find('h4').removeClass('active');
            jQuery(this).toggleClass('active');
            jQuery(this).parent().siblings().find('.bio-expertise-desc').slideUp(500);
            jQuery(this).siblings('.bio-expertise-desc').slideToggle(500);
        });

        jQuery('.bio-people-list h2').on('click', function(e){
            e.preventDefault();
            jQuery(this).children("a").remove();
            jQuery(this).parent().siblings().find('h4').removeClass('active');
            jQuery(this).toggleClass('active');
            jQuery(this).parent().siblings().find('.bio-people-text').slideUp(500);
            jQuery(this).siblings('.bio-people-text').slideToggle(500);
        });

        jQuery('.common-dropdown').on('click', function(e){
            e.preventDefault();
            jQuery(this).toggleClass('open');
            jQuery('ul.banner-category').slideToggle(900);
        });
        jQuery('ul.banner-category li a').on('click', function(e){
            e.preventDefault();
            let text = jQuery(this).text();
            jQuery('.banner-category-mobile span').text(text);
            jQuery('ul.common-banner-item').slideUp('normal');
        });

        jQuery('.banner-dropdown').on('click', function(e){
            e.preventDefault();
            jQuery(this).toggleClass('open');
            jQuery('ul.common-banner-item').slideToggle('normal');
        });
        jQuery('ul.common-banner-item li > a').on('click', function(e){
            let text = jQuery(this).text();
            jQuery('.banner-dropdown span').text(text);
            jQuery('ul.common-banner-item').slideUp('normal');
        });

        jQuery('.filter-category-mobile').on('click', function(e){
            e.preventDefault();
            jQuery(this).toggleClass('open');
            jQuery('ul.filter-list').slideToggle(900);
        });
        jQuery('ul.filter-list li a').on('click', function(){
            jQuery('.filter-category-mobile').removeClass('open');
            let text = jQuery(this).text();
            jQuery('.filter-category-mobile h4').text(text);
            jQuery('ul.filter-list').slideUp();
        });
    }
}
jQuery(document).on('ready', function () { mobileScreen(); });

jQuery(document).ready(function(){
    if(jQuery(".bio-people-main").length > 0 ){
        jQuery(window).on("scroll load", function(){
        let headHeight = jQuery('.main-header').outerHeight(true);
        var height = jQuery(".common-banner-section").outerHeight(true);
        let totHeight = headHeight + height;
        var scroll = jQuery(this).scrollTop();
            if( scroll >= totHeight ){
                jQuery(".bio-people-main").addClass("sticky_sidebar"); 
            }
            else{
                jQuery(".bio-people-main").removeClass("sticky_sidebar");
            }
        });
    }
    let countLi = jQuery('ul.common-banner-item > li').length;
    if(countLi<=5){
        jQuery('ul.common-banner-item').addClass('center');
    }

    jQuery('.product-liability-text > ul').each(function(){
        if(jQuery(this).find('li').length > 10) {
            jQuery(this).addClass('ul-count-2');
        }
    });   

    let biolists = jQuery('.bio-people-expand-content');
    biolists.each(function(){
        var biolist = jQuery(this);
        var biolistItems = biolist.children('.bio-people-news-list');
        if(biolistItems.length > 3) {
            biolistItems.slice(3).hide();
            biolist.after('<a href="javascript:void(0);" class="show-more">Read More</a>');
            var button = biolist.next('.show-more');
            button.on('click', function() {
                biolistItems.slice(3).fadeToggle('fast');
                jQuery(this).toggleClass('expanded');
                jQuery(this).text(jQuery(this).text() == 'Read More' ? 'Read Less' : 'Read More');
            });
        }
    });

    var lists = jQuery('ul.read-more-list');
    lists.each(function(){
        var list = jQuery(this);
        var listItems = list.children('li');
        if(listItems.length > 8) {
            listItems.slice(8).hide();
            list.after('<a href="javascript:void(0);" class="show-more">Read More</a>');
            var button = list.next('.show-more');
            button.on('click', function() {
                listItems.slice(8).fadeToggle('fast');
                jQuery(this).toggleClass('expanded');
                jQuery(this).text(jQuery(this).text() == 'Read More' ? 'Read Less' : 'Read More');
            });
        }
    });


    jQuery("ul.cutom-filter > li").has("ul").addClass("menu-level-1");
    jQuery("ul.cutom-filter > li > ul > li").has("ul").addClass("menu-level-2");
    const firstLevel = jQuery('ul.cutom-filter > li.menu-level-1 > a');
    const secondlevel = jQuery('ul.cutom-filter > li > ul > li.menu-level-2 > a');
    jQuery('.cutom-filter-btn').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        jQuery(this).toggleClass('active');
        jQuery(this).parents().siblings(".our-people-field").find("ul.cutom-filter").slideUp(900);
        jQuery(this).siblings('ul.cutom-filter').slideToggle(900);
    });
    if(jQuery(window).width() <= 1023){
        firstLevel.on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            jQuery(this).parent().siblings().find("a").removeClass("active");
            jQuery(this).toggleClass('active');
            jQuery(this).parent().siblings().find('ul').slideUp(900);
            jQuery(this).siblings().slideToggle(900);
        });
        secondlevel.on('click', function (e){
            e.preventDefault();
            e.stopPropagation();
            jQuery(this).parent().siblings().find("a").removeClass("active");
            jQuery(this).toggleClass('active');
            jQuery(this).parent().siblings().find('ul').slideUp(900);
            jQuery(this).siblings().slideToggle(900);
        });
    }
    jQuery("body").on("click", function(){
        jQuery("ul.cutom-filter").slideUp(900);
    });
    jQuery(".our-people-dropdown .selectBox-dropdown").on("click", function(){
        jQuery("ul.cutom-filter").slideUp(900);
    });
});

    

