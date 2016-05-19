<?php
/**
 * Created by PhpStorm.
 * User: Eed
 * Date: 19/05/2016
 * Time: 10:24 AM
 */
session_start();



include_once('clases/comunes.php');

validarSesion();

?>
<html>
<head>

</head>
<body>

<header><a href="clases/salir.php">Logout</a></header>

<a href="vistas/Usuarios/index.php">Usuarios</a>
<?php
echo $_SESSION['nombre'];
?>

</body>

</html>
