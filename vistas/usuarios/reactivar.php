<?php
$controlador = new Controlador();
$resultado = $controlador->desactivados($_SESSION['tipo']);

$resultado = $controlador->index($_SESSION['tipo']);
?>
<div class="panel panel-default">
		<div class="panel-heading">Usuarios Desactivados</div>
		<div id="Em" class="panel panel-body "> 
        <div align="center" class="table-reponsive"> 
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
            <tr>

                <td><?php echo utf8_encode($row['nombre_usuario']); ?></td>
                <td><?php echo utf8_encode($row['apellido_p']); ?></td>
                <td><?php echo utf8_encode($row['apellido_m']); ?></td>
                <td><?php echo utf8_encode($row['nombre']); ?></td>
                <td><?php echo $row['telefono']; ?></td>

<td><a a  class="glyphicon glyphicon-pencil" title="Editar Estatus" href="?cargar=usuarios&controlador=eliminar&&id_usuario=<?php echo $row['id_usuario'];  ?>"></a></td>


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