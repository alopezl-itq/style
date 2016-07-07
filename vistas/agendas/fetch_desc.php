<?php
//fetch_municipio.php

$sql="SELECT descripcion_servicios.id_descripcion_servicios, descripcion_servicios.descripcion FROM `servicios`, `servicios_empresa`, `descripcion_servicios` WHERE descripcion_servicios.id_descripcion_servicios=servicios_empresa.id_descripcion_servicios AND servicios.id_servicio=servicios_empresa.id_servicio AND servicios_empresa.id_servicio = ".$_POST['descId']." GROUP BY id_descripcion_servicios"; $resul=mysql_query($sql); 
		while($row=mysql_fetch_array($resul)){
		echo "<option value='".$row['0']."'> ". $row['1']."</option>";	
		}
?>