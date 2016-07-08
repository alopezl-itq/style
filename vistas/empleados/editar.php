<?php

$controlador = new ControladorE();

if(isset($_GET['id_usuario'])){
$row=$controlador->verE($_GET['id_usuario']);
}

if(isset($_POST['enviar'])){

 $controlador->editarE($_GET['id_usuario'],utf8_encode($_POST['nombre_usuario']), utf8_encode($_POST['apellido_p']), utf8_encode($_POST['apellido_m']),$_POST['sexo'],$_POST['fecha_nacimiento'],$_POST['telefono'],utf8_encode($_POST['email']),$_POST['id_tipo_usuario'],$_POST['id_municipio'],utf8_encode($_POST['colonia']),utf8_encode($_POST['nombre_calle']),$_POST['no_int'],$_POST['no_ext'],$_POST['cp'],utf8_encode($_POST['usuario']),utf8_encode($_POST['password']),$_POST['comisiones'],$_POST['sueldo_base']);



}

?>


<script  src="js/jquery.js"></script>
<div id="pestanas">
 <ul class="nav nav-tabs">
 	<li class="active"><a href="#pestana1">Información Personal</a></li>
 	<li><a href="#pestana2">Datos de sueldo</a></li> 
    <li><a href="#pestana3">Información de Contacto</a></li> 
   <li><a href="#pestana4">Domicilio</a></li> 
    <li><a href="#pestana5">Redes Sociales</a></li> 
	<li><a href="#pestana6">Datos de Acceso</a></li> 
 </ul>


<div id="pestana1">
<br/>
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
                        <form action="" method="POST" name="frm">
						<div class="form-group">
                            <h5><i>Nombre:</i></h5><label for="nombre"><input type="text" placeholder="Nombre(s)*" name="nombre_usuario" value="<?php echo $row['nombre_usuario']; ?>" id="nombre_usuario" maxlength="50" size="20" onblur="nombreValidate(this);" required/></label>
						</div>
                        <div id="nombreError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
						
                        <div class="form-group">
							<h5><i>Apellidos Paterno:</i></h5><label for="apellido_p"><input type="text" placeholder="Apellido Paterno*" value="<?php echo $row['apellido_p']; ?>"   id="apellido_p" name="apellido_p" maxlength="50" size="20" onblur="apepValidate(this);" required/></label>
						</div>
						<div id="apeError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
                        <div class="form-group">
							<h5><i>Apellidos Materno:</i></h5><label for="apellido_m"><input type="text" placeholder="Apellido Materno*" id="apellido_m" value="<?php echo $row['apellido_m']; ?>"  name="apellido_m" maxlength="50" size="20" onblur="apemValidate(this);" required/></label>
						</div>
                        <div id="apemError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
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
							<h5><i>Fecha de nacimiento:</i></h5><label for="date"><input type="date" value="<?php echo $row['fecha_nacimiento']; ?>"  name="fecha_nacimiento"
                            id="date" onblur="dateValidate(this);" required /></label>
                        </div>
                        <div id="dateError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
</div>
<div class="col-lg-3 col-md-3"></div> 
</div>



<div id="pestana2">
<br/>
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
                        
						<div class="form-group">
                            <h5><i>Comision:</i></h5><label for="comisiones"><input type="number" placeholder="100.00" name="comisiones" value="<?php echo $row['comisiones']; ?>"id="comisiones" maxlength="50" size="20" min="0" onblur="comisionValidate(this);" required/></label>
						</div>
                        <div id="comisionError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
						
                        <div class="form-group">
							<h5><i>Sueldo base:</i></h5><label for="sueldo_base"><input type="number" placeholder="2000.00" id="sueldo_base" value="<?php echo $row['sueldo_base']; ?>" name="sueldo_base" maxlength="50" size="20" min="0" onblur="sueldValidate(this);" required/></label>
						</div>
						<div id="suelError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                      
</div>
<div class="col-lg-3 col-md-3"></div> 
</div>




<div id="pestana3">
<br/>
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<h5><i>Telefono:</i></h5><label for="tel"><input type="tel"  id="tel"value="<?php echo $row['telefono']; ?>"name="telefono" maxlength="10" size="20" pattern="[0-9]{10}" onblur="telValidate(this);" required/></label>
						</div>
                        <div id="telError" class="alert alert-danger alert-dismissable" style="display:none;"></div>

						<div class="form-group">
							<h5><i>Correo Electronico:</i></h5><label for="email"><input type="email" 
                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $row['email']; ?>" id="email" name="email" size="20"  maxlength="50" onblur="emailValidate(this);" required/></label>	
						</div>
						<div id="emailError" class="alert alert-danger alert-dismissable" style="display:none;"></div>

	    					<div class="form-group">
							<h5><i>Tipo de Usuario</i></h5>
							<select name="id_tipo_usuario">
								<option value="o" >Selecciona un Puesto</option>
								<?php
								$empleado = new Empleado();
								$resultado5=$empleado->vertipous();
								while($row3=mysqli_fetch_array($resultado5)){
									if($row['id_tipo_usuario']==$row3['id_tipo_usuario']){
									echo '<option value="'.$row3['id_tipo_usuario'].'" >'.utf8_encode($row3['descripcion_tipo_usuarios']).'</option>';
								}else{
									echo '<option value="'.$row3['id_tipo_usuario'].'">'.utf8_encode($row3['descripcion_tipo_usuarios']).'</option>';
								}

							}
								?>
							</select>
						</div>
