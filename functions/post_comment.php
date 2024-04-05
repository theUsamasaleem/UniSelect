<?php
	include '../inc/config.php';
	session_start();

	
	echo $comment = $_POST['comment'];
	echo $page = $_POST['status'];
	echo $userID	= $_SESSION['userid'];
	

	$sql = "INSERT INTO `comments`( `UserID`, `Comment`,`Page`) 
	VALUES ('$userID','$comment', '$page')";
	if (mysqli_query($mysqli, $sql)) {
		echo json_encode(array("statusCode"=>'success'));
	} 
	else {
		echo json_encode(array("statusCode"=>'exist'));
	}

	mysqli_close($mysqli);

	
?>
