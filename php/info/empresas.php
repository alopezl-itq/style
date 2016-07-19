<HTML>
<HEAD>
<TITLE>Empresas.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base

include_once("../../clases/conexion.php"); 
$db = new Conexion();
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update empresas Set administrador='$_POST[administrador]',nombre='$_POST[nombre]',eslogan='$_POST[eslogan]',imagen='$_POST[imagen]',cliente_a='$_POST[cliente_a]',cliente_b='$_POST[cliente_b]',cliente_c='$_POST[cliente_c]',cliente_d='$_POST[cliente_d]',id_estatus='$_POST[id_estatus]',calle='$_POST[calle]',no_int='$_POST[no_int]',no_ext='$_POST[no_ext]',id_estado='$_POST[id_estado]',id_ciudad='$_POST[id_ciudad]' WHERE id_empresa='$_POST[id_empresa]'";
$update = $db->update($sSQL);
?>
<h1><div align="center">Registro Actualizado</div></h1>
<meta http-equiv="refresh" content="2;url=index.php">
</BODY>
</HTML> 