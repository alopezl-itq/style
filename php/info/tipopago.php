<HTML>
<HEAD>
<TITLE>Sexo.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base

include_once("../../clases/conexion.php"); 
$db = new Conexion();
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update tipo_pago Set descripcion_tipo_pago='$_POST[descripcion]' Where id_tipo_pago='$_POST[id_tipo_pago]'";
$update = $db->update($sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<meta http-equiv="refresh" content="2;url=index.php">
</BODY>
</HTML> 