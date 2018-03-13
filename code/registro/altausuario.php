<?php
	include ("../conexion.php");
	if(!isset($_POST['Nombre']) &&  !isset($_POST['Apellido']) && !isset($_POST['Usuario'])&&  !isset($_POST['Password'])&&  !isset($_POST['Email'])&&  !isset($_POST['Direccion'])){
		header("Location: registro.php");
	}else{
		    		    
		      		$Email=$_POST['Email'];
					$Nombre=$_POST['Nombre'];
					$Apellido=$_POST['Apellido'];
					$Usuario=$_POST['Usuario'];
					$Password=$_POST['Password'];
					$Direccion=$_POST['Direccion'];


					$Sql="insert into usuarios (Email,Nombre,Apellido,Usuario,Password,Direccion) values(
							'".$Email."',
							'".$Nombre."',
							'".$Apellido."',
							'".$Usuario."',
							'".$Password."',
							'".$Direccion."')";
					mysql_query($Sql);
					header ("Location: registro.php");
		      }
		    
		  
	
?>
