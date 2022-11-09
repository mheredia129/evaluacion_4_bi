<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
//var_dump($_POST);

$persona_pk = $_POST["persona_pk"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$hash=password_hash($clave, PASSWORD_DEFAULT);
$db->debug=true;
 $smarty = new Smarty;

 $reg = array();
 //var_dump($reg);
 $reg["persona_pk"] = $persona_pk;
 $reg["usuario1"] =$usuario;
 $reg["clave"] = $hash;
 $reg["fec_insercion"] = date("Y-m-d H:i:s");
 $reg["estado"] = 1;
 $reg["usuario"] = $_SESSION['sesion_usuario_pk'];
 $rs1 =$db->AutoExecute("usuarios",$reg,"INSERT");
 //var_dump($rs1)

if($rs1){
  header("location:usuarios.php");
  exit();
 }else{
 	$smarty->assign("mensaje","ERROR:los datos no se insertaron!!!");
 	$smarty->assign("direc_css",$direc_css);
 	$smarty->display("usuario_nuevo1.tpl");
 }

?>