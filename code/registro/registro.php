<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>

	<a href="../index.php" title="index">
		<img src="../imagenes/logo.png" id="logo">
</a>
		</header>
	<section>
	
	<form id="formulario2" method="post" action="altausuario.php">


<label for="usuario">Nombre</label><br>
		<input type="text" id="nombre" name="Nombre" placeholder="Nombre" ><br>

		<label for="usuario">Apellidos</label><br>
		<input type="text" id="apellido" name="Apellido" placeholder="Apellido" ><br>

		<label for="usuario">Usuario</label><br>
		<input type="text" id="usuario" name="Usuario" placeholder="usuario" ><br>

		<label for="password">Password</label><br>
		<input type="password" id="password" name="Password" placeholder="password" ><br>

<label for="usuario">Email</label><br>
		<input type="text" id="email" name="Email" placeholder="email" ><br>


<label for="usuario">Direccion</label><br>
		<input type="text" id="direccion" name="Direccion" placeholder="Direccion" ><br>



		<input type="submit" name="aceptar" value="Registrar" class="aceptar">
	</form>


	</section>







</body>
</html>