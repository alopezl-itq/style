<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
include_once('../../clases/conexion.php');
$miConexion = new Conexion();

session_start();


$q=$_POST['q'];
$sql="SELECT servicios_empresa.tiempo_servicio FROM `servicios`, `servicios_empresa`, `descripcion_servicios` WHERE descripcion_servicios.id_descripcion_servicios=servicios_empresa.id_descripcion_servicios AND servicios.id_servicio=servicios_empresa.id_servicio AND servicios_empresa.id_descripcion_servicios = ".$q." AND servicios_empresa.id_empresa = ".$_SESSION['estetica'];
$res=mysqli_query($miConexion,$sql);

while($fila=mysqli_fetch_array($res)){
	echo "<input type='hidden' class='form-control' name='tiempo' id='tiempo' value='".$fila['0']."'/>";
	echo "<td>Duración Aproximada ".$fila['0']." horas</td>";
}
?>