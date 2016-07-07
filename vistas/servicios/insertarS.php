<?php  
$controlador = new controlador();
$resultado = $controlador->serviciosCort();
$resultado2 = $controlador->serviciosColor();
$resultado3 = $controlador->serviciosPeinado();
$resultado4 = $controlador->serviciosMaquillaje();
$resultado5 = $controlador->serviciosOtros();
?>

<script  src="../js/jquery.js"></script>
<div id="pestanas"> 
 <ul class="nav nav-tabs">
        <li role="presentation" class="active" ><a href="#pestana1" role="tab" data-toggle="tab">Cortes</a></li>
        <li role="presentation"><a href="#pestana2" role="tab" data-toggle="tab">Color</a></li> 
        <li role="presentation"><a href="#pestana3" role="tab" data-toggle="tab">Peinado</a></li> 
        <li role="presentation"><a href="#pestana4" role="tab" data-toggle="tab">Maquillaje</a></li> 
        <li role="presentation"><a href="#pestana5" role="tab" data-toggle="tab">Otros servicios</a></li> 
 </ul>

<div id="pestana1">
<b>Servicio cortes:</b><br><br>
<form method="POST" action="aServicio.php">
<table border="0">
	<thead>
        <th>Servicio</th>
		<th>Seleccion</th>

     </thead>
     <!-- Cortes -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

        <?php
	     while($row = mysql_fetch_array($resultado)): 
         ?>
            <tr>
            <td><?php echo utf8_encode($row[1]); ?></td>
            <?
            echo "<td><input type=checkbox value=$row[0] name='corte[]' ></td>";
            ?>
         </tr>
        <?php  
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->

<div id="pestana2">
<br><b>Servicio Color:</b><br><br>
<table border="0">
	<thead>
        <th>Servicio</th>
		<th>Seleccion</th>

     </thead>
     <!-- Color -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysql_fetch_array($resultado2)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[1]); ?></td>
             <?
            echo "<td><input type=checkbox value=$row[0] name='color[]' ></td>";
            ?>
            </tr>
        <?php  
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->

<div id="pestana3">
<br><b>Servicio Peinado:</b><br><br>
<table border="0">
	<thead>
        <th>Servicio</th>
		<th>Seleccion</th>

     </thead>
     <!-- Peinado -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysql_fetch_array($resultado3)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[1]); ?></td>
             <?
            echo "<td><input type=checkbox value=$row[0] name='peinado[]' ></td>";
            ?>
          </tr>
        <?php  
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->

<div id="pestana4">
<br><b>Servicio Maquillaje:</b><br><br>
<table border="0">
	<thead>
        <th>Servicio</th>
		<th>Seleccion</th>

     </thead>
     <!-- Maquillaje -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysql_fetch_array($resultado4)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[1]); ?></td>
             <?
            echo "<td><input type=checkbox value=$row[0] name='maquillaje[]' ></td>";
            ?>
        </tr>
        <?php  
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
</div>

<!--///////////////////////-->

<div id="pestana5">
<br><b>Servicios Otros:</b><br><br>
<table border="0">
	<thead>
        <th>Servicio</th>
		<th>Seleccion</th>

     </thead>
     <!-- Otros servicios -->   
    
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
    

     <?php
	     while($row = mysql_fetch_array($resultado5)): 
         ?>
        <tr>
            <td><?php echo utf8_encode($row[1]); ?></td>
             <?
            echo "<td><input type=checkbox value=$row[0] name='otro[]' ></td>";
            ?>
         </tr>
        <?php  
	     endwhile; 
	    ?>        
    </div>
    <div class="col-lg-3 col-md-3"></div>                     
    
</table>
<br><INPUT TYPE="SUBMIT" name="guardar" value="Guardar" style="height:38px; width:350px" >
</form>
</div>
</div>
