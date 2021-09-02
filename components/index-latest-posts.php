<?php  


$consulta = mysqli_query($conn, "SELECT * FROM posts ORDER BY id_post DESC LIMIT 3");

while ($registro = mysqli_fetch_array($consulta)) {

	// Función para convertir a día mes y año 

	$miFecha = $registro["fecha_post"];
	$fechaReal = fechaCastellano($miFecha);

	// Agregando el número de comentarios y el autor
	$id = $registro["id_post"];
	$autor = $registro["autor_post"];


	//Número de Comentarios del POST
	$query = mysqli_query($conn,"SELECT * FROM comentarios_post WHERE post_id = '$id'");


	echo '
		<div class="post">
			<div class="post-category category-j ">
				<p class="category">'.$registro['categoria_post'] .'</p>
			</div>
			<div class="post-img">
				<img loading="lazy" src="'.$registro["imagen_post"].'">
			</div>
			<div class="post-info">
				<div class="post-author-date">
					<p class="post-date date">'.$fechaReal.'</p>
					<p class="separador">x</p>
					<p class="post-author author">'.$autor.'</p>
				</div>
				<div class="post-title">
					<h2>'.$registro["titulo_post"].'</h2>
					<input id="read-more" class="author" type="submit" name="read-more" value="Leer" onclick="window.location=`http://localhost/impasse21/post/post.php?id='.$registro["id_post"].'`">
				</div>
			</div>
		</div>
	';

}
?>



