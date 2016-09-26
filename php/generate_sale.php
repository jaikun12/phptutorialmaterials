<?php
	include('dbconnect.php');

	#Declare variables
	$customer_name = $_POST['customer_name']; 
	$sale_amt = $_POST['sale_amt'];

	$query = mysql_query("INSERT INTO sales_table(customer, amount) VALUES('$customer_name', '$sale_amt');"); #Query to insert the values into the database.

	header("Location:../insert.php"); #send the view back to insert page.
	?>
