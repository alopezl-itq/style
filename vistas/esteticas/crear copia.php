<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="utf-8">
<title>Nueva empresa</title>

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

  
<header align="center"><h1>Nueva Estética</h1></header>
<?php
$controlador = new controlador();
if(isset($_POST['enviar'])){
 $r =$controlador->crear($_POST['administrador'], $_POST['nombre_estetica'], $_POST['eslogan'],$_POST['imagen'],$_POST['cliente_a'],
	 $_POST['cliente_b'],$_POST['cliente_c'],$_POST['cliente_d'],$_POST['id_estatus'],$_POST['calle'],$_POST['no_int'],
	 $_POST['no_ext'],$_POST['id_estado'],$_POST['id_ciudad']);






	if($r){
	echo 'se agrego un nuevo estética';

	}else{
		echo'no se agrego el registro';
		}
	}
?>



<section>

<body>
<div class="container" >   
<form action="" method="POST">
<br/>
<div class="form-group">
<h4> Nombre de la estética:</h4><label for="nombre"><input type="text" placeholder="estética@" name="nombre" id="nombre" maxlength="50" size="20" required/></label>
</div>
<br/>
<div class="form-group">
<h4> Eslogán:</h4><label for="nombre"><input type="text" placeholder="eslogán@" name="eslogan" id="nombre" maxlength="50" size="20" required/></label>
</div>
<br>
<div class="form-group">
<h4> Imagen:</h4><label for="nombre"><input type="file" placeholder="imagen@" name="nombre" id="nombre" maxlength="50" size="20" required/></label>
</div>
<br>
<div class="form-group">
	<h4> Valor Cliente a:</h4><label for="nombre"><input type="text" placeholder="estética@" name="cliente_a" id="nombre" maxlength="50" size="20" required/></label>
</div>
<br>
<div class="form-group">
	<h4> Valor Cliente b:</h4><label for="nombre"><input type="text" placeholder="estética@" name="cliente_b" id="nombre" maxlength="50" size="20" required/></label>
</div>
<br>
<div class="form-group">
	<h4> Valor Cliente c:</h4><label for="nombre"><input type="text" placeholder="estética@" name="cliente_c" id="nombre" maxlength="50" size="20" required/></label>
</div>
<br>
<div class="form-group">
	<h4> Valor Cliente d:</h4><label for="nombre"><input type="text" placeholder="estética@" name="cliente_d" id="nombre" maxlength="50" size="20" required/></label>
</div>
<br>
<div class="form-group">
	<h4> Calle:</h4><label for="nombre"><input type="text" placeholder="estética@" name="calle" id="nombre" maxlength="50" size="20" required/></label>
</div>
<br>
<div class="form-group">
	<h4> No. Interior</h4><label for="nombre"><input type="text" placeholder="estética@" name="no_int" id="nombre" maxlength="50" size="20" required/></label>
</div>
<br>
<div class="form-group">
	<h4> No. Exterior</h4><label for="nombre"><input type="text" placeholder="estética@" name="no_ext" id="nombre" maxlength="50" size="20" required/></label>
</div>
<br>
<div class="form-group">
<h4>Telefono:</h4><label for="tel"><input type="tel" placeholder="(442)3605521" id="tel" name="telefono" maxlength="20" size="20" required/>	</label>
</div>
<br/>
<div class="form-group">
<h4>Correo Electronico:</h4><label for="email"><input type="email" placeholder="ejemplo@email.com" id="email" name="email" size="20"  maxlength="50" /></label>	
</div>
<br/>

	<div class="checkbox">
		<select name="id_estatus">
			<option value="0" selected>Selecciona un Estatus</option>
			<?php

			$estetica = new estetica();

			$resultado3=$estetica->verestatus();
			while($row=mysqli_fetch_array($resultado3)){
				if($row["id_estatus"]==1){
					echo '<option value="'.$row["id_estatus"].'" selected>'.utf8_encode($row['descripcion_estatus']).'</option>';	
					
				}else echo '<option value="'.$row["id_estatus"].'">'.utf8_decode($row['descripcion_estatus']).'</option>';
				
			}

			?>

		</select>
	</div>
	<br/>
	<div class="checkbox">
		<select name="id_estado">
			<option value="" selected>Selecciona un Estado</option>
			<?php

			$estetica = new estetica();

			$resultado4=$estetica->verestados();
			while($row=mysqli_fetch_array($resultado4)){

				echo '<option value="'.$row["id_estado"].'">'.utf8_encode($row["descripcion_estados"]).'</option>';
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
	
	
	<br/>
<div>
<input type="submit"  name="enviar" value="enviar" />
</div>
</form>
</div>
</section>
</body>
</html>


