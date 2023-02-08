$('.client-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.buffalo-team'
  });

  $('.buffalo-team').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.client-slider',
    dots: true,
    centerMode: true,
    focusOnSelect: true,
    vertical: true,
    verticalSwiping: true
  });