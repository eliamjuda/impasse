const $verCuentos = document.querySelector(".category-cuento"),
	$verPoemas = document.querySelector(".category-poema"),
	$verJaladas = document.querySelector(".category-jalada"),
	$publicar = document.getElementById('publicar');

$verJaladas.addEventListener("click", () =>{
	location.href = "http://localhost/impasse21/jaladas.php";
})

$verPoemas.addEventListener("click", () =>{
	location.href = "http://localhost/impasse21/poemas.php";
})

$verCuentos.addEventListener("click", () =>{
	location.href = "http://localhost/impasse21/cuentos.php";
})

$publicar.addEventListener("click", () =>{
	location.href = "http://localhost/impasse21/publicar.php";
})