<?php
class login_form {



 public function login($value1,$value2) {
     
include "conexion.php";
$re=mysql_query("select * from usuarios where Usuario='$value1' AND 
 					Password='$value2'")	or die(mysql_error());


	while ($f=mysql_fetch_array($re)) {
		$arreglo[]=array('Nombre'=>$f['Nombre'],

			'Apellido'=>$f['Apellido']);
	}
if($value1=="Admin" && $value2=="admin1234"){

		$_SESSION['Usuario']=$arreglo;
		
		
		return true;
	}elseif(isset($arreglo)){

		$_SESSION['Usuario']=$arreglo;

		
		return true;
	}else{
		
		return false;
	}


	

	
		}
    }


?>

