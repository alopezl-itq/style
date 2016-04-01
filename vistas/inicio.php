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


<h1><b>Pagina de inicio</b></h1>


<table border="1">
	<thead>
	    <th>Nombre</th>
		<th>Apellido Paterno</th>
		<th>Apellido Materno</th>
		<th>Sexo</th>
        <th>Fecha de Nacimiento</th>
        <th>Foto</th>
        <th>e-mail</th>
        <th>Teléfono</th>
        <th>Observaciones</th>
        <th>Usuario</th>
        <th>Redes Sociales</th>
        <th>Tipo de Usuario</th>
        <th>Estatus</th>
        <th>Empresa</th>
        <th>Calle</th>
        <th>Número interior</th>
        <th>Número exterior</th>
        <th>Ciudad/Localidad</th>
        <th>Municipio</th>
        <th>Estado</th>
     </thead>
     <tbody>
     <?php  while($row = mysqli_fetch_array($resultado)): ?>
        <tr>
        
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['apellido_p']; ?></td>
        <td><?php echo $row['apellido_m']; ?></td>
        <td><?php echo $row['sexo']; ?></td>
        <td><?php echo $row['fecha_nacimiento']; ?></td>
        <td><?php echo '<img src="'.$row['foto'].'.jpg" width="100" height="120"></img>'; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['telefono']; ?></td>
        <td><?php echo $row['observaciones']; ?></td>
        <td><?php echo $row['usuario']; ?></td>
        <td><?php echo $row['descripcion_redes']; ?></td>
        <td><?php echo $row['descripcion_tipo_usuarios']; ?></td>
        <td><?php echo $row['descripcion_estatus']; ?></td>
        <td><?php echo $row['nombre_empresa']; ?></td>
        <td><?php echo $row['nombre_calle']; ?></td>
        <td><?php echo $row['no_int']; ?></td>
        <td><?php echo $row['no_ext']; ?></td>
        <td><?php echo $row['descripcion_ciudades']; ?></td>
        <td><?php echo $row['descripcion_municipios']; ?></td>
        <td><?php echo $row['descripcion_estados']; ?></td>
        <td> <a href="?cargar=ver&id_usuario=<?php echo  $row['id_usuario'];  ?>">Ver</a> </td>
       <td> <a href="?cargar=editar&id_usuario=<?php echo $row['id_usuario'];  ?>">editar</a></td>
        <td><a href="?cargar=eliminar&id_usuario=<?php echo $row['id_usuario'];  ?>">eliminar</a></td>
        
        </tr>
        
      <?php  
	  
	  
	  
	  endwhile; ?>
      
      
     </tbody>
</table>

</body>
</html>