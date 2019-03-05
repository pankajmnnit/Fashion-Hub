
<html >
	<head>
		
		
		<title>Login</title>

	</head>


	<body>
		

		<?php
			session_start();
			if(!isset($_SESSION['username'])) {
		header("location:index.html");
		}
		?>
		</br> </br>
		<?php
								
								
			$servername="172.31.100.41";
			$username="group3";
			$password="group3";
			$database="dbgroup3";
			$con=mysqli_connect($servername,$username,$password,$database);
			if(!$con)
			{
				die("Connection Failed:".mysqli_connect_error());
			}
								 
			$con->close();
			session_unset(); 

			// destroy the session 
			session_destroy(); 
			header("refresh:1; url=index.html");
		?>
								
			</br> </br>
		Please Wait !<br>

		</br> </br>
	


			
		
	</body>

</html>
