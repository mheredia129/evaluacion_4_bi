<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__usuario_pk = $_POST['usuario_pk'];
	
$smarty = new Smarty;
//$db->debug=true;

$sql = $db->Prepare("SELECT *
                     FROM usuarios_roles
                     WHERE usuario_pk = ?
                     AND estado <> '0'
                     ");
$rs = $db->GetAll($sql, array($__usuario_pk));

if(!$rs){
	var_dump("entra");
	$reg = array();
	$reg ["estado"] = '0';
    $reg["usuario"] = $_SESSION['sesion_usuario_pk'];
    $reg["fec_modificacion"]= date("Y-m-d H:i:s");
	$rs1 = $db->AutoExecute("usuarios", $reg, "UPDATE", "usuario_pk='".$__usuario_pk."'");
	header("Location:usuarios.php");
	exit();
}else {
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("usuario_eliminar.tpl");
}
?>