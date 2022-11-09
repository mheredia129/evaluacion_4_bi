<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);
$detalle_inmueble = $_POST["detalle_inmueble"];

 $smarty = new Smarty;

 $reg = array();
 $reg["sistema_pk"] = 1;
 $reg["detalle_inmueble"] = $detalle_inmueble;
 $reg["fec_insercion"] =date("Y-m-d H:i:s");
 $reg["estado"] = 1;
 $reg["usuario"] = $_SESSION['sesion_usuario_pk'];
 $rs1 =$db->AutoExecute("tipo_inmueble",$reg,"INSERT");
 
 var_dump($rs1);
 if($rs1){
  header("location:tipo_inmueble.php");
  exit();
 }else{
 	echo "entra a else";
 	$smarty->assign("mensaje","ERROR:los datos no se insertaron!!!");
 	$smarty->assign("direc_css",$direc_css);
 	$smarty->display("tipo_inmueble_nuevo1.tpl");
 }

?>