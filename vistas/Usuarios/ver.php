<?php
include_once ('/xampp/htdocs/style/modulos/Controlador.php');
$controlador = new Controlador();
if(isset($_GET['id_usuario'])){
	$row = $controlador->ver($_GET['id_usuario']);
}else{
	header('Location: index.php');
	}
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Datos de Usuario</title>
</head>
<body>

<b>Numero de empleado:</b> &nbsp; <?php echo $row['id_usuario']; ?>
<br/><br/>
<b>Tipo de empleado:</b>&nbsp;<?php  echo   $row['descripcion_tipo_usuarios']; ?>
<br/><br/>
<b>Usuario:</b>&nbsp;<?php  echo   $row['usuario']; ?> 
<br/><br/>
<b>Nombre:</b> &nbsp; <?php echo $row['nombre']; ?>
<br/><br/>
<b>Apellido Paterno: </b>&nbsp;<?php echo $row['apellido_p']; ?>
<br/><br/>
<b>Apellido Materno:</b>&nbsp;<?php echo $row['apellido_m']; ?>
<br/><br/>
<b>Telefono:</b>&nbsp;<?php  echo   $row['fecha_nacimiento']; ?>
<br/><br/>
<b>Fecha de nacimiento:</b>&nbsp;<?php  echo   $row['telefono']; ?>
<br/><br/>
<b>Correo electronico:</b>&nbsp;<?php  echo   $row['email']; ?>
<br/><br/>
<b>Redes sociales:</b>&nbsp;<?php  echo   $row['id_red_social']; ?>
<br/><br/>

<br/><br/>
<h2>Direccion</h2>
<b>Calle:</b>&nbsp;<?php  echo   $row['nombre_calle']; ?> &nbsp;&nbsp;<b>Numero interior:</b>&nbsp;<?php echo  $row['no_int']; ?> &nbsp;&nbsp;<b>Numero interior:</b>&nbsp;<?php echo $row['no_ext']; ?>&nbsp;<b>Ciudad:</b>&nbsp;<?php echo  $row['descripcion_ciudades']; ?> &nbsp;<b>Municipio:</b>&nbsp;<?php echo $row['descripcion_municipios']; ?>&nbsp;<b>Estado:</b>&nbsp;<?php echo $row['descripcion_estados']; ?>
<br/><br/><br/>
<h2>Observaciones</h2>
<?php  echo   $row['observaciones']; ?>


 
</body>
</html>