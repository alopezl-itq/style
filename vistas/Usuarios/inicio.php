<?php  
$controlador = new Controlador();
$resultado = $controlador->index();
?>
<div align="center"> 
<table border="1">
	<thead>
        <th>Nombre</th>
		<th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Estetica</th>
        <th>Telefono</th>
     </thead>
     <tbody>
     <?php  while($row = mysqli_fetch_array($resultado)): ?>
        <tr>
        <td><?php echo $row['nombre_u']; ?></td>
        <td><?php echo $row['apellido_p']; ?></td>
        <td><?php echo $row['apellido_m']; ?></td>
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['telefono']; ?></td>
       
        <td> <a href="?cargar=ver&controlador=usuarios&id_usuario=<?php echo  $row['id_usuario'];  ?>">Ver mas informacion</a> </td>
       <td> <a href="?cargar=editar&controlador=usuarios&&id_usuario=<?php echo $row['id_usuario'];  ?>">editar</a></td>
        <td><a href="?cargar=eliminar&controlador=usuarios&&id_usuario=<?php echo $row['id_usuario'];  ?>">eliminar</a></td>
        
        </tr>
        
      <?php  
	  
	  
	  
	  endwhile; 
	  ?>
      
      
     </tbody>
</table>
</div>