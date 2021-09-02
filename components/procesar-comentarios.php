<?php

	require './database.php';

	$usuario = '';

	if(empty($_SESSION['usern'])){
		$usuario = $_POST["user-name"];
	}else{

		$usuario = $_SESSION['usern'];
	}

	$id = $_GET["id"];

	$comentario = $_POST['user-comment'];
	
	if (empty($comentario)) {
		$comentario = "Bonito post 😎";
	}


	$consulta = "INSERT INTO comentarios_post (id_comentario, post_id, usuario_comentario, comentario, fecha_comentario) VALUES ('','$id','$usuario','$comentario', NOW())";


	$sentencia = $conn->prepare($consulta);
	$sentencia->execute();

	if (!isset($consulta)) {
		
		echo "<script> alert('Error al insertar el comentario'); </script>".mysqli_error($conn);
		exit();
	}else{
		header("Location: ../post/post.php?id=". $id ."");
		echo "<script> alert('comentario publicado!'); </script>";
	}

