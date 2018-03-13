<?php
session_start();
include "../conexion.php";
		$arreglo=$_SESSION['carrito'];
		
		$total=0;
		
		$tabla='<table border="1">
			<tr>
			<th>Nombre</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>Subtotal</th>
			</tr>';

		for($i=0;$i<count($arreglo);$i++){

			$tabla=$tabla.'<tr>

				<td>'.$arreglo[$i]['Nombre'].'</td>
				<td>'.$arreglo[$i]['Cantidad'].'</td>
				<td>'.$arreglo[$i]['Precio'].'</td>
				<td>'.$arreglo[$i]['Cantidad']*$arreglo[$i]['Precio'].'</td>
				</tr>
			';
			$total=$total+($arreglo[$i]['Cantidad']*$arreglo[$i]['Precio']);
		}
		

	
		$headers="MIME-Version: 1.0\r\n";

		$headers.="Content-type: text/html; charset=utf8\r\n";

		$headers.="From: Remitente\r\n";
		mail($correo,$asunto,$comentario,$headers);

		

?>