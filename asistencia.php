<?php
	
$permitidos=array(4,5,6,7,8,9,10,11,12);
	if(isset($_POST['enviar'])){
		$db = mysqli_connect('localhost','alejan14_style','style16','alejan14_style');//conexión con la base de datos
		
		if(!$db) echo "error ".mysqli_error($db);
		
		
		$existe_usuario="select * from usuarios where usuario='".$_POST['usuario']."' and password='".$_POST['contra']."'";//Verificar si el usuario existe
		
		
		if(!$consulta_existe=mysqli_query($db,$existe_usuario)) { 
			echo "error ". mysqli_error($consulta_existe);
			} else{
				 $row_cnt = mysqli_num_rows($consulta_existe);
				 
				 if($row_cnt<1){
					 echo("<div id='texto'>usuario inexistente</div");
				 }else{
					 
					 
					 
					 
					 while($dato=mysqli_fetch_assoc($consulta_existe)){
						 
						 if(in_array($dato['id_tipo_usuario'],$permitidos)){
						 
						 	$verifica= "select * from asistencia_empleado where id_usuario=".$dato['id_usuario']." and fecha='".date("Y-m-d")."'";
						 
						 	if(!$verificaaplica=mysqli_query($db, $verifica)) echo "error". mysqli_error($verificaaplica);
						
						 	$row_cnt_verifica = mysqli_num_rows($verificaaplica);
						 
						 	if($row_cnt_verifica>0){
								 echo("ya registro asistencia el día de hoy");
							
							}else{
								echo $query="insert into asistencia_empleado (id_usuario,fecha,hora_ingreso, hora_salida) VALUES (".$dato['id_usuario'].",'".date("Y-m-d")."','".date("G:i")."',NULL)";
								if(!$inserta=mysqli_query($db,$query)) {
									echo "error".mysqli_error($inserta);
							 } else{
								 	echo "aquí ando";
								 	header("location: index.html");
						}
						}} else{
							
							echo "no puede registrar asistencia";
						}							 
						 }
						  
			
				
			}	
					
				
			}
		
					
			/*
			header("location: principal.php");


			}else{
				header ("location: index.html");
				}
*/
		}
		
	
?>

<!Doctype html>
<html xmlns="http://www.w3.org/1999/html">

<head>
 <meta charset="utf-8">
        <title>Style....</title>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width">
<!-- 
Flex Template 
http://www.templatemo.com/tm-406-flex
-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>

</head>

<body>
<div class="container" >   
	<form action="" method="POST">

	<div class="container">
    	<div class="row">
          <div class="col-md-8" style="float: left">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-envelope-o"></i>Asistencia</a></li>
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        <h2>Datos </h2>
                        <p>
                            <div class="form-group">
								<h4> Nombre de usuario:</h4><label for="nombre"><input type="text" placeholder="Usuario" name="usuario" id="usuario" 									maxlength="50" size="20" required/></label>
							</div>

							<div class="form-group">
								<h4> Contraseña:</h4><label for="nombre"><input type="password" placeholder="Contraseña" name="contra" id="contra" maxlength="50" 								size="20" required/></label>
							</div>
							<div class="form-group">
							<h4> </h4><label for="nombre"><input type="submit"  name="enviar" id="enviar" required value="Enviar"/></label>
							</div>
							
					</div>
                </div>
                
                
                
            </div>
                        
        </div>
        

    </div>
</div>


</form>
</div>

</body>
</html>
		