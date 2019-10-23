<?php
			// Connection info. file
			include 'util/conn.php';	
			session_start();
			// Connection variables
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			// data sent from form login.html 
			$email = $_POST['user']; 
			$password = $_POST['password'];
			
			// Query sent to database
			$result = mysqli_query($conn, "SELECT usuario, contrasenia FROM usuarios WHERE usuario = '$email'");
      echo $email;
      echo $password;
			// Variable $row hold the result of the query
			$row = mysqli_fetch_assoc($result);
			
			// Variable $hash hold the password hash on database
			$hash = $row['contrasenia'];
			if (password_verify($_POST['password'], $hash)) {	
				
				$_SESSION['loggedin'] = true;
				$_SESSION['name'] = $row['usuario'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;						
				header('Location: index.php');
			
			} else {
				echo "<div class='alert alert-danger mt-4' role='alert'>Email or Password are incorrects!
				<p><a href='login.html'><strong>Please try again!</strong></a></p></div>";			
			}	




?>