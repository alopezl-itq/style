<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">		
<title>Venta</title>

<script type="text/javascript">
	function NuevoCliente()
{
	document.getElementById("NuevoC").style.display="block";
document.getElementById("ClienteSel").style.display="none";	}
	function ClienteSelect()
{
	document.getElementById("ClienteSel").style.display="block";
	document.getElementById("NuevoC").style.display="none";
	var selCliente=$F("usuarioSelec");
	document.getElementById("clienteNe").value=selCliente;
	}
</script>
//hola
              
</head>
<body>
<table align="center">
<TR align="center">
<td ></td> 
<td align="right"><a  onClick="ocultar()" align="center" style="cursor:pointer"></a></td>
</TR></table>
<table align="center"> <tr><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><h1>Modulo de Ventas</h1></td></tr>
<tr><tr>
	<td>No de Folio. <?php echo ("<input type='number' name='folio' value='d' readonly>")?></td>
	<td>&nbsp;&nbsp;</td>
	<td>&nbsp;&nbsp;&nbsp;No. Venta <input type="text" name="cliente" id="clave"></td>
	<td>&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;Fecha <input type="date" name="fecha"></td>
</tr><tr><td><br>&nbsp;&nbsp;</td><td><br>Estetica:<input type="text" name="estetica" id="estetica"></td>
<td><br>&nbsp;&nbsp;</td><td><br>&nbsp;&nbsp;&nbsp;Vendedor<input type="text" name="clave" id="clave"></td></tr>
<tr>
<td></td><td><br><br><br>&nbsp;<input type="button" value="Nuevo Cliente" Onclick="NuevoCliente()"></td>
<td><br><br>&nbsp;<select name="usuarioSelec" Onchange="ClienteSelect()">
		<option value="0">--Seleccione un Cliente --</option>
		<option value="Nestor">--Nestor --</option>
	</td></tr>
</table>
<div id="NuevoC" style="display:none">
	<br>
<table><tr><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;Datos del Cliente</td></tr>
<td>Nombre:<input type="text" name="clienteN" id="clienteN"></td>
<td>Direccion:<input type="text" name="clienteD" id="clienteD"></td>
<td>Ciudad:<select ><option value="1">seleccione</option>
<option value="Queretaro">Queretaro</option>
<select></td>
<td>Estado:<select ><option value="1">seleccione</option>
<option value="Queretaro">Queretaro</option>
<select></td><td>Telefono:<input type="text" name="clienteT" id="clienteT">
	<td>E-mail:<input type="text" name="clienteE" id="clienteE"></td></table>

</div>
<div id="ClienteSel" style="display:none">
	
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
<table align="center"><tr><th>
<br>Tipo de Venta: <br>
Efectivo <input type="radio" name="tipoV" id="tipoV" value="efectivo">
Tarjeta  <input type="radio" name="tipoV" id="tipoV" value="tarjeta">
Cheque   <input type="radio" name="tipoV" id="tipoV" value="cheque">
<br><br>
</th></tr></table>
<table align="center">
<tr  style="background-color:blue;color:white">
<th>Venta</th><th>Servicio/Producto</th><th>Cantidad</th><th>Tipo de Pago</th><th>Precio Unitario</th><th>Descuento</th><th>Total</th>
</tr>
<tr><th><input type="number"></th><th><input type="number"></th><th><input type="number"></th><th><input type="number"></th><th><input type="number"></th><th><input type="number"></th><th><input type="number"></th></tr>
<tr><th><input type="number"></th><th><input type="number"></th><th><input type="number"></th><th><input type="number"></th><th><input type="number"></th><th><input type="number"></th><th><input type="number"></th></tr>
<tr><th><input type="number"></th><th><input type="number"></th><th><input type="number"></th><th><input type="number"></th><th><input type="number"></th><th><input type="number"></th><th><input type="number"></th></tr>
</table>
<table align="center">
<tr><th>Pago Total&nbsp;&nbsp;<input type="text"></th><th>Descuento&nbsp;&nbsp;<input type="text"></th><th>Cantidad de Articulos&nbsp;&nbsp;<input type="text"></th><th>SubTotal&nbsp;&nbsp;<input type="text"></th></tr>
<tr><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total&nbsp;<input type="text"></th></tr>
<tr><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IVA&nbsp;&nbsp;<input type="text"></th></tr>
<tr><th></th><th></th><th></th><th>Referencia<input type="text"></th></tr>
<tr><th>&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Button" value="Generar Venta"></th><th>&nbsp;&nbsp;</th></tr>

</table>
</body>
</html>