<?php

$controlador = new controlador();

if(isset($_SESSION['id_user'])){
$row=$controlador->ver($_SESSION['id_user']);
}

if(isset($_POST['enviar'])){

 $controlador->editar($_SESSION['id_user'],utf8_encode($_POST['nombre_usuario']), utf8_encode($_POST['apellido_p']), utf8_encode($_POST['apellido_m']),$_POST['sexo'],$_POST['fecha_nacimiento'],$_POST['telefono'],utf8_encode($_POST['email']),$_POST['id_empresa'],3,$_POST['id_municipio'],utf8_encode($_POST['colonia']),utf8_encode($_POST['nombre_calle']),$_POST['no_int'],$_POST['no_ext'],$_POST['cp'],utf8_encode($_POST['usuario']),utf8_encode($_POST['password']));



}

?>

<script  src="js/jquery.js"></script>
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
			<form action="" method="POST" name="frm">
				<div class="form-group">
					<h5><i>Nombre:</i></h5><label for="nombre"><input type="text" placeholder="Nombre(s)*" name="nombre_usuario"
																	  id="nombre_usuario" value="<?php echo $row['nombre_usuario']; ?>" maxlength="50" size="20" style="width:100%;" required/></label>
				</div>

				<div class="form-group">
					<h5><i>Apellidos Paterno:</i></h5><label for="apellido_p"><input value="<?php echo $row['apellido_p']; ?>" type="text" placeholder="Apellido Paterno*"
																					 id="apellidos" name="apellido_p" maxlength="50" size="20" required/></label>
				</div>

				<div class="form-group">
					<h5><i>Apellidos Materno:</i></h5><label for="apellido_m"><input type="text" placeholder="Apellido Materno*"
																					 id="apellidos" value="<?php echo $row['apellido_m']; ?>" name="apellido_m" maxlength="50" size="20" required/></label>
				</div>

				<div class="form-group">
					<h5><i>Sexo:</i></h5>
					<select name="sexo">
						<option value="null" selected>Seleccione el sexo</option>
						<?php
					if($row['descripcion']=='mujer'||$row['descripcion']=='Mujer'){
						echo ' <option value="2" selected>Mujer</option>
						<option value="1">Hombre</option>';
					}else {
						echo '
						<option value = "2" > Mujer</option >
						<option value = "1" selected> Hombre</option >
						';}?>
						</select>
				</div>

				<div class="form-group">
					<h5><i>Fecha de nacimiento:</i></h5><label for="date"><input type="date" value="<?php echo $row['fecha_nacimiento']; ?>" name="fecha_nacimiento"
																				 id="date" required /></label>
				</div>
		</div>
		<div class="col-lg-3 col-md-3"></div>
	</div>

	<div id="pestana2">
		<br/>
		<div class="col-lg-3 col-md-3"></div>
		<div class="col-lg-6 col-md-6">
			<div class="form-group">
				<h5><i>Telefono:</i></h5><label for="tel"><input value="<?php echo $row['telefono']; ?>" type="tel" placeholder="(555)123-4567"
																 id="tel" name="telefono" maxlength="20" size="20" required/></label>
			</div>

			<div class="form-group">
				<h5><i>Correo Electronico:</i></h5><label for="email"><input type="email" value="<?php echo $row['email']; ?>"
																			 placeholder="correo@email.com" id="email" name="email" size="20"  maxlength="50" required /></label>
			</div>

			<div class="form-group">
				<h5><i>Estética:</i></h5>
				<select name="id_empresa">
					<option value="" selected>Selecciona una Estetica</option>
					<?php
					$usuario = new Usuario();
					$resultado1=$usuario->verempresas();
					while($row1=mysqli_fetch_array($resultado1)){
						if($row['id_empresa']==$row1['id_empresa']){
						echo '<option value="'.$row1["id_empresa"].'" selected>'.utf8_encode($row1["nombre"]).'</option>';
					}else{
							echo '<option value="'.$row1["id_empresa"].'" >'.utf8_encode($row1["nombre"]).'</option>';
					}
					}
					?>
				</select>
			</div>


		</div>
		<div class="col-lg-3 col-md-3"></div>
	</div>

	<div id="pestana3" onchange="">
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
							echo '<option value="'.$row1["id_estado"].'" >'.utf8_encode($row1["descripcion_estados"]).'</option>';
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
					$resultadomuni=$usuario->vermunicipioTodos($row['descripcion_estados']);
					while($row1=mysqli_fetch_array($resultadomuni)){
						if($row['id_municipio']==$row1['id_municipio']){
							echo '<option value="'.$row1["id_municipio"].'" selected>'.utf8_encode($row1["descripcion_municipios"]).'</option>';
						}else{
							echo '<option value="'.$row1["id_municipio"].'" >'.utf8_encode($row1["descripcion_municipios"]).'</option>';
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

			<h5><i>Ciudad de Residencia:</i></h5>
			<div class="form-group">
				<label>
					<input type="text" placeholder="Ingrese su Colonia" value="<?php echo $row['colonia']; ?>" name="colonia" required />
				</label></div>

			<h5><i>Calle:</i></h5>
			<div class="form-group">
				<label>
					<input type="text" placeholder="Ingrese su Calle" value="<?php echo $row['nombre_calle']; ?>" name="nombre_calle" required />
				</label></div>

			<h5><i>Número interior:</i></h5>
			<div class="form-group">
				<label>
					<input type="text" placeholder="Ingrese su Número Interior/SN" value="<?php echo $row['no_int']; ?>" name="no_int"/>
				</label></div>

			<h5><i>Número exterior:</i></h5>
			<div class="form-group">
				<label>
					<input type="text" placeholder="Ingrese su Número Exterior" value="<?php echo $row['no_ext']; ?>" name="no_ext"/>
				</label></div>

			<h5><i>Codigo Postal:</i></h5>
			<div class="form-group">
				<label>
					<input type="number" placeholder="Ingrese su Número Exterior" value="<?php echo $row['cp']; ?>" name="cp" min="1" required />
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
				<h5><i>User:</i></h5><label for="user"><input type="text" value="<?php echo $row['usuario']; ?>"id="user" placeholder="Ingrese Username" name="usuario" maxlength="50"
															  size="20" required/></label>
			</div>

			<div class="form-group">
				<h5><i>Password:</i></h5><label for="password"><input type="password" value="<?php echo $row['password']; ?>"
																	  id="password" placeholder="Ingrese Password" name="password" maxlength="50" size="20" required/></label>
			</div>

			<div class="form-group">
				<h5><i>Confirmar Password:</i></h5><label for="confirmpassword"><input type="password" value="<?php echo $row['password']; ?>"
																					   id="confirmpassword" placeholder="Ingrese Password" name="confirmpassword" maxlength="50" size="20" required/></label>
			</div>

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