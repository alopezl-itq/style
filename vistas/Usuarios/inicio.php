<?php  


$controlador = new Controlador();
$resultado = $controlador->index();


 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inicio</title>
</head>

<body>





<table border="1">
	<thead>
        <th>Foto</th>
        <th>Nombre</th>
		<th>Apellido Paterno</th>
		<th>Apellido Materno</th>
		<th>Telefono</th>
     </thead>
     <tbody>
     <?php  while($row = mysqli_fetch_array($resultado)): ?>
        <tr>
        <td><?php echo '<img src="'.$row['foto'].'.jpg" width="100" height="120"></img>'; ?></td>
        <td><?php echo $row['nombreU']; ?></td>
        <td><?php echo $row['apellido_p']; ?></td>
        <td><?php echo $row['apellido_m']; ?></td>
        <td><?php echo $row['telefono']; ?></td>
       
        <td> <a href="?cargar=ver&id_usuario=<?php echo  $row['id_usuario'];  ?>">Ver mas informacion</a> </td>
       <td> <a href="?cargar=editar&id_usuario=<?php echo $row['id_usuario'];  ?>">editar</a></td>
        <td><a href="?cargar=eliminar&id_usuario=<?php echo $row['id_usuario'];  ?>">eliminar</a></td>
        
        </tr>
        
      <?php  
	  
	  
	  
	  endwhile; ?>
      
      
     </tbody>
</table>

</body>
</html>