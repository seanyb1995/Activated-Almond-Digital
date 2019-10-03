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
  
});