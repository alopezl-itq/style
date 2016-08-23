<?php
include_once('../../modulos/controlador.php');
$controlador = new ControladorC();

header('Content-Type: text/html; charset=UTF-8');

if(isset($_GET['id_proveedor'])){
	$row = $controlador->verP($_GET['id_proveedor']);

}//else{
	//header('Location: index.php');
	//}	





?>        
<!DOCTYPE html>
<html>
<head>
	<title>Información Proveedores</title>
    <meta charset="utf-8">
</head>
<body>

<div align="center">
<a href="?cargar=compras&controlador=editar&&id_proveedor=<?php echo  $row['id_proveedor'];  ?>" class="btn btn-default btn-sm">
<span  class="glyphicon glyphicon-pencil"></span> Editar información </a>
</div> <br/><br/>

<?php    

echo  " <div align='center'><a  href='https://www.facebook.com/".$row['facebook']."' target='_blank' class='fa fa-facebook'></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";


echo  "<a href='https://www.twitter.com/".$row['twitter']."' target='_blank' class='fa fa-twitter'></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

echo  "<a href='https://www.instagram.com/".$row['instagram']."' target='_blank' class='fa fa-instagram'></a>
</div>";
?> 


 <br/>

 <div class="col-sm-3" >
                    <b style="font-size:20px">Información</b><br/><br/>
<b>Nombre De Empresa y/o Razón Social:</b>&nbsp;<?php  echo   utf8_encode($row['nombre_empresa']); ?>
<br/><br/>
<b>RFC:</b>&nbsp;<?php  echo   utf8_encode($row['rfc']); ?>
<br/><br/>
<b>Nombre Del Contacto:</b> &nbsp; <?php echo utf8_encode($row['contacto']); ?>
<br/><br/><br/>

						</div>
                        
                        <div class="col-sm-3">
                    <b style="font-size:20px">Información de Contacto</b><br/><br/>
						<?php 
                        if($row['telcasa']==0){}else{
                        echo'<b>Casa:</b>&nbsp;';
                        echo $row['telcasa'];} ?>
                        <br/><br/><br>
                        <b>Celular:</b>&nbsp;<?php  echo   utf8_encode($row['telefono']); ?>
                            <br/><br/><br/>
           
<b>Correo electrónico:</b>&nbsp;<?php  echo  utf8_encode( $row['email']); ?>
<br/><br/>

						</div>
                        
                        <div class="col-sm-3">
                        <b style="font-size:20px">Domicilio</b><br/><br/>
 <b>Estado:</b>&nbsp;<?php  echo   utf8_encode($row['descripcion_estados']); ?>&nbsp;<b>Municipio:</b>&nbsp;<?php echo utf8_encode($row['descripcion_municipios']); ?> <b>Colonia:</b>&nbsp;<?php echo utf8_encode($row['colonia']); ?>
<br/><b>Calle:</b>&nbsp;<?php echo utf8_encode($row['nombre_calle']); ?>&nbsp;<b>No. Interior:</b>&nbsp;<?php echo  utf8_encode($row['no_int']); ?> &nbsp;<br/>
 <?php 
 if($row['no_ext']==0){}else{
 echo'<b>No. Exterior:</b>&nbsp;';
 echo $row['no_ext'];} ?><br/><b>Codigo Postal:</b>&nbsp;<?php echo $row['cp']; ?> 
<br/><br/><br/>
</div>


<div class="col-sm-3" >
                    <b style="font-size:20px">Datos Bancarios</b><br/><br/>
<b>Nombre Del Banco:</b>&nbsp;<?php  echo   utf8_encode($row['banco']); ?>
<br/><br/>
<b>Titular De Cuenta:</b>&nbsp;<?php  echo   utf8_encode($row['nom_tcuenta']); ?>
<br/><br/>
<b>Clabe:</b> &nbsp; <?php echo utf8_encode($row['clabe']); ?>
<br/><br/>
<b>Cuenta Bancaria:</b> &nbsp; <?php echo utf8_encode($row['no_cuenta']); ?>
<br/><br/>
						</div>
                        
                        
                

                        
</body>
</html>                        
