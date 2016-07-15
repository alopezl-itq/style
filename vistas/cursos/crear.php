<?php
	include_once('../../modulos/enrutador.php');
include_once('../../modulos/c_cursos.php');

?>



<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="utf-8">
<title>Nuevo Curso</title>

	<script src="../../js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
	<script src="../../js/fecha/js/bootstrap-datepicker.js"></script>
	
	
	
</head>
<script type="text/javascript">
	
	
$('#sandbox-container .input-daterange').datepicker({
});
	
	
	var checkbox = document.getElementById("estados"),
		ajax = function(url){
			var xhr = window.XMLHttpRequest ?
				new XMLHttpRequest() :
			new ActiveXObject("Microsoft.XMLHTTP") ||
			new ActiveXObject("Msxml2.XMLHTTP");

		};

	checkbox.addEventListener("click", function(){
		var estado = this.checked ? 1 : 0,
			id = this.getAttribute("data-id"),
			url = "ver_usuarios2.php?estado="+estado+"&id="+id;

		ajax(url);

	}, false);
</script>

  
<header align="center"><h1>Nuevo Curso</h1></header>
<?php
$controlador = new c_cursos();


	
	
	
	


if(isset($_POST['enviar'])){
	//print_r($_POST);
	
	
	//print_r($_POST);
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png","application/pdf");
	$limite_kb = 16384;
	if (in_array($_FILES['subir']['type'], $permitidos) && $_FILES['subir']['size'] <= $limite_kb * 1024){
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el imagen subir.php
		//echo $ruta = "../../imagenes_esteticas/" . $_FILES['imagen']['name'];
		
		
		
		switch($_FILES['subir']['type']){
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
			case("application/pdf"):
				$ext=".pdf";
				break;	
		}
		
		$nombre=strtolower($_POST['nombre_curso']);
		$nombre=str_replace(" ", "", $nombre);
		echo $ruta = "imagenes/" . $nombre.$ext;

	
 $r =$controlador->crear( $_POST['descripcion'],$_POST['fecha_inicio'],$_POST['fecha_final'],$_POST['instructor'],$_POST['nombre_curso'],$_POST['empresa'],$ruta 
	 );



		//comprovamos si este imagen existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta)){
			//aqui movemos el imagen desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el imagen
			//almacenara true o false
			$resultado = @move_uploaded_file($_FILES["subir"]["tmp_name"], $ruta);
			if ($resultado){
				echo "el archivo ha sido movido exitosamente";
			} else {
				echo "<br>ocurrió un error al mover el imagen.";
			}
		} else {
			echo $_FILES['subir']['name'] . ", este imagen existe";
		}
	} else {
		echo "imagen no permitido, es tipo de imagen prohibido o excede el tamaño de $limite_kb Kilobytes";
	}	
	
	if($r){
		
		//header("Location:index.php");
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
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-envelope-o"></i>Datos Curso</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-cube"></i>Fechas</a></li>
                    <li role="presentation"><a href="#Section3" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-comment"></i>Instructor</a></li>
                                    </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                       
                        <p>
                            <div class="form-group">
								<h4> Nombre del curso:</h4><label for="nombre"><input type="text" placeholder="nombre del curso" name="nombre_curso" id="nombre_curso" 									maxlength="50" size="20" required/>*</label>
							</div>

							<div class="form-group">
								<h4> Descripción del curso:</h4><textarea  placeholder="Descripción" name="descripcion" id="descripcion"  required/ cols="80"></textarea>*
							</div>
							<div class="form-group">
							<h4> Imagen:</h4><label for="nombre"><input type="file"  name="subir" id="subir" required/>*</label>
							</div>

                </div>
 
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        
                       
                            <div class="form-group">
	                            
	                            
	
	                            
	                            
								<h4> Fecha Inicio</h4><label for="nombre"><input type="date" placeholder="Fecha@" name="fecha_inicio" id="fecha_inicio" maxlength="50" size="20"  required/>*</label>
							</div>
							<div class="form-group">
								<h4> Fecha Final</h4><label for="nombre"><input type="date" placeholder="Final@" name="fecha_final" id="fecha_final" maxlength="50" size="20" required/>*</label>
							</div>
							
                        
                    </div>
                    
                    
                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                        
                        <p>
                            <div class="form-group">
								<h4> Nombre del Instructor:</h4><label for="nombre"><input type="text" placeholder="Instructor@" name="instructor" id="instructoe" 									maxlength="50" size="20" /></label>
							</div>

							<div class="form-group">
								<h4> Empresa:</h4><label for="nombre"><input type="text" placeholder="Empresa@" name="empresa" id="empresa" maxlength="50" 								size="20" /></label>
							</div>
							
<div>
								<input type="submit"  name="enviar" value="enviar" />
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
</section>
</body>
</html>


