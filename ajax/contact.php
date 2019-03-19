<?php
// let's start the session
session_start();
// get the data from the form
$captcha = isset($_POST['captcha']) ? $_POST['captcha'] : '';
$img_session = isset($_SESSION['img_session']) ? $_SESSION['img_session'] : '';

// check if the fields are empty

	if(md5($captcha) == $img_session){
		$output = "Form Success";

	}

	else{
		$output = "Wrong captcha code!";
	}
echo $output;
?>