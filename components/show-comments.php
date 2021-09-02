<?php


	$id = $_GET["id"];


	$consulta = mysqli_query($conn,"SELECT * FROM comentarios_post WHERE post_id = '$id' ORDER BY id_comentario DESC");


	while ($registro = mysqli_fetch_array($consulta)) {

	
	// Función para convertir a día mes y año 

		$miFecha = $registro["fecha_comentario"];
		$fechaReal = fechaCastellano($miFecha);

	//INFO DEL USUARIO

		echo'
			<div class="comment">
				<div class="comment-image">
					<img src="../assets/usuario.jpg">
				</div>
				<div class="comment-box">
					<div class="comment-info">

							<label class="comment-user">'.$registro["usuario_comentario"].'</label>
							<label class="comment-date date">'.$fechaReal.'</label>
					</div>
					<div class="comment-text">
						<p class="comment-content">
							'.$registro["comentario"].'
						</p>
					</div>
				</div>
			</div>
		';

	}
?>


