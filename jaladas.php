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

	<link rel="stylesheet" type="text/css" href="styles/posts.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

	<title>J A L A D A S</title>
</head>
<body>

	<?php  include 'components/menu.php'; ?>

	<header class="hero-image">

	   <div class="header-img">
	       <img id="headerImg" class="img" src="try" alt="Imagen cHIDA">
	   </div>



		<div class="header-text">
			<div class="text-container">
				<h1>jaladas</h1><p class="punto header-punto">.</p>
			</div>
		</div>


		<div class="header-gradient"></div>
	</header>
	
	<main>
		<section>
			<div class="posts-container">
				<!-- <div class="posts-search">
					<h1>¿Buscas uno? 🔍</h1>
					<input type="search" name="searchPost" value="">
				</div> -->

				<div class="posts">
					<?php 
						require './components/show-posts.php';
					?>
				</div>
			</div>
		</section>

	</main>


	<?php  include 'components/footer.php'; ?>

	<script type="text/javascript">
		
		function ImgAleatory(){
			let imgRandom =   new Array(
					"https://www.artandobject.com/sites/default/files/magritte-mural.jpg",
					"https://static.tumblr.com/aa85593b203f5620e75569b69c20f16c/bkeuqco/hzEpdjl88/tumblr_static_tumblr_static__focused_v3.gif",
					"https://cdn.lowgif.com/small/a3ee54b14d2df01e-.gif",
					"https://64.media.tumblr.com/785d2a9fcde0637d6f092439e5a5b042/tumblr_p18q4pXtay1v6qhdmo1_1280.gifv"
				),
				random = Math.round(Math.random()*3);
			document.getElementById('headerImg').src = imgRandom[random];
		}

		ImgAleatory();

	</script>

	<script src="js/index.js" type="module"></script>

</body>
</html>