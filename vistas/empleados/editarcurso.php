<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar curso</title>
</head>

<?php


$controlador = new ControladorE();

if(isset($_GET['id_curso'])){
$row=$controlador->verC($_GET['id_curso']);
}

if(isset($_POST['enviar'])){
 $controlador->editarC($_GET['id_curso'],$_POST['id_tipo_curso'],$_POST['fecha_inicio'],$_POST['fecha_final'], utf8_decode($_POST['imparte']),utf8_decode($_POST['nombre_curso']),utf8_decode($_POST['nom_empresa_foranea']),$_POST['costo'],$_POST['apoyo']);
}



?>

<body>
   <form action="" method="POST" >
        
                     				<div class="form-group">
							<h5><i>Tipo De Cuerso:</i></h5>
							<select name="id_tipo_curso">
								<option value="0" >Seleccione Tipo De Curso</option>
								<?php
								$empleado= new Empleado();
								$resultado5=$empleado->vertipoCu();
									while($row3=mysqli_fetch_array($resultado5)){
									if($row['id_tipo_curso']==$row3['id_tipo_curso']){
									echo '<option value="'.$row3['id_tipo_curso'].'" selected>'.utf8_encode($row3['descripcion_curso']).'</option>';
								}else{
									echo '<option value="'.$row3['id_tipo_curso'].'">'.utf8_encode($row3['descripcion_curso']).'</option>';
								}

							}
								?>
							</select>
						</div>
                        
                        <div class="form-group">
							<h5><i>Fecha inicio de curso:</i></h5><label for="date"><input type="date"  
                            value="<?php echo $row['fecha_inicio']; ?>"
                            name="fecha_inicio"
                            id="date" onblur="dateValidate(this);" required /></label>
                        </div>
                         <div id="dateError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
                        <div class="form-group">
							<h5><i>Fecha fin de curso:</i></h5><label for="date1"><input type="date"  name="fecha_final"         value="<?php echo $row['fecha_final']; ?>"
                            id="date1" onblur="date1Validate(this);" required /></label>
                        </div>
                         <div id="date1Error" class="alert alert-danger alert-dismissable" style="display:none;"></div>
        
        
						<div class="form-group">
                            <h5><i>Nombre del instructor :</i></h5><label for="nombre"><input type="text" placeholder="Nombre(s)*" name="imparte" 
                             value="<?php echo utf8_encode($row['imparte']); ?>"
                            id="nombre" maxlength="50" size="20" onblur="nombreValidate(this);" required/></label>
						</div>
                        <div id="nombreError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
						
                        <div class="form-group">
							<h5><i>Nombre del Curso:</i></h5><label for="curso"><input type="text" placeholder="ej:Corte Avanzado*" id="curso" 
                             value="<?php echo utf8_encode($row['nombre_curso']); ?>"
                            name="nombre_curso" maxlength="50" size="20" onblur="cursoValidate(this);" required/></label>
						</div>
						<div id="cursoError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
                        <div class="form-group">
							<h5><i>Empresa Instructora:</i></h5><label for="empresa"><input type="text" placeholder="Nombre Empresa*" id="empresa" name="nom_empresa_foranea"
                             value="<?php echo utf8_encode($row['nom_empresa_foranea']); ?>"
                             maxlength="50" size="20" onblur="EMPFValidate(this);" required/></label>
						</div>
                        <div id="EMPFError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        

						<div class="form-group">
							<h5><i>Costo:</i></h5><label for="costo"><input type="number"  name="costo" 
                           placeholder="$$$$$" id="costo" min="0"
                            value="<?php echo $row['costo']; ?>"
                           onblur="costValidate(this);" required /></label>
                        </div>
                        <div id="costError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                            <div class="form-group">
							<h5><i>Apoyo economico:</i></h5><label for="apoyo"><input type="number" 
                             value="<?php echo $row['apoyo']; ?>" name="apoyo" min="0"
                            placeholder="$$$$$"  id="apoyo" onblur="apoValidate(this);" required /></label>
                        </div>
                        <div id="apoError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
                            <div class="col-sm-12" align="center">
						<div>
							<input type="submit"  name="enviar" value="ENVIAR" onclick="return val();" style="width:30%"/>
						</div>
						</form>
                        
                        
		
                
  


</body>
</html>
<script type="text/javascript" src="../../js/validate.js"></script>