 

/*============================= Back To Top Button Script ========================*/
var mybutton = document.getElementById("backTop");
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
    mybutton.style.display = "flex";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


(function ($) {
  // $('body').css('padding-top', $('.navbar').outerHeight() + 'px')
  // // detect scroll top or down
  // if ($('.smart-scroll').length > 0) { // check if element exists
  //   var last_scroll_top = 0;
  //   $(window).on('scroll', function() {
  //       scroll_top = $(this).scrollTop();
  //       // console.log(scroll_top);
  //       if (scroll_top < last_scroll_top) {
  //           $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
  //       } else {
  //           $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
  //       }
  //       if (scroll_top === 0) {
  //         $('.smart-scroll').removeClass('scrolled-down').removeClass('scrolled-up');
  //       }
  //       last_scroll_top = scroll_top;
  //   });
  // }

  nodeMarquee({
    parent: '.marquee__wrapper',
    speed: 2
  });


  
   
   
 
 
})(jQuery);
 

 