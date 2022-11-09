<?php 

session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
//$db->debug=true;
if ((isset($_POST["accion"])) and ($_POST["accion"] == "Ingresar")) {
	$nick = $_POST["hi"];
	$password =$_POST["password"];

	


	$sql1 = $db->prepare("SELECT u.clave
		                   FROM usuarios u
		                   WHERE u.usuario1 = ?
		                   AND  u.estado <> '0' 
		                   ");
	$rs1 =$db->GetAll($sql1, array($nick));

$myfile = fopen("sis_cuentas_domicilio_MAX_HEREDIA_SORUCO.txt", "w") or die("Unable to open file!");
fwrite($myfile, $rs1);
fclose($myfile);

	if($rs1){
		$clave_db =$rs1[0]["clave"];
		//echo"$clave_db";
		//echo" entra  a  la  clave ";
	}
	else{
		$clave_db=0;
	
	//echo" no  esta la clave  bien ";
	}

	$sql2 =$db->prepare(" SELECT p.*
		                    FROM persona p, usuarios u
		                    WHERE u.usuario1 =?
		                    AND u.persona_pk = p.persona_pk
		                    AND p.estado <> '0'
		                    AND u.estado <> '0'
                                ");
	$rs2 =$db->GetAll($sql2,array($nick));
	
	if($rs2){
		//echo"holaaaaaaaaa llega a rs2";
		$nombres = $rs2[0]["nombres"];
		$apellido_paterno=$rs2[0]["apellido_paterno"];
		$apellido_materno=$rs2[0]["apellido_materno"];
		$nom_completo = $nombres." ".$apellido_paterno." ".$apellido_materno;

	}else{
		$nom_completo ='';
		echo"el nombre  no esta  bien ";
	}


	if (password_verify($password, $clave_db)) {
			//echo"entra paseord";
		//echo"$password";
		$sql = $db->prepare(" SELECT u.*, ur.rol_pk, r.rol
                                FROM usuarios u
                                INNER JOIN usuarios_roles ur 

                                ON   u.usuario_pk = ur.usuario_pk
                                INNER JOIN  roles r 

                                ON   ur.rol_pk = r.rol_pk
                                WHERE u.usuario1=?
                                AND u.estado <>'0'
                                AND ur.estado <>'0'
                                AND r.estado  <>'0'

                                ");
		$rs = $db->GetAll($sql, array($nick));
		if($rs){
			echo"1";
			foreach($rs as $k => $linea){
				echo"2";
				$_SESSION["sesion_usuario_pk"]=$linea["usuario_pk"];
				$_SESSION["sesion_usuario"]=$linea["usuario1"];
				$_SESSION["sesion_rol_pk"] = $linea["rol_pk"];
				$_SESSION["sesion_rol"] = $linea["rol"];
				$_SESSION["sesion_usuario_pk"];
			}
			$mensage = "DATOS CORRECTOS";
			//echo " valor  de sesion_rol_pk --->".$_SESSION["sesion_rol_pk"];
			//echo " valor  de sesion_usuario--->".$_SESSION["sesion_usuario"];
			$mensage1= "BIENVENIDO AL SISTEMA"; 
			
		}else{
			$mensage = "DATOS INCORRECTOS1";
			$nom_completo='';
			$mensage1= "POR FAVOR INTENTE NUEVAMENTE"; 
		}
	}
/*
ver
*/
	else{
		$mensage = "DATOS INCORRECTOS2";
		$mensage1= "POR FAVOR INTENTE NUEVAMENTE";
		$nom_completo='';
	}

	// code...
}else{
	$mensage = "CERRANDO SESION";
	$mensage1= "SE ESTA SALIENDO DEL SISTEMA";
	$nom_completo='';
	echo"saliendo";
	session_destroy();
}
$smarty = new Smarty;
$smarty->assign("mensage",$mensage);
$smarty->assign("mensage1",$mensage1);
$smarty->assign("nom_completo",$nom_completo);
$smarty->assign("direc_css",$direc_css);
$smarty->display("index.tpl");

?>