<?php

	// Función para convertir a día mes y año 

	$id = $_GET["id"];

	$consulta = mysqli_query($conn, "SELECT * FROM posts WHERE id_post = '$id'");

	while($registro = mysqli_fetch_array($consulta)){

		// Función para convertir a día mes y año 

			$miFecha = $registro["fecha_post"];
			$fechaReal = fechaCastellano($miFecha);

		// AUTOR DEL POST
			
			$autor = $registro['autor_post'];


		// -----------------  HEADER -----------------------

		echo '
			<div class="header-img">
		       <img id="headerImg" class="img" src="' .$registro["imagen_post"] .'">
		    </div>

			<div class="header-gradient"></div>

			<div class="header-text">
				<div class="text-container">
					<h3>'.$registro["titulo_post"] .'</h3>
				</div>
				<div class="author-container">
					<div class="author-container-image">
						<img src="https://pbs.twimg.com/profile_images/707977304245460992/0tWLcTBe_400x400.jpg">
					</div>
					<div class="author-container-text">
						<label class="author-container-name">' .$autor .'</label>
						<label class="separador">x</label>
						<label class="author-container-date">' .$fechaReal .'</label>
					</div>
				</div>
			</div>
		';
	}
?>