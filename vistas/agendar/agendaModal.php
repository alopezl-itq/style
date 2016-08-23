<?php
# definimos los valores iniciales para nuestro calendario
$month=date("n");
$year=date("Y");
$diaActual=date("j");
 
# Obtenemos el dia de la semana del primer dia
# Devuelve 0 para domingo, 6 para sabado
$diaSemana=date("w",mktime(0,0,0,$month,1,$year))+7;
# Obtenemos el ultimo dia del mes
$ultimoDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1));
 
$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
include_once('../../clases/conexion.php');
$miConexion = new Conexion();
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
        <title>Calendario</title>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width">
	<style>
		#calendar .hoy {
			background-color:#e9d6e4;
		}
		.link, .link a:link, .link a:active, .link a:visited {
			text-decoration:none;
			color:#000;
			display:block
		}
		.link a:hover{
			background-color:#705260;
			color:#FFFFFF;
			font-style:oblique;
			display:block;
			padding:8px;
		}
	</style>
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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      <div class="logo-wrap col-md-2 col-sm-2 col-lg-2 col-xs-2"></div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Inicio</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Agenda
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Historial</a></li>       
          <li><a href="#">Citas</a></li>
        </ul>
      </li>
      <li><a href="#">Regresar</a></li>
    </ul>
  </div>
</nav>
<div class="row">
	<div class="col-md-12 text-center">
		<H1><?php echo $meses[$month]." ".$year?></H1>
	</div>
</div>
<br><br>
<div class="table-responsive">
<table class="table" id="calendar">
	<tr style="background-color:#000000; color:#FFFFFF;">
		<td>Lunes</td><td style="padding:0px"></td><td>Martes</td><td style="padding:0px"></td><td>Miercoles</td><td style="padding:0px"></td><td>Jueves</td><td style="padding:0px"></td>
		<td>Viernes</td><td style="padding:0px"></td><td>Sabado</td><td style="padding:0px"></td><td>Domingo</td>
	</tr>
	<tr>
		<?php
		$last_cell=$diaSemana+$ultimoDiaMes;
		// hacemos un bucle hasta 42, que es el máximo de valores que puede
		// haber... 6 columnas de 7 dias
		for($i=1;$i<=42;$i++)
		{
			if($i==$diaSemana)
			{
				// determinamos en que dia empieza
				$day=1;
			}
			if($i<$diaSemana || $i>=$last_cell)
			{
				// celda vacia
				echo "<td style='padding:0px;' height='0px'> <td style='padding:0px'></td>";
			}else{
				// mostramos el dia
				if($day==$diaActual)
				{
					echo "<td style='text-align:left' class='link hoy'><a href='' data-toggle='modal' data-target='#ModalAdd?$day'>$day";
					$sql_cd1='SELECT usuarios.nombre_usuario, usuarios.apellido_p, servicios.descripcion_servicios, agendas.tiempo, agendas.hora, agendas.fecha FROM `usuarios`, `servicios`, `agendas` WHERE usuarios.id_usuario=agendas.id_usuario AND servicios.id_servicio=agendas.id_descripcion_servicio AND agendas.id_cliente = 1';$resul_cd1=mysqli_query($sql_cd1);
		while($fila1=mysqli_fetch_array($resul_cd1)){
			echo "<p><b>Peluquero:</b>".$fila1['0']." ".$fila1['1']."<br> <b>Servicio Contratado:</b>".$fila1['2']."<br> <b>Tiempo Estimado:</b>".$fila1['3']."<br> <b>Hora:</b>".$fila1['4']."</p>";	
		}					echo "</a></td><td style='padding:0px'></td>";

				}else{
				
					echo "<td style='text-align:left' class='link'><a href='#ModalAdd' data-toggle='modal'>$day";
					$sql_cd1='SELECT usuarios.nombre_usuario, usuarios.apellido_p, servicios.descripcion_servicios, agendas.tiempo, agendas.hora, agendas.fecha FROM `usuarios`, `servicios`, `agendas` WHERE usuarios.id_usuario=agendas.id_usuario AND servicios.id_servicio=agendas.id_descripcion_servicio AND agendas.id_cliente = 1';$resul_cd1=mysqli_query($sql_cd1);
		while($fila1=mysqli_fetch_array($resul_cd1)){
			echo "<p><b>Peluquero:</b>".$fila1['0']." ".$fila1['1']."<br> <b>Servicio Contratado:</b>".$fila1['2']."<br> <b>Tiempo Estimado:</b>".$fila1['3']."<br> <b>Hora:</b>".$fila1['4']."</p>";	
		}
		echo "</a></td><td style='padding:0px'></td>";
				}
		$day++;
			}
			// cuando llega al final de la semana, iniciamos una columna nueva
			if($i%7==0)
			{
				echo "</tr><tr>\n";
			}
		}
	?>
	</tr>
</table>
<table class="table">
  <tr> </tr>
</table>
</div>

        <!-- Modal para Agendar Cita-->
<div id="ModalAdd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agendar este día</h4>
      </div>
		 <div class="modal-body">
         	<?php
            echo "<iframe src='agendar.php?dia=".$day."&mes=".$month."&anio=".$year."' style='width: 100% !important; height: 250px !important'></iframe>"
            ?>
         </div>
    </div>
  </div>
</div>

		<div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 hidden-xs text-right">
                        <a href="#top" id="go-top">Ir Arriba</a>
                    </div> <!-- /.text-center -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#footer -->

  <script src="../../js/vendor/jquery-1.11.0.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
  <script src="../../js/bootstrap.js"></script>
  <script src="../../js/plugins.js"></script>
  <script src="../../js/main.js"></script>

</body>
</html>