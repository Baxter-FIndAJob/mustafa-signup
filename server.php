<?php
	$name = "";
	$email = "";
	$errors = array();
	// connect to database
	$db = new mysqli("localhost", "root", "","test");

	// if the register button is clicker
	if (isset($_POST["test"])){
		$name = mysql_real_escape_string($_POST["name_input"]);
		$email = mysql_real_escape_string($_POST["email_input"]);
		$password_1 = mysql_real_escape_string($_POST["password1_input"]);
		$password_2 = mysql_real_escape_string($_POST["password2_input"]);

	if (empty($name)){
		array_push($errors, "Your Name is required");
	}
	if (empty($email)){
		array_push($errors, "Your Email is required");
	}
	if (empty($password_1)){
		array_push($errors, "Password is required");
	}
	if ($password_1 != $password_2){
		array_push($errors, "Password verification is invalid");
	}
	}
?>