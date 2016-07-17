<?php
include_once ('../../modulos/c_estetica.php');
$controlador = new estetica();
 $_GET['id'];
if(isset($_GET['id'])){
	$row = $controlador->ver($_GET['id']);
}else{
	header('Location:index.php');
	}
	
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modificar  Estética</title>
</head>
<body>

<?php
$controlador = new c_estetica();
if(isset($_POST['enviar'])){
 $r =$controlador->editar(utf8_decode($_POST['nombre_estetica']),$_POST['id_usuario'],utf8_decode($_POST['eslogan']),$_POST['cliente_a'],
	 $_POST['cliente_b'],$_POST['cliente_c'],$_POST['cliente_d'],$_POST['id_estatus'],utf8_decode($_POST['calle']),$_POST['no_int'],
	 $_POST['no_ext'],$_POST['id_estado'],utf8_decode($_POST['facebook']),utf8_decode($_POST['twitter']),utf8_decode($_POST['instagram']));
echo 	$r;
	if(!$r){
		header("location:index.php");
		echo 'Estética actualizada';
		
	}else{
		echo'no se actualizó la estética'.mysqli_error();
		}
	}
?>




<div class="container" >   
<form action="" method="POST">

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-envelope-o"></i>Datos Grals.</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-cube"></i>Rangos</a></li>
                    <li role="presentation"><a href="#Section4" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-cube"></i>Redes Sociales</a></li>
                    <li role="presentation"><a href="#Section3" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-comment"></i>Dirección </a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        <h2>--</h2>
                        <p>
                            <div class="form-group">
								<h4> Nombre de la estética:</h4><label for="nombre"><input type="text" value="<?php echo utf8_encode($row['nombre']); ?>" name="nombre_estetica" id="nombre_estetica" maxlength="50" size="20" required/></label>
							</div>

							<div class="form-group">
								<h4> Eslogán:</h4><label for="nombre"><input type="text" value="<?php echo utf8_encode($row['eslogan']); ?>" name="eslogan" id="eslogan" maxlength="50" 								size="20" required/></label>
							</div>
							<div class="form-group">
							<h4> Administrador:</h4><label for="nombre"><select name="id_usuario">
							<option value="0" selected>Selecciona un Usuario</option>
									<?php $estetica = new estetica();

									$resultadoa=$estetica->veradministradores();
									while($rowa=mysqli_fetch_array($resultadoa)){
										
										
										if($rowa["id_usuario"]==$row['id_usuario']){
											echo '<option value="'.$rowa["id_usuario"].'" selected>'.utf8_encode($rowa['nombre_usuario'])."  ".utf8_encode($rowa['apellido_p'])." ".utf8_encode($rowa['apellido_m']).'</option>';										}else echo '<option value="'.$rowa["id_usuario"].'">'.utf8_encode($rowa['nombre_usuario'])." ".utf8_encode($rowa['apellido_p'])." ".utf8_encode($rowa['apellido_m']).'</option>';
											
										
				
									} ?>
							</select>
							</div>
							
							<div class="form-group">
							<h4> Estatus:</h4>
							<select name="id_estatus">
									<option value="0" selected>Selecciona un Estatus</option>
									<?php

									$estetica = new estetica();

									$resultado3=$estetica->verestatus();
									while($row2=mysqli_fetch_array($resultado3)){
										if($row2["id_estatus"]==$row['id_estatus']){
											echo '<option value="'.$row2["id_estatus"].'" selected>'.utf8_encode($row2['descripcion_estatus']).'</option>';										}else echo '<option value="'.$row2["id_estatus"].'">'.utf8_encode($row2['descripcion_estatus']).'</option>';
				
									}

									?>

								</select>
							
							
							</div>
							
                </div>
 
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <h2>-- </h2>
                       
                            <div class="form-group">
								<h4> Límite a:</h4><label for="nombre"><input type="text" value="<?php echo $row['cliente_a']; ?>" name="cliente_a" id="nombre" maxlength="50" size="20" required/></label>
							</div>
							<div class="form-group">
								<h4> Límite b:</h4><label for="nombre"><input type="text" value="<?php echo $row['cliente_b']; ?>" name="cliente_b" id="nombre" maxlength="50" size="20" required/></label>
							</div>
							<div class="form-group">
								<h4> Límite c:</h4><label for="nombre"><input type="text" value="<?php echo $row['cliente_c']; ?>" name="cliente_c" id="nombre" maxlength="50" size="20" required/></label>
							</div>
							<div class="form-group">
								<h4> Límite d:</h4><label for="nombre"><input type="text" value="<?php echo $row['cliente_d']; ?>" name="cliente_d" id="nombre" maxlength="50" size="20" required/></label>
							</div>
                        
                    </div>
                    
                    
                    <div role="tabpanel" class="tab-pane fade" id="Section4">
                        <h2>--</h2>
                        <p>
                            <div class="form-group">
								<h4> Facebook:</h4><label for="nombre"><input type="text" value="<?php echo utf8_encode($row['facebook']); ?>" name="facebook" id="nombre_estetica" maxlength="50" size="20" required/></label>
							</div>

							<div class="form-group">
								<h4> Twitter:</h4><label for="nombre"><input type="text" value="<?php echo utf8_encode($row['twitter']); ?>" name="twitter" id="eslogan" maxlength="50" 								size="20" required/></label>
							</div>
							<div class="form-group">
							<h4> Instagram:</h4><input type="text" value="<?php echo utf8_encode($row['instagram']); ?>" name="instagram" id="eslogan" maxlength="50" 								size="20" required/></label>
							
							
							</div>
                    </div>
                    
 
                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                        <h2>--</h2>
                            <div class="form-group">
								<h4> Calle:</h4><label for="nombre"><input type="text" value=" <?php  echo  utf8_encode($row['calle']); ?>" name="calle" id="nombre" maxlength="50" size="20" required/></label>
							</div>

							<div class="form-group">
								<h4> No. Exterior</h4><label for="nombre"><input type="text" value="<?php echo  $row['no_ext']; ?>" name="no_ext" id="nombre" maxlength="50" size="20" required/></label>
							</div>

							<div class="form-group">
								<h4> No. Interior</h4><label for="nombre"><input type="text"  name="no_int"  value="<?php echo $row['no_int']; ?>"    id="nombre" maxlength="50" size="20" required/></label>
							</div>
														
							<div class="checkbox">
								
							</div>
							<div class="checkbox">
								
								<select name="id_estado">
									<option value="" selected>Selecciona un Estado</option>
									<?php
									$estetica = new estetica();
									$resultado4=$estetica->verestados();
									print_r($row);
									while($row2=mysqli_fetch_array($resultado4)){
										echo($row2['id_estado'])."todos<br>";
										echo($row['id_estado'])."<br>";
										if($row2["id_estado"]==$row["id_estado"]){
											echo '<option value="'.$row2["id_estado"].'" selected>'.utf8_encode($row2["descripcion_estados"]).'</option>';
										}else{
											echo '<option value="'.$row2["id_estado"].'">'.utf8_encode($row2["descripcion_estados"]).'</option>';

										}
									}

									?>

								</select>
							</div>
							<div class="form-group">
								<h4>Ciudad:</h4><label for="tel"><input type="text" value="<?php echo  utf8_encode($row['descripcion_municipios']); ?>" id="tel" name="municipio" maxlength="20" size="20" required/>	</label>
								
								<input type="hidden" name="id_empresa" value="<?php echo $row['id_empresa'];?>">
							</div>
							<div>
								<input type="submit" class="btn btn-default btn-sm" name="enviar" value="enviar" />
								<a href="index.php" class="btn btn-warning btn-sm" >Cancelar</a>
							</div>
							
                </div>
                
                
                
            </div>
            
           
            
        </div>
         
        
        
    </div>
    
    <div>
								<?php
									echo "<img height ='250' width='250' src='".$row['imagen']."'>";
								?>
		
                       
                    </div>
</div>


</form>
</div>
	

 
</body>
</html>