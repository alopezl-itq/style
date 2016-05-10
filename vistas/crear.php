<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>


</head>

  
<header align="center"><h1>Registro empleado</h1></header>
<?php
$controlador = new Controlador();
if(isset($_POST['enviar'])){
 $r =$controlador->crear($_POST['nombre'], $_POST['apellido_p'], $_POST['apellido_m']);


	

if($r){
	echo 'se agrego un nuevo empleado';
	echo $r;
	}else{
		echo'no se agrego el registro';
		}
	}
?>

<section>

<body>
<div class="container" >   
<form action="" method="POST">
<figure class="form-group">
<h4>Usuario:</h4><br/><img  alt="Foto de usario"  width="150" height="200" />
</figure>
<div  class="form-group">
</label><input type="file"> 
</div>

<br/>
<div class="form-group">
<h4> Nombre:</h4><label for="nombre"><input type="text" placeholder="fulanit@" name="nombre" id="nombre" maxlength="50" size="20" required/></label>
</div>
<br/>
<div class="form-group">
<h4>Apellidos Paterno:</h4><label for="apellido_p"><input type="text" placeholder="Perez " id="apellidos" name="apellidos" maxlength="50" size="20" required/></label>	
</div>
<br/>
<div class="form-group">
<h4>Sexo:</h4><br/>
 <input type="radio" name="sexo" id="sexo-m" value="m"  checked="checked" /> <label for="sexo-m"><strong>Mujer</strong></label>&nbsp;&nbsp;
<input type="radio" name="sexo" id="sexo-h" value="h" /> <label for="sexo-h"><strong>Hombre</strong></label>	
</div>
<br/>

<div class="form-group">
<h4>Fecha de nacimiento:</h4><label for="date"><input type="date"  name="date" id="date"/></label>
</div>
<br/>
<div class="form-group">
<h4>Telefono:</h4><label for="tel"><input type="tel" placeholder="(442)3605521" id="tel" name="tel" maxlength="20" size="20" required/>	</label>
</div>
<br/>
<div class="form-group">
<h4>Correo Electronico:</h4><label for="email"><input type="email" placeholder="ejemplo@email.com" id="email" name="email" size="20"  maxlength="50" /></label>	
</div>
<br/>
<div class="chebox">
<label for="opcion"><input type="checkbox" name="opcion" id="opcion" checked="checked" ><strong>Deseo recibir información sobre novedades y ofertas</strong></label>
</div>
<br/>

    <select>
        <option value="0" selected>Selecciona una empresa</option>
	<?php

		$usuario = new Usuario();

	$resultado1=$usuario->verempresas();
		while($row=mysqli_fetch_array($resultado1)){
			echo '<option value="'.$row["id_empresa"].'">'.$row["nombre_empresa"].'</option>';
		}

	?>

    </select>
<div>
<input type="submit"  name="enviar" value="enviar" />
</div>
</form>
</div>
</section>
</body>
</html>


