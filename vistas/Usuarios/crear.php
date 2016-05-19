<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="utf-8">
<title>Registro</title>

	<script src="../../js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
</head>
<script type="text/javascript">
	var checkbox = document.getElementById("estados"),
		ajax = function(url){
			var xhr = window.XMLHttpRequest ?
				new XMLHttpRequest() :
			new ActiveXObject("Microsoft.XMLHTTP") ||
			new ActiveXObject("Msxml2.XMLHTTP");

		};

	checkbox.addEventListener("click", function(){
		var estado = this.checked ? 1 : 0,
			id = this.getAttribute("data-id"),
			url = "ver_usuarios2.php?estado="+estado+"&id="+id;

		ajax(url);

	}, false);
</script>

  
<header align="center"><h1>Registro empleado</h1></header>
<?php
$controlador = new Controlador();
if(isset($_POST['enviar'])){
 $r =$controlador->crear($_POST['nombre'], $_POST['apellido_p'], $_POST['apellido_m'],$_POST['sexo'],$_POST['fecha_nacimiento'],
	 $_POST['foto'],$_POST['email'],$_POST['telefono'],$_POST['observaciones'],$_POST['usuario'],$_POST['password'],
	 $_POST['id_tipo_usuario'],$_POST['id_estatus'],$_POST['id_empresa'],$_POST['id_estado'],$_POST["nombre_calle"],$_POST["no_int"],$_POST["no_ext"]);






	if($r){
	echo 'se agrego un nuevo empleado';

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
</label><input type="file" name="foto">
</div>

<br/>
<div class="form-group">
<h4> Nombre:</h4><label for="nombre"><input type="text" placeholder="fulanit@" name="nombre" id="nombre" maxlength="50" size="20" required/></label>
</div>
<br/>
<div class="form-group">
<h4>Apellidos Paterno:</h4><label for="apellido_p"><input type="text" placeholder="Perez " id="apellidos" name="apellido_p" maxlength="50" size="20" required/></label>
</div>
<br/>
	<div class="form-group">
		<h4>Apellidos Materno:</h4><label for="apellido_m"><input type="text" placeholder="Hernández " id="apellidos" name="apellido_m" maxlength="50" size="20" required/></label>
	</div>
	<br/>
<div class="form-group">
<h4>Sexo:</h4><br/>
<select name="sexo">
	<option value="null" selected>Seleccione el sexo</option>
	<option value="0">Mujer</option>
	<option value="1">Hombre</option>

	</select>
</div>
<br/>

<div class="form-group">
<h4>Fecha de nacimiento:</h4><label for="date"><input type="date"  name="fecha_nacimiento" id="date"/></label>
</div>
<br/>
<div class="form-group">
<h4>Telefono:</h4><label for="tel"><input type="tel" placeholder="(442)3605521" id="tel" name="telefono" maxlength="20" size="20" required/>	</label>
</div>
<br/>
<div class="form-group">
<h4>Correo Electronico:</h4><label for="email"><input type="email" placeholder="ejemplo@email.com" id="email" name="email" size="20"  maxlength="50" /></label>	
</div>
<br/>

<div class="checkbox">
    <select name="id_empresa">
        <option value="0" selected>Selecciona una empresa</option>
	<?php

		$usuario = new Usuario();

	$resultado1=$usuario->verempresas();
		while($row=mysqli_fetch_array($resultado1)){
			echo '<option value="'.$row["id_empresa"].'">'.$row["nombre"].'</option>';
		}

	?>

    </select>
	</div>
	<br/>
	<div class="checkbox">
		<select name="id_tipo_usuario">
			<option value="0" selected>Selecciona un tipo de usuario</option>
			<?php

			$usuario = new Usuario();

			$resultado2=$usuario->vertipous();
			while($row=mysqli_fetch_array($resultado2)){
				echo '<option value="'.$row["id_tipo_usuario"].'">'.$row["descripcion_tipo_usuarios"].'</option>';
			}

			?>

		</select>
	</div>
	<br/>
	<div class="checkbox">
		<select name="id_estatus">
			<option value="0" selected>Selecciona un Estatus</option>
			<?php

			$usuario = new Usuario();

			$resultado3=$usuario->verestatus();
			while($row=mysqli_fetch_array($resultado3)){
				if($row["descripcion_estatus"]==0){
					$des="inactivo";
				}
				if($row["descripcion_estatus"]==1){
					$des="activo";
				}
				echo '<option value="'.$row["id_estatus"].'">'.$des.'</option>';
			}

			?>

		</select>
	</div>
	<br/>
	<div class="checkbox">
		<select name="id_estado">
			<option value="" selected>Selecciona un Estado</option>
			<?php

			$usuario = new Usuario();

			$resultado4=$usuario->verestados();
			while($row=mysqli_fetch_array($resultado4)){

				echo '<option value="'.$row["id_estado"].'">'.$row["descripcion_estados"].'</option>';
			}

			?>

		</select>
	</div>
	<br/>
	
	<h1>Calle</h1>
	<label>
	<div class="form-group">
		<input type="text" name="nombre_calle"/>
	</div>
	</label>
	<br/>
	<h1>Número interior</h1>
	<label>
		<div class="form-group">
			<input type="text" name="no_int"/>
		</div>
	</label>
	<br/>
	<h1>Número exterior</h1>
	<label>
		<div class="form-group">
			<input type="text" name="no_ext"/>
		</div>
	</label>

	<div class="form-group">
		<h4>User:</h4><label for="user"><input type="text" placeholder="" id="user" name="usuario" maxlength="50" size="20" required/></label>
	</div>
	<br/>
	<div class="form-group">
		<h4>Password:</h4><label for="password"><input type="password" placeholder=" " id="password" name="password" maxlength="50" size="20" required/></label>
	</div>
	<br/>
	<div class="form-group">
		<h4>Observaciones:</h4><label for="observaciones"><textarea type="observaciones" placeholder=" " id="observaciones" name="observaciones" maxlength="50" size="20" required></textarea></label>
	</div>
	<br/>
<div>
<input type="submit"  name="enviar" value="enviar" />
</div>
</form>
</div>
</section>
</body>
</html>


