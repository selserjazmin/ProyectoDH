<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Index/ecommercestyle.css">
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
<body>
<main>
  <form class="login" action="ecommerce.html" method="post">
      <br>
      <br>
  <p>
  <label for="email">Email</label>
  <input id="email"type="email" name="email" value="">
</p>
<p>
  <label for="pass">Contraseña</label>
  <input id="pass"type="password" name="pass" value="">
</p>
<br>
<p>
  <input id="rec"type="radio" name="rec" value="r">
  <label for="rec">Recordarme</label>
<p>
  <br>
  <a href="ecommerce.html">¿Olvidaste tu contraseña?</a>
  <br>
  <br>
  <button type="submit" name="button">INGRESAR</button>
  </p>
<br>
<br>
</form>
</main>
<br>
<?php
include('../Footer/footer.php');
?>
</body>
</html