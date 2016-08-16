<?php
	include_once('../../modulos/enrutador.php');
include_once('../../modulos/c_estetica.php');
include_once('../../modulos/controlador.php');
include_once('../../clases/usuario.php');

?>



<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="utf-8">
<title>Nueva Estética</title>

	<script src="../../js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
	
	<script  src="../../js/jquery.js">

</script>
	
</head>


  
<header align="center"><h1><center>Nueva Estética</center></h1></header>
<?php
$controlador = new c_estetica();


	
	
	
	


if(isset($_POST['enviar'])){
	//print_r($_POST);

	
	//print_r($_POST);
	
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	$limite_kb = 16384;
	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el imagen subir.php
		//echo $ruta = "../../imagenes_esteticas/" . $_FILES['imagen']['name'];
		
		
		
		switch($_FILES['imagen']['type']){
			case("image/jpg"):
				$ext=".jpg";
				break;
			case("image/jpeg"):
				$ext=".jpg";
				break;
			case("image/gif"):
				$ext=".gif";
				break;
			case("image/png"):
				$ext=".png";
				break;	
		}
		
		$nombre_imagen=strtolower(utf8_decode($_POST['nombre_estetica']));
		$nombre_imagen=str_replace(" ", "", $nombre_imagen);
		echo $ruta = "../../imagenes_esteticas/" . $nombre_imagen.$ext;
		echo $nombre_imagen=$nombre_imagen.$ext;

 $r =$controlador->crear(utf8_decode($_POST['nombre_estetica']),$nombre_imagen, $_POST['eslogan'],$_POST['cliente_a'],
	 $_POST['cliente_b'],$_POST['cliente_c'],$_POST['cliente_d'],$_POST['id_estatus'],utf8_decode($_POST['calle']),$_POST['no_int'],
	 $_POST['no_ext'],$_POST['id_estado'],$_POST['id_municipio'],utf8_decode($_POST['facebook']),utf8_decode($_POST['twitter']),utf8_decode($_POST['instagram']));



		//comprobamos si este imagen existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta)){
			//aqui movemos el imagen desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el imagen
			//almacenara true o false
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
			if ($resultado){
				echo "el imagen ha sido movido exitosamente";
			} else {
				echo "ocurrio un error al mover el imagen.";
			}
		} else {
			echo $_FILES['imagen']['name'] . ", este imagen existe";
		}
	} else {
		echo "imagen no permitido, es tipo de imagen prohibido o excede el tamano de $limite_kb Kilobytes";
	}	
	
	if($r){
		//echo 'se agrego un nuevo estética';
		header('location:../usuarios/index.php?cargar=usuarios&controlador=crear&empresa=empresa');
	}else{
		echo'no se agrego el registro';
		}
	}
?>



<section>

