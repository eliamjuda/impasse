<?php

	require './database.php';

	if(empty($_SESSION['usern'])){
		
		header('Location: ../index.php');
	}


	$id = $_GET["id"];

		$consulta = "DELETE FROM posts WHERE id_post = '$id'";
		$sentencia = $conn->prepare($consulta);
		$sentencia->execute();

	if (!isset($consulta)) {
		
		echo "<script> alert('Error al insertar datos'); </script>".mysqli_error($conn);
		exit();

	}else{
		
		echo "<script> alert('Post eliminado!'); </script>";
		header('Location: ../index.php');

	}

?>
