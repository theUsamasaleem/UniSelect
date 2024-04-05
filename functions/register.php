<?php
	include '../inc/config.php';
	session_start();

	$name		=$_POST['name'];
	$email		=$_POST['email'];
	$password	=$_POST['password'];
	$phone		=$_POST['mobile'];
	
	$duplicate=mysqli_query($mysqli,"select * from user where email='$email'");
	if (mysqli_num_rows($duplicate) > 0)
	{
		echo json_encode(array("statusCode"=>'exist'));
	}
	else{
		$sql = "INSERT INTO `user`( `name`, `email`, `password`, `mobile`, `IsAdmin`) 
		VALUES ('$name','$email', '$password', '$phone', '0')";
		if (mysqli_query($mysqli, $sql)) {
			echo json_encode(array("statusCode"=>'success'));
		} 
		else {
			echo json_encode(array("statusCode"=>'exist'));
		}
	}

	mysqli_close($mysqli);
	
?>