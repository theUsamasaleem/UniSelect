<?php
	include '../inc/config.php';
	session_start();

	
	echo $comment = $_POST['comment'];
	echo $university = $_POST['university'];
	echo $userID	= $_SESSION['userid'];
	echo $rating	= $_POST['rating'];
	

	$sql = "INSERT INTO `review`( `UserID`, `Rating`, `Comment`,`University`) 
	VALUES ('$userID','$rating','$comment', '$university')";
	if (mysqli_query($mysqli, $sql)) {
		echo json_encode(array("statusCode"=>'success'));
	} 
	else {
		echo json_encode(array("statusCode"=>'exist'));
	}

	mysqli_close($mysqli);

	
?>
