<HTML>
<HEAD>
<TITLE>Estatus.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base

include_once("../../clases/conexion.php"); 
$db = new Conexion();
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update estatus Set descripcion_estatus='$_POST[descripcion]' Where id_estatus='$_POST[id_estatus]'";
$update = $db->update($sSQL);
?>
<h1><div align="center">Registro Actualizado</div></h1>
<meta http-equiv="refresh" content="2;url=index.php">
</BODY>
</HTML> 