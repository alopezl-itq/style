<?php

$controlador = new Controlador();

if(isset($_GET['id_usuario'])){
$row=$controlador->ver($_GET['id_usuario']);
}

if(isset($_POST['enviar'])){

 $controlador->editar($_GET['id_usuario'],utf8_decode($_POST['nombre_usuario']), utf8_decode($_POST['apellido_p']), utf8_decode($_POST['apellido_m']),$_POST['sexo'],$_POST['fecha_nacimiento'],$_POST['telefono'],utf8_decode($_POST['email']),$_POST['id_empresa'],$_POST['id_tipo_usuario'],$_POST['id_municipio'],utf8_decode($_POST['colonia']),utf8_decode($_POST['nombre_calle']),$_POST['no_int'],$_POST['no_ext'],$_POST['cp'],utf8_decode($_POST['usuario']),utf8_decode($_POST['password']));



}

?>

<script  src="js/jquery.js"></script>
	<script type="text/javascript">
		function val(){



			if(frm.confirmpassword.value != frm.password.value)
			{
				alert("El Password no Coincide.");
				return false;
			}

			return true;
		}
	</script>

<div id="pestanas">
 <ul class="nav nav-tabs">
 <li class="active"><a href="#pestana1">Información Personal</a></li> 
 <li><a href="#pestana2">Información de Contacto</a></li> 
 <li><a href="#pestana3">Domicilio</a></li> 
  <li><a href="#pestana4">Datos de Acceso</a></li> 
 </ul>
 
<div id="pestana1">
<br/>
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
                        <form action="" method="POST">
						<div class="form-group">
                            <h5><i>Nombre:</i></h5><label for="nombre_usuario"><input type="text" value="<?php echo utf8_encode($row["nombre_usuario"]); ?>" name="nombre_usuario"
                            id="nombre_usuario" maxlength="50" size="20" style="width:100%;" required/></label>
						</div>
						
                        <div class="form-group">
							<h5><i>Apellido Paterno:</i></h5><label for="apellido_p"><input type="text" value="<?php echo utf8_encode($row["apellido_p"]); ?>" 
                            id="apellidos" name="apellido_p" maxlength="50" size="20" required/></label>
						</div>
						
                        <div class="form-group">
							<h5><i>Apellido Materno:</i></h5><label for="apellido_m"><input type="text" value="<?php echo utf8_encode($row["apellido_m"]); ?>" 
                            id="apellidos" name="apellido_m" maxlength="50" size="20" required/></label>
						</div>
                        
						<div class="form-group">
							<h5><i>Sexo:</i></h5>
							<select name="sexo">
					<option value="null" selected>Seleccione el sexo</option>
					<?php

					if($row['sexo']=='mujer') {

						echo '
					<option value="2" selected>Mujer</option>
					<option value="1">Hombre</option>
					';
					}else{
						echo '
					<option value="2">Mujer</option>
					<option value="1" selected>Hombre</option>
					';
					}
					?>
				</select>
						</div>

						<div class="form-group">
							<h5><i>Fecha Nacimiento:</i></h5><label for="date"><input type="date" value="<?php echo $row["fecha_nacimiento"]; ?>" name="fecha_nacimiento" 
                            id="date"/></label>
                        </div>
                        </div>
                        <div class="col-lg-3 col-md-3"></div>
</div>

<div id="pestana2">
<br/>
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<h5><i>Teléfono:</i></h5><label for="tel"><input type="tel" value="<?php echo $row["telefono"]; ?>" 
                            id="tel" name="telefono" maxlength="20" size="20" required/></label>
						</div>

						<div class="form-group">
							<h5><i>Correo Electronico:</i></h5><label for="email"><input type="email" 
                            value="<?php echo utf8_encode($row["email"]); ?>" id="email" name="email" size="20"  maxlength="50" /></label>	
						</div>

<?php	
if($_SESSION['tipo']==4){
	//agregar id_empresa
	}else{
						echo'<div class="form-group">';
						echo'<h5><i>Estética:</i></h5>';
    					echo'<select name="id_empresa">';
        				 echo '<option value="0" selected>Selecciona una Estetica</option>';
													
				$usuario = new Usuario();
				$resultado1=$usuario->verempresas();
				while($row1=mysqli_fetch_array($resultado1)){
					if($row['nombre']==$row1['nombre']){
					echo '<option value="'.$row1["id_empresa"].'" selected>'.utf8_encode($row1["nombre"]).'</option>';
				}else{
						echo '<option value="'.$row1["id_empresa"].'">'.utf8_encode($row1["nombre"]).'</option>';
					}
					}
				
						echo'</select>';
						echo'</div>';
	}
			?>			

    					<div class="form-group">
							<h5><i>Tipo de Usuario</i></h5>
							<select name="id_tipo_usuario">
								<option value="0" selected>Selecciona un Puesto</option>
								<?php
								$usuario = new Usuario();
								$resultado2=$usuario->vertipous();
								while($row1=mysqli_fetch_array($resultado2)){
									if($row['id_tipo_usuario']==$row1['id_tipo_usuario']){
									echo '<option value="'.$row1["id_tipo_usuario"].'" selected>'.utf8_encode($row1["descripcion_tipo_usuarios"]).'</option>';
								}else{
									echo '<option value="'.$row1["id_tipo_usuario"].'">'.utf8_encode($row1["descripcion_tipo_usuarios"]).'</option>';
								}

							}
								?>
							</select>
						</div>
                        </div>
                        <div class="col-lg-3 col-md-3"></div>
