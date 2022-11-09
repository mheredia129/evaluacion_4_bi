<?php
session_start();

require_once("../smarty/libs/Smarty.class.php");
require_once("../conexion.php");

$smarty = new Smarty;

if (isset($_SESSION["sesion_usuario_pk"])) {
	
	$sesion = array ("usuario_pk" =>$_SESSION["sesion_usuario_pk"],
	                   "usuario" => $_SESSION["sesion_usuario"],
	                     "rol_pk"=>$_SESSION["sesion_rol_pk"],
	                        "rol"=> $_SESSION["sesion_rol"],

);
	$login ="NO";
	// code...
}else {
	$sesion = array ("usuario_pk" =>"-----",
		                "usuario" =>"-----",
		                   "rol_pk"=>"-----",
		                      "rol"=>"-----",

		            );
	$login="SI";
}
$sql1=$db->prepare("SELECT *
	                 FROM sistema
                     WHERE sistema_pk = 1
	                  AND estado <>'0'
	               ");
$rs1 =$db->GetAll($sql1);
$nombre = $rs1[0]["nombre"];
$logo = $rs1[0]["logo"];
$smarty->assign("nombre",$nombre);
$smarty->assign("logo",$logo);

$smarty->assign("sesion",$sesion);
$smarty->assign("login",$login);
$smarty->assign("direc_css",$direc_css);
$smarty->display("menu_sup.tpl");
?>