<HTML>
<HEAD>
<TITLE>Estatus.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base
include_once("conexion.php"); 
$db = new Conexion();
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update estatus Set descripcion_estatus='$_POST[descripcion]' Where id_estatus='$_POST[id_estatus]'";
$update = $db->update($sSQL);
?>
<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="modificar.php">Volver</a></div>
</BODY>
</HTML> 