<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/colores.css">
    <meta charset="UTF-8">
    <script type="text/javascript" src="../js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/gastos.js"></script>
    <link rel="stylesheet" type="text/css" href="../calendario/tcal.css">
    <script type="text/javascript" src="../calendario/tcal.js"></script>
</head>
<body>
    <div class="estil">
    <form action="gastos_nuevo1.php" method="post" name="gastos" class="estiloin">
   
            <p><h1>REGISTRAR NUEVO INGRESO </h1></p> 
            <b>nro de casa (*)</b>
            <select name="domicilio_pk">
                <option value=""> selecione</option>
                    {foreach item=r from=$domicilios}
                    <option value="{$r.domicilio_pk}">{$r.numero_casa}--{$r.direccion}</option>
                    {/foreach}
                        {foreach item=r from=$domicilio}
                        <option value="{$r.domicilio_pk}">{$r.numero_casa}-{$r.direccion}-
                        </option>
                        {/foreach}
            </select><br>


            <b>efectivo disponible (*)</b>
            <select name="efectivo_disponible_pk">
                <option value=""> selecione</option>
                    {foreach item=r from=$efectivo_disponible}
                    <option value="{$r.efectivo_disponible_pk}">{$r.monto_dis}</option>
                   
            </select>
                     
            <p>MONTO<input type="text" size="15"name="monto"  class="otro" >(*)</p> 

            <p>DESCRIPCION<br><textarea name="descripcion" cols="40" rows="5" ></textarea>(*)</p>
            <p> 
                <p>
                    <input type="text" name="date" placeholder="fecha del ingreso del monto"class="tcal">
                </p>


        
                <input type="hidden" name="accion" value="">
                 <input type="button" name="aceptar"  onclick="validar();" class="bt" value="aceptar">
                  <input type="button" name="cancelar" onclick="javascript:location.href='ingresos_economicos.php';" class="tb" value="CANCELAR">
            </p>
             {/foreach}
            <p>
                <b>(*)Campos Obligatorios</b>
            </p>
                                   
         

    </form>
    </div>
</body>
</html>