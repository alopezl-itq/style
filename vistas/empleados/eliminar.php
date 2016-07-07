<?php
$controlador = new ControladorE();
if(isset($_GET['id_usuario'])){
	$row = $controlador->verE($_GET['id_usuario']);
	
}else{
	
	}
	
	
	
if(isset($_POST['enviar'])){
	 $controlador->desactivar($_GET['id_usuario'], $_POST['id_estatus']);

	
	}	
	



?>
<form action="" method="POST">
     <div class="form-group">
							<h4>Status:</h4>
							<select name="id_estatus">
								<option value="" selected>Seleccionea el estatus de usuario</option>
								<option value="1">Activo</option>
								<option value="2">Inactivo</option>
							</select>
						</div><br/>
						</div>



<br/>
<br/>

<input type="submit" name="enviar" value="actualizar"/>
</form>