<?php
include_once('../../modulos/c_controlador.php');
include_once('../../modulos/controlador.php');
$controlador = new ControladorC();
$resultado = $controlador->index($_SESSION['estetica']);





;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Empleados</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>



<div class="panel panel-default">
		<div class="panel-heading">Proveedores</div>
		<div id="Em" class="panel panel-body ">
        <div align="center" class="table-reponsive"> 
  <table class="table" width="80px" >
	<thead>
        <th>Nombre y/o razon social</th>
		<th>Telefono</th>
        <th>Correo</th>
     </thead>
     <tbody>
	
     <?php    while($row = mysqli_fetch_array($resultado)): ?>
         <tr class="success">
        
        <td><?php echo utf8_encode($row['nombre_empresa']); ?></td>
        <td><?php echo utf8_encode($row['telefono']); ?></td>
        <td><?php echo utf8_encode($row['email']); ?></td>
       
<td><a href="?cargar=compras&controlador=ver&id_proveedor=<?php echo  $row['id_proveedor'];  ?>">+informacion</a> </td>
        <td><a  class="glyphicon glyphicon-remove" title="Eliminar" href="?cargar=compras&controlador=eliminar&&id_provedor=<?php echo $row['id_proveedor'];  ?>">Eliminar</a></td>
        
        </tr>
        
      <?php  
	  
	  
	  
	  endwhile; 
	  ?>


     </tbody>
</table>
</div>
</div>
</div>
</div>
</body>
</html>