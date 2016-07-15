<?php
include_once ('../../modulos/c_cursos.php');
$controlador = new cursos();
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
	<title>Modificar  Curso</title>
</head>
<body>

<?php
$controlador = new c_cursos();
if(isset($_POST['enviar'])){
	
	
	
 $r =$controlador->editar( $_POST['descripcion'],$_POST['fecha_inicio'],$_POST['fecha_final'], $_POST['imparte'],$_POST['nombre_curso'],
	 $_POST['empresa']);

	if(!$r){
		header("Location:index.php");
			}else{
		echo'no se agrego el registro';
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
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-envelope-o"></i>Datos Curso</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-cube"></i>Fechas</a></li>
                    <li role="presentation"><a href="#Section3" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-comment"></i>Instructor</a></li>
                                    </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                       
                        <p>
                            <div class="form-group">
								<h4> Nombre del curso:</h4><label for="nombre"><input type="text" value="<?php echo utf8_encode($row['nombre_curso'])?>" name="nombre_curso" id="nombre_curso" 									maxlength="50" size="20" required/>*</label>
								<input type="hidden" value="<?php echo $row['id_curso']?>" name="id_curso" id="nombre_curso" 									maxlength="50" size="20" required/>
							</div>

							<div class="form-group">
								<h4> Descripción del curso:</h4><textarea   name="descripcion" id="descripcion"  required/ cols="80"><?php echo $row['descripcion_cursos'] ?></textarea>*
							</div>
							
                </div>
 
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        
                       
                            <div class="form-group">
								<h4> Fecha Inicio</h4><label for="nombre"><input type="date" value="<?php echo $row['fecha_inicio']?>" name="fecha_inicio" id="fecha_inicio" maxlength="50" size="20"  required/>*</label>
							</div>
							<div class="form-group">
								<h4> Fecha Final</h4><label for="nombre"><input type="date" value="<?php echo $row['fecha_final']?>" name="fecha_final" id="fecha_final" maxlength="50" size="20" required/>*</label>
							</div>
							
                        
                    </div>
                    
                    
                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                        
                        <p>
                            <div class="form-group">
								<h4> Nombre del Instructor:</h4><label for="nombre"><input type="text" value="<?php echo $row['imparte']?>" name="imparte" id="instructoe" 									maxlength="50" size="20" /></label>
							</div>

							<div class="form-group">
								<h4> Empresa:</h4><label for="nombre"><input type="text" value="<?php echo $row['nom_empresa_foranea']?>" name="empresa" id="empresa" maxlength="50" 								size="20" /></label>
							</div>
							
<div>
								<input type="submit" class="btn btn-default btn-sm" name="enviar" value="enviar" />
								
								<a href="index.php" class="btn btn-warning btn-sm" >Cancelar</a>

								
							</div>

                </div>
                    
 							                       
                    </div>
                </div>
            </div>
	        
	        
	        
	        
	        
	        
	        <!-- eliminar desde aquí-->
            
        </div>
    </div>
</div>


</form>
</div>
	

 
</body>
</html>