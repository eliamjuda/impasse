<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />

	<link rel="stylesheet" type="text/css" href="styles/global.css">
	<link href="dist/hamburgers.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="styles/login.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	<title>Log In</title>
</head>
<body>

	<?php  include 'components/menu.php'; ?>



	<main>	

		<div class="hero-image">

			<div class="header-img"></div>
			<div class="header-gradient"></div>
			
			<div class="login-container">
				<div class="login">
					<div class="login-text"><h1>Logueate</h1><p class="punto">.</p></div>	
					<div class="form">
						<form action="./components/login-validation.php" method="POST">
							<input type="text" name="userLogin" id="userLogin" placeholder="Usuario" required>
							<input  type="password" name="passLogin" id="passLogin" placeholder="Contraseña" required>
							<input type="submit" value="Loguear" id="btnLogin" name="btnLogin">
							
						</form>
						<label>¿No tienes cuenta? <a style="cursor: 
						pointer;" class="eliam changeLogin">Regístrate</a></label>
					</div>
				</div>
				<div class="signUp" >
					<div class="signUp-text"><h1>Regístrate</h1><p class="punto">.</p></div>	
					<div class="form">
						<form id="formSignup" action="./components/signup-validation.php" method="POST">
							
							<input maxlength="25" type="text" name="nameSignup" id="nameSignup" placeholder="Nombre" required>
							<input maxlength="20" type="text" name="userSignup" id="userSignup" placeholder="Usuario" required>
							<input type="password" name="passSignup" id="passSignup" placeholder="Contraseña" required>
							<input type="submit" value="Loguear" id="btnSignup" name="btnSignup">

						</form>
						<label>¿Ya tienes cuenta? <a style="cursor: 
						pointer;" class="eliam changeSignup">Logueate</a></label>
					</div>
				</div>
			</div>
		</div>
	</main>


	<?php  include 'components/footer.php'; ?>

	<script src="./js/login.js"></script>
	<script src="./js/index.js" type="module"></script>

</body>
</html>