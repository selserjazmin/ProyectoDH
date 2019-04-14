<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="ecommercestyle.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC:700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<title>Chocolatemia</title>
</head>
<body>
<?php
	require('../Menu/menu.php');
?>
	<!--<header>
		<div class="logoymenu">
	<img src="img/logo.png" alt="" class="logo"><h1>CHOCOLATEMIA</h1><img src="img/menu2.png" alt="" class="menu"></div>
	  <ul>
	  <li><a href="ecommerce.html">Inicio</a></li>
	  <li><a href="#">FAQ</a></li>
	  <li><a href="login.html">Iniciar Sesion</a></li>
	  <li><a href="register.html">Registro</a></li>
	</ul>
</header>-->
	<main>
		<h2>¡Bienvenido!</h2>
		<div class="slider">
		<input type="radio" class="boton" name="boton" checked="checked">
    <label></label>
    <input type="radio" class="boton" name="boton">
    <label></label>
    <input type="radio" class="boton" name="boton">
    <label></label>
    <input type="radio" class="boton" name="boton">
    <label></label>

    <div class="contenedor-img cuatro-imagenes">
    <img src="../img/especial1.jpg">
    <img src="../img/especial2.jpg">
    <img src="../img/especial3.jpg">
    <img src="../img/especial4.jpg">
    </div>

</div>
<article class="producto">
</article>
</main>
<br>
<?php
include('../Footer/footer.php');
?>
</body>
</html>
