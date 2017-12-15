<?php 

	$admin = false;
	include("server.php"); 

	if($admin) include("admin.php");
	else include("login.php");



?>
