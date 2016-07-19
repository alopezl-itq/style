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
$sSQL="INSERT INTO tipo_usuarios(descripcion_tipo_usuarios) VALUES ('$_POST[descripcion]')";
$insert = $db->insert($sSQL);
?>
<h1><div align="center">Registro Actualizado</div></h1>
<meta http-equiv="refresh" content="2;url=index.php">
</BODY>
</HTML> 