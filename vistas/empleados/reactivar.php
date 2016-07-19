<?php
$controlador = new ControladorE();
$resultado = $controlador->desactivados($_SESSION['estetica']);


	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Crear Usuario</title>
    <meta charset="utf-8">
</head>
<body>
<div class="panel panel-default">
		<div class="panel-heading">Empleados Desactivados</div>
		<div id="Em" class="panel panel-body ">
        <div align="center" class="table-reponsive"> 
<table class="table" width="50px">
        <thead>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Estetica</th>
        <th>Telefono</th>
        </thead>
        <tbody>
        <?php  while($row = mysqli_fetch_array($resultado)): ?>
            <tr>

                <td><?php echo utf8_encode($row['nombre_usuario']); ?></td>
                <td><?php echo utf8_encode($row['apellido_p']); ?></td>
                <td><?php echo utf8_encode($row['apellido_m']); ?></td>
                <td><?php echo utf8_encode($row['nombre']); ?></td>
                <td><?php echo  $row['telefono']; ?></td>

                <td><a href="?cargar=empleados&controlador=eliminar&&id_usuario=<?php echo $row['id_usuario'];  ?>">Reactivar</a></td>


            </tr>

            <?php



        endwhile;
        ?>


        </tbody>
    </table>
    </div>
</div>
</div>
</div>
</body>
</html>
