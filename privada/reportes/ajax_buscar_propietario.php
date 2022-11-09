<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$apellido_paterno = strip_tags(stripslashes($_POST["paterno"]));
$apellido_materno = strip_tags(stripslashes($_POST["materno"]));
$nombres = strip_tags(stripslashes($_POST["nombres"]));
$numero_celular = strip_tags(stripslashes($_POST["numero_celular"]));

$db-> debug=true;

if ($apellido_paterno or $apellido_materno or $nombres or $ci) {
	$sql3 = $db->Prepare("SELECT *
						FROM propietario
						WHERE apellido_paterno LIKE ?
						AND apellido_materno LIKE ?
						AND nombre LIKE ?
						AND numero_celular LIKE ?
						AND estado <> '0'
						");

	$rs3 = $db->GetAll($sql3, array($apellido_paterno."%",$apellido_materno."%",$nombres."%",$numero_celular."%"));

		if ($rs3) {
			echo "<center>
				<table width='60%' border='1'>
				<tr>
				<th>C.I.</th><th>PATERNO</th><th>MATERNO</th><th>NOMBRES</th><th>?</th>
					</tr>";
				foreach($rs3 as $k => $fila){
					$str = $fila["numero_celular"];
					$str1 = $fila["apellido_paterno"];
					$str2 = $fila["apellido_materno"];
					$str3 = $fila["nombre"];
					echo "<tr>
					<td align='center'>".resaltar($numero_celular,$str)."</td>
					<td>".resaltar($apellido_paterno,$str1)."</td>
					<td>".resaltar($apellido_materno,$str2)."</td>
					<td>".resaltar($nombres,$str3)."</td>
					<td align='center'>
					<input type='radio' name='option' value='' onclick='mostrar(".$fila["propietario_pk"].")'>
					</td>
				</tr>";
				}
				echo"</table>
				</center>";
		} else {
			echo"<center><b> EL PROPIETARIO NO EXISTE!!!</b></center><br>";	
}
}
?>