</div>

<div id="pestana3">
<br/>
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
	<div class="form-group">
		<h5><i>Estado de Residencia:</i></h5>
		<select name="id_estado" id="id_estado">
			<option value="">Seleccione un Estado</option>
			<?php
			$usuario = new Usuario();
			$resultadoestado=$usuario->verestados();
			while($row1=mysqli_fetch_array($resultadoestado)){
			if($row['descripcion_estados']==$row1['descripcion_estados']){
				echo '<option value="'.$row1["id_estado"].'" selected>'.utf8_encode($row1["descripcion_estados"]).'</option>';
			}else{
				echo '<option value="'.$row1["id_estado"].'">'.utf8_encode($row1["descripcion_estados"]).'</option>';
			}
			}
			?>
		</select>
	</div>

	<div class="form-group">
		<h5><i>Municipio de Residencia:</i></h5>

		<select name="id_municipio" id="id_municipio">
			<option value="">Selecciona un Municipio</option>
			<?php
			$usuario = new Usuario();
			$resultadomun=$usuario->vermunicipioTodos($row['descripcion_estados']);
			while($row1=mysqli_fetch_array($resultadomun)){
				if($row['descripcion_municipios']==$row1['descripcion_municipios']){
					echo '<option value="'.$row1["id_municipio"].'" selected>'.utf8_encode($row1["descripcion_municipios"]).'</option>';
				}else{
					echo '<option value="'.$row1["id_municipio"].'">'.utf8_encode($row1["descripcion_municipios"]).'</option>';
				}
			}
			?>
		</select>
		<script>
			$(document).ready(function(){
				$('#id_estado').change(function(){
					var country_id = $(this).val();
					$.ajax({
						url:"fetch_state.php",
						method:"POST",
						data:{countryId:country_id},
						dataType:"text",
						success:function(data)
						{
							$('#id_municipio').html(data);
						}
					});
				});
			});
		</script>
	</div>
                        
    					<div class="form-group">
							<h5><i>Ciudad de Residencia:</i></h5>
						<label>
							<input type="text" placeholder="Ingrese su Colonia" name="colonia"  value="<?php echo utf8_encode($row["colonia"]); ?>"required />
						</label>
						</div>
                        
						<h5><i>Calle:</i></h5>
						<div class="form-group">
                        <label>
							<input type="text" value="<?php echo utf8_encode($row['nombre_calle']); ?>" name="nombre_calle"/>
						</label></div>
						
                        <h5><i>Número Interior:</i></h5>
						<div class="form-group">
                        <label>
							<input type="text" value="<?php echo $row['no_int']; ?>" name="no_int"/>
						</label></div>
	
    					<h5><i>Número Exterior:</i></h5>
						<div class="form-group">
                        <label>
							<input type="text" value="<?php echo $row['no_ext']; ?>" name="no_ext"/>
						</label></div>
                        
                        <h5><i>Codigo Postal:</i></h5>
						<div class="form-group">
                        <label>
							<input type="number" placeholder="Ingrese su Número Exterior" name="cp" value="<?php echo $row["cp"]; ?>" min="1" required />
						</label></div>
                        
</div>
<div class="col-lg-3 col-md-3"></div>
</div>

<div id="pestana4">
<br/>
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
							<script type="text/javascript">
		function val(){



			if(frm.confirmpassword.value != frm.password.value)
			{
				alert("El Password no Coincide.");
				return false;
			}

			return true;
		}
	</script>
						<div class="form-group">
							<h5><i>User:</i></h5><label for="user"><input type="text" id="user" value="<?php echo utf8_encode($row["usuario"]); ?>" placeholder="Ingrese Username" name="usuario" maxlength="50" 
                            size="20" required/></label>
						</div>
	
    					<div class="form-group">
							<h5><i>Password:</i></h5><label for="password"><input type="password"
                            id="password" placeholder="Ingrese Password" name="password" maxlength="50" value="<?php echo utf8_encode($row["password"]); ?>" size="20" required/></label>
						</div>
	<div class="form-group">
		<h5><i>Confirmar Password:</i></h5><label for="confirmpassword"><input type="password"
													   id="confirmpassword" placeholder="Ingrese Password" name="confirmpassword" value="<?php echoutf8_encode($row["password"]); ?>" maxlength="50" size="20" required/></label>
	</div><br/>
                        <div class="col-sm-12" align="center">
						<div>
							<input type="submit"  name="enviar" value="ENVIAR" onclick="return val();" style="width:30%"/>
						</div>
						</form>
                        </div>
</div>
<div class="col-lg-3 col-md-3"></div>
</div>
</div> 
