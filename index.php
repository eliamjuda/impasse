<?php 
	require './components/database.php';
	include('./components/fechaCastellano.php');
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />

	<link rel="stylesheet" type="text/css" href="styles/global.css">
	<link href="dist/hamburgers.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

	<title>I M P A S S E</title>
</head>
<body>


<?php  include 'components/menu.php'; ?>

<header class="hero-image">

	<div class="header-gradient"></div>

	<div class="header-text">
		<div class="logo-container">
			<h1>Impasse</h1><p class="punto header-punto">.</p>
		</div>
		<br>
		<label>Punto muerto</label>
	</div>

    <div class="header-video">
       <video class="video" src="assets/hero-720.mp4" muted autoplay loop></video>
    </div>
</header>

<main>

	<!-- --------- SECTION 1 / PUBLISH ----------------------------------------- -->
	<section>
		<div class="publish">
			<h1>¿Quieres publicar?</h1>
			<button id="publicar">Publicar</button>
		</div>
	</section>

	<!-- --------- SECTION 2 / CATEGORIES ------------------------------------- -->
	<section>
		<div class="categories">
			<div class="categories-text">
				<h1>Categorías</h1>
				<hr>
			</div>
			<div class="categories-cards">
				<div class="categories-card category-cuento">
					<img class="category-cuento" loading="lazy" src="img/jupiter-devorando.jpg">
					<h1 class="category-cuento">Cuentos</h1>
				</div>
				<div class="categories-card category-poema">
					<img  class="category-poema" loading="lazy" src="img/fallen_angel.jpg">
					<h1 class="category-poema" >Poemas</h1>
				</div>
				<div class="categories-card category-jalada">
					<img  class="category-jalada" loading="lazy" src="img/aquelarre.jpg">
					<h1 class="category-jalada" >Jaladas</h1>
				</div>
			</div>
		</div>
	</section>

	<!-- --------- SECTION 3 / RELEVANT ------------------------------------- -->
	<section>
		<div class="relevant-posts">
			<div class="relevant-posts-text">
				<h1>Posts destacados</h1>
				<hr>
			</div>

			<div class="posts">

				<?php 
					require './components/index-relevant-posts.php';
				?>
			</div>
		</div>
	</section>

	<!-- --------- SECTION 4 / RECENT ------------------------------------- -->
	<section>
		<div class="recent-posts">
			<div class="recent-posts-text">
				<h1>Recientes</h1>
				<hr>
			</div>

			<div class="posts">
				<?php 
					require './components/index-latest-posts.php';
				?>
			</div>
		</div>
	</section>

</main>

<?php  include 'components/footer.php'; ?>

<script type="text/javascript" src="./js/index2.js"></script>
<script src="js/index.js" type="module"></script>

</body>
</html>