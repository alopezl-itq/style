<?php
$controlador = new c_estetica();
if(isset($_GET['id'])){
	$row = $controlador->ver($_GET['id']);
}else{
	header('Location: index.php');
	}
	
if(isset($_POST['enviar'])){
	 $controlador->eliminar($_GET['id']);
	 
	header('Location: index.php');
	}	
	



?>




¿Seguro qué desea eliminar la Estética? <?php echo $row['nombre']  ?> ?
<br/>
<br/>
<form action="" method="POST">
<input type="submit" name="enviar" value="Elimnar" class="btn btn-success"/>
</form>