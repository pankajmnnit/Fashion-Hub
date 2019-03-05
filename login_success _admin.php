
<html >
	<head>
		
		
	<title>Login</title>
		

	</head>


	<body>
		

	<?php
		// Check if session is not registered, redirect back to main page. 
		session_start();
		if(!isset($_SESSION['username'])) {
		header("location:adminLogin.html");
		}
	?>

	

								
	<center>							
	Welcome <?php 
								
				$servername="172.31.100.41";
				$username="group3";
				$password="group3";
				$database="dbgroup3";
				$var = $_SESSION['username'];
				$con=mysqli_connect($servername,$username,$password,$database);
				$sql1 = "SELECT name FROM user where user.username='$var'";
				$result = $con->query($sql1);
								
								
				if ($result->num_rows > 0) 
				{
									
					
					echo "Welcome!";

				}
				
				
				
				
				
				
				$con->close();
									
								
								
								
								
			?>
	<div>
	<p ><a href="logout.php"><br><br><input type="button" value="LOGOUT"></a></p></div>
	</center>
			
		
	</body>

</html>
