<?php
include 'inc/config.php';
	session_start();
	
if(!$_POST) exit;

// Email address verification, do not edit.

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$first_name     = trim($_POST['first_name']);
$last_name     = trim($_POST['last_name']);
$email    = trim($_POST['email']);
$phone   = trim($_POST['phone']);
$comments = trim($_POST['comments']);



 /*
 comment by hammad


// Configuration option.
// Enter the email address that you want to emails to be sent to.
// Example $address = "joe.doe@yourdomain.com";

//$address = "example@themeforest.net";
$address = "example@yourdomain.com";


// Configuration option.
// i.e. The standard subject will appear as, "You've been contacted by John Doe."

// Example, $e_subject = '$name . ' has contacted you via Your Website.';

$e_subject = 'You\'ve been contacted by ' . $first_name . '.';


// Configuration option.
// You can change this if you feel that you need to.
// Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.

$e_body = "You have been contacted by $first_name. $first_name,their additional message is as follows."
$e_content = "\"$comments\"" . PHP_EOL . PHP_EOL;
$e_reply = "You can contact $first_name via email, $email or via phone $phone";

$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

$headers = "From: $email" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

if(mail($address, $e_subject, $msg, $headers)) {

	// Email has sent successfully, echo a success page.

	echo "<fieldset>";
	echo "<div id='success_page'>";
	echo "<h1>Email Sent Successfully.</h1>";
	echo "<p>Thank you <strong>$first_name</strong>, your message has been submitted to us.</p>";
	echo "</div>";
	echo "</fieldset>";

} else {

	echo 'ERROR!';

}


Comment ended by hammad

*/


$sql = "INSERT INTO `contact`( `FirstName`, `LastName`, `Email`,`Phone`,`Comment`) 
	VALUES ('$first_name','$last_name','$email', '$phone', '$comments')";
	if (mysqli_query($mysqli, $sql)) {
		header("Location: contactus.php?message=success");
	} 
	else {
		header("Location: contactus.php?message=fail");
	}

	mysqli_close($mysqli);
	
	
	//header("Location: contactus.php?message=success");
?>
	
	
	
	