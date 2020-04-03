(function($){
jQuery(document).ready( function($) {
      
$(document).ready(function() {
  "use strict";
  

 $('.full-sec-less').slick({
  autoplay:true,
  fade:true,
  dots:false,
  arrows:true,
  slidesToShow: 1,
  autoplaySpeed: 6000,
  infinite: true,
  rtl:true,
  speed: 500,
  cssEase: 'linear',
  prevArrow:'<button type="button" class="prev"><i class="fa fa-angle-left"></i></button>',
  nextArrow:'<button type="button" class="next"><i class="fa fa-angle-right"></i></button>',
  });

  $('.slide-widget-d1-wrap').slick({
  autoplay:true,
  fade:true,
  dots:false,
  arrows:true,
  slidesToShow: 1,
  autoplaySpeed: 6000,
  infinite: true,
  rtl:true,
  speed: 500,
  cssEase: 'linear',
  prevArrow:'<button type="button" class="prev"><i class="fa fa-angle-left"></i></button>',
  nextArrow:'<button type="button" class="next"><i class="fa fa-angle-right"></i></button>',
  });




})(jQuery);

