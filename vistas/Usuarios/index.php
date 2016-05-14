<?php
include_once('../../modulos/Enrutador.php');
include_once('../../modulos/Controlador.php');



?>
<!doctype html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <title>Datos Usuarios</title>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/font-awesome.css">
        <link rel="stylesheet" href="../../css/animate.css">
        <link rel="stylesheet" href="../../css/templatemo_misc.css">
        <link rel="stylesheet" href="../../css/templatemo_style.css">
    
        <script src="../../js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
 
    <body>
       
        
                 <div class="main-header">
                    <div class="container">
                        <div id="menu-wrapper">
                            <div class="row">
                                <div class="logo-wrapper col-md-2 col-sm-2">
                                    <h1>
                                        <a href="#">Usuarios</a>
                                    </h1>
                                </div> <!-- /.logo-wrapper -->
                                <div class="col-md-10 col-sm-10 main-menu text-right">
                                    <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                                    <ul class="menu-first">
                                    <li><a href="index.php"><b>Inicio</b></a></li>
                                    <li><a href="?cargar=crear"><b>Registrar</b></a></li>
                                     </ul>
                                      </ul>                                    
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->                        
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            
                                  

  <script src="../../js/vendor/jquery-1.11.0.min.js"></script>
     <script>window.jQuery || document.write('<script src="../../js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="../../js/bootstrap.js"></script>
        <script src="../../js/plugins.js"></script>
        <script src="../../js/main.js"></script>


<br/>
<br/>
<br/><br/>
<br/>
<br/><br/>
<br/>
<br/><br/>

 <section>
<?php 
   $enrutador= new Enrutador();
   if($enrutador->validarGet(isset($_GET['cargar']))){
        $enrutador->cargarVista($_GET['cargar']);
    
}
?>﻿
</section>


  

        
   

</body>
</html>