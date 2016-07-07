<?php
include_once('../../modulos/e_controlador.php');


$controlador= new ControladorE();


if(isset($_POST['enviar'])){
 $controlador->crearC($_POST['id_tipo_curso'],$_POST['fecha_inicio'],$_POST['fecha_final'], utf8_encode($_POST['imparte']),utf8_encode($_POST['nombre_curso']),utf8_encode($_POST['nom_empresa_foranea']),$_POST['costo'],$_POST['apoyo']);
}


if($_GET['id_usuario']){
$result= $controlador->verredes($_GET['id_usuario']);
}
if(isset($_GET['id_usuario'])){
	
$row = $controlador->verE($_GET['id_usuario']);
}
if($_GET['id_usuario']){
   $resultado = $controlador->listarC($_GET['id_usuario']);	
	
	}

	
?>

<script  src="../js/jquery.js"></script>
<div id="pestanas"> 
 <ul class="nav nav-tabs">
        <li role="presentation" class="active" ><a href="#pestana1" role="tab" data-toggle="tab">Información Empleado</a></li>
        <li role="presentation"><a href="#pestana2" role="tab" data-toggle="tab">Bitacorá de cursos</a></li> 
        
<ul>

<div id="pestana1">
<br><br><br>

 <div class="col-sm-4" align="center">
                    <b style="font-size:24px">Información Personal</b><br/><br/>
                        <b>Numero de Usuario:</b> &nbsp; <?php echo $row['id_usuario']; ?>
<br/><br/>
<b>Tipo de empleado:</b>&nbsp;<?php  echo   $row['descripcion_tipo_usuarios']; ?>
<br/><br/>
<b>Usuario:</b>&nbsp;<?php  echo   $row['usuario']; ?>
<br/><br/>
<b>Nombre:</b> &nbsp; <?php echo $row['nombre_usuario']; ?>
<br/><br/>
<b>Apellido Paterno: </b>&nbsp;<?php echo $row['apellido_p']; ?>
<br/><br/>
<b>Apellido Materno:</b>&nbsp;<?php echo $row['apellido_m']; ?>
<br/><br/>
<b>Sexo:</b>&nbsp;<?php  echo   $row['descripcion']; ?>
<br/><br/>
<b>Fecha de nacimiento:</b>&nbsp;<?php  echo   $row['fecha_nacimiento']; ?>
<br/><br/>
<b>Comision:</b>&nbsp;<?php  echo   $row['comisiones']; ?>
<br/><br/>
<b>Sueldo Base:</b>&nbsp;<?php  echo   $row['sueldo_base']; ?>
<br/><br/>
						</div>
                        
                        <div class="col-sm-4">
                    <b style="font-size:24px">Información de Contacto</b><br/><br/>
						<b>Telefono:</b>&nbsp;<?php  echo   $row['telefono']; ?>
<br/><br/>
<b>Correo electronico:</b>&nbsp;<?php  echo   $row['email']; ?>
<br/><br/>

						</div>
                        
                        <div class="col-sm-4">
                        <b style="font-size:24px">Domicilio</b><br/><br/>
    					<b>Estado:</b>&nbsp;<?php  echo   utf8_encode($row['descripcion_estados']); ?> &nbsp;&nbsp;<b>Municipio:</b>&nbsp;<?php echo  $row['descripcion_municipios']; ?> <b>Colonia:</b>&nbsp;<?php echo $row['colonia']; ?>
 <b>Calle</b>&nbsp;<?php echo $row['nombre_calle']; ?>&nbsp;<b>No. Interior:</b>&nbsp;<?php echo  utf8_encode($row['no_int']); ?> &nbsp;<br/><b>No. Exterior:</b>&nbsp;<?php echo utf8_encode($row['no_ext']); ?>&nbsp;<b>Codigo Postal:</b>&nbsp;<?php echo utf8_encode($row['cp']); ?> 
<br/><br/><br/>



<b style="font-size:24px">Redes Sociales</b><br/><br/>
<br/>

 <?php  while($row = mysqli_fetch_array($result)): ?>
<b><?php echo $row['descripcion_red_social']; ?></b>:&nbsp;&nbsp;<b>Usuario:</b><?php echo $row['usuario_r'];
echo"<br/>";   
endwhile; 
?>
               			</div>
                        
              </div>
              
<div id="pestana2">
<br><br><br>


<div class="panel panel-default">
		<div class="panel panel-body ">
