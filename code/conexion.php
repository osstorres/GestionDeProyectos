<?php

//Conexion a la base de datos
	$server="localhost";
	$username="root";
	$password="";
	$db='caruma';
	$con=mysql_connect($server,$username,$password)or die("ERROR AL CONECTAR");
	$sdb=mysql_select_db($db,$con)or die("ERROR AL CONECTAR");
?>