<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$apellido_paterno = strip_tags(stripslashes($_POST["paterno"]));
$apellido_materno = strip_tags(stripslashes($_POST["materno"]));
$nombres = strip_tags(stripslashes($_POST["nombres"]));
$ci = strip_tags(stripslashes($_POST["ci"]));

$db-> debug=true;

if ($apellido_paterno or $apellido_materno or $nombres or $ci) {
	$sql3 = $db->Prepare("SELECT *
						FROM persona
						WHERE apellido_paterno LIKE ?
						AND apellido_materno LIKE ?
						AND nombres LIKE ?
						AND ci LIKE ?
						AND estado <> '0'
						");

	$rs3 = $db->GetAll($sql3, array($apellido_paterno."%",$apellido_materno."%",$nombres."%",$ci."%"));

		if ($rs3) {
			echo "<center>
				<table width='60%' border='1'>
				<tr>
				<th>C.I.</th><th>PATERNO</th><th>MATERNO</th><th>NOMBRES</th><th>?</th>
					</tr>";
				foreach($rs3 as $k => $fila){
					$str = $fila["ci"];
					$str1 = $fila["apellido_paterno"];
					$str2 = $fila["apellido_materno"];
					$str3 = $fila["nombres"];
					echo "<tr>
					<td align='center'>".resaltar($ci,$str)."</td>
					<td>".resaltar($apellido_paterno,$str1)."</td>
					<td>".resaltar($apellido_materno,$str2)."</td>
					<td>".resaltar($nombres,$str3)."</td>
					<td align='center'>
					<input type='radio' name='option' value='' onclick='mostrar(".$fila["persona_pk"].")'>
					</td>
				</tr>";
				}
				echo"</table>
				</center>";
		} else {
			echo"<center><b> LA PERSONA NO EXISTE!!!</b></center><br>";	
}
}
?>