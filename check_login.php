<?php
	session_start();
?>
<html >
	<head>
		<title>Login</title>
	</head>
	<body>		
	<?php
		$host="172.31.100.41"; 		// Host name 
		$username="group3"; 		// Mysql username 
		$password="group3"; 			// Mysql password 
		$db_name="dbgroup3"; 		// Database name 
		$tbl_name="user"; 	// Table name 

		// Connect to server and select databse.
		$connection = mysqli_connect($host, $username, $password, $db_name);
		if (mysqli_connect_errno()) //returns 0 if no error occurs
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}


		// username and password sent from form 
		$myusername=$_POST['username']; 
		$mypassword=md5($_POST['pass']); 

								
		$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";

		$result=mysqli_query($connection, $sql); //performs query against a db

		// Mysql_num_row is counting table row
		$count=mysqli_num_rows($result);

		// If result matched $myusername and $mypassword, table row must be 1 row
		if($count==1){
			// Register $myusername, $mypassword and redirect to file "login_success.php"
			$_SESSION["username"]= $myusername; 
			$_SESSION["password"]= $mypassword;
			header("location:welcome_page.php");
										
			/*$con=mysqli_connect($host,$username,$password,$db_name);
			if(!$con)
			{
				die("Connection Failed:".mysqli_connect_error());
			}
			
			
			if ($con->query($sql1) == TRUE) 
			{
			}*/
			$connection->close();
									
									
									
		}
		else 
		{
			echo "</br></br>";
			echo "Wrong Username or Password.";		

		}
								
								
								
								
								
						
								
	?><br><br>
	<a href="1.html">Back to login</a>
			
		
	</body>

</html>
