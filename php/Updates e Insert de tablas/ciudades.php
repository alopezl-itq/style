<HTML>
<HEAD>
<TITLE>Ciudades.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base
include_once("conexion.php"); 
$db = new Conexion();
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update Ciudades Set descripcion_ciudades='$_POST[ciudad]', id_municipio='$_POST[id_municipio]' Where id_ciudad='$_POST[id_ciudad]'";
$update = $db->update($sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="modificar.php">Volver</a></div>
</BODY>
</HTML> 