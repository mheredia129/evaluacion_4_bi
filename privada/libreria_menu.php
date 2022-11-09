<?php
//$db->debug=true;
//session_start();
if (isset($_SESSION["sesion_rol_pk"])) {
	//isset($_SESSION["session_rol_pk"])
//echo"entra  a  session_rol_pk";
	$sql = $db->Prepare("SELECT ac.*, op.opcion_pk, op.orden, op.contenido, gr.grupo_pk, gr.grupo, op.opcion
		FROM accesos ac, opciones op, grupos gr
		WHERE ac.rol_pk = '".$_SESSION["sesion_rol_pk"]."'
		AND ac.opcion_pk = op.opcion_pk
		AND op.grupo_pk = gr.grupo_pk
		AND ac.estado <> '0'
		AND op.estado <> '0'
		AND gr.estado <> '0'
		ORDER BY op.grupo_pk, op.orden
");
	
	$rs = $db->Execute($sql);
	
	$sql2 =$db->Prepare(
	"SELECT ac.*, op.opcion_pk, op.orden, op.contenido, gr.grupo_pk, gr.grupo, op.opcion
		FROM accesos ac, opciones op, grupos gr
		WHERE ac.rol_pk ='".$_SESSION["sesion_rol_pk"]."'
		AND ac.opcion_pk = op.opcion_pk
		AND op.grupo_pk = gr.grupo_pk
		AND ac.estado <> '0'
		AND op.estado <> '0'
		AND gr.estado <> '0'
		ORDER BY op.grupo_pk, op.orden
");
	$rs2 = $db->Execute($sql2);
	$nick = $_SESSION["sesion_usuario"];
	//echo" $nick  ";

} else {
	$rs="";
	$rs2= "";
	$nick ="";
}


if ($nick !=""){

	echo"<div id='header'>
	      <ul class ='nav'>";
	      $grup="";
	       foreach ($rs as $r => $fila){	      
	      	echo"<li>";
	      	if ($grup !=$fila["grupo"]) {
	      		echo"<a onclick='location.href=\"#\"' style='cursor:pointer;'>".$fila["grupo"]."</a>";
	      		$grup = $fila["grupo"];
	      	}
	      	echo"<ul>";
	      	foreach($rs2 as $t => $fila2){
	      			if ($grup == $fila2["grupo"] ) {
	      				$dir_php = $_SERVER["PHP_SELF"];
	      				$cuerp = strpos($dir_php, "cuerpo.php");
	      				if($cuerp == false or $cuerp== "" ){
	      					
	      					echo"<li><a onclick ='location.href=\"../".$fila2["contenido"]."\"' target ='cuerpo' style='cursor:pointer;'>".$fila2["opcion"]."</a></li>";
	      	
	      				} else 
	      			
	      				echo "<li><a onclick='location.href=\"".$fila2["contenido"]."\"' target ='cuerpo' style='cursor:pointer;'>".$fila2["opcion"]."</a></li>";
	      	      }
	      	}
	      	echo"</ul>";
	      	echo"</li>";
	      }
	      //echo"<li>";
	  
	      if ($cuerp == false){
	      	
	      	echo"<a onclick='location.href=\"../claves/\"'><input type='button' name='accion' value='cerrar sesion' class='b'></a>";

	      }else{
	      	echo"<a onclick='location.href=\"claves/\"'><input type='button' name='accion' value='cerrar sesion'
	      	style='cursor:pointer; font-weight:bold;height:25px; ' class='boton_cerrar'></a>";
	      	 
	      }
	     // echo"</li>";

	      echo"</ul>
	      </div>"; 
	       if($cuerp == !false){
	  	 echo"<div id='welcome'>
	  BIENVENIDOS
	   </div>";
	  }
	  }    

	 

	
	 



?>