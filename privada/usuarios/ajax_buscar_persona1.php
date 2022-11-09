<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$persona_pk = $_POST["persona_pk"];
//var_dump($persona_pk);
//$db-> debug=true;

	$sql3 = $db->Prepare("SELECT *
						FROM persona
						WHERE persona_pk = ?
						AND estado <> '0'
						");

$rs3 = $db->GetAll($sql3, array($persona_pk));

echo "<center>
<table width='60%' border='1'>
<tr>
<th colspan='4'>Datos Persona</th>
</tr>
";
foreach ($rs3 as $k => $fila) {
	echo "<tr>
	<td align='center'>".$fila["ci"]."</td>
	<td>".$fila["apellido_paterno"]."</td>
	<td>".$fila["apellido_materno"]."</td>
	<td>".$fila["nombres"]."</td>
	</tr>
	";
}
echo "</table>
	</center>"

?>