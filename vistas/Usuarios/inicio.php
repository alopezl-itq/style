<?php  
$controlador = new Controlador();

$resultado = $controlador->index($_SESSION['tipo']);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<<div class="panel panel-default">
		<div class="panel-heading">Usuarios Activos</div>
		<div id="E" class="panel panel-body "> 
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
     <?php  while($row = mysqli_fetch_array($resultado)): ?>
        <tr class="success">
        
        <td><?php echo utf8_encode($row['nombre_usuario']); ?></td>
        <td><?php echo utf8_encode($row['apellido_p']); ?></td>
        <td><?php echo utf8_encode($row['apellido_m']); ?></td>
        <td><?php echo utf8_encode($row['nombre']); ?></td>
        <td><?php echo  $row['telefono']; ?></td>
       
        <td> <a href="./?cargar=usuarios&controlador=ver&id_usuario=<?php echo  $row['id_usuario'];  ?>">+informacion</a> </td>
       <td> <a  class="glyphicon glyphicon-pencil" title="Editar" href="./?cargar=usuarios&controlador=editar&&id_usuario=<?php echo $row['id_usuario'];  ?>"></a></td>
        <td><a  class="glyphicon glyphicon-remove" title="Desactivar" href="./?cargar=usuarios&controlador=eliminar&&id_usuario=<?php echo $row['id_usuario'];  ?>"></a></td>
        
        </tr>
        
      <?php  
	  
	  
	  
	  endwhile; 
	  ?>
      
      
     </tbody>
</table>
</div>
</div>
</div>
</body>
</html>
