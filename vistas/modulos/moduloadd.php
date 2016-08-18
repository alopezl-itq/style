<?php
include_once('../../modulos/controladorm.php');

$controlador = new controlador();
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    
    $modulo=isset($_POST['modulo']) ? $_POST['modulo'] : NULL;
    $empleado=isset($_POST['empleado']) ? $_POST['empleado'] : NULL;
    $count=count($modulo);
    for ($i = 0; $i < $count; $i++) 
    {
        if(isset($_POST['guardar']))
            {
                $r=$controlador->insert($modulo[$i],$empleado);
            }
    }
}
?>


