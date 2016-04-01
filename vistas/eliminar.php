<?php
$controlador = new Controlador();
if(isset($_GET['empno'])){
	$row = $controlador->ver($_GET['empno']);
}else{
	header('Location: index.php');
	}
	
if(isset($_POST['enviar'])){
	 $controlador->eliminar($_GET['empno']);
	 
	header('Location: index.php');
	}	
	



?>




usted de verdad quiere eliminar al empleado <?php echo $row['ename']  ?> ?
<br/>
<br/>
<form action="" method="POST">
<input type="submit" name="enviar" value="Elimnar"/>
</form>