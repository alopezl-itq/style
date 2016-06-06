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
$sSQL="INSERT INTO estatus(descripcion_estatus) VALUES ('$_POST[descripcion]')";
$insert = $db->insert($sSQL);
?>
<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="modificar.php">Volver</a></div>
</BODY>
</HTML> 