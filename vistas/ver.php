<?php
include_once ('../modulos/Controlador.php');
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
<b>Numero de usuario:</b> &nbsp; <?php echo $row['nombre']; ?>
<br/><br/>
<b>Apellido Paterno: </b>&nbsp;<?php echo $row['apellido_p']; ?>
<br/><br/>
<b>Apellido Materno:</b>&nbsp;<?php echo $row['apellido_m']; ?>
<br/>


</body>
</html>