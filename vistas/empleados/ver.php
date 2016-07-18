<?php
include_once('../../modulos/e_controlador.php');


$controlador= new ControladorE();


if(isset($_POST['enviar'])){
 $controlador->crearC($_POST['id_tipo_curso'],$_POST['fecha_inicio'],$_POST['fecha_final'], utf8_decode($_POST['imparte']),utf8_encode($_POST['nombre_curso']),utf8_decode($_POST['nom_empresa_foranea']),$_POST['costo'],$_POST['apoyo'],$_GET['id_usuario']);
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
	
if(isset($_POST['guardar'])){
$controlador->editarCom($_GET['id_usuario'],utf8_decode($_POST['observaciones']));
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
<b>Tipo de empleado:</b>&nbsp;<?php  echo   utf8_encode($row['descripcion_tipo_usuarios']); ?>
<br/><br/>
<b>Usuario:</b>&nbsp;<?php  echo  utf8_encode($row['usuario']); ?>
<br/><br/>
<b>Nombre:</b> &nbsp; <?php echo utf8_encode($row['nombre_usuario']); ?>
<br/><br/>
<b>Apellido Paterno: </b>&nbsp;<?php echo utf8_encode($row['apellido_p']); ?>
<br/><br/>
<b>Apellido Materno:</b>&nbsp;<?php echo utf8_encode($row['apellido_m']); ?>
<br/><br/>
<b>Sexo:</b>&nbsp;<?php  echo   utf8_encode($row['descripcion']); ?>
<br/><br/>
<b>Fecha de nacimiento:</b>&nbsp;<?php  echo  $row['fecha_nacimiento']; ?>
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
<b>Correo electronico:</b>&nbsp;<?php  echo  utf8_decode($row['email']); ?>
<br/><br/><br/>
  <form action="" method="POST" name="frm">
						<div class="form-group">
                        <h3><b>Comentarios</b></h3><br/><br/>
 <textarea name="observaciones" style=" width:320px; height:100px"><?php echo utf8_encode($row['observaciones']); ?></textarea> 
                        </div>
                         <div class="col-sm-10" align="center">
						<div>
							<input type="submit"  name="guardar"  value="Guardar" onclick="return val();" style="width:30%"/>
						</div>
                        </div>
						</form>


<br><br>
						</div>
                        
                        <div class="col-sm-4">
                        <b style="font-size:24px">Domicilio</b><br/><br/>
    					<b>Estado:</b>&nbsp;<?php  echo   utf8_encode($row['descripcion_estados']); ?> &nbsp;&nbsp;<b>Municipio:</b>&nbsp;<?php echo  utf8_encode($row['descripcion_municipios']); ?> <b>Colonia:</b>&nbsp;<?php echo utf8_encode($row['colonia']); ?>
 <b>Calle</b>&nbsp;<?php echo utf8_encode($row['nombre_calle']); ?>&nbsp;<b>No. Interior:</b>&nbsp;<?php echo  $row['no_int']; ?> &nbsp;<br/><b>No. Exterior:</b>&nbsp;<?php echo $row['no_ext']; ?>&nbsp;<b>Codigo Postal:</b>&nbsp;<?php echo $row['cp']; ?> 
<br/><br/><br/>



<b style="font-size:24px">Redes Sociales</b><br/><br/>
<br/>

 <?php  while($row = mysqli_fetch_array($result)): ?>
<b><?php echo utf8_encode($row['descripcion_red_social']); ?></b>:&nbsp;&nbsp;<b>Usuario:</b><?php echo utf8_encode($row['usuario_r']);
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


        <td><a  class="glyphicon glyphicon-pencil" title="Editar" href="?cargar=empleados&controlador=editarcurso&id_curso=<?php echo  $row['id_curso'];  ?>"></a></td>
        </tr>

      <?php



	  endwhile;
	  ?>


     </tbody>
</table>
</div>
</div>
</div>

<form action="" method="post">
<br><button type="button" style="height:38px; width:350px" data-toggle="modal" data-target="#ModalAdd">Insertar Nuevo Curso</button><input type="hidden" name="id_usuario" value="<?php echo $_GET['id_usuario']; ?>">
</form>
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
                            id="date" onblur="dateValidate(this);" required/></label>
                        </div>
                                              <div id="dateError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
                        <div class="form-group">
							<h5><i>Fecha fin de curso:</i></h5><label for="date1"><input type="date"  name="fecha_final"
                            id="date1" onblur="dateValidate1(this);" required /></label>
                        </div>
                        
                                                                   <div id="dateError1" class="alert alert-danger alert-dismissable" style="display:none;"></div>
        
        
						<div class="form-group">
                            <h5><i>Nombre del instructor :</i></h5><label for="nombre"><input type="text" placeholder="Nombre(s)*" name="imparte" id="nombre_usuario" maxlength="50" size="20" onblur="nombreValidate(this);" required/></label>
						</div>
                        <div id="nombreError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
						
                        <div class="form-group">
							<h5><i>Nombre del Curso:</i></h5><label for="curso"><input type="text" placeholder="ej:Corte Avanzado*" id="curso" name="nombre_curso" maxlength="50" size="20" onblur="cursoValidate(this);" required/></label>
						</div>
						<div id="cursoError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
                        <div class="form-group">
							<h5><i>Empresa Instructora:</i></h5><label for="empresa"><input type="text" placeholder="Nombre Empresa*" id="empresa" name="nom_empresa_foranea" maxlength="50" size="20" onblur="EMPFValidate(this);" required/></label>
						</div>
                        <div id="EMPFError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        

						<div class="form-group">
							<h5><i>Costo:</i></h5><label for="costo"><input type="number"  name="costo" 
                           placeholder="$$$$$" id="costo" min="0" onblur="costValidate(this);" required /></label>
                        </div>
                        <div id="costError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                            <div class="form-group">
							<h5><i>Apoyo economico:</i></h5><label for="apoyo"><input type="number"  name="apoyo"
                           placeholder="$$$$$" min="0" id="apoyo" onblur="apoValidate(this);" required /></label>
                        </div>
                        <div id="apoError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
                            <div class="col-sm-12" align="center">
						<div>
							<input type="submit"  name="enviar" value="enviar" onclick="return val();" style="width:30%"/>
						</div>
						</form>
                        
                        
		</div>
    </div>
  </div>
</div>
</div>       




<script type="text/javascript" src="../../js/validate.js"></script>