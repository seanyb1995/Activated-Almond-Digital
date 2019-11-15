jQuery(document).ready(function($) {
//--------------------------------------------------waypoints animations--//
  function scrollToAnchor(aid){
  var aTag = $("[name='"+ aid +"']");
  $('html, body').animate({scrollTop: aTag.offset().top},'slow');
  }

  $("#mouse").click(function() {
     scrollToAnchor('scroll');
  });
  
  
});