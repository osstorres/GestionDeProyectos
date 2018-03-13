<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>

	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>

</head>

<!--  BOTONES PARA LA PAGINA PRINCIPAL -->
<body>
	<header>



		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<header>

		<a href="./login.php" title="iniciar sesión">
			<img src="./imagenes/login.png">
		</a>
	</header>
	

	<header>
	
		<a href="./registro/registro.php" title="iniciar sesión">
			<img src="./imagenes/registro.png">
		</a>
	</header>
	<section>
		
	<?php
	//CONEXIÓN
		include 'conexion.php';
		//CONSULTA PARA OBTENER LOS PRODUCTOS EN LA PAGINA PRINCIPAL
		$re=mysql_query("select * from productos")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>
			<div class="producto">
			<center>
				<img src="./productos/<?php echo $f['imagen'];?>"><br>
				<span><?php echo $f['nombre'];?></span><br>
				<!-- REDIRECCIONA A LA PAGINA DEL PRODUCTO EN FUNCIÓN DEL ID  -->
				<a href="./detalles.php?id=<?php  echo $f['id'];?>">ver</a>
			</center>
		</div>
	<?php
		}
	?>
		
		

		
	</section>
	
</body>
</html>