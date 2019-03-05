<?php
	$host="localhost"; 		// Host name 
	$username="root"; 		// Mysql username 
	$password=""; 			// Mysql password 
	$db_name="dbgroup3"; 		// Database name 
	

	// Connect to server and select databse.
	$connection = mysqli_connect($host, $username, $password, $db_name);
	if (mysqli_connect_errno()) //returns 0 if no error occurs
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
?>