<?php
$controlador = new controlador();
if(isset($_POST['enviar'])){
 $r =$controlador->crearUsuario($_POST['nombre_u'], $_POST['apellido_p'], $_POST['apellido_m'],$_POST['sexo'],$_POST['fecha_nacimiento'],
	$_POST['telefono'],$_POST['email'],$_POST['id_empresa'],$_POST['id_tipo_usuario'],
	 $_POST['id_estatus'],$_POST['id_estado'],$_POST['id_ciudad'],$_POST['nombre_calle'],$_POST['no_int'],$_POST['no_ext'],$_POST['usuario'],$_POST['password']);

if($r>0){
	echo 'se agrego un nuevo empleado';

	}else{
		echo'no se agrego el registro';
		}
	}
?>

                  
                    <div class="col-sm-4">
                    <b style="font-size:24px">Información Personal</b><br/><br/>
                        <form action="" method="POST">
						<div class="form-group">
                            <h4> Nombre:</h4><label for="nombre"><input type="text" placeholder="Nombre(s)*" name="nombre_u"
                            id="nombre_u" maxlength="50" size="20" style="width:100%;" required/></label>
						</div><br/>
						
                        <div class="form-group">
							<h4>Apellidos Paterno:</h4><label for="apellido_p"><input type="text" placeholder="Apellido Paterno*" 
                            id="apellidos" name="apellido_p" maxlength="50" size="20" required/></label>
						</div><br/>
						
                        <div class="form-group">
							<h4>Apellidos Materno:</h4><label for="apellido_m"><input type="text" placeholder="Apellido Materno*" 
                            id="apellidos" name="apellido_m" maxlength="50" size="20" required/></label>
						</div><br/>
                        
						<div class="form-group">
							<h4>Sexo:</h4>
							<select name="sexo">
								<option value="null" selected>Seleccione el sexo</option>
								<option value="0">Mujer</option>
								<option value="1">Hombre</option>
							</select>
						</div><br/>

						<div class="form-group">
							<h4>Fecha de nacimiento:</h4><label for="date"><input type="date"  name="fecha_nacimiento" 
                            id="date"/></label>
                        </div><br/>
						</div>
                        
                        <div class="col-sm-4">
                    <b style="font-size:24px">Información de Contacto</b><br/><br/>
						<div class="form-group">
							<h4>Telefono:</h4><label for="tel"><input type="tel" placeholder="(555)123-4567" 
                            id="tel" name="telefono" maxlength="20" size="20" required/></label>
						</div><br/>

						<div class="form-group">
							<h4>Correo Electronico:</h4><label for="email"><input type="email" 
                            placeholder="correo@email.com" id="email" name="email" size="20"  maxlength="50" /></label>	
						</div><br/>

						<div class="form-group">
							<h4>Estética:</h4>
    						<select name="id_empresa">
        						<option value="0" selected>Selecciona una Estetica</option>
									<?php
									$usuario = new Usuario();
									$resultado1=$usuario->verempresas();
									while($row=mysqli_fetch_array($resultado1)){
										echo '<option value="'.$row["id_empresa"].'">'.$row["nombre"].'</option>';
										}
									?>
							</select>
						</div><br/>
	
    					<div class="form-group">
							<h4>Tipo de Usuario:</h4>
							<select name="id_tipo_usuario">
								<option value="0" selected>Selecciona un Puesto</option>
								<?php
								$usuario = new Usuario();
								$resultado2=$usuario->vertipous();
								while($row=mysqli_fetch_array($resultado2)){
									echo '<option value="'.$row["id_tipo_usuario"].'">'.$row["descripcion_tipo_usuarios"].'</option>';
								}
								?>
							</select>
						</div><br/>
						
                        <div class="form-group">
							<h4>Status:</h4>
							<select name="id_estatus">
								<option value="0" selected>Selecciona un Estatus</option>
								<?php
								$usuario = new Usuario();
								$resultado3=$usuario->verestatus();
								while($row=mysqli_fetch_array($resultado3)){
									if($row["descripcion_estatus"]==0){
										$des="inactivo";
									}
									if($row["descripcion_estatus"]==1){
										$des="activo";
									}
									echo '<option value="'.$row["id_estatus"].'">'.$des.'</option>';
								}
								?>
							</select>
						</div><br/>
						</div>
                        
                        <div class="col-sm-4">
                        <b style="font-size:24px">Domicilio</b><br/><br/>
    					<div class="form-group">
							<h4>Estado de Residencia:</h4>
						<select name="id_estado">
							<option value="" selected>Selecciona un Estado</option>
							<?php
								$usuario = new Usuario();
								$resultado4=$usuario->verestados();
								while($row=mysqli_fetch_array($resultado4)){
									echo '<option value="'.$row["id_estado"].'">'.$row["descripcion_estados"].'</option>';
								}
							?>

						</select>
						</div><br/>
    
    					<div class="form-group">
							<h4>Municipio de Residencia:</h4>
						<select name="id_municipio">
							<option value="" selected>Selecciona un Municipio</option>
							<?php
								$usuario = new Usuario();
								$resultado4=$usuario->vermunicipio(1);
								while($row=mysqli_fetch_array($resultado4)){
									echo '<option value="'.$row["id_municipio"].'">'.$row["descripcion_municipios"].'</option>';
								}
							?>
						</select>
						</div><br/>
                        
    					<div class="form-group">
							<h4>Ciudad de Residencia:</h4>
						<select name="id_ciudad">
							<option value="" selected>Selecciona una Ciudad</option>
							<?php
								$usuario = new Usuario();
								$resultado5=$usuario->verciudades(1);
								while($row=mysqli_fetch_array($resultado5)){
									echo '<option value="'.$row["id_ciudad"].'">'.$row["descripcion_ciudades"].'</option>';
								}
							?>
						</select>
						</div><br/>
                        
						<h4>Calle:</h4>
						<div class="form-group">
                        <label>
							<input type="text" placeholder="Ingrese su Calle" name="nombre_calle"/>
						</label></div><br/>
						
                        <h4>Número interior:</h4>
						<div class="form-group">
                        <label>
							<input type="text" placeholder="Ingrese su Número Interior" name="no_int"/>
						</label></div><br/>
	
    					<h4>Número exterior:</h4>
						<div class="form-group">
                        <label>
							<input type="text" placeholder="Ingrese su Número Exterior" name="no_ext"/>
						</label></div><br/>

						<div class="form-group">
							<h4>User:</h4><label for="user"><input type="text" id="user" placeholder="Ingrese Username" name="usuario" maxlength="50" 
                            size="20" required/></label>
						</div><br/>
	
    					<div class="form-group">
							<h4>Password:</h4><label for="password"><input type="password" 
                            id="password" placeholder="Ingrese Password" name="password" maxlength="50" size="20" required/></label>
						</div><br/>
               			</div>
                        
                        <div class="col-sm-12" align="center">
						<div>
							<input type="submit"  name="enviar" value="ENVIAR" style="width:30%"/>
						</div>
						</form>
                        </div>