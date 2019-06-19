<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$how = $_POST['how']

	$mailto = "tech@cbs-group.co.ke";
	$headers = "From: ".$email;
	$txt = "You have received an email from ".$name.".\n\n".$message."Who heard about you through ".$how;

	mail($mailto, $subject, $txt, $headers);
	header("Location:mainsite/contact.html?mailsend");
}
 