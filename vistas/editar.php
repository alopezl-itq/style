<?php
$controlador = new Controlador();
if(isset($_GET['empno'])){
	$row = $controlador->ver($_GET['empno']);
}else{
	header('Location: index.php');
	}
	
	if(isset($_POST['enviar'])){
		$controlador->editar($_GET['empno'], $_POST['ename'], $_POST['hiredate'], $_POST['deptno']);
		header('Location: index.php');
		}
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Empleados</title>
</head>
<body>

<section>
<div class="container" >   
<form action="" method="POST">

<div class="form-group">
<h3> no de empleado:</h3><label for="empno"><input type="text" name="empno" id="empno" value=<?php echo $row['empno']; ?> size="20"  disabled/></label>
</div>
<br/>
<div class="form-group">
<h3> Nombre:</h3><label for="ename"><input type="text" name="ename" id="ename" value=<?php echo $row['ename']; ?> size="20"/></label>
</div>
<br/>
<div class="form-group">
<h4>Fecha de contratacion:</h4><label for="hiredate"><input type="date"  name="hiredate" id="hiredate" value=<?php echo $row['hiredate']; ?> size="20" /></label>
</div>
<br/>
<div class="form-group">
<h4>No de Departamento:</h4><label for="deptno"><input type="number" min="1" max="4"  name="deptno" id="deptno" value=<?php echo $row['deptno']; ?> /></label>
</div>
<br/>

<div>
<input type="submit"  name="enviar" value="Editar" />
</div>
</form>
</div>
</section>


</body>
</html>