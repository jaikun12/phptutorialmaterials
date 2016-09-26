<?php
	$server = "localhost"; #Name of the host.
	$user="root"; #username for localhost
	$pass=""; #password for localhost
	$db = "tutorial_db"; #your target database

	$dbconn = mysql_connect($server,$user,$pass); #line for connection

	$select_db = mysql_query("USE $db;"); #selection of database

	if (!$dbconn){#If and else statement determining if connection was successful or not
		echo "No connection.";
	}
	else{
	}

?>