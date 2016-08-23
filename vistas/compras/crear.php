<?php

$controlador = new ControladorC();

//si se preciona el boton de enviar, 
if(isset($_POST['enviar'])){

if(!empty($_POST['telcasa'])){ 
if(!empty($_POST['no_ext'])){ 
 $controlador->crearp(utf8_decode($_POST['nombre_empresa']), utf8_decode($_POST['contacto']), utf8_decode($_POST['banco']),$_POST['clabe'],utf8_decode($_POST['nom_tcuenta']),utf8_decode($_POST['rfc']),$_POST['no_cuenta'],$_POST['id_empresa']=$_SESSION['estetica'],utf8_decode($_POST['nombre_calle']),$_POST['no_int'],$_POST['no_ext'],$_POST['id_municipio'],utf8_decode($_POST['colonia']),$_POST['telefono'],$_POST['telcasa'],$_POST['cp'], 
 utf8_decode($_POST['email']),utf8_decode($_POST['facebook']),utf8_decode($_POST['twitter']),utf8_decode($_POST['instagram']));

}else{
 $controlador->crearp(utf8_decode($_POST['nombre_empresa']), utf8_decode($_POST['contacto']), utf8_decode($_POST['banco']),$_POST['clabe'],utf8_decode($_POST['nom_tcuenta']),utf8_decode($_POST['rfc']),$_POST['no_cuenta'],$_POST['id_empresa']=$_SESSION['estetica'],utf8_decode($_POST['nombre_calle']),$_POST['no_int'],0,$_POST['id_municipio'],utf8_decode($_POST['colonia']),$_POST['telefono'],$_POST['telcasa'],$_POST['cp'], 
 utf8_decode($_POST['email']),utf8_decode($_POST['facebook']),utf8_decode($_POST['twitter']),utf8_decode($_POST['instagram']));
	}
}else{
if(!empty($_POST['no_ext'])){ 
 $controlador->crearp(utf8_decode($_POST['nombre_empresa']), utf8_decode($_POST['contacto']), utf8_decode($_POST['banco']),$_POST['clabe'],utf8_decode($_POST['nom_tcuenta']),utf8_decode($_POST['rfc']),$_POST['no_cuenta'],$_POST['id_empresa']=$_SESSION['estetica'],utf8_decode($_POST['nombre_calle']),$_POST['no_int'],$_POST['no_ext'],$_POST['id_municipio'],utf8_decode($_POST['colonia']),$_POST['telefono'],0,$_POST['cp'], 
 utf8_decode($_POST['email']),utf8_decode($_POST['facebook']),utf8_decode($_POST['twitter']),utf8_decode($_POST['instagram']));


}else{
 $controlador->crearp(utf8_decode($_POST['nombre_empresa']), utf8_decode($_POST['contacto']), utf8_decode($_POST['banco']),$_POST['clabe'],utf8_decode($_POST['nom_tcuenta']),utf8_decode($_POST['rfc']),$_POST['no_cuenta'],$_POST['id_empresa']=$_SESSION['estetica'],utf8_decode($_POST['nombre_calle']),$_POST['no_int'],0,$_POST['id_municipio'],utf8_decode($_POST['colonia']),$_POST['telefono'],0,$_POST['cp'], 
 utf8_decode($_POST['email']),utf8_decode($_POST['facebook']),utf8_decode($_POST['twitter']),utf8_decode($_POST['instagram']));
}
	
}



}


?>




<script  src="../../js/jquery.js">

</script>

<!DOCTYPE html>
<html>
<head>
	<title>Crear Proveedor</title>
    <meta charset="utf-8">
</head>
<body>


<div id="pestanas">
 <ul class="nav nav-tabs">
 	<li role="presentation"class="active"><a href="#pestana1" role="tab" data-toggle="tab" >Información</a></li>
 	<li role="presentation"><a href="#pestana2"  role="tab" data-toggle="tab">Información de Contacto</a></li> 
 	<li role="presentation"><a href="#pestana3"  role="tab" data-toggle="tab">Domicilio</a></li> 
    <li role="presentation" ><a href="#pestana4" role="tab" data-toggle="tab">Redes Sociales</a></li>
	<li role="presentation"><a href="#pestana5"  role="tab" data-toggle="tab">Datos Bancarios</a></li> 
 </ul>
 
