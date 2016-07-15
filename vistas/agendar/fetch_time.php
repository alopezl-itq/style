<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
include_once('../../clases/Conexion.php');
$miConexion = new Conexion();

session_start();


$q=$_POST['q'];

$res=mysqli_query($miConexion,"SELECT servicios_empresa.tiempo_servicio FROM `servicios`, `servicios_empresa`, `descripcion_servicios` WHERE descripcion_servicios.id_descripcion_servicios=servicios_empresa.id_descripcion_servicios AND servicios.id_servicio=servicios_empresa.id_servicio AND servicios_empresa.id_descripcion_servicios = ".$q." AND servicios_empresa.id_empresa = ".$_SESSION['empresa']);

while($fila=mysqli_fetch_array($res)){
	echo "<input type='hidden' class='form-control' name='tiempo' id='tiempo' value='".$fila['0']."'/>";
	echo "<td>Duración Aproximada ".$fila['0']." horas</td>";
}
?>