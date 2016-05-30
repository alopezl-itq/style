<?php
include_once ('../../modulos/controlador.php');
$controlador = new Controlador();

if($_GET['id_usuario']){
$result= $controlador->verredes($_GET['id_usuario']);
}
if(isset($_GET['id_usuario'])){
	$row = $controlador->ver($_GET['id_usuario']);
}else{
	header('Location: index.php');
	}	
?>

 <div class="col-sm-4" align="center">
                    <b style="font-size:24px">Información Personal</b><br/><br/>
                        <b>Numero de Usuario:</b> &nbsp; <?php echo $row['id_usuario']; ?>
<br/><br/>
<b>Tipo de empleado:</b>&nbsp;<?php  echo   $row['descripcion_tipo_usuarios']; ?>
<br/><br/>
<b>Usuario:</b>&nbsp;<?php  echo   $row['usuario']; ?>
<br/><br/>
<b>Nombre:</b> &nbsp; <?php echo $row['nombre_u']; ?>
<br/><br/>
<b>Apellido Paterno: </b>&nbsp;<?php echo $row['apellido_p']; ?>
<br/><br/>
<b>Apellido Materno:</b>&nbsp;<?php echo $row['apellido_m']; ?>
<br/><br/>
<b>Sexo:</b>&nbsp;<?php  echo   $row['descripcion']; ?>
<br/><br/>
<b>Fecha de nacimiento:</b>&nbsp;<?php  echo   $row['telefono']; ?>
<br/><br/>
						</div>
                        
                        <div class="col-sm-4">
                    <b style="font-size:24px">Información de Contacto</b><br/><br/>
						<b>Telefono:</b>&nbsp;<?php  echo   $row['fecha_nacimiento']; ?>
<br/><br/>
<b>Correo electronico:</b>&nbsp;<?php  echo   $row['email']; ?>
<br/><br/>

						</div>
                        
                        <div class="col-sm-4">
                        <b style="font-size:24px">Domicilio</b><br/><br/>
    					<b>Calle:</b>&nbsp;<?php  echo   $row['nombre_calle']; ?> &nbsp;&nbsp;<b>No. Int:</b>&nbsp;<?php echo  $row['no_int']; ?> &nbsp;&nbsp;<b>No. Ext:</b>&nbsp;<?php echo $row['no_ext']; ?>&nbsp;<b>Ciudad:</b>&nbsp;<?php echo  $row['descripcion_ciudades']; ?> &nbsp;<b>Municipio:</b>&nbsp;<?php echo $row['descripcion_municipios']; ?>&nbsp;<b>Estado:</b>&nbsp;<?php echo $row['descripcion_estados']; ?>
<br/><br/><br/>



<b style="font-size:24px">Redes Sociales</b><br/><br/>
<br/>

 <?php  while($row = mysqli_fetch_array($result)): ?>
<b>Tipo de red social:</b><?php echo $row['descripcion_red_social']; ?>&nbsp;&nbsp;<b>Usuario:</b><?php echo $row['usuario_r'];
echo"<br/>";   
endwhile; 
?>
               			</div>