<div id="pestana1">
<br/>
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
                        <form action="" method="POST" name="frm">
						<div class="form-group">
                  <h5><i>Nombre y/o Razon Social:</i></h5><label for="nombre_empresa"><input type="text" placeholder="Nombre De Empresa y/yo Razon Social" name="nombre_empresa" id="nombre_empresa" maxlength="50" size="20" onblur="nombreEValidate(this);" required/></label>
						</div>
    <div id="nombreEError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
						
                        <div class="form-group">
							<h5><i>RFC:</i></h5><label for="rfc"><input type="text" placeholder="Ingrese Los 13 Digitos Del RFC" id="rfc" name="rfc" maxlength="50" size="20" onblur="rfcValidate(this);" required/></label>
						</div>
						<div id="rfcError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
                        <div class="form-group">
	<h5><i>Contacto:</i></h5><label for="contacto"><input type="text" placeholder="Ingrese El Nombre Completo Del Contacto*" id="contacto" name="contacto" maxlength="50" size="20" onblur="cValidate(this);" required/></label>
						</div>
                        <div id="cError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
                        

</div>
<div class="col-lg-3 col-md-3"></div> 
</div>

<div id="pestana2">
<br/>
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
						
                  <div class="form-group">
		<h5><i> Telefono de Casa:</i></h5><label for="telcasa"><input type="number" placeholder="Ingresa tú número teléfonico con su lada" id="telcasa" name="telcasa"  size="20"  onblur="telValidate(this);" required/></label>
	</div>
	<div id="telcasaError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
                        
                        <div class="form-group">
							<h5><i>Celular:</i></h5><label for="tel"><input type="tel" placeholder="Ingresa tú número teléfonico con su lada" id="tel" name="telefono" maxlength="10" size="20" pattern="[0-9]{10}" onblur="telValidate(this);" required/></label>
						</div>
                        <div id="telError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
	
<div class="form-group">
							<h5><i>Correo Electronico:</i></h5><label for="email"><input type="email" 
                            pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="correo@email.com" id="email" name="email" size="20"  maxlength="50" onblur="emailValidate(this);" required/></label>	
						</div>
						<div id="emailError" class="alert alert-danger alert-dismissable" style="display:none;"></div>


</div>
<div class="col-lg-3 col-md-3"></div>                        
</div>

<div id="pestana3" onchange="">
<br/>
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
    					<div class="form-group">
							<h5><i>Estado de Residencia:</i></h5>
							<select name="id_estado" id="id_estado" onblur="cmbestValidate(this);">
								<option value="#">Seleccione un Estado</option>
								<?php
								$usuario = new Usuario();
								$resultadoestado=$usuario->verestados();
								while($row=mysqli_fetch_array($resultadoestado)){
									echo '<option value="'.$row["id_estado"].'">'.utf8_encode($row["descripcion_estados"]).'</option>';
								}
								?>
							</select>
						</div>
						<div id="estError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
    					<div class="form-group">
							<h5><i>Municipio de Residencia:</i></h5>

							<select name="id_municipio" id="id_municipio">
								<option value="">Selecciona un Municipio</option>
							</select>
							<script>
								$(document).ready(function(){
									$('#id_estado').change(function(){
										var country_id = $(this).val();
										$.ajax({
											url:"fetch_state.php",
											method:"POST",
											data:{countryId:country_id},
											dataType:"text",
											success:function(data)
											{
												$('#id_municipio').html(data);
											}
										});
									});
								});
							</script>
						</div>
                        
                        
                        
                        <h5><i>Calle:</i></h5>
						<div class="form-group">
                        <label>
							<input type="text" placeholder="Ingrese su Calle" name="nombre_calle" id="calle" onblur="calleValidate(this);" required />
						</label></div>
						<div id="calleError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
                        <h5><i>Colonia:</i></h5>
    					<div class="form-group">
							<label>
							<input type="text" placeholder="Ingrese su Colonia" name="colonia" id="colonia" onblur="coloniaValidate(this);" required />
						</label></div>
                        <div id="coloniaError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
				        <h5><i>Número interior:</i></h5>
						<div class="form-group">
                        <label>
							<input type="text" placeholder="Ingrese su Número Interior/SN" name="no_int" id="num" onblur="numValidate(this);" required/>
						</label></div>
						<div id="numError" class="alert alert-danger alert-dismissable" style="display:none;"></div>	
    
    					<h5><i>Número exterior:</i></h5>
						<div class="form-group">
                        <label>
							<input type="text" placeholder="Ingrese su Número Exterior" name="no_ext"/>
						</label></div>
                        
                        <h5><i>Codigo Postal:</i></h5>
						<div class="form-group">
                        <label>
							<input type="number" id="cp" placeholder="Ingrese su Código Postal" name="cp" min="11111" max="99999" onblur="cpValidate(this);" required />
						</label></div>
                        <div id="cpError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
                         
                        
