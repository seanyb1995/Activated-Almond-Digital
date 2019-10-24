//------------------------------------------------------scroll animations--//
jQuery(document).ready(function($) {
  
var lastScrollTop = 0;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){
       // downscroll code
        $('header').fadeOut();
   } else {
      // upscroll code
        $('header').css("background","white");
        $('header').fadeIn();
   }
   if (st == 0){
    $('header').css("background","none");
   }
   lastScrollTop = st;
});
  
});

// var lastScrollTop = 0;
// $(window).scroll(function(event){
//    var st = $(this).scrollTop();
//    if (st > lastScrollTop){
//        // downscroll code
//         $('header').fadeOut();
//    } else {
//       // upscroll code
//         $('header').css("background","white");
//         $('header').fadeIn();
//    }
  
//    lastScrollTop = st;
// });