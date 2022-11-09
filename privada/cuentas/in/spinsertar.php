<?php
session_start();

require_once("../../conexion.php");

 if ($_POST) {
 	//(isset($_POST["Guardar"])) and ($_POST["Guardar"] == "Guardar")
//var_dump($_POST);
$nombres = $_POST["nombres"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$numero_de_celular = $_POST["numero_de_celular"];
$ci = $_POST["ci"];
//var_dump($nombres);
//var_dump($apellido_paterno);
//var_dump($apellido_materno);
//var_dump($numero_de_celular);
//var_dump($ci);
 
$insertar = "INSERT INTO persona(sistema_pk,nombres, apellido_paterno,apellido_materno,numero_de_celular,ci, fec_insercion,fec_modificacion,usuario,estado) VALUES ('1','$nombres','$apellido_paterno','$apellido_materno','$numero_de_celular','$ci', now(),now(),1,1);";
//var_dump($insertar);
$rs = $db->execute($insertar);
if ($rs){
	//sleep(2);
	echo"<script>alert('se ha registrado a la persona con exito');
	</script>";
	
	if (true) {
			header("Location: personas.php");
	}
	
}else{

echo"<script>alert('no se ha registrado');
	window.history.go(-1);</script>";
}
 }else {
 	echo"<script>alert('no llegan los datos');
	window.history.go(-1);</script>";
	}
 
?>