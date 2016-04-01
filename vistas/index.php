<?php
include_once('../modulos/Enrutador.php');
include_once('../modulos/Controlador.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Usuarios</title>
</head>
<body>
<h1>Bienvenido </h1>

<nav>
<ul>
<li><a href="index.php"><b>Inicio</b></a></li>
<li><a href="?cargar=crear"><b>Registrar</b></a></li>

</ul>
</nav>
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