<?php
include_once('../../modulos/e_controlador.php');
include_once('../../modulos/controlador.php');
$controlador = new ControladorE();
$resultado = $controlador->index($_SESSION['estetica']);





;
?>



<div class="panel panel-default">
		<div class="panel-heading">Empleados Activos</div>
		<div id="Em" class="panel panel-body ">
<table class="table" width="80px" >
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
        <td><?php echo $row['telefono']; ?></td>


        <td> <a  href="?cargar=empleados&controlador=ver&id_usuario=<?php echo  $row['id_usuario'];  ?>">+Informacion</a> </td>
       <td> <a  class="glyphicon glyphicon-pencil" title="Editar" href="?cargar=empleados&controlador=editar&&id_usuario=<?php echo $row['id_usuario'];  ?>"></a></td>
        <td><a class="glyphicon glyphicon-remove" title="Desactivar" href="?cargar=empleados&controlador=eliminar&&id_usuario=<?php echo $row['id_usuario'];  ?>"></a></td>

        </tr>

      <?php



	  endwhile;
	  ?>


     </tbody>
</table>
</div>
</div>
</div>