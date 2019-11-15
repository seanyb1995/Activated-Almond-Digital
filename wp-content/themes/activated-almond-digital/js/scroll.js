//------------------------------------------------------scroll animations--//
jQuery(document).ready(function($) {
  
if ($(window).width() > 1200) {
  var lastScrollTop = 0;
  $(window).scroll(function(event){
     var st = $(this).scrollTop();
     if (st > lastScrollTop){
         // downscroll code
         $('header').removeClass('slide-in');
         $('header').addClass('slide-out');
         $('header').css("background","white");
     } else {
        // upscroll code
        $('header').removeClass('slide-out');
        $('header').addClass('slide-in');
     }
     if (st == 0){
        $('header').css("background","none");
     }
     lastScrollTop = st;
  });
}
 
});

