<?php 

	include "setting.php";	
	include "database.php";

	$user_email = $_POST['email'];
	$user_password = md5($_POST['password']);

	$database = new Database();
 ?>