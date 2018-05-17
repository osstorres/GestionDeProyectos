<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Inicio de sesión</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>

	<a href="./index.php" title="index">
		<img src="./imagenes/logo.png" id="logo">
</a>
		</header>
	<section>
	<form id="formulario" method="post" action="./login/verificar.php">
		<?php 
		if(isset($_GET['error'])){
			echo '<center>Datos No Validos</center>';
		}
		?>
		<label for="usuario">Usuario</label><br>
		<input type="text" id="usuario" name="Usuario" placeholder="usuario" ><br>
		<label for="password">Password</label><br>
		<input type="password" id="password" name="Password" placeholder="password" ><br>
		<input type="submit" name="aceptar" value="iniciar sesión" class="aceptar">
	</form>
	</section>
</body>
</html>