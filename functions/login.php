<?php
	include '../inc/config.php';
	session_start();

	$email		=$_POST['email'];
	$password	=$_POST['password'];
	
	$admin_check = false;
		
	//$check=mysqli_query($mysqli,"select * from user where email='$email' and password='$password'");
	$select_user = $mysqli->query("select * from user where email='$email' and password='$password'");
	
	if (mysqli_num_rows($select_user) > 0)
	{
		
		while($row = $select_user->fetch_assoc()) {
			
			$_SESSION['userid']=$row['UserID'];
			$_SESSION['email']=$row['Email'];
			$_SESSION['name']=$row['Name'];
			$_SESSION['admin']=$row['IsAdmin'];
			if($row['IsAdmin'] == 1)
				$admin_check = true;
			else
				$admin_check = false;
		}
		echo json_encode(array("statusCode"=>'success', "adminCheck"=>$admin_check));
	}
	else{
		echo json_encode(array("statusCode"=>'fail'));
	}
	mysqli_close($mysqli);
	
?>