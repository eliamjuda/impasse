<div class="menu">
	<div class="menu-logo">
		<label>Impasse</label><p class="punto">.</p>
	</div>
	<ul class="ul-menu">
		<li><a href="http://localhost/impasse21/">Principal</a></li>
		<li><a href="http://localhost/impasse21/contacto.php">Contacto</a></li>
		<?php
        if(empty($_SESSION['usern'])){
		echo '<li><a href="http://localhost/impasse21/login.php">Ingresar</a></li>';
		}else{	
        echo '
        <li><a href="http://localhost/impasse21/publicar.php">Publicar</a></li>
        <li><a href="http://localhost/impasse21/components/logout.php">Salir</a></li>
        ';
         }
         ?>
	</ul>

	<!-- // No-logueado: Principal, contacto, ingresa -->
	<!-- // Logueado: Principal, contacto, publicar, perfil(todavia no), salir -->
	<!-- // Logueado-admin: Las de Logueado + Panel -->

	<button class="hamburger hamburger--slider" type="button">
			<span class="hamburger-box">
	    	<span class="hamburger-inner"></span>
			</span>
	</button>
</div>

<div class="hamburger-menu">
	<ul class="ul-hamburger-menu">

		<li><a href="http://localhost/impasse21/">Principal</a></li>
		<li><a href="http://localhost/impasse21/contacto.php">Contacto</a></li>
		<?php
        if(empty($_SESSION['usern'])){
		echo '<li><a href="http://localhost/impasse21/login.php">Ingresar</a></li>';
		}else{	
        echo '
        <li><a href="http://localhost/impasse21/publicar.php">Publicar</a></li>
        <li><a href="http://localhost/impasse21/components/logout.php">Sair</a></li>
        ';
         }
         ?>
	</ul>
</div>