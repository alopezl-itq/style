<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">		
<title>Seleccionar Cliente</title>

<script type="text/javascript">
	
	function ClienteSelect()
{
	document.getElementById("ClienteSel").style.display="block";
	document.getElementById("NuevoC").style.display="none";
	var selCliente=$F("usuarioSelec");
	document.getElementById("clienteNe").value=selCliente;
	}
</script>

              
</head>
<body>

<div id="selectventa">
	
<table><tr><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><br>Datos del Cliente<br></td></tr>
<td>Nombre:<input type="text" name="clienteNe" id="clienteN"></td>
<td>Direccion:<input type="text" name="clienteN" id="clienteN"></td>
<td>Ciudad:<select ><option value="1">seleccione</option>
<option value="Queretaro">Queretaro</option>
<select></td>
<td>Estado:<select ><option value="1">seleccione</option>
<option value="Queretaro">Queretaro</option>
<select></td><td>Telefono:</td><td><input type="text" name="clienteN" id="clienteN"></td>
<td>E-mail:<input type="text" name="clienteE" id="clienteE"></td></table>

</div>


<br><br><br><br><br>
<table align="center">
<tr  style="background-color:blue;color:white">
<th>Nombre</th><th>Marca</th><th>Codigo</th><th>Cantidad</th><th>Tamaño</th><th>Precio</th><th>Existencia</th><th>Editar</th><th>Eliminar</th>
</tr>
<tr><th><select ><option value="1">seleccione</option>
<option value="shampoo">shampoo</option>
<select></th>
<th><select ><option value="1">seleccione</option>
<option value="Loreal">Loreal</option><select></th>
<th><select ><option value="1">seleccione</option>
<option value="shampoo1223">shampoo1223</option><select></th>
<th><input type="text" name="cantidad" id="cantidad" value=""></th>
<th><select ><option value="1">seleccione</option>
<option value="chico">Chico</option>
<option value="mediano">Mediano</option>
<option value="grande">Grande</option><select></th>
<th><input type="number" value="$" name="precio"></th>
<th>10</th>
<th><img src="../img/editar.png"  width='18' height='23' alt='Modificar' onClick="mostrarModifica()" style="cursor:pointer"></th>
<th><img  src="../img/baja.png" alt='Eliminar' width='20' height='25' onClick="mostrarBaja()" style="cursor:pointer"></th></tr>
</table>
</div>
</body>
</html>