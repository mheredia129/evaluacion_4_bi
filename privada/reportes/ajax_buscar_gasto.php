<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$desc =strip_tags(stripslashes($_POST["desc"]));
$dec_gas =strip_tags (stripslashes($_POST["dec_gas"]));
$mont = strip_tags(stripslashes($_POST["mont"]));
//var_dump($desc);
$db->debug=false;
if ($desc or $dec_gas or $mont){
  $sql3=$db->Prepare("

SELECT *
	                   FROM gastos g,domicilios d,tipos_gastos tg,efectivo_disponible ed 
	                   WHERE  g.domicilio_pk= d.domicilio_pk
	                   AND    g.tipo_gasto_pk=tg.tipo_gasto_pk
	                   AND    g.efectivo_disponible_pk=ed.efectivo_disponible_pk	          
	                   AND g.descripcion like ?
                       AND g.fecha_gasto like ?
                       AND g.monto like ?
	                   AND g.estado <>'0'
	                   AND d.estado <>'0'	
	                   AND tg.estado <>'0'
	                   AND ed.estado <>'0'                          
  ");
  $rs3 =$db->GetAll($sql3, array($desc."%",$dec_gas."%",$mont."%"));
  // code...
//var_dump("");
//var_dump($rs3);

  if ($rs3){
    echo"<center>
    <table class='listado'>
    <tr>
    <th>DESCRIPCION</th><th>FECHA GASTO</th><th>MONTO</th><th>MONTO DISPONIBLE</th><th>?</th>
    </tr>";
    foreach($rs3 as $k => $fila) {
      
      $str1 = $fila["descripcion"];
      $str2 = $fila["fecha_gasto"];
      $str3 = $fila["monto"];
       $str4 = $fila["monto_dis"];
      echo"<tr>
      
      <td>".resaltar($desc,$str1)."</td>
      <td>".resaltar($dec_gas,$str2)."</td>
      <td>".resaltar($mont,$str3)."</td>  
      <td>".($str4)."</td>
      <td align='center'>
					<input type='radio' name='option' value='' onclick='mostrar(".$fila["gasto_pk"].")'>
					</td>
  
      </tr>";
    }
echo"</table>
</center>";

  }else{
    echo "<center><b> el gasto no existe</b></center><br>";
  }
}

?>
