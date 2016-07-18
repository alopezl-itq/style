<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
include_once('../../clases/conexion.php');
$miConexion = new Conexion();

session_start();
$q=$_POST['q'];

$res=mysqli_query($miConexion,"SELECT descripcion_servicios.id_descripcion_servicios, descripcion_servicios.descripcion FROM `servicios`, `servicios_empresa`, `descripcion_servicios` WHERE descripcion_servicios.id_descripcion_servicios=servicios_empresa.id_descripcion_servicios AND servicios.id_servicio=servicios_empresa.id_servicio AND servicios_empresa.id_empresa = ".$_SESSION['estetica']." AND servicios_empresa.id_servicio = ".$q." GROUP BY id_descripcion_servicios");

?>
<p>Descripción</p>
<select class="form-control" name="desc" id="desc" onchange="loadT(this.value)">
<option value="">Seleccionar...</option>
<?php while($fila=mysqli_fetch_array($res)){
echo "<option value='".$fila['0']."'> ". $fila['1']."</option>";
 } ?>
 </select>