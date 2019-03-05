<?php
	session_start();
	
	require 'connection.php';
?>
<html >
	<head>
		<title>Login</title>
	</head>
	<body>		
	<?php
		


		// username and password sent from form 
		$myusername=$_POST['username']; 
		$mypassword=$_POST['pass']; 

		$actualUsername = 'root';
		$actualPassword = 'toor';
		//$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";

		//$result=mysqli_query($connection, $sql); //performs query against a db

		// Mysql_num_row is counting table row
		//$count=mysqli_num_rows($result);
		
		
		
		// If result matched $myusername and $mypassword, table row must be 1 row
		if($actualPassword == $mypassword && $actualUsername==$myusername)
		{
			// Register $myusername, $mypassword and redirect to file "login_success.php"
			$_SESSION["username"]= $myusername; 
			$_SESSION["password"]= $mypassword;
			
			
			header("location:sellerRegistration.php");
			
										
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
	<a href="adminLogin.html">Back to login</a>
			
		
	</body>

</html>
