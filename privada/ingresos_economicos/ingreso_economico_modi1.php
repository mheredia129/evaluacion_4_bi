<?php 
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);
$__ingreso_economico_pk = $_POST["ingreso_economico_pk"];
$__domicilio_pk = $_POST["domicilio_pk"];
$__efectivo_disponible_pk = $_POST["efectivo_disponible_pk"];

$__monto_in = $_POST["monto_in"];
$__desc_in = $_POST["desc_in"];
$__date = $_POST["date"];
$db->debug=true;
$smarty = new Smarty;

$reg = array();
$reg["ingreso_economico_pk"] = $__ingreso_economico_pk;
$reg["domicilio_pk"] = $__domicilio_pk;
$reg["efectivo_disponible_pk"] = $__efectivo_disponible_pk;
$reg["monto"] = $__monto_in;
$reg["descripcion"] = $__desc_in;
$reg["fecha_ingreso"] = $__date;
 $reg["usuario"] = $_SESSION['sesion_usuario_pk'];
$rs1 = $db->AutoExecute("ingresos_economicos", $reg, "UPDATE", "ingreso_economico_pk='".$__ingreso_economico_pk."'");

if ($rs1) {
	header("Location: ingresos_economicos.php");
	exit();
} else {
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("ingreso_economico_pk", $__ingreso_economico_pk);
	$smarty->display("ingreso_economico_modi1.tpl");
}
?>


