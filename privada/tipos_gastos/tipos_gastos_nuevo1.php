<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);

$__tipo_gasto =$_POST["tipo_gasto"];


$db->debug=true;
 $smarty = new Smarty;

 $reg = array();
 var_dump($reg);
 $reg["sistema_pk"] = 1;
$reg["tipo_gasto"] =$__tipo_gasto;

 $reg["fec_insercion"] = date("Y-m-d H:i:s");
 $reg["estado"] = 1;
 $reg["usuario"] = $_SESSION['sesion_usuario_pk'];
 $rs1 =$db->AutoExecute("tipos_gastos",$reg,"INSERT");

 if($rs1){
  header("location:tipos_gastos.php");
  exit();
 }else{
 	$smarty->assign("mensaje","ERROR:los datos no se insertaron!!!");
 	$smarty->assign("direc_css",$direc_css);
 	$smarty->display("tipos_gastos_nuevo1.tpl");
 }


?>