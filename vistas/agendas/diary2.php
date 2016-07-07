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
$hostname_MiConexion = "localhost";
$database_MiConexion = "style";
$username_MiConexion = "root";
$password_MiConexion = "";
$miConexion = mysql_pconnect($hostname_MiConexion, $username_MiConexion, $password_MiConexion) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db("style");
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
			background-color:black;
			padding:8px;
		}
		.link, .link a:link, .link a:active, .link a:visited {
			text-decoration:none;
			background-color:#FFFFFF;
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
        
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
    </head>
 
<body>
<div class="row">
	<div class="col-md-12 text-left">
		<H3>The Best Hair Soolns: Calendario</H3><br>
 	</div> <!-- /.heading-section -->
</div> <!-- /.row -->
<div class="table-responsive">
<table class="table" id="calendar">
	<H2><?php echo $meses[$month]." ".$year?></H2>
	<tr>
		<td>Lunes</td><td style="padding:0px"></td><td>Martes</td><td style="padding:0px"></td><td>Miercoles</td><td style="padding:0px"></td><td>Jueves</td><td style="padding:0px"></td>
		<td>Viernes</td><td style="padding:0px"></td><td>Sabado</td><td style="padding:0px"></td><td>Domingo</td>
	</tr>
	<tr bgcolor="silver">
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
				// celca vacia
				echo "<td class='link'>&nbsp;</td> <td style='padding:0px'></td>";
			}else{
				// mostramos el dia
				if($day==$diaActual)
					echo "<td style='text-align:left' class='link hoy'><a href='#ModalAdd' data-toggle='modal'>$day</a></td><td style='padding:0px'></td>";
					
					
				else
				
					echo "<td style='text-align:left' class='link'><a href='#ModalAdd' data-toggle='modal'>$day";
					$sql_cd1='SELECT usuarios.nombre_usuario, usuarios.apellido_p, servicios.descripcion_servicios, agendas.tiempo, agendas.hora, agendas.fecha FROM `usuarios`, `servicios`, `agendas` WHERE usuarios.id_usuario=agendas.id_usuario AND servicios.id_servicio=agendas.id_servicio AND agendas.id_cliente = 1';$resul_cd1=mysql_query($sql_cd1); 
		while($fila1=mysql_fetch_array($resul_cd1)){	
			echo "<p><b>Peluquero:</b>".$fila1['0']." ".$fila1['1']."<br> <b>Servicio Contratado:</b>".$fila1['2']."<br> <b>Tiempo Estimado:</b>".$fila1['3']."<br> <b>Hora:</b>".$fila1['4']."</p>";	
		}
		echo "</a></td><td style='padding:0px'></td>";
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

        <!-- Modal Sexo-->
<div id="ModalAdd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detalles</h4>
      </div>
      <div class="modal-body">
		  <form METHOD="POST" ACTION="sexoInsert.php">
			<br>Tipo de Servicio<br>
            <select name='tiempo[]'><option value=1>Servicio de corte</option><option value=2>Servicio de color</option><option value=3>Servicio de peinado</option><option value=4 >Servicio de maquillaje</option><option value=5 >Otro tipo de servicio</option></select><br>
            <br>Duración:<br>
            <INPUT TYPE="TEXT" NAME="descripcion" required style="height:20px; width:100px;"><br>
            <br>Costo:<br>
            <input type="text" name='costo[]' style="height:20px; width:100px;"><br>
           <br>Total:<br>
			<br>
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
        
<?php   $sql_cd1='SELECT usuarios.nombre_usuario, usuarios.apellido_p, servicios.descripcion_servicios, agendas.tiempo, agendas.hora, agendas.fecha FROM `usuarios`, `servicios`, `agendas` WHERE usuarios.id_usuario=agendas.id_usuario AND servicios.id_servicio=agendas.id_servicio AND agendas.id_cliente = 1'; $resul_cd1=mysql_query($sql_cd1); 
		while($fila1=mysql_fetch_array($resul_cd1)){
			
		echo "<p><b>Peluquero:</b>".$fila1['0']." ".$fila1['1']."<br> <b>Servicio Contratado:</b>".$fila1['2']."<br> <b>Tiempo Estimado:</b>".$fila1['3']."<br> <b>Hora:</b>".$fila1['4']."</p>";	
		}
	  ?>

  <script src="js/vendor/jquery-1.11.0.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
  <script src="js/bootstrap.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

</body>
</html>