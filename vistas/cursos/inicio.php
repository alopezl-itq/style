<?php  

include_once('../../modulos/enrutador.php');
include_once('../../modulos/c_cursos.php');


$controlador = new c_cursos();
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
						<th>Descripción</th>
						<th>Editar</th>
						<th>Cancelar</th>
						<th>Archivo adicional</th>
					</tr>
				</thead>
				<tbody>
			<?php
				$curso = new cursos();
				$resultado4=$curso->vercursos();
				while($row=mysqli_fetch_array($resultado4)){//index.php?cargar=cursos&controlador=eliminar&id=".$row['id_curso']. href para mandar llamar al php que cancelara
					echo "<tr class='success'><td>".utf8_encode($row['nombre_curso'])."</td><td>".($row["descripcion_cursos"])."</td><td><a class='glyphicon glyphicon-pencil' href=index.php?cargar=cursos&controlador=ver&id=".$row['id_curso']."></a></td></td><td><a class='glyphicon glyphicon-remove' href=></a></td><td><a href='".$row['archivo']."' target='blank'>Ver +</a></td></tr>";
				}
			?>
				</tbody>
			</table>
		</div>
	</div>




</body>
</html>