</div>
<div class="col-lg-3 col-md-3"></div>
</div>

<div id="pestana4">
<br/>
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
                        
					 <div class="form-group">
                          <h5><i>Facebook</i></h5><label for="facebook"><input type="text" placeholder="Usuario Facebook" name="facebook" id="facebook" maxlength="50" size="20"  /></label>
						</div>

						 
                        <div class="form-group">
							<h5><i>instagram:</i></h5><label for="twitter"><input type="text" placeholder= "Usuario Twitter" id="twitter" name="twitter" maxlength="50" size="20"  /></label>
						</div>
                        
                            <div class="form-group">
							<h5><i>Twitter:</i></h5><label for="instragram"><input type="text" placeholder= "Usuario Instagram" id="instagram" name="instagram" maxlength="50" size="20"  /></label>
						</div>
						
                      
</div>
<div class="col-lg-3 col-md-3"></div> 
</div>


<div id="pestana5">
<br/>
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6">
	
						<div class="form-group">
							<h5><i>Nombre del Banco:</i></h5><label for="banco"><input type="text" id="banco" placeholder="Ej. Bancomer*" name="banco" maxlength="50" size="20" onblur="nbValidate(this);" required/></label>
						</div>
                        <div id="nbError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
    
    	<div class="form-group">
							<h5><i>Nombre Del Titular De La Cuenta:</i></h5><label for="nom_tcuenta"><input type="text" id="nom_tcuenta" placeholder="Nombre Del Titular.*" name="nom_tcuenta" maxlength="50" size="20" onblur="ntValidate(this);" required/></label>
						</div>
                        <div id="ntError" class="alert alert-danger alert-dismissable" style="display:none;"></div>                   
 <div class="form-group">
							<h5><i>ClABE(Clave Bancaria Estandarizada):</i></h5><label for="cable"><input type="number" placeholder="Ingrese los 18 digitos" id="clabe" name="clabe"  max="999999999999999999" size="20" pattern="[0-9]{18}" onblur="clValidate(this);" required/></label>
						</div>
            <div id="clError" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                        
                        
                             <div class="form-group">
							<h5><i>Cuenta Bancaria:</i></h5><label for="no_cuenta"><input type="text" placeholder="Ingrese los digitos de la cuenta bancaria" id="no_cuenta" name="no_cuenta"  size="25"  onblur="ncValidate(this);" required/></label>
						</div>
                        <div id="ncError" class="alert alert-danger alert-dismissable" style="display:none;"></div>                      
                        
    
                        <div class="col-sm-12" align="center">
						<div>
							<input type="submit"  name="enviar" value="ENVIAR" onclick="return val();" style="width:30%"/>
						</div>
						</form>
                        </div>
</div>
<div class="col-lg-3 col-md-3"></div>
</div>
</div>
</body>
</html>

<script type="text/javascript" src="../../js/validate.js"></script>




