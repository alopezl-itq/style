<HTML>
<HEAD>
<TITLE>Productos.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base
include_once("conexion.php"); 
$db = new Conexion();
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update productos Set precio_venta='$_POST[precio_venta]', precio_compra='$_POST[precio_compra]', descripcion_productos='$_POST[descripcion]', id_proveedor='$_POST[id_proveedor]' Where id_productos='$_POST[id_producto]'";
$update = $db->update($sSQL);
?>
<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="modificar.php">Volver</a></div>
</BODY>
</HTML> 