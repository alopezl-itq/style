<?php
$controlador = new ControladorE();
$resultado = $controlador->desactivados($_SESSION['empresa']);


	
?>
<div align="center">
    <table border="1">
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
                <td><?php echo utf8_decode($row['apellido_p']); ?></td>
                <td><?php echo utf8_encode($row['apellido_m']); ?></td>
                <td><?php echo utf8_encode($row['nombre']); ?></td>
                <td><?php echo utf8_encode($row['telefono']); ?></td>

                <td><a href="?cargar=empleados&controlador=eliminar&&id_usuario=<?php echo $row['id_usuario'];  ?>">Reactivar</a></td>


            </tr>

            <?php



        endwhile;
        ?>


        </tbody>
    </table>
</div>