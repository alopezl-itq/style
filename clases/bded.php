<?php
include("conexion.php");
$link=new Conexion();

function calcularEdad () {
    $m=getdate();
    if($m['mon']<10&&$m['mday']<10) {
        return "0".$m['mon'] . "-0" . $m['mday'];
    }elseif($m['mon']<10&&$m['mday']>=10){
        return "0".$m['mon'] . "-" . $m['mday'];
    }elseif($m['mon']>=10&&$m['mday']<10){
        return "".$m['mon'] . "-0" . $m['mday'];
    }

}
$edad=calcularEdad();

$sql = "SELECT nombre_usuario,apellido_p,apellido_m,email,fecha_nacimiento, substring(fecha_nacimiento,6) FROM usuarios WHERE substring(fecha_nacimiento,6)='".$edad."'";

$resfecha=$link->consultaR($sql);




    while ($row = mysqli_fetch_array($resfecha)) {

        $correo = 'Edd';
        $nombre =$row['nombre_usuario']." ".$row['apellido_p']." ".$row['apellido_m'];
        echo $para= $row['email'];
        $asunto = "Felicidades";
        $mensaje ="Feliz cumpleaños ".$nombre;

        $cabeceras = 'From:'.$correo . "\r\n" .
            'X-Mailer: PHP/' . phpversion();


      mail($para, $asunto, $mensaje, $cabeceras);
    }


?>
