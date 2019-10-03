//-------------------------------------------------------------ajax requests--//
//-------------------------------------------------------------product list--//
jQuery(document).ready(function($) {
    
	$('#category').change(function(){
		var filter = $('#filter');
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
	
	var filter = $('#filter');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			success:function(data){
				$('#posts').html(data); // insert data
			}
	});
});