<body>
<div class="container" >
<form action="" method="POST" enctype="multipart/form-data">

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-envelope-o"></i>Datos Grals.</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-cube"></i>Rangos</a></li>
                    <li role="presentation"><a href="#Section4" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-comment"></i>Redes Sociales</a></li>
                    <li role="presentation"><a href="#Section3" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-comment"></i>Dirección</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        <h2> --</h2>
                        <p>
                            <div class="form-group">
								<h4> Nombre de la estética:</h4><label for="nombre"><input type="text" placeholder="estética@" name="nombre_estetica" id="nombre_estetica" 									maxlength="50" size="20" required/>*</label>
							</div>

							<div class="form-group">
								<h4> Eslogán:</h4><label for="nombre"><input type="text" placeholder="eslogán@" name="eslogan" id="eslogan" maxlength="50" 								size="20" required/>*</label>
							</div>
							<div class="form-group">
							<h4> Imagen:</h4><label for="nombre"><input type="file"  name="imagen" id="imagen" required/>*</label>
							</div>

                </div>
 
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <h2>--</h2>
                       
                            <div class="form-group">
								<h4> Límite A:</h4><label for="nombre"><input type="text" placeholder="estética@" name="cliente_a" id="nombre" maxlength="50" size="20" required/>*</label>
							</div>
							<div class="form-group">
								<h4> Límite B:</h4><label for="nombre"><input type="text" placeholder="estética@" name="cliente_b" id="nombre" maxlength="50" size="20" required/>*</label>
							</div>
							<div class="form-group">
								<h4> Límite C:</h4><label for="nombre"><input type="text" placeholder="estética@" name="cliente_c" id="nombre" maxlength="50" size="20" required/>*</label>
							</div>
							<div class="form-group">
								<h4> Límite D:</h4><label for="nombre"><input type="text" placeholder="estética@" name="cliente_d" id="nombre" maxlength="50" size="20" required/>*</label>
							</div>
                        
                    </div>
                    
                    
                    <div role="tabpanel" class="tab-pane fade" id="Section4">
                        <h2>--</h2>
                        <p>
                            <div class="form-group">
								<h4> Facebook:</h4><label for="nombre"><input type="text" placeholder="facebook@" name="facebook" id="facebook" 									maxlength="50" size="20" /></label>
							</div>

							<div class="form-group">
								<h4> Twitter:</h4><label for="nombre"><input type="text" placeholder="twitter@" name="twitter" id="twitter" maxlength="50" 								size="20" /></label>
							</div>
							<div class="form-group">
							<h4> Instagram:</h4><label for="nombre"><input type="text"  name="instagram" id="instagram" /></label>
							</div>

                </div>
                    
                    
                    
                    
                    
 
                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                        <h2>--</h2>
                            <div class="form-group">
								<h4> Calle:</h4><label for="nombre"><input type="text" placeholder="calle@" name="calle" id="nombre" maxlength="50" size="20" required/>*</label>
							</div>

							<div class="form-group">
								<h4> No. Exterior</h4><label for="nombre"><input type="text"  name="no_ext" id="nombre" maxlength="50" size="20" required/>*</label>
							</div>

							<div class="form-group">
								<h4> No. Interior</h4><label for="nombre"><input type="text"  name="no_int" id="nombre" maxlength="50" size="20" /></label>
							</div>
							<div class="form-group">
								<h4>Telefono:</h4><label for="tel"><input type="tel" placeholder="(442)3605521" id="tel" name="telefono" maxlength="20" size="20" required/>*	</label>
							</div>
							
							<div class="checkbox">
								<select name="id_estatus">
									<option value="0" selected>Selecciona un Estatus</option>
									<?php

									$estetica = new estetica();

									$resultado3=$estetica->verestatus();
									while($row=mysqli_fetch_array($resultado3)){
										if($row["id_estatus"]==1){
											echo '<option value="'.$row["id_estatus"].'" selected>'.utf8_encode($row['descripcion_estatus']).'</option>';										}else echo '<option value="'.$row["id_estatus"].'">'.utf8_decode($row['descripcion_estatus']).'</option>';
				
									}

									?>

								</select>*
							</div>

							<div class="form-group">
								<h5><i>Estado de Residencia:</i></h5>
								<select name="id_estado" id="id_estado">
									<option value="">Seleccione un Estado</option>
									<?php
									$usuario = new Usuario();
									$resultadoestado=$usuario->verestados();
									while($row=mysqli_fetch_array($resultadoestado)){
										echo '<option value="'.$row["id_estado"].'">'.utf8_encode($row["descripcion_estados"]).'</option>';
									}
									?>
								</select>
							</div>

							<div class="form-group">
								<h5><i>Municipio de Residencia:</i></h5>

								<select name="id_municipio" id="id_municipio">
									<option value="">Selecciona un Municipio</option>
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
				
							
	
							<div>
								<input type="submit" class="slider-btn" name="enviar" value="enviar" />
							</div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</form>
</div>
</section>
</body>
</html>


