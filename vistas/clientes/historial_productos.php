<?php
/**
 * Created by PhpStorm.
 * User: Eed
 * Date: 05/07/2016
 * Time: 09:42 AM
 */


/**
 * Created by PhpStorm.
 * User: Eed
 * Date: 05/07/2016
 * Time: 10:22 AM
 */
$controlador = new ControladorC();
$resultado = $controlador->verProductos($_SESSION['id_user']);
?>
<div class="container">

    <div class="row">

        <div>
            <table class="table table-bordered table-responsive">

                <tr><th>ID</th><th>Fecha</th><th>Hora</th><th>Rating</th><th>Foto</th><th>Observaciones</th><th>Producto</th><th>Precio</th></tr>
                <?php
                while($row=mysqli_fetch_array($resultado)){


                    echo '<tr><th>'.$row['id_productos_usuario'].'</th><th>'.$row['fecha'].'</th><th>'.$row['hora'].'</th>
                    <th>'.$row['rating'].'</th>
                    <th><img src=""></th><th>'.$row['observaciones'].'</th><th>'.$row['descripcion_productos'].'</th>
                    <th>'.$row['precio_venta'].'</th></tr>';
                }
                ?>

            </table>
        </div>

    </div>
    <div class="row">

    </div>


</div>