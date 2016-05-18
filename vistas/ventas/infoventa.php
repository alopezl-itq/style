<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">		
<title>Informaciòn de Venta</title>
              
</head>
<body>
<div id='infoventa'>
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

</table>
</div>
</body>
</html>