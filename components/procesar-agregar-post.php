<?php

	
	require "database.php" ;

	if ( empty($_SESSION['usern'])){
		header('Location: ../login.php');
	}

	$autor = $_SESSION['usern'];
	$titulo = $_POST["title-post"];
	$categoria = $_POST["categoria"];
	$imagen = $_POST["imagen-post"];
	$contenido = $_POST["contenido"];
	$autorDescription = $_POST["autor-description"];
	$autorFb = $_POST["autor-fb"];
	$titleSlug = $_POST["title-post-slug"];


	$comprobar = mysqli_query($conn,"SELECT * FROM users WHERE user = '$autor'");
	$registro = mysqli_fetch_array($comprobar);


	// Tiene permisos, se publica automáticamente 

	if ($registro['permisos'] > 1) {
		

		$consulta = "INSERT INTO posts (id_post, autor_post, fecha_post, categoria_post, titulo_post, title_slug, imagen_post, descripcion_post, contenido_post, autor_description, autor_fb) VALUES ('', '$autor', NOW(), '$categoria','$titulo', '$titleSlug', '$imagen', 'No description today', '$contenido', '$autorDescription', '$autorFb')";

		$sentencia = $conn->prepare($consulta);
		$sentencia->execute();

		if (!isset($consulta)) {
		
			echo "<script> alert('Error al insertar datos'); </script>".mysqli_error($conn);
			exit();

		}else{

			header('Location: ../index.php');
			echo "<script> alert('Post publicado!'); </script>";

		}

	}else{


		$consulta = "INSERT INTO revisar_posts (id_post, autor_post, fecha_post, categoria_post, titulo_post, title_slug, imagen_post, descripcion_post, contenido_post, autor_description, autor_fb) VALUES ('', '$autor', NOW(), '$categoria','$titulo','$titleSlug', '$imagen', 'No description today', '$contenido', '$autorDescription', '$autorFb')";

		$sentencia = $conn->prepare($consulta);
		$sentencia->execute();

		if (!isset($consulta)) {
		
			echo "<script> alert('Error al insertar datos'); </script>".mysqli_error($conn);
			exit();

		}else{

			echo "<script> alert('Tu post se envió a revisión carnal!'); </script>";

			header('Location: ../index.php');
		}
	}
