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
        <title>Agenda</title>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width">

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
      <li class="active"><a href="../../principal.php">Agenda</a></li>
      <li><a href="vistas/usuarios/principal.php">Regresar</a></li>
    </ul>
  </div>
</nav>
            
<div class="row">
	<div class="col-md-12 text-center">
		<H1>Su Agenda Personal</H1><br>
 	</div> <!-- /.heading-section -->
</div> <!-- /.row -->

<script  src="js/jquery.js"></script>

<div id="pestanas">

<ul class="nav nav-tabs" style="background-color:beige;">
 	<li role="presentation" class="active"><a href="#pestana1" role="tab" data-toggle="tab">Agende una Cita</a></li>
 	<li role="presentation"><a href="#pestana2" role="tab" data-toggle="tab">Citas Agendadas</a></li>  
</ul>		
 
 <div id="pestana1">
<br>
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
    <form action='altaCita' method='post'>
		<div class='form-group' style='color:#EE325E; font-size:28px'>
			<td nowrap='nowrap' align='right'><b>Agenda tu cita aquí</b></td>
		</div>
        
        <div class='form-group'>
			<input type='text' class='form-control' name='noCliente' value=''/>
			<p class='help-block text-danger'></p>
		</div> 
 		
        <div class='form-group'>
                    <p>Nuestros Peluqueros</p>
                     <select class="form-control" name="peluquero"> 
                     	<option value="" class="form-control">Seleccionar...</option>  <?php   $sql_IDUsuario="SELECT 	id_usuario, nombre_usuario FROM usuarios WHERE id_tipo_usuario=2"; $resul_IDUsuario=mysql_query($sql_IDUsuario); 
		while($filaUsuario=mysql_fetch_array($resul_IDUsuario)){
		echo "<option value='".$filaUsuario['0']."'> ". $filaUsuario['1']."</option>";	
		}
	  ?>  </select>
		</div> 
        
		<div class='form-group'>
                    <p>Servicios</p>
                    <select class="form-control" name="id_servicio" id="id_servicio"> 
                     	<option value="" class="form-control">Seleccionar...</option>  <?php   $sql_IDServicio="SELECT servicios.id_servicio, servicios.descripcion_servicios FROM `empresas`, `servicios`, `servicios_empresa`, `descripcion_servicios` WHERE empresas.id_empresa=servicios_empresa.id_empresa AND descripcion_servicios.id_descripcion_servicios=servicios_empresa.id_descripcion_servicios AND servicios.id_servicio=servicios_empresa.id_servicio AND empresas.id_empresa=1 GROUP BY id_servicio"; $resul_IDServicio=mysql_query($sql_IDServicio); 
		while($filaServicio=mysql_fetch_array($resul_IDServicio)){
		echo "<option value='".$filaServicio['0']."'> ". $filaServicio['1']."</option>";	
		}
	  ?>  </select>
		</div>

		<div class="form-group">
			<p>Descripcion</p>
				<select name="id_desc" id="id_desc">
					<option value="">Seleccionar...</option>
				</select>
				<script>
					$(document).ready(function(){
						$('#id_servicio').change(function(){
						var desc_id = $(this).val();
						$.ajax({
							url:"fetch_desc.php",
							method:"POST",
							data:{descId:desc_id},
							dataType:"text",
							success:function(data)
							{
								$('#id_desc').html(data);
							}
						});
						});
					});
				</script>
		</div>

		<div class='form-group'>
        	<p>Tiempo Estimado</p>
			<input type='text' class='form-control' name='tiempo' />
			<p class='help-block text-danger'></p>
		</div> 

		<div class='form-group'>
        	<p>Día de la Cita</p>
			<input type='date' class='form-control' placeholder='Fecha *' name='fecha' />
			<p class='help-block text-danger'></p>
		</div> 

        <div class='form-group'>
            <p>Hora</p>
            <select name='hora' class='form-control'>
            	<option value='12:00'>12:00</option>
                <option value='13:00'>13;00</option>
                <option value='16:00'>14:00</option>
                <option value='17:00'>15:00</option>
                <option value='18:00'>16:00</option>
            </select>
		</div>

		<div class='form-group'>
			<input type='submit' class='btn btn-xl' value='Agendar'  name='Insertar' id='Insertar'/>
		</div></br></br>
</form>
</div>
<div class="col-lg-3 col-md-3"></div>
</div>

<div id="pestana2">
<br>
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
	<div class='form-group' style='color:#EE325E; font-size:28px'>
			<td nowrap='nowrap' align='right'><b>Citas Programadas</b></td>
	</div>
		<div class="table-responsive">
        <table border='1' class="table">
        	<tr align="center">
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
      			</td>
                <td style="background-color:#000; color:#FFF; padding-left:3px; padding-right:3px; vertical-align: middle;" width="20%"><h3 style="color:#FFF">CANCELAR</h3></td>
			</tr>

	
    	<tr align="center">
            	<td style="text-align:left"><h3>Cita 1</h3><br>
            <?php   $sql_cd1="SELECT usuarios.nombre_usuario, usuarios.apellido_p, servicios.descripcion_servicios, agendas.tiempo, agendas.hora, agendas.fecha FROM `usuarios`, `servicios`, `agendas` WHERE usuarios.id_usuario=agendas.id_usuario AND servicios.id_servicio=agendas.id_servicio AND agendas.id_cliente = 2"; $resul_cd1=mysql_query($sql_cd1); 
		while($fila1=mysql_fetch_array($resul_cd1)){
		echo "<p><b>Peluquero:</b>".$fila1['0']." ".$fila1['1']."<br> <b>Servicio Contratado:</b>".$fila1['2']."<br> <b>Tiempo Estimado:</b>".$fila1['3']."<br> <b>Hora:</b>".$fila1['4']."<br> <b>Fecha:</b>".$fila1['5']."</p>";	
		}
	  ?>
      			</td>
                <td style="background-color:#000; color:#FFF; padding-left:3px; padding-right:3px; vertical-align: middle;" width="20%"><h3 style="color:#FFF">CANCELAR</h3></td>
			</tr>
	</table>
    <br><br><br>  
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

  <script src="js/vendor/jquery-1.11.0.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
  <script src="js/bootstrap.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>   

<?php
echo "<script type='text/javascript' src='js/jquery.js'></script>";
echo "<script type='text/javascript' src='js/jqueryui.js'></script>";
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