<?php 
	
	require 'database.php';
		  // Now we check if the data from the login form was submitted, isset() will check if the data exists.
		if ( !empty($_POST['userLogin']) && !empty($_POST['passLogin']) ) {

		  	// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
		  	if ($stmt = $conn->prepare('SELECT iduser, password, permisos FROM users WHERE user = ?')) {
		    
		    	$user = $_POST['userLogin'];

		    	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
		    	$stmt->bind_param('s', $user);
		    
		    	$stmt->execute();
		    
		    	// Store the result so we can check if the account exists in the database.
		    	$stmt->store_result();

		   		if ($stmt->num_rows > 0) {
		    
		     		$stmt->bind_result($id, $password, $permisos);
		     		$stmt->fetch();
		      
		      		// Account exists, now we verify the password.
		      		// Note: remember to use password_hash in your registration file to store the hashed passwords.

		      		if (password_verify($_POST['passLogin'], $password)) {
		      		// Verification success! User has loggedin!
		      		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		       			session_regenerate_id();
		       			$_SESSION['loggedin'] = TRUE;
		       			$_SESSION['usern'] = $user;
		       			$_SESSION['id'] = $id;
		       			$_SESSION['permisos'] = $permisos;
		        
		        		
        				echo "<script>  location.href = 'http://localhost/impasse21/'; </script>";  

		      		} else {

						
        				echo '<script> alert("Contraseña incorrecta!");</script>';
        				echo "<script>  location.href = 'http://localhost/impasse21/login.php'; </script>";
		      		}
		   
		   		} else {
		        		
        				echo '<script> alert("Usuario no registrado!"); </script>';
        				echo "<script>  location.href = 'http://localhost/impasse21/login.php'; </script>";
		    	}

		    	$stmt->close();
		    }
		}
?>