<?php
include_once('../../modulos/controlador.php');
$controlador = new ControladorC();

header('Content-Type: text/html; charset=UTF-8');

if(isset($_GET['id_proveedor'])){
	$row = $controlador->verP($_GET['id_proveedor']);

}//else{
	//header('Location: index.php');
	//}	


echo '<div align="center">';
echo'<a href="?cargar=compras&controlador=editar&&id_usuario='.$row['id_proveedor'].'" class="btn btn-default btn-sm">
          <span  class="glyphicon glyphicon-pencil"></span> Editar información 
        </a>';
echo'</div>';


?>        
<!DOCTYPE html>
<html>
<head>
	<title>Información</title>
    <meta charset="utf-8">
</head>
<body>
        <br/><br>

 <div class="col-sm-4" align="center">
                    <b style="font-size:24px">Información Personal</b><br/><br/>
<b>Tipo:</b>&nbsp;<?php  echo   utf8_encode($row['descripcion_tipo_usuarios']); ?>
<br/><br/>
<b>Usuario:</b>&nbsp;<?php  echo   utf8_encode($row['usuario']); ?>
<br/><br/>
<b>Nombre:</b> &nbsp; <?php echo utf8_encode($row['nombre_usuario']); ?>
<br/><br/>
<b>Apellido Paterno: </b>&nbsp;<?php echo utf8_encode($row['apellido_p']); ?>
<br/><br/>
<b>Apellido Materno:</b>&nbsp;<?php echo utf8_encode($row['apellido_m']); ?>
<br/><br/>
<b>Sexo:</b>&nbsp;<?php  echo   utf8_encode($row['descripcion']); ?>
<br/><br/>
<b>Fecha de nacimiento:</b>&nbsp;<?php  echo   $row['fecha_nacimiento']; ?>
<br/><br/>
						</div>
                        
                        <div class="col-sm-4">
                    <b style="font-size:24px">Información de Contacto</b><br/><br/>
						<b>Celular:</b>&nbsp;<?php  echo   utf8_encode($row['telefono']); ?>
                            <br/><br/>
                            <b>Casa:</b>&nbsp;<?php  echo   utf8_encode($row['telcasa']); ?>

<br/><br/>
<b>Correo electronico:</b>&nbsp;<?php  echo  utf8_encode( $row['email']); ?>
<br/><br/>

						</div>
                        
                        <div class="col-sm-4">
                        <b style="font-size:24px">Domicilio</b><br/><br/>
    					<b>Estado:</b>&nbsp;<?php  echo   utf8_encode($row['descripcion_estados']); ?> &nbsp;&nbsp;<b>Municipio:</b>&nbsp;<?php echo utf8_encode($row['descripcion_municipios']); ?> <b>Colonia:</b>&nbsp;<?php echo utf8_encode($row['colonia']); ?>
 <b>Calle</b>&nbsp;<?php echo utf8_encode($row['nombre_calle']); ?>&nbsp;<b>No. Interior:</b>&nbsp;<?php echo  utf8_encode($row['no_int']); ?> &nbsp;<br/><b>No. Exterior:</b>&nbsp;<?php echo $row['no_ext']; ?>&nbsp;<b>Codigo Postal:</b>&nbsp;<?php echo $row['cp']; ?> 
<br/><br/><br/>




               			</div>
                        
</body>
</html>                        
