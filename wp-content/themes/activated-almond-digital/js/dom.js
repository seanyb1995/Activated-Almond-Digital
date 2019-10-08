// DOM
jQuery(document).ready(function($) {
  
  if (jQuery(window).width() <= 768) {  

    // case studies page
    jQuery('.image-r').insertBefore('.text-l');
    jQuery('#main > section.case-studies > div.studies > div.right > div.text-l.in-view > h3').toggleClass('tablet');
    jQuery('#main > section.case-studies > div.studies > div.left > div.text-r.in-view > h3').toggleClass('tablet');
    
    // social media marketing page
    jQuery('figure.wp-block-image:nth-child(4)').insertBefore('.features > span:nth-child(3)');
    jQuery('figure.wp-block-image:nth-child(8)').insertBefore('.features > span:nth-child(7)');
  }   
  
  $('#main > section.single-case > div.case-banner > div.text.in-view > ul:nth-child(6) > li').wrapInner('<p></p>');
  
  $('#main > section.single-case > div.case-banner > div.text.in-view > ul:nth-child(6) > li').append('<div class="stat"><span></span></div>');
  
  $(".single-case .text li").each(function(i){
    $(this).find('div > span').append(i+1);
  });
  
  $('.single-case .text ul > li > p').each(function() {
    $(this).siblings('.single-case .text ul > li > div').after(this);
  });
  
});