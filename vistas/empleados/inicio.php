<?php
include_once('../../modulos/e_controlador.php');
include_once('../../modulos/controlador.php');
$controlador = new ControladorE();
$resultado = $controlador->index($_SESSION['estetica']);





;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Empleados</title>
    <meta charset="utf-8">
</head>
<body>

<?php

if($_SESSION['tipo']==2 or $_SESSION['tipo']==4){
echo'


<div class="panel panel-default">
		<div class="panel-heading">Empleados Activos</div>
		<div id="Em" class="panel panel-body ">
        <div align="center" class="table-reponsive"> 
<table class="table" width="80px" >
	<thead>
        <th>Nombre</th>
		<th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Estetica</th>
        <th>Telefono</th>

     </thead>
     <tbody>
	 ';
      while($row = mysqli_fetch_array($resultado)): 
        echo'
		<tr class="success">
        <td>'.utf8_encode($row['nombre_usuario']).'</td>
        <td>'.utf8_encode($row['apellido_p']).'</td>
        <td>'.utf8_encode($row['apellido_m']).'</td>
        <td>'.utf8_encode($row['nombre']).'</td>
        <td>'.$row['telefono'].'</td>
         ';
echo'
        <td> <a  href="?cargar=empleados&controlador=ver&id_usuario='.$row['id_usuario'].'">+Información</a></td>
        <td><a class="glyphicon glyphicon-pencil" title="Desactivar" href="?cargar=empleados&controlador=editar&id_usuario='.$row['id_usuario'].'">Editar</a></td>
        <td><a class="glyphicon glyphicon-remove-sign" title="Desactivar" href="?cargar=empleados&controlador=eliminar&&id_usuario='.$row['id_usuario'].'">Desactivar</a></td>

        </tr>
';
     



	  endwhile;
	 
echo'

     </tbody>
</table>
</div>
</div>
</div>
</div>
';
}else{
	
	}
 ?>
</body>
</html>