var $ = jQuery.noConflict();
$(document).ready(function(){
    $('.popup-youtube').magnificPopup({
      delegate: 'a',
      type: 'iframe',
      mainClass: 'mfp-fade',
     
    });
});