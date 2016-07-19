<HTML>
<HEAD>
<TITLE>Productos.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base

include_once("../../clases/conexion.php"); 
$db = new Conexion();
//Creamos la sentencia SQL y la ejecutamos
$sSQL="INSERT INTO productos (precio_venta, precio_compra, descripcion_productos, id_proveedor, id_marca, id_linea_productos, precio_sugerido) VALUES ('$_POST[precio_venta]','$_POST[precio_compra]','$_POST[descripcion]','$_POST[id_proveedor]','$_POST[id_marca]','$_POST[id_linea_productos]','$_POST[precio_sugerido]')";
$insert = $db->insert($sSQL);
echo $sSQL;
?>
<h1><div align="center">Registro Actualizado</div></h1>
<meta http-equiv="refresh" content="2;url=index.php">
</BODY>
</HTML> 