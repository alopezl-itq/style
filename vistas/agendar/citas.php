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
        <a href="agenda_emp.php" style="float:right;">Cerrar</a>
               <?php echo"<input type='hidden' class='form-control' name='fecha' id='fecha' value='".$_GET['anio']."-".$_GET['mes']."-".$_GET['dia']."'/>";
		
		if($_GET['mes'] == '1'){$_GET['nmes']='ENERO';}else if($_GET['mes'] == '2'){$_GET['nmes']='FEBRERO';}else if($_GET['mes'] == '3'){$_GET['nmes']='MARZO';}else if($_GET['mes'] == '4'){$_GET['nmes']='ABRIL';}else if($_GET['mes'] == '5'){$_GET['nmes']='MAYO';}else if($_GET['mes'] == '6'){$_GET['nmes']='JUNIO';}else if($_GET['mes'] == '7'){$_GET['nmes']='JULIO';}else if($_GET['mes'] == '8'){$_GET['nmes']='AGOSTO';}else if($_GET['mes'] == '9'){$_GET['nmes']='SEPTIEMBRE';}else if($_GET['mes'] == '10'){$_GET['nmes']='OCTUBRE';}else if($_GET['mes'] == '11'){$_GET['nmes']='NOVIEMBRE';}else if($_GET['mes'] == '12'){$_GET['nmes']='DICIEMBRE';}  
		
        echo "<h4 class='modal-title'>Citas el día ".$_GET['nmes']." ".$_GET['dia']."</h4>";  
		?> 
      </div>
      <div class="modal-body">
        <table border='1' class="table">
        <div class="form-group">
           <?php $sql_cd1='SELECT usuarios.nombre_usuario, usuarios.apellido_p, servicios.servicio, descripcion_servicios.descripcion, agendas.tiempo, agendas.hora FROM `usuarios`, `descripcion_servicios`, `servicios`, `agendas` WHERE usuarios.id_usuario=agendas.id_cliente AND descripcion_servicios.id_servicio=servicios.id_servicio AND descripcion_servicios.id_descripcion_servicios=agendas.id_servicio AND agendas.id_cliente =7 AND agendas.fecha="'.$_GET['anio'].'-'.$_GET['mes'].'-'.$_GET['dia'].'"';$resul_cd1=mysqli_query($miConexion,$sql_cd1);
		while($fila1=mysqli_fetch_array($resul_cd1)){
			echo "<tr><td style='text-align:left'><H3><b>".$fila1['5']."</b></H3> <p><b>Cliente:</b>".$fila1['0']." ".$fila1['1']."<br> <b>Servicio Contratado:</b>".$fila1['2']." ".$fila1['3']."<br> <b>Tiempo Estimado:</b>".$fila1['4']." mins </p></td>
			<td style='background-color:#000; color:#FFF; padding-left:3px; padding-right:3px; vertical-align: middle;' width='20%'><h3 style='color:#FFF'>CANCELAR</h3>
            </td></tr>";	}
	  ?>
		</div>
        </table>
        </br></br>
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