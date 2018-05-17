<?php
class login_form {



 public function login($value1,$value2) {

include "conexion.php";
$re=mysqli_query($con,"select * from usuarios where Usuario='$value1' AND Password='$value2'")	or die(mysqli_error());


if($value1=="Admin" && $value2=="admin1234"){

		


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
