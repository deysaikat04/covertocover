$(document).ready(function(){
	$("#submit").click(function(){
		var bookid = $("#bookid").val();
		var cid = $("#cid").val();
		var BASE_URL = $("#baseurl").val();
		
		// Returns successful data submission message when the entered information is stored in database.
		var dataString = 'bookid='+ bookid + '&cid='+ cid ;
		
		if(bookid==''||cid=='')
		{
			alert("Please Log in to purchase items!");
		}
		else
		{		
			var link = BASE_URL+'View/addToCart';
		
			// AJAX Code To Submit Form.
			$.ajax({
				type: "POST",
				url: link,
				data: dataString,
				cache: false,
				success: function(result){
					$('.tocart').prop('disabled', true);
					var count = $('.product_qun').text();
					var count = parseInt($('.product_qun').text());
					count += 1;
					$('.product_qun').html(count);
					alert(result);					
				}	
			});
		}
		return false;
	}); 
	
/*	$("#remove").click(function(){
		var bookid = $("#bookid").val();
		var BASE_URL = $("#baseurl").val();
		var cid = $("#cid").val();
		var dataString = 'bookid='+ bookid + '&cid='+ cid ;
		
		console.log(dataString);
		if(bookid==''||cid=='')
		{
			alert("Please Fill All Fields");
		}
		else
		{		
			var link = BASE_URL+'View/RemoveCart';
		
			// AJAX Code To Submit Form.
			$.ajax({
				type: "POST",
				url: link,
				data: dataString,
				cache: false,
				success: function(result){
					alert(result);					
				}	
			});
		}
		return false;
	});*/
});