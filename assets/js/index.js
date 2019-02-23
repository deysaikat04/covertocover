$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
 		$("#forgot-pass").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
		$("#forgot-pass").fadeOut(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active'); 
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#forgot-pass-link').click(function(e) {
		$("#forgot-pass").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$('#register-form-link').removeClass('active');
		e.preventDefault();
	});
	
	$('#link-signin').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
 		$("#forgot-pass").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	
	$('#panel-tabs div.login-tab').on('click', function(){    
		$('#panel-tabs div.register-tab').removeClass('switch-tab');
    	$(this).addClass('switch-tab');
	});

	$('#panel-tabs div.register-tab').on('click', function(){    
		$('#panel-tabs div.login-tab').removeClass('switch-tab');
    	$(this).addClass('switch-tab');
	});

});

function validate()
{
	var c = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var n = /^[0]?[789]\d{9}$/;

	var m = document.getElementById("mail").value;
	var mob = document.getElementById("mob").value;

	if(!m.match(c)){
		document.getElementById("mailErr").innerHTML = "Please give a valid mail.";
		return false;
	}
	else{
		document.getElementById("mailErr").innerHTML = "";		
	}
	if(!mob.match(n)){
		document.getElementById("mobErr").innerHTML = "Please give a valid mobile number.";
		return false;
	}
	else{
		document.getElementById("mobErr").innerHTML = "";
	}
	return true;
}

