<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$id_cliente =strip_tags (stripslashes($_POST["cliente"]));
$nro_cuenta =strip_tags (stripslashes($_POST["nro_cuenta"]));
$monto_cuent = strip_tags(stripslashes($_POST["monto_cuenta"]));


$db->debug=true;
if ($id_cliente or $nro_cuenta or $monto_cuent ){
  $sql=$db->Prepare("
                     SELECT *
                     FROM cuentas cu , clientes cl 
                     WHERE cu.id_cuenta = cl.id_cliente
                     AND cl.nombre like ?                
                     AND cu.nro_cuenta like ?
                     AND cu.monto_cuenta like ?




  ");
  $rs3 =$db->GetAll($sql, array("%".$id_cliente."%",$nro_cuenta."%",$monto_cuent."%"));

  if ($rs3){
    echo"<center>
    <table class='listado'>
    <tr>

    <th>cliente</th><th>nro_cuenta</th><th>fecha_apertura</th><th>monto_cuenta</th>
    </tr>";
    foreach($rs3 as $k => $fila) {
      $str = $fila["nombre"];
      $str1 = $fila["nro_cuenta"];
    $str2 = $fila["fecha_apertura"];
      $str3 = $fila["monto_cuenta"];
  
      echo"<tr>
      <td>".resaltar($id_cliente,$str)."</td>
      <td>".resaltar($nro_cuenta,$str1)."</td>
      <td>".($str2)."</td>
      <td>".resaltar($monto_cuent,$str3)."</td>         
      </tr>";
    }
echo"</table>
</center>";

  }else{
    echo "<center><b> el cliente no existe</b></center><br>";
  }
}

?>
