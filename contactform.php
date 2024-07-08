<?php

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];
	
	$mailto = "singhprab029@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have recieved a mail from ".$name.".\n\n".$message;
	
	mail($mailto, $subject, $txt, $headers);
	header("Locion:: http://127.0.0.1:60228/preview/app/index.html");
}