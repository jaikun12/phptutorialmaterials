<?php
	#Call to connect to database
	include('dbconnect.php');
	

	#Declare variables and insert values from the login page.
	$username = $_POST['user_name'];
	$userpw = $_POST['user_pw'];
	
	$query = mysql_query("SELECT * FROM users_table WHERE username = '$username' && user_pass = '$userpw';");
	$count = mysql_num_rows($query);
	if(!$count){
		header("Location:../index.php");
	}
	else{
		session_start();
		$_SESSION['username'] = $username;
		header('Location:../sales.php');
	}
	
?>