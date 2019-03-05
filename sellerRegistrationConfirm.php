
<html >
	<head>
		
		
		<title>Login</title>
		

	</head>


	<body>
		
								
							


		<?php
				
				session_start();
				if(!isset($_SESSION['username'])) 
				{
					header("location:adminLogin.html");
				}
				
				
				require 'connection.php';
			
				$pass = $_POST['password'];
				$name = $_POST['name'];
				$cont = $_POST['contact'];
				$email = $_POST['email'];
				$address = $_POST['address'];
								
				$conn = $connection;
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
					}

				$sql = "INSERT INTO seller (sellername,password,mobile,email,address)
				VALUES ('$name', '$pass', '$cont','$email', '$address')";
				
				
				session_destroy();
				
				if (mysqli_query($conn, $sql)) {
					echo "The seller has been registered successfully<br>Redirecting to login page.<br>";
					header("refresh:1; url=adminLogin.html");
					} 
				else {
					echo "This sellername already exists. Try changing the values";
					header("refresh:1,url=sellerRegistration.php");
					}
									
				mysqli_close($conn)
				
		?>
								

		
	</body>

</html>
