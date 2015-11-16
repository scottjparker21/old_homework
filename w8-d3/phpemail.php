<?php

	$firstName = $_POST['first'];
	$lastName = $_POST['last'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$phpformsite = 'From: Your super duper php form.';
	$subject = 'this is a subject';

	// takes in form inputs and makes them variables.

	$mailTo = "scottjparker21@gmail.com";
	// Where the email will be sent.

	$userEmail = "From: $first\n E-Mail: $email\n Message:\n $message";

	function died($errors){
		echo "The following errors were found.<br>";
		echo "Please go back and fix these errors.<br>";
		echo $errors;

		die();
	}
	// If any fields were filled out inproperly this this function (above) will work 
	// as a kill switch and return the errors that need to be fixed

		$errorMessage = "";

		// empty string where all the error messages will be concated.

		if ($firstName == "") {
			$errorMessage .= "Please fill out \" First: \" field.<br>";
		}
		if ($lastName == "") {
			$errorMessage .= "Please fill out \" Last: \" field.<br>";
		}
		if ($email == "") {
			$errorMessage .= "Please fill out \" Email: \" field.<br>";
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			$errorMessage .= "Invalid email format"; 
			}
		if ($message == "") {
			$errorMessage .= "Please write a message.<br>";
		}
		if (strlen($errorMessage) > 0){
			died($errorMessage);
		}
		else {
			mail($mailTo, $subject, $message, $phpformsite);
			echo "Youre message has been sent.<br>";
			echo "Thankyou for contacting up<br>";
		}

?>

