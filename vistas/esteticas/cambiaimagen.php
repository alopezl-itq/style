<?php
include_once('../../modulos/enrutador.php');
include_once ('../../modulos/c_estetica.php');
include_once('../../modulos/controlador.php');
include_once('../../clases/usuario.php');


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
	<script src="../../js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
	
	<script  src="../../js/jquery.js">

</script>

</head>
<body>

<?php
$controlador = new c_estetica();

if(isset($_POST['enviar'])){
	//print_r($_POST);

	print_r($_POST);
	
	
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	$limite_kb = 16384;


	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
		
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
		print_r($_POST);
	
		
		echo $row['imagen'];
		
		if(copy($_FILES["imagen"]["tmp_name"],$row['imagen'])){
			echo "se modificó la imagen";

		} else{

			echo "error al cambiar";
		
		} 
	}else {
		echo "imagen no permitido, es tipo de imagen prohibido o excede el tamano de $limite_kb Kilobytes";
	}
}



?>




<div class="container" >   
<form action="" method="POST" enctype="multipart/form-data">

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-envelope-o"></i>Cambio de imagen</a></li>
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        <h2>--</h2>
                        <p>
                    	<div class="row">
                    	<div class="col-md-4">
								<?php
									echo "<img height ='150' width='150' src='".$row['imagen']."'>";
								?>         
                    	</div>
                    	<div class="col-md-4"> 
                            <div class="form-group">
								<h4> Nombre de la estética:</h4><label for="nombre"><input type="text" value="<?php echo utf8_encode($row['nombre']); ?>" name="nombre_estetica" id="nombre_estetica" maxlength="50" size="20" disabled required/></label>
							</div>

							<div class="form-group">
								<h4> Imagen nueva:</h4><label for="nombre"><input type="file"  name="imagen" id="imagen" maxlength="50" 								size="20" required/></label>
							</div>
							
						</div>
                		</div>	
                		</p>
                		<div><br></div>
						<div class="row ">
								<div class="col-md-4">
									<input type="submit" class="btn btn-default btn-sm" name="enviar" value="enviar" />
								</div>
								<div class="col-md-8">
								<a href="index.php" class="btn btn-warning btn-sm" >Cancelar</a>
								</div>
						</div>
							
                	</div>
             	</div>
            </div>
        </div>
		</div>
	
    
</div>


</form>
</div>
	

 
</body>
</html>