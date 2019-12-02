// DOM
jQuery(document).ready(function($) {
  
  if (top.location.pathname === '/case-studies/'){
  
    if (jQuery(window).width() <= 768) {  

      // case studies page
      jQuery('.image-r').insertBefore('.text-l');
      jQuery('#main > section.case-studies > div.studies > div.right > div.text-l.in-view > h3').toggleClass('tablet');
      jQuery('#main > section.case-studies > div.studies > div.left > div.text-r.in-view > h3').toggleClass('tablet');

    }
    
  }  
  
  if (top.location.pathname === '/social-media-marketing/'){
  
    if (jQuery(window).width() <= 1024) {  
      
      // social media marketing page
      $('.case-studies > div > .image').each(function() {
        $(this).siblings('.case-studies > div > .text').before(this);
      });

    }
    
  }  
  
  if (top.location.pathname === '/facebook-advertising/'){
  
    if (jQuery(window).width() <= 1024) {  
      
      // social media marketing page
      $('.case-studies > div > .image').each(function() {
        $(this).siblings('.case-studies > div > .text').before(this);
      });

    }
    
  } 
  
  if (top.location.pathname === '/content-marketing/'){
  
    if (jQuery(window).width() <= 1024) {  
      
      // social media marketing page
      $('.case-studies > div > .image').each(function() {
        $(this).siblings('.case-studies > div > .text').before(this);
      });

    }
    
  } 
  
  if (jQuery(window).width() < 1200) {
      $('.case-banner > .wrap > .image').each(function() {
        $(this).siblings('.case-banner > .wrap > .text').before(this);
      });
  }
  
});
