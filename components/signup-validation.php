<?php

   require './database.php';



  if (isset($_POST['btnSignup'])) {

  // We need to check if the account with that username exists.
  if ($stmt = $conn->prepare('SELECT iduser, password FROM users WHERE user = ?')) {
    // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
    $stmt->bind_param('s', $_POST['userSignup']);
    $stmt->execute();
    $stmt->store_result();
    // Store the result so we can check if the account exists in the database.
    if ($stmt->num_rows > 0) {
      // Username already exists
      echo '<script>alert("Ya existe ese usuario");</script>';
      echo "<script>  location.href = 'http://localhost/impasse21/login.php'; </script>";  

    } else {

      // Username doesnt exists, insert new account

      if ($stmt = $conn->prepare('INSERT INTO users (user, username, password, permisos) VALUES (?, ?, ?, ?)')) {
        
        // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.

        $password = password_hash($_POST['passSignup'], PASSWORD_DEFAULT);
        $permisos = '1';

        $stmt->bind_param('ssss', $_POST['userSignup'], $_POST['nameSignup'] , $password, $permisos);
        $stmt->execute();

         echo "<script>  location.href = 'http://localhost/impasse21/login.php'; </script>";  
      
      } else {
        // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
        echo 'Could not prepare statement!';

        echo "";
      }
    }
    
    $stmt->close();

  } else {
    // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
    echo 'Could not prepare statement!';
  }

  $conn->close();
}

?>
