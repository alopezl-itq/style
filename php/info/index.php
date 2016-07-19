<!DOCTYPE HTML>
<html lang="en-US">
<head>
		
  <title>Editar e Insertar</title>
   <!-- bootstrap para el modal-->
  <meta charset="utf-8">
	 <link rel="stylesheet" href="../css/templatemo_misc.css">
        <link rel="stylesheet" href="../css/templatemo_style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- Fin bootstrap para el modal-->
	<!-- css para el acordeon-->
	<style type="text/css">
		*{ font-family: sans-serif; margin: 0;}
		dl{ margin: 60px auto; width: 800px; }
		dt, dd{ padding: 20px; }
		dt{ background: #333333; color: white; border-bottom: 1px solid #141414; border-top: 1px solid #4E4E4E; cursor: pointer; }
		dd{ background: #F5F5F5; line-height: 1.6em; }
		dt.activo, dt:hover{ background: #424242; }
		dt:before{ content: "▸"; margin-right: 10px; }
		dt.activo:before{ content: "▾"; }
	</style>
<body>
<!--inicio de Estilo -->
	<div class="site-main" id="sTop">
            <div class="site-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="social-icons">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                            </ul>
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
                <div class="main-header">
                    <div class="container">
                        <div id="menu-wrapper">
                            <div class="row">
                                <div class="logo-wrapper col-md-2 col-sm-2">
                                    <!--<h1>
                                       <a href="#">Flex</a>
                                    </h1>-->
                                </div> <!-- /.logo-wrapper -->
                                <div class="col-md-10 col-sm-10 main-menu text-right">
                                    <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                                    <ul class="menu-first">
                                        <li class="active"><a href="#">Home</a></li>
                                                                      
                                    </ul>                                    
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->                        
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
						<br><br><br><br><br><br><br>
						<!--Fin de Estilo -->
						<!--Acordeon -->
	<dl> <h1><b>Actualizar e insertar</b></h1><br>
		<dt>Sexo</dt>
		<dd>
			<?php
			//Conexion a Base de datos (unica).
			
include_once("../../clases/conexion.php"); 
			$db= new Conexion();
				
				echo '<FORM METHOD="POST" ACTION="sexo.php">Sexo<br>';
				//Creamos la sentencia SQL y la ejecutamos
				$sSQL="SELECT * FROM sexo order by id_sexo"; 
				$consulta = $db->consulta($sSQL);
			
				echo "<table border = '1'> \n"; 
				echo "<tr><td>ID</td><td>Sexo</td></tr> \n"; 
				while ($row =mysqli_fetch_array($consulta))
				{ 
       				echo "<tr><td>$row[0]</td><td>$row[1]</td></tr> \n"; 
				} 
				echo "</table> \n"; 

				
			?>
			</select>
				
				<br>ID a actualizar<br>
				<INPUT TYPE="TEXT" NAME="id_sexo" required><br>
				Nueva Descripcio&oacuten<br>
				<INPUT TYPE="TEXT" NAME="descripcion" required><br>
				<br><INPUT TYPE="SUBMIT" value="Actualizar" style="height:38px; width:350px" ><br>
			</FORM>
				<!-- Trigger/Open The Modal -->
		<br>- O -<br>
		<br><button type="button" style="height:38px; width:350px" data-toggle="modal" data-target="#ModalSexo">Insertar nuevo registro</button>
		</dd>
		
		<dt>Ciudades</dt>
		<dd>
			<?
				//Conexion con la base de datos
				echo '<FORM METHOD="POST" ACTION="ciudades.php">Ciudades<br>';
				//Creamos la sentencia SQL y la ejecutamos
				$sSQL="SELECT * FROM ciudades order by id_ciudad"; 
				$consulta = $db->consulta($sSQL);
				echo "<table border = '1'> \n"; 
				echo "<tr><td>ID</td><td>Ciudad</td><td>ID Municipio</td></tr> \n"; 
				while ($row =mysqli_fetch_array($consulta)){ 
       			echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr> \n"; 
				} 
				echo "</table> \n"; 
				?>
				</select>
				
				ID<br>
				<INPUT TYPE="TEXT" NAME="id_ciudad" required><br>
				Nueva Ciudad<br>
				<INPUT TYPE="TEXT" NAME="ciudad" required><br>
				Nuevo ID Municipio<br>
				<INPUT TYPE="TEXT" NAME="id_municipio" required><br>
				<INPUT TYPE="SUBMIT" style="height:38px; width:350px" value="Actualizar">
			</FORM>
			<!-- Trigger/Open The Modal -->
		<br>- O -<br>
		<br><button type="button" style="height:38px; width:350px" data-toggle="modal" data-target="#ModalCiudades">Insertar nuevo registro</button>
		
		
		</dd>
		
		<dt>Estados</dt>
		<dd>
			<?
				//Conexion con la base
				//Creamos la sentencia SQL y la ejecutamos
				$sSQL="SELECT * FROM estados order by id_estado"; 
				$consulta = $db->consulta($sSQL);
				echo "<table border = '1'> \n"; 
				echo "<tr><td>ID</td><td>Estado</td></tr> \n"; 
				while ($row =mysqli_fetch_array($consulta)){ 
       			echo "<tr><td>$row[0]</td><td>$row[1]</td></tr> \n"; 
				} 
				echo "</table> \n"; 
				?>
				</select>
				
				ID<br>
				<INPUT TYPE="TEXT" NAME="id_estado" required><br>
				Nuevo Estado<br>
				<INPUT TYPE="TEXT" NAME="descripcion" required><br>
				<INPUT TYPE="SUBMIT" style="height:38px; width:350px" value="Actualizar">
			</FORM>
			<!-- Trigger/Open The Modal -->
		<br>- O -<br>
		<br><button type="button" style="height:38px; width:350px" data-toggle="modal" data-target="#ModalEstados">Insertar nuevo registro</button>
		
		</dd>

		<dt>Municipios</dt>
		<dd>
			<?
				 
				echo '<FORM METHOD="POST" ACTION="municipios.php">Municipios<br>';
				//Creamos la sentencia SQL y la ejecutamos
				$sSQL="SELECT * FROM municipios order by id_municipio"; 
				$consulta = $db->consulta($sSQL);
				echo "<table border = '1'> \n"; 
				echo "<tr><td>ID</td><td>Municipio</td><td>ID Estado</td></tr> \n"; 
				while ($row =mysqli_fetch_array($consulta)){ 
       			echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr> \n"; 
				} 
				echo "</table> \n"; 
				?>
				</select>
				
				ID<br>
				<INPUT TYPE="TEXT" NAME="id_municipio" required><br>
				Nueva Ciudad<br>
				<INPUT TYPE="TEXT" NAME="municipio" required><br>
				Nuevo ID Estado<br>
				<INPUT TYPE="TEXT" NAME="id_estado" required><br>
				<INPUT TYPE="SUBMIT" style="height:38px; width:350px" value="Actualizar">
			</FORM>
			<!-- Trigger/Open The Modal -->
		<br>- O -<br>
		<br><button type="button" style="height:38px; width:350px" data-toggle="modal" data-target="#ModalMunicipios">Insertar nuevo registro</button>
		
		</dd>
		
		<dt>Tipo de Pago</dt>
		<dd>
			<?
				//Creamos la sentencia SQL y la ejecutamos
				$sSQL="SELECT * FROM tipo_pago order by id_tipo_pago"; 
				$consulta = $db->consulta($sSQL);
				echo "<table border = '1'> \n"; 
				echo "<tr><td>ID</td><td>Tipo de Pago</td></tr> \n"; 
					while ($row =mysqli_fetch_array($consulta)){ 
       			echo "<tr><td>$row[0]</td><td>$row[1]</td></tr> \n"; 
				} 
				echo "</table> \n"; 
				?>
				</select>
				
				ID<br>
				<INPUT TYPE="TEXT" NAME="id_tipo_pago" required><br>
				Nuevo Estado<br>
				<INPUT TYPE="TEXT" NAME="descripcion" required><br>
				<INPUT TYPE="SUBMIT" style="height:38px; width:350px" value="Actualizar">
			</FORM>
			<!-- Trigger/Open The Modal -->
		<br>- O -<br>
		<br><button type="button" style="height:38px; width:350px" data-toggle="modal" data-target="#ModalTipoPago">Insertar nuevo registro</button>
		</dd>
		<dt>Modulo</dt>
		<dd>
			<?
				//Creamos la sentencia SQL y la ejecutamos
				$sSQL="SELECT * FROM modulo order by id_modulo"; 
				$consulta = $db->consulta($sSQL);
				echo "<table border = '1'> \n"; 
				echo "<tr><td>ID</td><td>Modulo</td><td>Vista</td><td>Controlador</td></tr> \n"; 
				while ($row =mysqli_fetch_array($consulta)){ 
       			echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr> \n"; 
				} 
				echo "</table> \n"; 
				?>
				</select>
				
				ID<br>
				<INPUT TYPE="TEXT" NAME="id_modulo" required><br>
				Nuevo Modulo<br>
				<INPUT TYPE="TEXT" NAME="descripcion" required><br>
				Nueva Vista<br>
				<INPUT TYPE="TEXT" NAME="vista" required><br>
				Nuevo Controlador<br>
				<INPUT TYPE="TEXT" NAME="controlador" required><br>
				<INPUT TYPE="SUBMIT" style="height:38px; width:350px" value="Actualizar">
			</FORM>
			<!-- Trigger/Open The Modal -->
		<br>- O -<br>
		<br><button type="button" style="height:38px; width:350px" data-toggle="modal" data-target="#ModalModulo">Insertar nuevo registro</button>
		
		</dd>

		<dt>Estatus</dt>
		<dd>
			<?
				
				echo '<FORM METHOD="POST" ACTION="estatus.php">Estatus<br>';
				//Creamos la sentencia SQL y la ejecutamos
				$sSQL="SELECT * FROM estatus order by id_estatus"; 
				$consulta = $db->consulta($sSQL);
				echo "<table border = '1'> \n"; 
				echo "<tr><td>ID</td><td>Modulo</td></tr> \n"; 
				while ($row =mysqli_fetch_array($consulta)){ 
       			echo "<tr><td>$row[0]</td><td>$row[1]</td></tr> \n"; 
				} 
				echo "</table> \n"; 
				?>
				</select>
				
				ID<br>
				<INPUT TYPE="TEXT" NAME="id_estatus" required><br>
				Nuevo Estatus<br>
				<INPUT TYPE="TEXT" NAME="descripcion" required><br>
				<br><INPUT TYPE="SUBMIT" style="height:38px; width:350px" value="Actualizar">
			</FORM>
			<!-- Trigger/Open The Modal -->
		<br>- O -<br>
		<br><button type="button" style="height:38px; width:350px" data-toggle="modal" data-target="#ModalEstatus">Insertar nuevo registro</button>
		
		</dd>

		<dt>Tipo de Usuarios</dt>
		<dd>
			<?
				echo '<FORM METHOD="POST" ACTION="tipousuario.php">Tipou<br>';
				//Creamos la sentencia SQL y la ejecutamos
				$sSQL="SELECT * FROM tipo_usuarios order by id_tipo_usuario"; 
				$consulta = $db->consulta($sSQL);
				echo "<table border = '1'> \n"; 
				echo "<tr><td>ID</td><td>Tipo de Usuario</td></tr> \n"; 
				while ($row =mysqli_fetch_array($consulta)){ 
       			echo "<tr><td>$row[0]</td><td>$row[1]</td></tr> \n"; 
				} 
				echo "</table> \n"; 
				?>
				</select>
				
				ID<br>
				<INPUT TYPE="TEXT" NAME="id_tipo_usuario" required><br>
				Tipo Usuario<br>
				<INPUT TYPE="TEXT" NAME="descripcion" required><br>
				<INPUT TYPE="SUBMIT" style="height:38px; width:350px" value="Actualizar">
			</FORM>
			<!-- Trigger/Open The Modal -->
		<br>- O -<br>
		<br><button type="button" style="height:38px; width:350px" data-toggle="modal" data-target="#ModalTipoUsuarios">Insertar nuevo registro</button>
		
		</dd>

		<dt>Tipo_redes</dt>
		<dd>
			<?
				echo '<FORM METHOD="POST" ACTION="tipored.php">Tipo Redes <br><br>';
				//Creamos la sentencia SQL y la ejecutamos
				$sSQL="SELECT * FROM tipo_redes_sociales order by id_tipo_red_social"; 
				$consulta = $db->consulta($sSQL);
				echo "<table border = '1'> \n"; 
				echo "<tr><td>ID</td><td>Red Social</td></tr> \n"; 
				while ($row =mysqli_fetch_array($consulta)){ 
       			echo "<tr><td>$row[0]</td><td>$row[1]</td></tr> \n"; 
				} 
				echo "</table> \n"; 
				?>
				</select>
				
				ID<br>
				<INPUT TYPE="TEXT" NAME="id_tipo_red_social" required><br>
				Nuevo Modulo<br>
				<INPUT TYPE="TEXT" NAME="descripcion" required><br>
				<INPUT TYPE="SUBMIT" style="height:38px; width:350px" value="Actualizar">
			</FORM>
			<!-- Trigger/Open The Modal -->
		<br>- O -<br>
		<br><button type="button" style="height:38px; width:350px" data-toggle="modal" data-target="#ModalTipoRedes">Insertar nuevo registro</button>
		
		</dd>
		
		<dt>Productos</dt>
		<dd>
       <?
				echo '<FORM METHOD="POST" ACTION="productos.php">Productos<br>';
				//Creamos la sentencia SQL y la ejecutamos
				$sSQL="SELECT * FROM productos order by id_productos"; 
				$consulta = $db->consulta($sSQL);
				echo "<table border = '1'> \n"; 
				echo "<tr><td>ID</td><td>Precio de venta</td><td>Precio de compra</td><td>Descripcion</td><td>ID Proveedor</td><td>ID marca</td><td>ID Linea de Producto</td><td>Precio sugerido</td><td>ID Proveedor</td></tr> \n"; 
				while ($row =mysqli_fetch_array($consulta)){ 
       			echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr> \n"; 
				} 
				echo "</table> \n"; 
				?>
				</select>
				
				ID<br>
				<INPUT TYPE="TEXT" NAME="id_producto" required><br>
                Nuevo precio de venta<br>
				<INPUT TYPE="TEXT" NAME="precio_venta" required><br>
                Nuevo precio de compra<br>
				<INPUT TYPE="TEXT" NAME="precio_compra" required><br>
                Nueva descripcion<br>
				<INPUT TYPE="TEXT" NAME="descripcion" required><br>
				ID Proveedor<br>
				<INPUT TYPE="TEXT" NAME="id_proveedor" required><br>
				ID Marca<br>
				<INPUT TYPE="TEXT" NAME="id_marca" required><br>
				ID Linea de Productos<br>
				<INPUT TYPE="TEXT" NAME="id_linea_productos" required><br>
				Precio Sugerido<br>
				<INPUT TYPE="TEXT" NAME="precio_sugerido" required><br>
				<INPUT TYPE="SUBMIT" style="height:38px; width:350px" value="Actualizar">
			</FORM>
			<!-- Trigger/Open The Modal -->
		<br>- O -<br>
		<br><button type="button" style="height:38px; width:350px"  data-toggle="modal" data-target="#ModalProductos">Insertar nuevo registro</button>
		
		</dd>	
		
		<dt>Empresas</dt>
		<dd>
			<?
				echo '<FORM METHOD="POST" ACTION="empresas.php">Empresas<br>';
				//Creamos la sentencia SQL y la ejecutamos
				$sSQL="SELECT * FROM empresas order by id_empresa"; 
				$consulta = $db->consulta($sSQL);
				echo "<table border = '1'> \n"; 
				echo "<tr><td>ID</td><td>Administrador</td><td>Nombre</td><td>Eslogan</td><td>Imagen</td><td>Cliente A</td><td>Cliente B</td><td>Cliente C</td><td>Cliente D</td><td>ID Estatus</td><td>Calle</td><td>Numero interior</td><td>Numero exterior</td><td>Numero interior</td><td>ID Estado</td><td>ID Ciudad</td></tr> \n"; 
				while ($row =mysqli_fetch_array($consulta)){ 
       			echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[11]</td><td>$row[12]</td><td>$row[13]</td><td>$row[14]</td></tr> \n"; 
				} 
				echo "</table> \n"; 
				?>
				</select>
				
				ID<br>
				<INPUT TYPE="TEXT" NAME="id_empresa" required><br>
        Nuevo administrador<br>
				<INPUT TYPE="TEXT" NAME="administrador" required><br>
        Nuevo nombre<br>
				<INPUT TYPE="TEXT" NAME="nombre" required><br>
        Nuevo eslogan<br>
				<INPUT TYPE="TEXT" NAME="eslogan" required><br>
				Nueva imagen<br>
        <INPUT TYPE="TEXT" NAME="imagen" required><br>
        Nuevo cliente A<br>
				<INPUT TYPE="TEXT" NAME="cliente_a" required><br>
				Nuevo cliente B<br>
				<INPUT TYPE="TEXT" NAME="cliente_b" required><br>
				Nuevo cliente C<br>
				<INPUT TYPE="TEXT" NAME="cliente_c" required><br>
				Nuevo cliente D<br>
				<INPUT TYPE="TEXT" NAME="cliente_d" required><br>
				Nuevo ID Estatus<br>
				<INPUT TYPE="TEXT" NAME="id_estatus" required><br>
				Nueva calle<br>
				<INPUT TYPE="TEXT" NAME="calle" required><br>
				Nuevo numero interior<br>
				<INPUT TYPE="TEXT" NAME="no_int" required><br>
				Nuevo numero exterior<br>
				<INPUT TYPE="TEXT" NAME="no_ext" required><br>
				Nuevo ID estado<br>
				<INPUT TYPE="TEXT" NAME="id_estado" required><br>
				Nuevo ID ciudad<br>
				<INPUT TYPE="TEXT" NAME="id_ciudad" required><br>
				<INPUT TYPE="SUBMIT" style="height:38px; width:350px" value="Actualizar">
			</FORM>
			<!-- Trigger/Open The Modal -->
		<br>- O -<br>
		<br>
		<button type="button" style="height:38px; width:350px" data-toggle="modal" data-target="#ModalEmpresas">Insertar nuevo registro</button>
		</dd>
	</dl>
	<!--Java Script para el acordeon-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
	  $('dl dd').not('dt.activo + dd').hide();
       $('dl dt').click(function(){
          if ($(this).hasClass('activo')) {
               $(this).removeClass('activo');
               $(this).next().slideUp();
          } else {
               $('dl dt').removeClass('activo');
               $(this).addClass('activo');
               $('dl dd').slideUp();
               $(this).next().slideDown();
          }
       });
	</script>
	<!--Fin Java Script para el acordeon-->
<!-- Modal Sexo-->
<div id="ModalSexo" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insertar Sexo</h4>
      </div>
      <div class="modal-body">
		  <form METHOD="POST" ACTION="sexoInsert.php">
			Nueva descripcio&oacuten<br>
			<INPUT TYPE="TEXT" NAME="descripcion" required><br>
			<br><INPUT TYPE="SUBMIT" value="Insertar"><br>
		</form>
      </div>
    </div>
  </div>
</div>
	<!-- Modal Ciudades-->
<div id="ModalCiudades" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insertar Ciudad</h4>
      </div>
      <div class="modal-body">
		  <form METHOD="POST" ACTION="ciudadesInsert.php">
			Nueva Ciudad<br>
			<INPUT TYPE="TEXT" NAME="ciudad" required><br>
			Nuevo ID Municipio<br>
			<INPUT TYPE="TEXT" NAME="id_municipio" required><br>
			<br><INPUT TYPE="SUBMIT" value="Insertar">
		</form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Estados-->
<div id="ModalEstados" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insertar Estado</h4>
      </div>
      <div class="modal-body">
		  <form METHOD="POST" ACTION="estadosInsert.php">
			Nuevo Estado<br>
			<INPUT TYPE="TEXT" NAME="descripcion" required><br>
			<br><INPUT TYPE="SUBMIT" value="Insertar"><br>
		</form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Municipios-->
<div id="ModalMunicipios" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insertar Municipio</h4>
      </div>
      <div class="modal-body">
		  <form METHOD="POST" ACTION="municipioInsert.php">
			Nueva Ciudad<br>
				<INPUT TYPE="TEXT" NAME="municipio" required><br>
				Nuevo ID Estado<br>
				<INPUT TYPE="TEXT" NAME="id_estado" required><br>
				<INPUT TYPE="SUBMIT" value="Insertar">
		</form>
      </div>
    </div>
  </div>
</div>
<!-- Modal TipoPago-->
<div id="ModalTipoPago" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insertar Tipo de Pago</h4>
      </div>
      <div class="modal-body">
		  <form METHOD="POST" ACTION="tipopagoInsert.php">
			Nuevo tipo de pago<br>
			<INPUT TYPE="TEXT" NAME="descripcion" required><br>
			<br><INPUT TYPE="SUBMIT" value="Insertar"><br>
		</form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Modulo-->
<div id="ModalModulo" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insertar Modulo</h4>
      </div>
      <div class="modal-body">
		  <form METHOD="POST" ACTION="moduloInsert.php">
			Nuevo Modulo<br>
				<INPUT TYPE="TEXT" NAME="descripcion" required><br>
				Nueva Vista<br>
				<INPUT TYPE="TEXT" NAME="vista" required><br>
				Nuevo Controlador<br>
				<INPUT TYPE="TEXT" NAME="controlador" required><br>
				<INPUT TYPE="SUBMIT" value="Insertar">
		</form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Estatus-->
<div id="ModalEstatus" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insertar Estatus</h4>
      </div>
      <div class="modal-body">
		  <form METHOD="POST" ACTION="estatusInsert.php">
			Nuevo Estatus<br>
			<INPUT TYPE="TEXT" NAME="descripcion" required><br>
			<br><INPUT TYPE="SUBMIT" value="Insertar"><br>
		</form>
      </div>
    </div>
  </div>
</div>
<!-- Modal TipoUsuarios-->
<div id="ModalTipoUsuarios" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insertar Tipo de Usuario</h4>
      </div>
      <div class="modal-body">
		  <form METHOD="POST" ACTION="tipousuarioInsert.php">
			Nueva descripcio&oacuten<br>
			<INPUT TYPE="TEXT" NAME="descripcion" required><br>
			<br><INPUT TYPE="SUBMIT" value="Insertar"><br>
		</form>
      </div>
    </div>
  </div>
</div>
<!-- Modal TipoRedes-->
<div id="ModalTipoRedes" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insertar Tipo de Red</h4>
      </div>
      <div class="modal-body">
		  <form METHOD="POST" ACTION="tiporedInsert.php">
			Nueva descripcio&oacuten<br>
			<INPUT TYPE="TEXT" NAME="descripcion" required><br>
			<br><INPUT TYPE="SUBMIT" value="Insertar"><br>
		</form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Productos-->
<div id="ModalProductos" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insertar Producto</h4>
      </div>
      <div class="modal-body">
		  <form METHOD="POST" ACTION="productosInsert.php">
			Nuevo precio de venta<br>
				<INPUT TYPE="TEXT" NAME="precio_venta" required><br>
                Nuevo precio de compra<br>
				<INPUT TYPE="TEXT" NAME="precio_compra" required><br>
                Nueva descripcion<br>
				<INPUT TYPE="TEXT" NAME="descripcion" required><br>
				ID Proveedor<br>
				<INPUT TYPE="TEXT" NAME="id_proveedor" required><br>
				ID Marca<br>
				<INPUT TYPE="TEXT" NAME="id_marca" required><br>
				ID Linea de Productos<br>
				<INPUT TYPE="TEXT" NAME="id_linea_productos" required><br>
				Precio Sugerido<br>
				<INPUT TYPE="TEXT" NAME="precio_sugerido" required><br>
				<INPUT TYPE="SUBMIT" value="Insertar">
		</form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Empresas-->
<div id="ModalEmpresas" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insertar Empresa</h4>
      </div>
      <div class="modal-body">
		  <form METHOD="POST" ACTION="empresasInsert.php">
			Nuevo administrador<br>
				<INPUT TYPE="TEXT" NAME="administrador" required><br>
        Nuevo nombre<br>
				<INPUT TYPE="TEXT" NAME="nombre" required><br>
        Nuevo eslogan<br>
				<INPUT TYPE="TEXT" NAME="eslogan" required><br>
				Nueva imagen<br>
        <INPUT TYPE="TEXT" NAME="imagen" required><br>
        Nuevo cliente A<br>
				<INPUT TYPE="TEXT" NAME="cliente_a" required><br>
				Nuevo cliente B<br>
				<INPUT TYPE="TEXT" NAME="cliente_b" required><br>
				Nuevo cliente C<br>
				<INPUT TYPE="TEXT" NAME="cliente_c" required><br>
				Nuevo cliente D<br>
				<INPUT TYPE="TEXT" NAME="cliente_d" required><br>
				Nuevo ID Estatus<br>
				<INPUT TYPE="TEXT" NAME="id_estatus" required><br>
				Nueva calle<br>
				<INPUT TYPE="TEXT" NAME="calle" required><br>
				Nuevo numero interior<br>
				<INPUT TYPE="TEXT" NAME="no_int" required><br>
				Nuevo numero exterior<br>
				<INPUT TYPE="TEXT" NAME="no_ext" required><br>
				Nuevo ID estado<br>
				<INPUT TYPE="TEXT" NAME="id_estado" required><br>
				Nuevo ID ciudad<br>
				<INPUT TYPE="TEXT" NAME="id_ciudad" required><br>
				
				<INPUT TYPE="SUBMIT" value="Insertar">
		</form>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>