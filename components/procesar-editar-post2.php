<?php

	
	
	require_once("database.php");

	if(empty($_SESSION['usern'])){
	header('Location: ../login.php');
	}

	$autor = $_SESSION['usern'];

	$id = $_GET["id"];

	$categoria = $_POST["categoria"];
	$titulo = $_POST["title-post"];
	$tituloSlug = $_POST["title-post-slug"];
	$imagen = $_POST["imagen-post"];
	$contenido = $_POST["contenido"];
	$autorDes = $_POST["autor-description"];
	$autorFb = $_POST["autor-fb"];


	$stmt = "UPDATE revisar_posts SET categoria_post = '$categoria', titulo_post = '$titulo', title_slug = '$tituloSlug', imagen_post = '$imagen', contenido_post = '$contenido', autor_description = '$autorDes', autor_fb = '$autorFb' WHERE id_post = '$id'";

	$sentencia = mysqli_query($conn, $stmt);

	if (!isset($stmt)) {
		echo "<script> alert('Error al insertar datos'); </script>".mysqli_error($conn);
		exit();

	}else{

		header('Location: ../login.php');
		echo "<script> alert('Post editado!'); </script>";

	}

?>
