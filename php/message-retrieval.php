<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

    $email_from = $email;

	$email_subject = "Portfolio Site Message From: $name";

	$email_body = $message;

     mail("sergiomiguelpacheco64@gmail.com", $email_subject, $email_message);
?>