<HTML>
<HEAD>
<TITLE>TipoRed.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base
include_once("conexion.php"); 
$db = new Conexion();
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update tipo_redes_sociales Set descripcion_red_social='$_POST[descripcion]' Where id_tipo_red_social='$_POST[id_tipo_red_social]'";
$update = $db->update($sSQL);
?>
<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="modificar.php">Volver</a></div>
</BODY>
</HTML> 