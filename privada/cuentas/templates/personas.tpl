<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
function buscar_personas(){
var d1,d2,d3,ajax,url,param,contenedor;
contenedor = document.getElementById('personas1');
d1 =document.formu.cliente.value;
d2 =document.formu.nro_cuenta.value;
d3 =document.formu.monto_cuenta.value;

ajax = nuevoAjax();
url = "ajax_buscar_cuentas.php"
param = "cliente="+d1+"&nro_cuenta="+d2+"&monto_cuenta="+d3;
ajax.open("POST", url, true);
ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
ajax.onreadystatechange = function(){
	if (ajax.readyState == 4){
		contenedor.innerHTML = ajax.responseText;
	}
}
ajax.send(param);
}
</script>
</head>
<body>
	<div class="titulo_listado">
		<h1>
			CUENTAS
		</h1>
		
	</div>

	<center>		
		<form action="#" method="post" name="formu">
		
		
		 
		<table border="1" class="listado">
			<tr>
				 <th>
			<b>*selecione al cliente</b><br>
       	    <select name="cliente" onchange="buscar_personas()">
       	    <option value="">--selecione--</option>   
       
       	       {foreach item=r from=$personas}
                <option value="{$r.nombre}">{$r.nombre}</option>     
                {/foreach}
            
       	     </select>
          </th>
			
					<th>
						<b>nro_cuenta</b><br>
						<input type="text" name="nro_cuenta" value="" size="10" onkeyUp="buscar_personas()">
					</th>
					<th>
						<b>monto_cuenta</b><br> 
						<input type="text" name="monto_cuenta" value="" size="10" onkeyUp="buscar_personas()">
					</th>
						
			</tr>															
		</table>

			
		</form>
	</center>

	<center>
		<div id="personas1">
		<table class="listado">
			<tr>
			
				<th>NRO</th><th>CLIENTE</th><th>Nº DE CUENTA</th><th>FECHA DE APERTURA</th><th>MONTO DE CUENTA</th>
				
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$personas}
		
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.nombre}-{$r.ap}-{$r.am}</td>
				<td>{$r.nro_cuenta}</td>
				<td align="center">{$r.fecha_apertura}</td>
				<td align="center">{$r.monto_cuenta}</td>
			

				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>

	
      </div>
	</center>
	
</body>
</html>