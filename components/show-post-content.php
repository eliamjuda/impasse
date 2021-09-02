<?php

	// Función para convertir a día mes y año 

	$id = $_GET["id"];

	$consulta = mysqli_query($conn, "SELECT * FROM posts WHERE id_post = '$id'");

	while($registro = mysqli_fetch_array($consulta)){


		// AUTOR DEL POST
			
			$autor = $registro['autor_post'];


		// -----------------  POST -----------------------

		echo '
			<div class="post">
				'.$registro["contenido_post"].'
			</div>

			<div class="author-container">
				<div class="author">
					<div class="author-image">
						<img src="https://pbs.twimg.com/profile_images/707977304245460992/0tWLcTBe_400x400.jpg">
					</div>
					<div class="author-info">
						<div class="author-name">' .$autor .'</div>
						<div class="author-description">
							'.$registro["autor_description"] .'
						</div>
						<div class="author-social">
							<a class="punto" href="'.$registro["autor_fb"].'"><i class="fab fa-facebook"></i></a>
						</div>
					</div>
				</div>
			</div>
		';
	}
?>