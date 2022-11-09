<?php 
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);
$__persona_pk = $_POST['persona_pk'];
$__usuario_pk = $_POST['usuario_pk'];

$__usuario = $_POST["usuario"];
$__clave = $_POST["clave"];

$db->debug=true;
$smarty = new Smarty;

$reg = array();
$reg["persona_pk"] = $__persona_pk;
$reg["usuario1"] = $__usuario;
$reg["clave"] = $__clave;
 $reg["usuario"] = $_SESSION['sesion_usuario_pk'];
$rs1 = $db->AutoExecute("usuarios", $reg, "UPDATE", "usuario_pk='".$__usuario_pk."'");

if ($rs1) {
	header("Location: usuarios.php");
	exit();
} else {
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("usuario_pk", $__usuario_pk);
	$smarty->display("usuario_modificar1.tpl");
}
?>