</div>
<div class="col-lg-3 col-md-3"></div>                        
</div>

<div id="pestana4" onchange="">
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
								while($row2=mysqli_fetch_array($resultadoestado)){
							if($row['descripcion_estados']==$row2['descripcion_estados']){
echo '<option value="'.$row2['id_estado'].'" selected>'.utf8_encode($row2['descripcion_estados']).'</option>';
									}else{

									echo '<option value="'.$row2["id_estado"].'">'.utf8_encode($row2["descripcion_estados"]).'</option>';
								}}
								?>
						</select>
						</div>

    					<div class="form-group">
							<h5><i>Municipio de Residencia:</i></h5>
						<select name="id_municipio">
							<option value="" selected>Selecciona un Municipio</option>
							<?php
								$usuario = new Usuario();
								$resultMun = $usuario->vermunicipioTodos();
									while($row1=mysqli_fetch_array($resultMun)){
										if($row['id_municipio']==$row1['id_municipio']){
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
                        
                        <h5><i>Colonia:</i></h5>
    					<div class="form-group">
							<label>
							<input type="text" value="<?php echo $row["colonia"]; ?>" placeholder="Ingrese su Colonia"  name="colonia" 
                               id="colonia" onblur="coloniaValidate(this);" required />
						</label></div>
                        <div id="coloniaError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
						<h5><i>Calle:</i></h5>
						<div class="form-group">
                        <label>
							<input type="text" placeholder="Ingrese su Calle"    name="nombre_calle" value="<?php echo $row['nombre_calle']; ?>"  id="calle" onblur="calleValidate(this);" required />
						</label></div>
						<div id="calleError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
                        <h5><i>Número interior:</i></h5>
						<div class="form-group">
                        <label>
							<input type="text" placeholder="Ingrese su Número Interior/SN" name="no_int" value="<?php echo $row['no_int']; ?>"  id="num" />
						</label></div>
							
    
    					<h5><i>Número exterior:</i></h5>
						<div class="form-group">
                        <label>
							<input type="text" placeholder="Ingrese su Número Exterior" name="no_ext" value="<?php echo $row['no_ext']; ?>" />
						</label></div>
                        
                        <h5><i>Codigo Postal:</i></h5>
						<div class="form-group">
                        <label>
							<input type="number" id="cp" placeholder="Ingrese su Código Postal" name="cp" value="<?php echo $row["cp"]; ?>" min="11111" max="99999" onblur="cpValidate(this);" required />
						</label></div>
                        <div id="cpError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
                     
                        
</div>
<div class="col-lg-3 col-md-3"></div>
</div>

<div id="pestana5">
<br/>
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
	<?php
$resulRedes=$empleado->verredes($_GET['id_usuario']);

	while($row2=mysqli_fetch_array($resulRedes)){


	echo '
					 <div class="form-group">
                          <h5><i>'.$row2["descripcion_red_social"].'</i></h5><label for="usuario_r"><input type="text" placeholder="Usuario '.$row2["descripcion_red_social"].'" name="'.$row2["descripcion_red_social"].'" value="'.$row2["usuario_r"].'"  id="'.$row2["descripcion_red_social"].'" maxlength="50" size="20"  /></label>
						</div>
';}
						 ?>

						
                      
</div>
<div class="col-lg-3 col-md-3"></div> 
</div>


<div id="pestana6">
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
							<h5><i>User:</i></h5><label for="user"><input type="text" id="user" placeholder="Ingrese Username" name="usuario" value="<?php echo $row["usuario"]; ?>" maxlength="50" size="20" onblur="userValidate(this);" required/></label>
						</div>
                        <div id="userError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
	
    					<div class="form-group">
							<h5><i>Password:</i></h5><label for="password"><input type="password"
                            id="password" placeholder="Ingrese Password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"  value="<?php echo $row["password"]; ?>" name="password" maxlength="50" size="20" onblur="passwordValidate(this);" required/></label>
						</div>
                        <div id="passwordError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
	<div class="form-group">
		<h5><i>Confirmar Password:</i></h5><label for="confirmpassword"><input type="password"
													   id="confirmpassword" placeholder="Ingrese Password" name="confirmpassword" value="<?php echo $row["password"]; ?>"maxlength="50" size="20" required/></label>
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
<script type="text/javascript" src="js/validate.js"></script>