<div align="center" class="table-responsive">
<table class="table" width="50px">
	<thead>
        <th>Tipo De Curso</th>
		<th>Fecha De Inicio</th>
        <th>Fecha Final</th>
        <th>Nombre Del Instructor</th>
        <th>Nombre De Curso</th>
        <th>Empresa Instructora</th>
        <th>Costo</th>
        <th>Apoyo</th>
     </thead>
     <tbody>
     <?php  while($row = mysqli_fetch_array($resultado)): ?>
        <tr class="success">

        <td><?php echo  utf8_encode($row['descripcion_curso']); ?></td>
        <td><?php echo  $row['fecha_inicio'] ?></td>
        <td><?php echo  $row['fecha_final']; ?></td>
        <td><?php echo  utf8_encode($row['imparte']); ?></td>
        <td><?php echo  utf8_encode($row['nombre_curso']); ?></td>
        <td><?php echo  utf8_encode($row['nom_empresa_foranea']); ?></td>
        <td><?php echo  $row['costo'] ?></td>
        <td><?php echo  $row['apoyo'] ?></td>


        <td> <a href="?cargar=empleados&controlador=editarcurso&id_curso=<?php echo  $row['id_curso'];  ?>">Editar</a> </td>
        </tr>

      <?php



	  endwhile;
	  ?>


     </tbody>
</table>
</div>
</div>
</div>


<br><button type="button" style="height:38px; width:350px" data-toggle="modal" data-target="#ModalAdd">Insertar Nuevo Curso</button>

</div>


<!-- Modal Sexo-->
<div id="ModalAdd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Crear Nuevo Curso</h4>
      </div>
      <div class="modal-body">
        <form action="" method="POST" >
        
                     				<div class="form-group">
							<h5><i>Tipo De Cuerso:</i></h5>
							<select name="id_tipo_curso">
								<option value="0" selected>Seleccione Tipo De Curso</option>
								<?php
								$empleado= new Empleado();
								$resultado=$empleado->vertipoCu();
								while($row=mysqli_fetch_array($resultado)){
									echo '<option value="'.$row["id_tipo_curso"].'">'.utf8_encode($row["descripcion_curso"]).'</option>';
								}
								?>
							</select>
						</div>
                        
                        <div class="form-group">
							<h5><i>Fecha inicio de curso:</i></h5><label for="date"><input type="date"  name="fecha_inicio"
                            id="date" onblur="dateValidate(this);" required /></label>
                        </div>
                        
                        <div class="form-group">
							<h5><i>Fecha fin de curso:</i></h5><label for="date"><input type="date"  name="fecha_final"
                            id="date" onblur="dateValidate(this);" required /></label>
                        </div>
        
        
						<div class="form-group">
                            <h5><i>Nombre del instructor :</i></h5><label for="nombre"><input type="text" placeholder="Nombre(s)*" name="imparte" id="nombre_usuario" maxlength="50" size="20" onblur="nombreValidate(this);" required/></label>
						</div>
                        <div id="nombreError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
						
                        <div class="form-group">
							<h5><i>Nombre del Curso:</i></h5><label for="nombre_curso"><input type="text" placeholder="ej:Corte Avanzado*" id="nombre_curso" name="nombre_curso" maxlength="50" size="20" onblur="cursoValidate(this);" required/></label>
						</div>
						<div id="cursoError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
                        <div class="form-group">
							<h5><i>Empresa Instructora:</i></h5><label for="nom_empresa_foranea"><input type="text" placeholder="Nombre Empresa*" id="nom_empresa_foranea" name="nom_empresa_foranea" maxlength="50" size="20" onblur="EMPFValidate(this);" required/></label>
						</div>
                        <div id="EMPFError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        

						<div class="form-group">
							<h5><i>Costo:</i></h5><label for="costo"><input type="number"  name="costo" 
                           placeholder="$$$$$" id="costo" onblur="CostValidate(this);" required /></label>
                        </div>
                        <div id="CostError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                            <div class="form-group">
							<h5><i>Apoyo economico:</i></h5><label for="apoyo"><input type="number"  name="apoyo"
                           placeholder="$$$$$"  id="apoyo" onblur="ApoValidate(this);" required /></label>
                        </div>
                        <div id="ApoError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
                            <div class="col-sm-12" align="center">
						<div>
							<input type="submit"  name="enviar" value="ENVIAR" onclick="return val();" style="width:30%"/>
						</div>
						</form>
                        
                        
		</div>
    </div>
  </div>
</div>

</div>              
              
                        

</div>