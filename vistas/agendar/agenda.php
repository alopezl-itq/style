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
		<link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/font-awesome.css">
        <link rel="stylesheet" href="../../css/animate.css">
        <link rel="stylesheet" href="../../css/templatemo_misc.css">
        <link rel="stylesheet" href="../../css/templatemo_style.css">
        
        <script src="js/ajax.js"></script>
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
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
					echo "<td style='text-align:left' class='link hoy'><a href='agendar.php?dia=".$day."&mes=".$month."&anio=".$year."' data-toggle='modal'>$day";
					$sql_cd1='SELECT usuarios.nombre_usuario, usuarios.apellido_p, servicios.servicio, descripcion_servicios.descripcion, agendas.tiempo, agendas.hora FROM `usuarios`, `descripcion_servicios`, `servicios`, `agendas` WHERE usuarios.id_usuario=agendas.id_usuario AND descripcion_servicios.id_servicio=servicios.id_servicio AND descripcion_servicios.id_descripcion_servicios=agendas.id_servicio AND agendas.id_cliente ='.$_SESSION['id_user'].' AND agendas.fecha="'.$year.'-'.$month.'-'.$day.'"';$resul_cd1=mysqli_query($miConexion,$sql_cd1);
		while($fila1=mysqli_fetch_array($resul_cd1)){
			echo "<p><b>Hora:</b>".$fila1['5']."<br> <b>Estilista:</b>".$fila1['0']." ".$fila1['1']."<br> <b>Servicio Contratado:</b>".$fila1['2']." ".$fila1['3']."<br> <b>Tiempo Estimado:</b>".$fila1['4']." <b>Hora:</b>".$fila1['5']."</p>";	
		}					echo "</a></td><td style='padding:0px'></td>";

				}else{
				
					echo "<td style='text-align:left' class='link'><a href='agendar.php?dia=".$day."&mes=".$month."&anio=".$year."' data-toggle='modal'>$day";
					 $sql_cd1='SELECT usuarios.nombre_usuario, usuarios.apellido_p, servicios.servicio, descripcion_servicios.descripcion, agendas.tiempo, agendas.hora FROM `usuarios`, `descripcion_servicios`, `servicios`, `agendas` WHERE usuarios.id_usuario=agendas.id_usuario AND descripcion_servicios.id_servicio=servicios.id_servicio AND descripcion_servicios.id_descripcion_servicios=agendas.id_servicio AND agendas.id_cliente ='.$_SESSION['id_user'].' AND agendas.fecha="'.$year.'-'.$month.'-'.$day.'"';
					$resul_cd1=mysqli_query($miConexion,$sql_cd1);
		while($fila1=mysqli_fetch_array($resul_cd1)){
			echo "<p><b>Hora:</b>".$fila1['5']."<br> <b>Estilista:</b>".$fila1['0']." ".$fila1['1']."<br> <b>Servicio Contratado:</b>".$fila1['2']." ".$fila1['3']."<br> <b>Tiempo Estimado:</b>".$fila1['4']." <b>Hora:</b>".$fila1['5']."</p>";
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
		      <form action="altaCita" method="post">
        <div class="form-group">
            <p>Fecha</p>
        <?php echo"<input type='text' class='form-control' name='tiempo' id='tiempo' value='".$_GET['anio']."-".$_GET['mes']."-".$_GET['dia']."'/>" ?>      
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
                    <p>Nuestros Peluqueros</p>
                     <select class="form-control" name="empleado" id="empleado"> 
                     	<option value="" class="form-control">Seleccionar...</option>  <?php   $sql_IDUsuario="SELECT 	id_usuario, nombre_usuario FROM usuarios WHERE id_tipo_usuario=2"; $resul_IDUsuario=mysqli_query($miConexion,$sql_IDUsuario);
		while($filaUsuario=mysqli_fetch_array($resul_IDUsuario)){
		echo "<option value='".$filaUsuario['0']."'> ". $filaUsuario['1']."</option>";	
		}
	  ?>  </select>
		</div> 
        
		<div class="form-group">
                    <p>Servicios</p>
                    <select class="form-control" name="servicio" id="sevicio" onchange="load(this.value)"> 
                     	<option value="" class="form-control">Seleccionar...</option>  <?php   $sql_IDServicio="SELECT servicios.id_servicio, servicios.descripcion_servicios FROM `empresas`, `servicios`, `servicios_empresa`, `descripcion_servicios` WHERE empresas.id_empresa=servicios_empresa.id_empresa AND descripcion_servicios.id_descripcion_servicios=servicios_empresa.id_descripcion_servicios AND servicios.id_servicio=servicios_empresa.id_servicio AND empresas.id_empresa=".$_SESSION['empresa']." GROUP BY id_servicio"; $res=mysqli_query($miConexion,$sql_IDServicio);
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

  <script src="js/vendor/jquery-1.11.0.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
  <script src="js/bootstrap.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

</body>
</html>