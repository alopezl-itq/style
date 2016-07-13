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

                    <tr><th>ID</th><th>Fecha</th><th>Hora</th><th>Rating</th><th>Foto</th><th>Observaciones</th><th>Tarjeta de Formulacion</th></tr>
                    <?php
                        while($row=mysqli_fetch_array($resultado)){

                            $res = $controlador->verDescripcionProductos($row['id_servicio_usuario']);
                            echo '<tr><td>'.$row['id_servicio_usuario'].'</td><td>'.$row['fecha_servicio'].'</td><td>'.$row['hora'].'</td><td>'.$row['rating'].'</td><td><img src=""></td><td>'.$row['observaciones'].'</td><td>'; while($row2=mysqli_fetch_array($res)){
                                echo 'Producto: '.$row2['descripcion_productos'].' Cantidad:'.$row2['cantidad'].' Presentación:'.$row2['presentacion'].' <br>';
                            }'</td></tr>';
                        }
                    ?>

                </table>
            </div>

    </div>
    <div class="row">

    </div>


</div>
