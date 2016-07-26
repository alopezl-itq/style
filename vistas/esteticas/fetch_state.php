<?php
//fetch_municipio.php

include_once('../../clases/usuario.php');
$usuario = new Usuario();

$output = '';
print_r($_POST);
$result = $usuario->vermunicipio($_POST['countryId']);
$output = '<option value="">Selecciona un Municipio</option>';
while($row = mysqli_fetch_array($result))
{
 $output .= '<option value="'.$row["id_municipio"].'">'.utf8_encode($row["descripcion_municipios"]).'</option>';
}
echo $output;
?>