<?php
	include('dbconnect.php');

	#Declare variables
	$username = $_POST['user_name']; 
	$user_pw = $_POST['user_pw'];
	$user_nickname = $_POST['user_nick'];

	$query = mysql_query("INSERT INTO users_table(username, user_pass, nickname) VALUES('$username', '$user_pw', '$user_nickname');"); #Query to insert the values into the database.

	header("Location:../index.php"); #send the view back to insert page.
	?>
