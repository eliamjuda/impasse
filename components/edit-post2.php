<?php 
	require './database.php';

	if(empty($_SESSION['usern'])){

		header('Location: ../login.php');

	}elseif ($_SESSION['permisos'] < 2) {
		
		header('Location: ../index.php');
	}


	$id = $_GET["id"];

	$consulta = mysqli_query($conn,"SELECT * FROM revisar_posts WHERE id_post = '$id'");
	$registro = mysqli_fetch_array($consulta);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />

	<link rel="stylesheet" type="text/css" href="../styles/global.css">
	<link href="dist/hamburgers.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../styles/publicar.css">
	<link rel="preconnect" href="s://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	<script src='https://cdn.tiny.cloud/1/1co8ra9hq3y5sgovde4o7qhn0v0xgsglug5jet3a36wink4c/tinymce/5/tinymce.min.js' referrerpolicy="origin">
  	</script>
	<script>
		tinymce.init({
		  selector: "#contenido",
		  plugins: [
		    "advlist autolink lists link image charmap print preview anchor",
		    "searchreplace visualblocks code fullscreen",
		    "insertdatetime media table paste"
		  ],
		  toolbar:
		    "undo redo | fontselect styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		  content_style:
		    "@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap'); body { font-family: 'Poppins', sans-serif; } ",
		  font_formats:
		    "Arial Black=arial black,avant garde; Courier New=courier new,courier; Montserrat=montserrat; Mono=monospace;",
		    skin: "oxide-dark",
		    content_css: "dark",
		  height: 420
		});
  	</script>
	<title>IMPASSE | Publicar Post</title>
</head>
<body>

	<?php  include './menu.php'; ?>
	
	<main>
		<section>

			<div class="form-container">
				<form action="./procesar-editar-post2.php?id=<?php echo $_GET["id"]; ?>" method="POST">
					<div class="form-h1">
						<h1>Editar Post 👓</h1>
					</div> 
					<div class="form-inputs-container">
						<input type="text" id="title-post" name="title-post" placeholder="Título del Post" onload="crearURL(this.value)" onkeyup="crearURL(this.value)" required value="<?php echo $registro['titulo_post']; ?>">
						<input type="text" id="title-post-slug" name="title-post-slug" value="<?php echo $registro['title_slug'];?>" readonly>
						<input type="text" id="imagen-post" name="imagen-post" placeholder="Link de la imagen para tu post" required value="<?php echo $registro['imagen_post'];?> ">
						<select name="categoria" id="categoria-post" required>
							<optgroup label="Categorías">
								<option value="Jaladas">Jaladas</option>
								<option value="Poemas">Poemas</option>
								<option value="Cuentos">Cuentos</option>		
							</optgroup>
						</select>
						<textarea maxlength="100" name="autor-description">
							<?php echo $registro['autor_description']; ?>
						</textarea>
						<input type="text" name="autor-fb" placeholder="Link de tu Facebook (opcional)" value="<?php echo $registro['autor_fb'];?>">
					</div>
					<div class="form-content-container">
						<textarea name="contenido" id="contenido">
							<?php echo $registro['contenido_post'];?>
						</textarea>
						<input type="submit" value="Postear">
					</div> 
				</form>
			</div>
		</section>

	</main>


	<?php  include './footer.php'; ?>

	<script type="text/javascript">
		function crearURL(slug) {
	 
		    // Reemplaza los carácteres especiales | simbolos con un espacio 
		    slug = slug.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
		 
		    // Corta los espacios al inicio y al final del sluging 
		    slug = slug.replace(/^\s+|\s+$/gm, '');
		 
		    // Reemplaza el espacio con guión  
		    slug = slug.replace(/\s+/g, '-');
		 
		    // Creo la URL en el campo de texto 'url' 
		    let $titleSlug = document.getElementById('title-post-slug');
		    $titleSlug.value = slug;
	 
		}
	</script>

	<script src="../js/index.js" type="module"></script>

</body>
</html>