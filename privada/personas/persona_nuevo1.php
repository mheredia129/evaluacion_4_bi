<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);
$nombres = $_POST["nombres"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$numero_de_celular = $_POST["numero_de_celular"];
$ci = $_POST["ci"];
var_dump($nombres);
var_dump($apellido_paterno);
var_dump($apellido_materno);
var_dump($numero_de_celular);
var_dump($ci);

$db->debug=true;
 $smarty = new Smarty;

 $reg = array();
 var_dump($reg);
 $reg["sistema_pk"] = 1;
 $reg["nombres"] =$nombres;
 $reg["apellido_paterno"] = $apellido_paterno;
 $reg["apellido_materno"] = $apellido_materno;
 $reg["numero_de_celular"] = $numero_de_celular;
 $reg["ci"] = $ci;
 $reg["fec_insercion"] = date("Y-m-d H:i:s");
 $reg["estado"] = 1;
 $reg["usuario"] = $_SESSION['sesion_usuario_pk'];
 $rs1 =$db->AutoExecute("persona",$reg,"INSERT");

 if($rs1){
  header("location:personas.php");
  exit();
 }else{
 	$smarty->assign("mensaje","ERROR:los datos no se insertaron!!!");
 	$smarty->assign("direc_css",$direc_css);
 	$smarty->display("persona_nuevo1.tpl");
 }

?>