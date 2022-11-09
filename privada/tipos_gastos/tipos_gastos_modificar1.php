<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__tipo_gasto_pk =$_POST["tipo_gasto_pk"];


$__tipo_gasto =$_POST["tipo_gasto"];


//$db->debug=true;

$Smarty =new  Smarty;
$reg =array();

$reg["tipo_gasto"] =$__tipo_gasto;
$reg["usuario"] = $_SESSION['sesion_usuario_pk'];
$reg["fec_modificacion"]= date("Y-m-d H:i:s");
$rs1 = $db->AutoExecute("tipos_gastos",$reg, "UPDATE","tipo_gasto_pk='".$__tipo_gasto_pk."'");

if ($rs1) {
	header("Location: tipos_gastos.php");
	exit();
}else {
  $Smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!!");
   $Smarty->assign("direc_css", $direc_css);
   $Smarty->assign("tipo_gasto_pk", $__tipo_gasto_pk);
   $Smarty->assign("tipos_gastos_modificar1.tpl");
}
?>
