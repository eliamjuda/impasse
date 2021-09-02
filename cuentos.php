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

	<title>C U E N T O S</title>
</head>
<body>

	<?php  include 'components/menu.php'; ?>

	<header class="hero-image">

	   <div class="header-img">
	       <img id="headerImg" class="img" src="try" alt="Imagen cHIDA">
	   </div>



		<div class="header-text">
			<div class="text-container">
				<h1>cuentos</h1><p class="punto header-punto">.</p>
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
						require './components/show-posts-cuentos.php';
					?>
				</div>
			</div>
		</section>

	</main>


	<?php  include 'components/footer.php'; ?>

	<script type="text/javascript">
		
		function ImgAleatory(){
			let imgRandom =   new Array(
					"https://assets.rebelmouse.io/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpbWFnZSI6Imh0dHBzOi8vYXNzZXRzLnJibC5tcy8xOTI0NDA4Ny9vcmlnaW4uanBnIiwiZXhwaXJlc19hdCI6MTYzMTgxNjczOH0.-56Hw2wq4cbE76MGXWJnEQ3fePMW-VsRkUHFoZ3-qoc/img.jpg?width=1245&quality=85&coordinates=362%2C0%2C1281%2C174&height=700",
					"https://d3g4b6ok6mgpqb.cloudfront.net/wp-content/uploads/2016/09/25083815/Todo-lo-que-no-sabi%CC%81as-del-color-negro-art.jpg",
					"https://cdn.lowgif.com/small/a3ee54b14d2df01e-.gif",
					"https://res.cloudinary.com/dostuff-media/image/upload//c_fill,g_faces,h_630,w_1200/v1526401641/event-9414444.jpg"
				),
				random = Math.round(Math.random()*3);
			document.getElementById('headerImg').src = imgRandom[random];
		}

		ImgAleatory();

	</script>

	<script src="js/index.js" type="module"></script>

</body>
</html>