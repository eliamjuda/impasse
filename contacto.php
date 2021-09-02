<?php 
	require './components/database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />

	<link rel="stylesheet" type="text/css" href="styles/global.css">
	<link href="dist/hamburgers.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="styles/contacto.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

	<title>C O N T A C T O</title>
</head>
<body>

	<?php  include 'components/menu.php'; ?>

	<header class="hero-image">

	    <div class="header-img">
	       <img id="headerImg" class="img" src="try" alt="Imagen cHIDA">
	    </div>



		<div class="header-text">
			<div class="text-container">
				<h1>Contacto</h1><p class="punto header-punto">.</p>
			</div>
		</div>


		<div class="header-gradient"></div>
	</header>

	<main>
		<section>
			<div class="contact-container">
				<div class="contact-text">
					<h1>¿Qué nos cuentas? 🐱‍💻</h1>
					<hr>
				</div>
				<div class="contact-form">
					<form class="form" target="_blank" action="https://formsubmit.co/eliamjuda@gmail.com" method="POST">

						<input type="text" name="name" placeholder="Nombre" required><br>

						<input type="text" name="email" placeholder="Correo" required><br>

						<textarea name="contacto-text" cols="30" rows="10" title="Tu comentario no debe exceder los 255 caracteres" data-pattern="^.{1,255}$" placeholder="Mensaje..." required></textarea>

						<input type="submit" value="Enviar">
					</form>
				</div>
			</div>
		</section>
	</main>


	<?php  include 'components/footer.php'; ?>

	<script type="text/javascript">
		
		function ImgAleatory(){
			let imgRandom =   new Array(
					"i.pinimg.com/originals/c6/3c/ae/c63cae1344766f14d9d184e5aafed065.gif",
					"i.pinimg.com/originals/24/8e/47/248e47a848da59d73bd1b58b34b65a7c.gif",
					"i.pinimg.com/originals/c6/3c/ae/c63cae1344766f14d9d184e5aafed065.gif",
					"steamuserimages-a.akamaihd.net/ugc/101724518975756904/62600BE442C86E38CE25627395C7F2516B0D243D/"
				),
				random = Math.round(Math.random()*3);
			document.getElementById('headerImg').src = `https://${imgRandom[random]}`;
		}
		ImgAleatory();

	</script>

	<script src="js/index.js" type="module"></script>

</body>
</html>