<?php
session_start();
require_once("../../conexion.php");

$persona_pk= $_POST['persona_pk'];
$ci = $_POST['ci'];
$nombres = $_POST['nombres'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$numero_de_celular = $_POST['numero_de_celular'];
var_dump($persona_pk);

$sql = "UPDATE persona set ci='$ci', nombres='$nombres', apellido_paterno='$apellido_paterno', apellido_materno='$apellido_materno',numero_de_celular='$numero_de_celular' WHERE persona_pk = '$persona_pk'";
var_dump($sql);
$rs = $db->execute($sql);
header("Location: personas.php");
?>