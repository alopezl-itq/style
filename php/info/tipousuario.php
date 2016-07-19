<HTML>
<HEAD>
<TITLE>TipoUsuarios.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base

include_once("../../clases/conexion.php"); 
$db = new Conexion();
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update tipo_usuarios Set descripcion_tipo_usuarios='$_POST[descripcion]' Where id_tipo_usuario='$_POST[id_tipo_usuario]'";
$update = $db->update($sSQL);
?>
<h1><div align="center">Registro Actualizado</div></h1>
<meta http-equiv="refresh" content="2;url=index.php">
</BODY>
</HTML> 