<?php 
	require '../components/database.php';
	include('../components/fechaCastellano.php');
	$id = $_GET["id"];
	$title = mysqli_query($conn,"SELECT titulo_post FROM posts WHERE id_post = '$id'");
	$registro = mysqli_fetch_array($title);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />

	<link rel="stylesheet" type="text/css" href="../styles/global.css">
	<link href="../dist/hamburgers.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../styles/post.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	<title><?php echo $registro["titulo_post"]; ?></title>
</head>
<body>

	<?php  include '../components/menu.php'; ?>


	<header class="hero-image">
		<?php 
			require '../components/show-post-header.php';
		?>
	</header>

	<main>	
		<section>
			<div class="post-container">
				<div class="admin-panel"> 

					<form class="admin-panel-form" action="../components/delete-post2.php?id=<?php echo $_GET["id"]; ?>" method="POST">
						<input type="submit" class="delete-post" name="delete-post" value="Eliminar">
					</form>

					<form class="admin-panel-form"action="../components/edit-post2.php?id=<?php echo $_GET["id"]; ?>" method="POST">
						<input type="submit" class="edit-post" name="edit-post" value="Editar">
					</form>
				</div>
				<?php 
					require '../components/show-post-content.php';
				?>
			</div>
		</section>
		<!-- ---------------------------- COMENTARIOS ------------------------------- -->
		<section>
			<div class="comment-container">
				<div class="comment-h1">
					<h1>Comentarios</h1>
					<hr>
				</div>
				<div class="comments">
					<?php include "../components/show-comments.php" ?>
				</div>
			</div>
		</section>

		<!-- ---------------------------- DEJA UN COMENTARIO ------------------------------- -->

		<section>
			<div class="write-comment-container">
				<div class="write-comment-h1">
					<h1>Deja un comentario ✍</h1>
					<hr>
				</div>
				<div class="form-container">
					<form class="form" action="../components/procesar-comentarios.php?id=<?php echo $_GET["id"];?>" method="POST">
						<?php if(empty($_SESSION['usern'])){
							echo '<input type="text" name="user-name" placeholder="Nombre">';
						}else{echo ""; }?>
						<textarea placeholder="Tu comentario..." name="user-comment" maxlength="250"></textarea>
						<input type="submit" name="comment-btn" value="Comentar">
					</form>
				</div>
			</div>
		</section>
	</main>


	<?php  include '../components/footer.php'; ?>


	<script src="../js/index.js" type="module"></script>

</body>
</html>