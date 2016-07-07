<?php
/**
 * Created by PhpStorm.
 * User: Eed
 * Date: 05/07/2016
 * Time: 10:22 AM
 */
$controlador = new ControladorC();
$resultado = $controlador->verServicios($_SESSION['id_user']);
?>
<div class="container">

    <div class="row">

            <div>
                <table class="table table-bordered table-responsive">

                    <tr><th>ID</th><th>Fecha</th><th>Hora</th><th>Empleado</th><th>Rating</th><th>Foto</th><th>Observaciones</th><th>Tarjeta de Formulacion</th></tr>
                    <?php
                        while($row=mysqli_fetch_array($resultado)){

                            $res = $controlador->verDescripcionProductos($row['id_servicio_usuario']);
                            echo '<tr><th>'.$row['id_servicio_usuario'].'</th><th>'.$row['fecha_servicio'].'</th><th>'.$row['hora'].'</th><th>'.$row['nombre_usuario'].' '.$row['apellido_p'].' '.$row['apellido_m'].'</th><th>'.$row['rating'].'</th><th><img src=""></th><th>'.$row['observaciones'].'</th><th>'; while($row2=mysqli_fetch_array($res)){
                                echo 'Producto: '.$row2['descripcion_productos'].' Cantidad:'.$row2['cantidad'].'<br>';
                            }'</th></tr>';
                        }
                    ?>

                </table>
            </div>

    </div>
    <div class="row">

    </div>


</div>
