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



        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/font-awesome.css">
        <link rel="stylesheet" href="../../css/animate.css">
        <link rel="stylesheet" href="../../css/templatemo_misc.css">
        <link rel="stylesheet" href="../../css/templatemo_style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="../../js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>

</head>

<body>
	<center>
	<?php
		echo ($_SESSION['nombre']); ?>
	</center>



	<div class="panel panel-default">
		<div class="panel-heading">  Estéticas</div>
		<div id="muestraesteticas" class="panel panel-body ">
			<table class="table" width="50px">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Estatus</th>
						<th><a href="#" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-pencil"></span> Editar
        </a></th>
						<th ><a href="#" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-remove"></span> Eliminar
        </a></th>
					</tr>
				</thead>
				<tbody>
			<?php
				
				
				$estetica = new estetica();
				$resultado4=$estetica->verempresas();
				while($row=mysqli_fetch_array($resultado4)){
					echo "<tr class='success'><td>".utf8_encode($row['nombre'])."</td><td >".utf8_encode($row["descripcion_estatus"])."</td><td><a  class='glyphicon glyphicon-pencil' href=index.php?cargar=esteticas&controlador=ver&id=".$row['id_empresa']."></a></td></td></td><td> <a  class='glyphicon glyphicon-remove' href=index.php?cargar=esteticas&controlador=eliminar&id=".$row['id_empresa']."></a></td></tr>";
				}
			?>
				</tbody>
			</table>
		</div>
	</div>




</body>
</html>