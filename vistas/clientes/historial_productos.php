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

if($_SESSION['tipo']==3){
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


                    echo '<tr><td>'.$row['id_productos_usuario'].'</td><td>'.$row['fecha'].'</td><td>'.$row['hora'].'</td>
                    <td>'.$row['rating'].'</td>
                    <td><img src=""></td><td>'.utf8_encode($row['observaciones']).'</td><td>'.utf8_encode($row['descripcion_productos']).'</td>
                    <td>'.$row['precio_venta'].'</td></tr>';
                }
                ?>

            </table>
        </div>

    </div>
    <div class="row">

    </div>


</div>

<?php }else{
    header('location: ../../clases/salir.php');
};