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
<table align="center" style="background-color:white;color:#E80078"> <tr><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td style="background-color:white;color:#E80078"><h1></h1></td></tr>
<tr><tr>
	<td>Estetica: Estetica 1</td>
	<td>&nbsp;&nbsp;</td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vendedor<input type="text" name="id_usuario" id="id_usuario" placeholder="Nombre del Vendedor" value="Empleado 1"></td>
	<td>&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha: <?php echo date("j/F/Y"); ?></td>
</tr><tr><td><br>&nbsp;&nbsp;</td><td><br><input type="hidden" name="id_empresa" id="id_empresa" placeholder="Nombre de Estetica"></td>
<input type="hidden" name="id_ventas" id="id_ventas" placeholder="Nombre de Estetica"></td>
<td><br>&nbsp;&nbsp;</td><td><br>&nbsp;&nbsp;&nbsp;<input type="hidden" name="fecha" id="fecha" placeholder="Nombre del Vendedor" value="1"></td></tr>

</table>
</div>
</body>
</html>