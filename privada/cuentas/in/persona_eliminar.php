<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
$db->debug=true;
$smarty= new  Smarty;


$persona_pk= $_POST['persona_pk'];

$sql = $db->Prepare("SELECT *
	                   FROM usuarios
	                   WHERE estado <> '0'
	                   AND persona_pk = ?	                
	                   ");
$rs1 = $db->execute($sql,array($persona_pk));
if ($rs1) {
	echo "no se puede borrar";
}else{
	$estado = '0';
//var_dump($estado);
$sq = "UPDATE persona set estado='$estado' WHERE persona_pk = ? ";
//var_dump($sq)
$rs = $db->execute($sq,array($persona_pk));
header("Location: personas.php");

/*SET @autopersona_pk :=0;
update persona set id= @autopersona_pk := (@autopersona_pk+1);
alter persona AUTO_increment = 1;*/
}


?>