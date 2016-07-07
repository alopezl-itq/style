<?php
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
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Calendario</title>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width">

<style type="text/css">
.link, .link a:link, .link a:active, .link a:visited {
text-decoration:none;
background-color:#FFFFFF;
color:#000;
display:block
}
.link a:hover{
background-color:#FFFFFF;
color:#000;
font-size: .95em;

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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      <div class="logo-wrap col-md-2 col-sm-2 col-lg-2 col-xs-2"></div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../../principal.php">Calendario</a></li>
      <li><a href="vistas/usuarios/principal.php">Regresar</a></li>
    </ul>
  </div>
</nav>
            
<div class="row">
	<div class="col-md-12 text-center">
		<H1>Calendario</H1><br>
 	</div> <!-- /.heading-section -->
</div> <!-- /.row -->

<div class="table-responsive">
        <table border='1' class="table">
        	<tr>
            
            <td class="link" style="text-align:left">
            <a href="#ModalAdd" data-toggle="modal">
            <?php   $sql_cd1="SELECT usuarios.nombre_usuario, usuarios.apellido_p, servicios.descripcion_servicios, agendas.tiempo, agendas.hora, agendas.fecha FROM `usuarios`, `servicios`, `agendas` WHERE date_format(agendas.fecha,'%Y-%m') AND usuarios.id_usuario=agendas.id_usuario AND servicios.id_servicio=agendas.id_servicio AND agendas.id_cliente = 1"; $resul_cd1=mysql_query($sql_cd1); 
		while($fila1=mysql_fetch_array($resul_cd1)){
			$fecha=explode('-',$fila1['5']);
				$fecha[0];
				$fecha[1];
				$fecha[2];
				
				 if($fecha[1] == '06'){$fecha[1]='JUNIO';}else if($fecha[1] == '07'){$fecha[1]='JULIO';}else if($fecha[1] == '08'){$fecha[1]='AGOSTO';}else if($fecha[1] == '09'){$fecha[1]='SEPTIEMBRE';}else if($fecha[1] == '10'){$fecha[1]='OCTUBRE';}else if($fecha[1] == '11'){$fecha[1]='NOVIEMBRE';}else if($fecha[1] == '12'){$fecha[1]='DICIEMBRE';}
							
		echo "<h3>".$fecha[1]."  ".$fecha[2]."</h3><br><p><b>Peluquero:</b>".$fila1['0']." ".$fila1['1']."<br> <b>Servicio Contratado:</b>".$fila1['2']."<br> <b>Tiempo Estimado:</b>".$fila1['3']."<br> <b>Hora:</b>".$fila1['4']."</p>";	
		}
	  ?>
      			</a>
      		</td> 
            
            <td style="text-align:left" class="link">
            	<a href="#ModalAdd" data-toggle="modal">
            <?php   $sql_cd1="SELECT usuarios.nombre_usuario, usuarios.apellido_p, servicios.descripcion_servicios, agendas.tiempo, agendas.hora, agendas.fecha FROM `usuarios`, `servicios`, `agendas` WHERE date_format(agendas.fecha,'%Y-%m') AND usuarios.id_usuario=agendas.id_usuario AND servicios.id_servicio=agendas.id_servicio AND agendas.id_cliente = 1"; $resul_cd1=mysql_query($sql_cd1); 
		while($fila1=mysql_fetch_array($resul_cd1)){
			$fecha=explode('-',$fila1['5']);
				$fecha[0];
				$fecha[1];
				$fecha[2];
				
				 if($fecha[1] == '06'){$fecha[1]='JUNIO';}else if($fecha[1] == '07'){$fecha[1]='JULIO';}else if($fecha[1] == '08'){$fecha[1]='AGOSTO';}else if($fecha[1] == '09'){$fecha[1]='SEPTIEMBRE';}else if($fecha[1] == '10'){$fecha[1]='OCTUBRE';}else if($fecha[1] == '11'){$fecha[1]='NOVIEMBRE';}else if($fecha[1] == '12'){$fecha[1]='DICIEMBRE';}
							
		echo "<h3>".$fecha[1]."  ".$fecha[2]."</h3><br><p><b>Peluquero:</b>".$fila1['0']." ".$fila1['1']."<br> <b>Servicio Contratado:</b>".$fila1['2']."<br> <b>Tiempo Estimado:</b>".$fila1['3']."<br> <b>Hora:</b>".$fila1['4']."</p>";	
		}
	  ?>
      			 	</a>
      			</td>
			</tr>

	</table>
   </div>    
        <!-- Modal Sexo-->
<div id="ModalAdd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Más Detalles</h4>
      </div>
      <div class="modal-body">
		  <form METHOD="POST" ACTION="sexoInsert.php">
			<br>Tipo de Servicio<br>
            <select name='tiempo[]'><option value=1>Servicio de corte</option><option value=2>Servicio de color</option><option value=3>Servicio de peinado</option><option value=4 >Servicio de maquillaje</option><option value=5 >Otro tipo de servicio</option></select><br>
            <br>Nuevo Servicio:<br>
            <INPUT TYPE="TEXT" NAME="descripcion" required style="height:20px; width:100px;"><br>
            <br>Costo del Servicio:<br>
            <input type="text" name='costo[]' style="height:20px; width:100px;"><br>
           <br>Tiempo del Servicio:<br>
            <select name='tiempo[]'><option value=30>30 min</option><option value=60>1 hora</option><option value=90 >1 hora y 30 minutos</option><option value=120 >2 horas</option></select><br>
        
			<br><INPUT TYPE="SUBMIT" style="height:38px; width:350px" value="Insertar" aling="Center"><br>
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