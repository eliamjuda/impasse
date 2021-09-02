<?php
	require 'database.php';
	session_destroy();

	echo "<script> 
	location.href = 'http://localhost/impasse21/';
	</script>";
?>