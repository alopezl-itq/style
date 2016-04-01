<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
</head>

  
<header align="center"><h1>Registro empleado</h1><header>
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

<div class="form-group">
<h3> Nombre:</h3><label for="ename"><input type="text" placeholder="fulanit@" name="ename" id="ename" maxlength="50" size="20" required/></label>
</div>
<br/>
<div class="form-group">
<h4>Fecha de contratacion:</h4><label for="hiredate"><input type="date"  name="hiredate" id="hiredate"/></label>
</div>
<br/>
<div class="form-group">

</select>
<option value="" name="deptno" selected>Elige un departamento</option>
<?php  while($row = mysql_fetch_array($resul)) 
{?>

   <option value="<?php echo $row['depno']; ?>" > <?php echo $row['dname']; ?> </option>
   
 
 
<?php } ?>

</select>
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


