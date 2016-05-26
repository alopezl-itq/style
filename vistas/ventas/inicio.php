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





<table align="center" style="background-color:black;color:#E80078"> <tr><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td style="background-color:black;color:#E80078"><h1>Modulo de Ventas</h1></td></tr>
<tr><tr>
	<td>No de Folio.<input type='number' name='folio' value='d' placeholder='Numero de Folio'></td>
	<td>&nbsp;&nbsp;</td>
	<td>&nbsp;&nbsp;&nbsp;No. Venta <input type="text" name="cliente" id="clave" placeholder="Numero de Venta"></td>
	<td>&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;Fecha <input type="date" name="fecha"></td>
</tr><tr><td><br>&nbsp;&nbsp;</td><td><br>Estetica:<input type="text" name="estetica" id="estetica" placeholder="Nombre de Estetica"></td>
<td><br>&nbsp;&nbsp;</td><td><br>&nbsp;&nbsp;&nbsp;Vendedor<input type="text" name="clave" id="clave" placeholder="Nombre del Vendedor"></td></tr>

</table>     <tbody>
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


</body>
</html>