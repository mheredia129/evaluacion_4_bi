<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$sistema_pk = $_REQUEST['sistema_pk'];
$nombre = $_POST["nombre"];
$url = $_POST["url"];

$__logo1 = $_POST["logo1"];
$__nombre_log = $_FILES['logo']['name'];

//var_dump($__nombre_log);
$db->debug=false;
$smarty = new Smarty;

if ((!empty($_FILES['logo'])) and is_uploaded_file($_FILES['logo']['tmp_name'])) {
	copy($_FILES['logo']['tmp_name'],'logo/'.$__nombre_log);
	$logo = $_FILES['logo']['name'];
}elseif($__logo1 == ""){
      $logo = '';
       $__nombre_log = '';
}else
$__nombre_log = $__logo1;





$reg =array();
$reg["nombre"] =$nombre;
$reg["url"] =$url;
$reg["logo"] =$__nombre_log;
$reg["usuario"] = $_SESSION['sesion_usuario_pk'];
$reg["fec_modificacion"]= date("Y-m-d H:i:s");
$rs1 = $db->AutoExecute("sistema",$reg, "UPDATE","sistema_pk='".$sistema_pk."'");
 if ($rs1){
 	// code...
 	$smarty->assign("mensaje","los datos se modificaron actualizar el sistema");
 	$smarty->assign("direc_css",$direc_css);
 	$smarty->display("sistema_casa1.tpl");
 }else{
 	$smarty->assign("mensaje","los datos no se modificaron ");
 	$smarty->assign("direc_css",$direc_css);
 	$smarty->display("sistema_casa1.tpl");

 }

?>