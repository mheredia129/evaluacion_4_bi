<?php 
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);
$__gasto_pk = $_POST["gasto_pk"];
$__domicilio_pk = $_POST["domicilio_pk"];
$__efectivo_disponible_pk = $_POST["efectivo_disponible_pk"];

$__monto_in = $_POST["monto"];
$__desc_in = $_POST["descripcion"];
$__date = $_POST["date"];
$db->debug=true;
$smarty = new Smarty;

$reg = array();
$reg["gasto_pk"] = $__gasto_pk;
$reg["domicilio_pk"] = $__domicilio_pk;
$reg["efectivo_disponible_pk"] = $__efectivo_disponible_pk;
$reg["monto"] = $__monto_in;
$reg["descripcion"] = $__desc_in;
$reg["fecha_ingreso"] = $__date;
 $reg["usuario"] = $_SESSION['sesion_usuario_pk'];
$rs1 = $db->AutoExecute("gastos", $reg, "UPDATE", "gasto_pk='".$__gasto_pk."'");

if ($rs1) {
	header("Location: gastos.php");
	exit();
} else {
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("gasto_pk", $__gasto_pk);
	$smarty->display("gastos_modi1.tpl");
}
?>


