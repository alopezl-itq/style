<?php
if($_SESSION['tipo']==3){
include_once('../../modulos/controlador.php');
$controlador = new Controlador();

header('Content-Type: text/html; charset=UTF-8');

if(isset($_SESSION['id_user'])){

	$row = $controlador->ver($_SESSION['id_user']);

}else{
	header('Location: index.php');
	}
?>

 <div class="col-sm-4" align="center">
                    <b style="font-size:24px">Información Personal</b><br/><br/>
                        <b>Numero de Usuario:</b> &nbsp; <?php echo utf8_encode($row['id_usuario']); ?>
<br/><br/>
<b>Tipo de empleado:</b>&nbsp;<?php  echo   utf8_decode($row['descripcion_tipo_usuarios']); ?>
<br/><br/>
<b>Usuario:</b>&nbsp;<?php  echo   utf8_decode($row['usuario']); ?>
<br/><br/>
<b>Nombre:</b> &nbsp; <?php echo utf8_decode($row['nombre_usuario']); ?>
<br/><br/>
<b>Apellido Paterno: </b>&nbsp;<?php echo utf8_decode($row['apellido_p']); ?>
<br/><br/>
<b>Apellido Materno:</b>&nbsp;<?php echo utf8_decode($row['apellido_m']); ?>
<br/><br/>
<b>Sexo:</b>&nbsp;<?php  echo   utf8_decode($row['descripcion']); ?>
<br/><br/>
<b>Fecha de nacimiento:</b>&nbsp;<?php  echo   $row['fecha_nacimiento']; ?>
<br/><br/>
						</div>

                        <div class="col-sm-4">
                    <b style="font-size:24px">Información de Contacto</b><br/><br/>
						<b>Telefono:</b>&nbsp;<?php  echo   $row['telefono']; ?>
<br/><br/>
<b>Correo electronico:</b>&nbsp;<?php  echo  utf8_decode($row['email']); ?>
<br/><br/>

						</div>

                        <div class="col-sm-4">
                        <b style="font-size:24px">Domicilio</b><br/><br/>
    					<b>Calle:</b>&nbsp;<?php  echo   utf8_decode($row['nombre_calle']); ?> &nbsp;&nbsp;<b>No. Int:</b>&nbsp;<?php echo  $row['no_int']; ?> &nbsp;&nbsp;<b>No. Ext:</b>&nbsp;<?php echo $row['no_ext']; ?><br/>
 <b>Codigo Postal</b>&nbsp;<?php echo $row['cp']; ?>&nbsp;<b>Ciudad:</b>&nbsp;<?php echo  utf8_decode($row['colonia']); ?> &nbsp;<b>Municipio:</b>&nbsp;<?php echo utf8_decode($row['descripcion_municipios']); ?>&nbsp;<b>Estado:</b>&nbsp;<?php echo utf8_decode($row['descripcion_estados']); ?>
<br/><br/><br/>




               			</div>
<?php }else{
    header('location: ../../clases/salir.php');
};