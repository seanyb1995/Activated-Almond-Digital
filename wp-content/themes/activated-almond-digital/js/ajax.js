//-------------------------------------------------------------ajax requests--//
jQuery(document).ready(function($) {
//----------------------------------------------------------------blog posts--//    
// 	$('#category').change(function(){
// 		var filter = $('#filter');
// 		$.ajax({
// 			url:filter.attr('action'),
// 			data:filter.serialize(), // form data
// 			type:filter.attr('method'), // POST
// 			success:function(data){
// 				$('#posts').html(data); // insert data
// 			}
// 		});
// 		return false;
// 	});
	
  if (top.location.pathname === '/blog/'){
      /* magic ... */
    var filter = $('#filter');
      $.ajax({
        url:filter.attr('action'),
        data:filter.serialize(), // form data
        type:filter.attr('method'), // POST
        success:function(data){
          $('#posts').html(data); // insert data
        }
    });
  }
  
//----------------------------------------------------------------blog posts--// 
  
  $("#form > label:nth-child(2)").addClass("selected");
  
  $("label").click(function(){
    $(this).addClass("selected");
    $("label").not(this).removeClass();
  });
  
  
  
  $('input[type="checkbox"]').click(function(){
    $('input[type="checkbox"]').not(this).prop("checked", false);
	});
  
  	$('input[type="checkbox"]').change(function(){
		var filter = $('#form');
    console.log(filter);
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			success:function(data){
				$('#posts').html(data); // insert data
			}
		});
		return false;
	});
  
  if (top.location.pathname === '/case-studies/'){
      /* magic ... */
    var filter = $('#form');
      $.ajax({
        url:filter.attr('action'),
        data:filter.serialize(), // form data
        type:filter.attr('method'), // POST
        success:function(data){
          $('#posts').html(data); // insert data
        }
    });
  }
  
});