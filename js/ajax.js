$(document).ready(function() {
	$('button.login_btn').on('click', function(e) {
		e.preventDefault();
		var email 		= $('#login #email').val();
		var password 	= $('#login #exampleInputPassword1').val()
		
		if(email!="" && password!="" ){
			$.ajax({
				url: "./functions/login.php",
				type: "POST",
				data: {
					email: email,
					password: password						
				},
				beforeSend: function() {
					$('div#preloader').css("display", "block");
				},
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);

					if(dataResult.statusCode=='success'){
						if(dataResult.adminCheck == true) {
							location.href = "index.php";
						} else {
							location.href = "index.php";
						}
					
					} else if(dataResult.statusCode=='fail'){
						swal(
							'Error!',
							'Invalid EmailId or Password!',
							'error'
						)
					}
				},
				complete: function (data) {
		      		$('div#preloader').css("display", "none");
		     	}
			});
		} else {
			swal(
				'Warning!',
				'All fields are required.',
				'warning'
			)
		}
	});

	$('button.reg_btn').on('click', function(e) {
		e.preventDefault();
		var name 		= $('#Registration #name').val();
		var regemail 	= $('#Registration #email').val();
		var mobile 		= $('#Registration #mobile').val();
		var regpassword = $('#Registration #password').val();

		if(name!="" && regemail!="" && regpassword!="" && mobile!=""){
			$.ajax({
				url: "./functions/register.php",
				type: "POST",
				data: {
					name: name,
					email: regemail,
					password: regpassword,					
					mobile: mobile,				
				},
				beforeSend: function() {
					$('div#preloader').css("display", "block");
				},
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);

					if(dataResult.statusCode=='success'){
						location.href = "index.php";
						swal(
							'Success',
							'Registration was successful now please login.',
							'success'
						)
					} else if(dataResult.statusCode=='exist'){
						swal(
							'Error!',
							'User with this email already exist!',
							'error'
						)
					}
				},
				complete: function (data) {
		      		$('div#preloader').css("display", "none");
		     	}
			});
		} else {
			swal(
				'Warning!',
				'All fields are required.',
				'warning'
			)
		}
	});
});