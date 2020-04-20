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
 


// Mobile Menu
$('.hamburger').click(function(e) {
  e.preventDefault();
  $('body').toggleClass('nav-open');
  $(this).toggleClass('active');
  $('.main_navigation').slideToggle('medium');
});
$('.main_navigation .menu-item-has-children > a').each(function() {
  $(this).after('<span class=\'sub-toggle\'><button> <i class=\'fa fa-angle-down\'></i></button></span>');

}); 
$(document).on('click', '.sub-toggle', function(){
  $(this).toggleClass('open').next('.sub-menu').slideToggle();
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
  

 $('.full-sec-less').slick({
  autoplay:true,
  fade:true,
  dots:false,
  arrows:true,
  slidesToShow: 1,
  autoplaySpeed: 6000,
  infinite: true,
  rtl:false,
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
  rtl:false,
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
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
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
 //Show or hide the button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.scrollup').fadeIn(1000);
        } else {
            $('.scrollup').fadeOut(1000);
        }
    });

});

// search btn

      jQuery( '.btn-search' ).on( 'click', function(event) {

        event.preventDefault();

        showSearchForm();
    } );



function closeSearchForm() {

    var searchForm = $( '#header-search' );

    searchForm.removeClass('show').addClass('hide');
    $( ".search-icon" ).find('.btn-search').focus();
}

function showSearchForm() {
    
    var searchForm = $( '#header-search' );

    searchForm.toggleClass('show').find('.search-field').focus();
}

  jQuery( '.search-form-close-btn' ).on( 'click', function(event) {

      event.preventDefault();

      closeSearchForm();
  } );


})(jQuery);

