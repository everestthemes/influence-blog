(function($){
jQuery(document).ready( function($) {
      
$(document).ready(function() {
  "use strict";
  

 if (window.matchMedia("(max-width: 991px)").matches) {

           $(".col-lg-9").removeClass("sticky-portion");

       } else {

           $('.sticky-portion').theiaStickySidebar({

             additionalMarginTop: 30

           });

      }
      
  //mobile menu

$('#mobile_navigation .menu-item-has-children > a').each(function() {
      $(this).after('<span class=\'sub-toggle\'><i class=\'fa fa-angle-down\'></i></span>');
  });
  $(document).on('touchstart', '.sub-toggle', function(){
      $(this).toggleClass('open').next('.sub-menu').slideToggle();
  });
  
  function mobile_menu() {
        var winWidth = $(window).width();
        if (winWidth < 768) {
            $('.main_navigation li').click(function() {
                $('body').removeClass('nav_open');
                $('.hamburger').toggleClass('active');
                $('.main_navigation').slideUp();
            });
        } else {
            $('.main_navigation ').unbind('click');
        }
    }
    mobile_menu();
    $(window).resize(mobile_menu)

  $('.menu-item-has-children a').click(function() {
  $(this).toggleClass('open').next('ul').slideToggle();
});
    // mobile_menu();
   // $(window).resize(mobile_menu)
  //wow js
//  new WOW().init();
$(window).resize(function(){
  var winWidthNew = $(window).width();
  if($(winWidthNew > 959)) {
    $('.hamburger').removeClass('active');
    $('body').removeClass('nav_open');
    $('.main_navigation').removeAttr('style');
  }
  
});
 $(".btn-search").click(function(){
  $("#header-search").slideToggle();
});


  $('.banner-inner').slick({
  autoplay:true,
  fade:false,
  dots:false,
  arrows:true,
  slidesToShow: 1,
  autoplaySpeed: 6000,
  infinite: true,
  speed: 500,
  cssEase: 'linear',
  prevArrow:'<button type="button" class="prev"><i class="fa fa-angle-left"></i></button>',
  nextArrow:'<button type="button" class="next"><i class="fa fa-angle-right"></i></button>',
  });
  

 $('.full-widget-d3-slide-wrap').slick({
  autoplay:true,
  fade:true,
  dots:false,
  arrows:true,
  slidesToShow: 1,
  autoplaySpeed: 6000,
  infinite: true,
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
  speed: 500,
  cssEase: 'linear',
  prevArrow:'<button type="button" class="prev"><i class="fa fa-angle-left"></i></button>',
  nextArrow:'<button type="button" class="next"><i class="fa fa-angle-right"></i></button>',
  });


    $('.full-widget-d1-slider').slick({
  autoplay:true,
  fade:false,
  dots:false,
  arrows:true,
  slidesToShow: 1,
  autoplaySpeed: 6000,
  infinite: true,
  speed: 500,
  cssEase: 'linear',
  prevArrow:'<button type="button" class="prev"><i class="fa fa-angle-left"></i></button>',
  nextArrow:'<button type="button" class="next"><i class="fa fa-angle-right"></i></button>',
  });

$('.banner-img-wrap').slick({
  autoplay:true,
  fade:false,
  dots:false,
  arrows:true,
  slidesToShow: 1,
  autoplaySpeed: 6000,
  infinite: true,
  speed: 500,
  cssEase: 'linear',
  prevArrow:'<button type="button" class="prev"><i class="fa fa-angle-left"></i></button>',
  nextArrow:'<button type="button" class="next"><i class="fa fa-angle-right"></i></button>',
  });

  $('.banner-layout3').slick({
  dots: true,
  infinite: false,
  autoplay:true,
  speed: 300,
  arrows:false,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  
});

});

 //Show or hide the button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.scrollup').fadeIn(1000);
        } else {
            $('.scrollup').fadeOut(1000);
        }
    });

})(jQuery);

