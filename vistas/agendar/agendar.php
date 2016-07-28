<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
include_once('../../clases/conexion.php');

session_start();

$miConexion = new Conexion();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/font-awesome.css">
        <link rel="stylesheet" href="../../css/animate.css">
        <link rel="stylesheet" href="../../css/templatemo_misc.css">
        <link rel="stylesheet" href="../../css/templatemo_style.css">
        
        <script src="../../js/ajax.js"></script>
        <script src="../../js/vendor/jquery-1.11.0.min.js"></script>
</head>

<body>
<div id="ModalAdd">
  <div class="modal-dialog">
      <div class="modal-header">
        <a href="agenda.php" style="float:right;">Cerrar</a>
        <h4 class="modal-title">Agendar este día</h4>
      </div>
      <div class="modal-body">
<form action="insert.php" method="post">
        <div class="form-group">
        <?php echo"<input type='hidden' class='form-control' name='fecha' id='fecha' value='".$_GET['anio']."-".$_GET['mes']."-".$_GET['dia']."'/>";
		
		if($_GET['mes'] == '1'){$_GET['mes']='ENERO';}else if($_GET['mes'] == '2'){$_GET['mes']='FEBRERO';}else if($_GET['mes'] == '3'){$_GET['mes']='MARZO';}else if($_GET['mes'] == '4'){$_GET['mes']='ABRIL';}else if($_GET['mes'] == '5'){$_GET['mes']='MAYO';}else if($_GET['mes'] == '6'){$_GET['mes']='JUNIO';}else if($_GET['mes'] == '7'){$_GET['mes']='JULIO';}else if($_GET['mes'] == '8'){$_GET['mes']='AGOSTO';}else if($_GET['mes'] == '9'){$_GET['mes']='SEPTIEMBRE';}else if($_GET['mes'] == '10'){$_GET['mes']='OCTUBRE';}else if($_GET['mes'] == '11'){$_GET['mes']='NOVIEMBRE';}else if($_GET['mes'] == '12'){$_GET['mes']='DICIEMBRE';}  
		
        echo "<H3>".$_GET['mes']." ".$_GET['dia']."</H3>";  
		?> 	  
        </div>
         
        <div class="form-group">
            <p>Hora</p>
            <select name="hora" id="hora" class="form-control">
            	<option value="">Seleccionar...</option>
            	<option value='12:00'>12:00</option>
                <option value='13:00'>13;00</option>
                <option value='16:00'>14:00</option>
                <option value='17:00'>15:00</option>
                <option value='18:00'>16:00</option>
            </select>
		</div>
 		
        <div class="form-group">
                    <p>Estilistas</p>
                     <select class="form-control" name="empleado" id="empleado"> 
                     	<option value="" class="form-control">Seleccionar...</option>  <?php   $sql_IDUsuario="SELECT 	id_usuario, nombre_usuario FROM usuarios WHERE id_tipo_usuario>=4 and id_estatus=1 and id_empresa=".$_SESSION['estetica']; $resul_IDUsuario=mysqli_query($miConexion,$sql_IDUsuario);
		while($filaUsuario=mysqli_fetch_array($resul_IDUsuario)){
		echo "<option value='".$filaUsuario['0']."'> ". $filaUsuario['1']."</option>";	
		}
	  ?>  </select>
		</div>
        
		<div class="form-group">
                    <p>Servicios</p>
                    <select class="form-control" name="servicio" id="sevicio" onchange="load(this.value)"> 
                     	<option value="" class="form-control">Seleccionar...</option>  <?php   $sql_IDServicio="SELECT servicios.id_servicio, servicios.servicio FROM `empresas`, `servicios`, `servicios_empresa`, `descripcion_servicios` WHERE empresas.id_empresa=servicios_empresa.id_empresa AND descripcion_servicios.id_descripcion_servicios=servicios_empresa.id_descripcion_servicios AND servicios.id_servicio=servicios_empresa.id_servicio AND empresas.id_empresa=".$_SESSION['estetica']." GROUP BY id_servicio"; $res=mysqli_query($miConexion,$sql_IDServicio);
		while($fila=mysqli_fetch_array($res)){
		echo "<option value='".$fila['0']."'> ". $fila['1']."</option>";	
		}
	  ?>  </select>
		</div>
        
        <div class="form-group" id="divDesc"></div>
        
        <div class="form-group" id="divTime"></div>

		<div class="form-group">
			<input type="submit" class="btn btn-xl" value="Agendar"  name="insertar" id="insertar"/>
		</div></br></br>
</form>
      </div>
  </div>
</div>

  <script src="../../js/vendor/jquery-1.11.0.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
  <script src="../../js/bootstrap.js"></script>
  <script src="../../js/plugins.js"></script>
  <script src="../../js/main.js"></script>
</body>
</html>