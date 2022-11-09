<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__tipo_inmueble_pk =$_POST["tipo_inmueble_pk"];
$__detalle_inmueble = $_POST["detalle_inmueble"];
var_dump($_POST);

//$db->debug=true;

$Smarty =new  Smarty;
$reg =array();
$reg["detalle_inmueble"] =$__detalle_inmueble;
$reg["usuario"] = $_SESSION['sesion_usuario_pk'];
$reg["fec_modificacion"]= date("Y-m-d H:i:s");
$rs1 = $db->AutoExecute("tipo_inmueble",$reg, "UPDATE","tipo_inmueble_pk='".$__tipo_inmueble_pk."'");

if ($rs1) {
	header("Location: tipo_inmueble.php");
	exit();
}else {
  $Smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!!");
   $Smarty->assign("direc_css", $direc_css);
   $Smarty->assign("tipo_inmueble_pk", $__tipo_inmueble_pk);
   $Smarty->assign("tipo_inmueble_modificar1.tpl");
}
?>
