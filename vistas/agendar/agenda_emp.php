<?php
session_start();
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
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
      <li class="active"><a href="../../principal.php">Inicio</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Agenda
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Historial</a></li>       
          <li><a href="#">Citas</a></li>
        </ul>
      </li>
      <li><a href="../clientes/index.php">Regresar</a></li>
    </ul>
  </div>
</nav>

<script  src="../../js/jquery.js"></script>

<div id="pestanas">

<ul class="nav nav-tabs" style="background-color:beige;">
 	<li role="presentation" class="active"><a href="#pestana1" role="tab" data-toggle="tab">Calendario</a></li>
 	<li role="presentation"><a href="#pestana2" role="tab" data-toggle="tab">Citas</a></li>  
</ul>		
 
<div id="pestana1">
<br>
<div class="col-lg-6 col-md-6">
<div class="row">
	<div class="col-md-12 text-center">
		<H1><?php echo $meses[$month]." ".$year?></H1>
	</div>
</div>
<br><br>
<div class="table-responsive">
<table class="table" id="calendar" width="100%">
	<tr style="background-color:#000000; color:#FFFFFF;">
		<td width="14.28%">Lunes</td><td style="padding:0px"></td><td width="14.28%">Martes</td><td style="padding:0px"></td><td width="14.28%">Miercoles</td><td style="padding:0px"></td><td width="14.28%">Jueves</td><td style="padding:0px"></td><td width="14.28%">Viernes</td><td style="padding:0px"></td><td width="14.28%">Sabado</td><td style="padding:0px"></td><td width="14.28%">Domingo</td>
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
				//echo "<td style='padding:0px;' height='0px'>&nbsp;</td> <td style='padding:0px'></td>";
				echo "<td style='padding:0px;' height='0px'> <td style='padding:0px'></td>";

			}else{
				// mostramos el dia
				if($day==$diaActual)
				{
					echo "<td style='text-align:left' class='link hoy'><a href='citas.php?dia=".$day."&mes=".$month."&anio=".$year."' data-toggle='modal'>$day";
					$sql_cd1='SELECT usuarios.nombre_usuario, usuarios.apellido_p, servicios.servicio, descripcion_servicios.descripcion, agendas.tiempo, agendas.hora FROM `usuarios`, `descripcion_servicios`, `servicios`, `agendas` WHERE usuarios.id_usuario=agendas.id_usuario AND descripcion_servicios.id_servicio=servicios.id_servicio AND descripcion_servicios.id_descripcion_servicios=agendas.id_servicio AND agendas.id_cliente =7 AND agendas.fecha="'.$year.'-'.$month.'-'.$day.'"';$resul_cd1=mysqli_query($miConexion,$sql_cd1);
		while($fila1=mysqli_fetch_array($resul_cd1)){
			echo "<p><b>Hora:</b>".$fila1['5']."<br> <b>Estilista:</b>".$fila1['0']." ".$fila1['1']."<br> <b>Servicio Contratado:</b>".$fila1['2']." ".$fila1['3']."<br> <b>Tiempo Estimado:</b>".$fila1['4']." mins </p>";	

		}echo "</a></td><td style='padding:0px'></td>";

				}else{
					echo "<td style='text-align:left' class='link'>$day";
					$sql_cd1='SELECT usuarios.nombre_usuario, usuarios.apellido_p, servicios.servicio, descripcion_servicios.descripcion, agendas.tiempo, agendas.hora FROM `usuarios`, `descripcion_servicios`, `servicios`, `agendas` WHERE usuarios.id_usuario=agendas.id_usuario AND descripcion_servicios.id_servicio=servicios.id_servicio AND descripcion_servicios.id_descripcion_servicios=agendas.id_servicio AND agendas.id_cliente =7 AND agendas.fecha="'.$year.'-'.$month.'-'.$day.'"';$resul_cd1=mysqli_query($miConexion,$sql_cd1);
					$row_cnt=mysqli_num_rows($resul_cd1);
		if($row_cnt==0){}else{
				echo"<a href='' data-target='citas.php?dia=".$day."&mes=".$month."&anio=".$year."' data-toggle='modal'><span class='glyphicon glyphicon-check'></span>";

		}echo "</a></td><td style='padding:0px'></td>";
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
</div>
</div>
<div class="col-lg-6 col-md-6">
<iframe src="citas.php" style="width:100%; height:100%;">
</iframe>
</div>
</div>

<div id="pestana2">
<br>
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
	<div class="row">
	<div class="col-md-12 text-center">
		<H1>Citas Programadas</H1>
	</div>
</div>
<br><br>
<div class="table-responsive">
        <table border='1' class="table">
        	<tr>
            
            <td class="link" style="text-align:left">
            <a href="#ModalAdd" data-toggle="modal">
            <?php   $sql_cd1='SELECT usuarios.nombre_usuario, usuarios.apellido_p, servicios.servicio, descripcion_servicios.descripcion, agendas.tiempo, agendas.hora FROM `usuarios`, `descripcion_servicios`, `servicios`, `agendas` WHERE usuarios.id_usuario=agendas.id_usuario AND descripcion_servicios.id_servicio=servicios.id_servicio AND descripcion_servicios.id_descripcion_servicios=agendas.id_servicio AND agendas.id_cliente =7 AND agendas.fecha="'.$year.'-'.$month.'-'.$diaActual.'"';$resul_cd1=mysqli_query($miConexion,$sql_cd1);
		while($fila1=mysqli_fetch_array($resul_cd1)){
			echo "<p><b>Hora:</b>".$fila1['5']."<br> <b>Estilista:</b>".$fila1['0']." ".$fila1['1']."<br> <b>Servicio Contratado:</b>".$fila1['2']." ".$fila1['3']."<br> <b>Tiempo Estimado:</b>".$fila1['4']." mins </p>";	}
	  ?>
      			</a>
      		</td> 
            <td style="background-color:#000; color:#FFF; padding-left:3px; padding-right:3px; vertical-align: middle;" width="20%"><h3 style="color:#FFF">CANCELAR</h3>
            </td>
            </tr>
	</table>
   </div>    
</div>

<div class="col-lg-3 col-md-3"></div>
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

  <?php
echo "<script type='text/javascript' src='../../js/jquery.js'></script>";
echo "<script type='text/javascript' src='../../js/jqueryui.js'></script>";
echo "<script type='text/javascript'>";

echo "var x;";
echo "x=$(document);";
echo "x.ready(inicializar);";

echo "function inicializar()";
echo "{";
echo "	var x=$('#pestanas');";
echo "	x.tabs();";
echo "	}";
echo "</script>";
  ?>

</body>
</html>