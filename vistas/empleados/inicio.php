<?php
include_once('../../modulos/e_controlador.php');
$controlador = new ControladorE();
$resultado = $controlador->index($_SESSION['empresa']);



;
?>
<div class="panel panel-default">
		<div class="panel panel-body ">
<div align="center" class="table-responsive">
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
        <tr class="success">

        <td ><?php echo utf8_encode($row['nombre_usuario']); ?></td>
        <td><?php echo utf8_encode($row['apellido_p']); ?></td>
        <td><?php echo utf8_encode($row['apellido_m']); ?></td>
        <td><?php echo utf8_encode($row['nombre']); ?></td>
        <td><?php echo utf8_encode($row['telefono']); ?></td>


        <td> <a href="?cargar=empleados&controlador=ver&id_usuario=<?php echo  $row['id_usuario'];  ?>">+Informacion</a> </td>
       <td> <a href="?cargar=empleados&controlador=editar&&id_usuario=<?php echo $row['id_usuario'];  ?>">Editar</a></td>
        <td><a href="?cargar=empleados&controlador=eliminar&&id_usuario=<?php echo $row['id_usuario'];  ?>">Desactivar</a></td>

        </tr>

      <?php



	  endwhile;
	  ?>


     </tbody>
</table>
</div>
</div>
</div>