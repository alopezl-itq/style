<?php  
include_once('../../modulos/enrutador.php');
include_once('../../modulos/c_estetica.php');
$controlador = new c_estetica();
//$resultado = $controlador->index();
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inicio</title>
</head>
<body>
	<div class="panel panel-default">
		<div class="panel-heading">  Estéticas</div>
		<div id="muestraesteticas" class="panel panel-body ">
			<table class="table" width="50px">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Estatus</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
			<?php
				$estetica = new estetica();
				$resultado4=$estetica->verempresas();
				while($row=mysqli_fetch_array($resultado4)){
					echo "<tr class='success'><td>".$row['nombre']."</td><td>".utf8_encode($row["descripcion_estatus"])."</td><td><a href=index.php?cargar=esteticas&controlador=ver&id=".$row['id_empresa'].">Editar</a></td></td><td><a href=index.php?cargar=esteticas&controlador=eliminar&id=".$row['id_empresa'].">Eliminar</a></td></tr>";
				}
			?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>