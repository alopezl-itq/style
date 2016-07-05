<?php
	include_once('../../modulos/enrutador.php');
include_once('../../modulos/c_estetica.php');

/*modulos para poder usar las fteunciones relacionadas con esté
*/
?>



<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="utf-8">
<title>Nueva empresa</title>

	<script src="../../js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
<style type="text/css">
a:hover,a:focus{
    text-decoration: none;
    outline: none;
}
.tab .nav-tabs{
    border-bottom: 0 none;
}
.tab .nav-tabs li{
    margin-right: 2px;
}
.tab .nav-tabs li a{
    border: none;
    padding: 13px 35px;
    color: #fff;
    background: #272e38;
    border-radius: 0;
}
.tab .nav-tabs li a:hover{
    background:#000;
}
.tab .nav-tabs li a i{
    font-size: 14px;
    display: block;
    text-align: center;
    margin-bottom: 5px;
}
.tab .nav-tabs li.active a,
.tab .nav-tabs li.active a:focus,
.tab .nav-tabs li.active a:hover{
    border: none;
    background: #737495;
    color:#fff;
    transition: background 0.20s linear;
}
.tab .nav-tabs li.active:after{
    content: "";
    position: absolute;
    top: 41px;
    left: 40%;
    border: 12px solid transparent;
    border-top-color: #fff;
    transform: rotate(180deg);
}
.tab .tab-content{
    background: #fff;
    line-height: 25px;
    padding: 30px 25px;
    border: 1px solid #ddd;
    border-bottom: 5px solid #737495;
}
@media only screen and (max-width: 480px){
    .tab .nav-tabs li{
        width:100%;
    }
    .tab .nav-tabs li a{
        padding: 20px;
        text-align: center;
    }
    .tab .nav-tabs li.active:after{
        border:none;
    }
}
	
</style>
	
	
	
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
	
	/*se genera el controlador y se pasan los parametros para la función crear y se verifica que se registra la estética*/
$controlador = new c_estetica();
if(isset($_POST['enviar'])){
 $r =$controlador->crear( $_POST['nombre_estetica'],$_POST['imagen'], $_POST['eslogan'],$_POST['cliente_a'],
	 $_POST['cliente_b'],$_POST['cliente_c'],$_POST['cliente_d'],$_POST['id_estatus'],$_POST['calle'],$_POST['no_int'],
	 $_POST['no_ext'],$_POST['id_estado']);

	if($r){
		echo 'se agrego un nuevo estética';
		header("location:index.php");
	}else{
		echo'no se agrego el registro';
		}
	}
?>



<section>

<body>
<div class="container" >   
<form action="" method="POST">

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-envelope-o"></i>Datos 1</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-cube"></i>Datos 2</a></li>
                    <li role="presentation"><a href="#Section3" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-comment"></i>Datos 3</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        <h2>Datos 1</h2>
                        <p>
                            <div class="form-group">
								<h4> Nombre de la estética:</h4><label for="nombre"><input type="text" placeholder="estética@" name="nombre_estetica" id="nombre_estetica" 									maxlength="50" size="20" required/></label>
							</div>

							<div class="form-group">
								<h4> Eslogán:</h4><label for="nombre"><input type="text" placeholder="eslogán@" name="eslogan" id="eslogan" maxlength="50" 								size="20" required/></label>
							</div>
							<div class="form-group">
							<h4> Imagen:</h4><label for="nombre"><input type="file" placeholder="imagen@" name="imagen" id="imagen" maxlength="50" 		size="20" required/></label>
							</div>

                </div>
 
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <h2>Datos 2</h2>
                       
                            <div class="form-group">
								<h4> Valor Cliente a:</h4><label for="nombre"><input type="text" placeholder="estética@" name="cliente_a" id="nombre" maxlength="50" size="20" required/></label>
							</div>
							<div class="form-group">
								<h4> Valor Cliente b:</h4><label for="nombre"><input type="text" placeholder="estética@" name="cliente_b" id="nombre" maxlength="50" size="20" required/></label>
							</div>
							<div class="form-group">
								<h4> Valor Cliente c:</h4><label for="nombre"><input type="text" placeholder="estética@" name="cliente_c" id="nombre" maxlength="50" size="20" required/></label>
							</div>
							<div class="form-group">
								<h4> Valor Cliente d:</h4><label for="nombre"><input type="text" placeholder="estética@" name="cliente_d" id="nombre" maxlength="50" size="20" required/></label>
							</div>
                        
                    </div>
 
                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                        <h2>Datos 3</h2>
                            <div class="form-group">
								<h4> Calle:</h4><label for="nombre"><input type="text" placeholder="calle@" name="calle" id="nombre" maxlength="50" size="20" required/></label>
							</div>

							<div class="form-group">
								<h4> No. Exterior</h4><label for="nombre"><input type="text"  name="no_ext" id="nombre" maxlength="50" size="20" required/></label>
							</div>

							<div class="form-group">
								<h4> No. Interior</h4><label for="nombre"><input type="text"  name="no_int" id="nombre" maxlength="50" size="20" required/></label>
							</div>
							<div class="form-group">
								<h4>Telefono:</h4><label for="tel"><input type="tel" placeholder="(442)3605521" id="tel" name="telefono" maxlength="20" size="20" required/>	</label>
							</div>
							
							<div class="checkbox">
								<select name="id_estatus">
									<option value="0" selected>Selecciona un Estatus</option>
									<?php

									$estetica = new estetica();

									$resultado3=$estetica->verestatus();
									while($row=mysqli_fetch_array($resultado3)){
										if($row["id_estatus"]==1){
											echo '<option value="'.$row["id_estatus"].'" selected>'.utf8_encode($row['descripcion_estatus']).'</option>';										}else echo '<option value="'.$row["id_estatus"].'">'.utf8_decode($row['descripcion_estatus']).'</option>';
				
									}

									?>

								</select>
							</div>
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
	
							<div>
								<input type="submit"  name="enviar" value="enviar" />
							</div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</form>
</div>
</section>
</body>
</html>


