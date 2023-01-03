
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
});