<?php
$controlador = new Controlador();
if(isset($_GET['id_usuario'])){
	$row = $controlador->ver($_GET['id_usuario']);
}else{
	header('Location: index.php');
	}
	
if(isset($_POST['enviar'])){
	 $controlador->eliminar($_GET['id_usuario']);
	 
	header('Location: index.php');
	}	
	



?>




usted de verdad quiere eliminar al empleado <?php echo $row['nombre']  ?> ?
<br/>
<br/>
<form action="" method="POST">
<input type="submit" name="enviar" value="Elimnar"/>
</form>