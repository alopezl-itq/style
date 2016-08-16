<?php
include("conexion.php");
$link=new Conexion();

function calcularEdad () {
    $m=getdate();
    if($m['mon']<10&&$m['mday']<10) {
        return $m['year']."-0".$m['mon'] . "-0" . ($m['mday']+1);
    }elseif($m['mon']<10&&$m['mday']>=10){
        return $m['year']."-0".$m['mon'] . "-" .($m['mday']+1);
    }elseif($m['mon']>=10&&$m['mday']<10){
        return $m['year']."-".$m['mon'] . "-0" . ($m['mday']+1);
    }
}
$edad=calcularEdad();

echo $sql = "SELECT u.nombre_usuario,u.apellido_p,u.apellido_m, a.hora,a.fecha,a.tiempo FROM usuarios u, agendas a WHERE a.id_cliente=1 and a.id_usuario=u.id_usuario and a.fecha ='$edad'";

$resfecha=$link->consultaR($sql);




while ($row = mysqli_fetch_array($resfecha)) {

    $correo = 'Edd';
    $nombre =$row['nombre_usuario']." ".$row['apellido_p']." ".$row['apellido_m'];
    $para= $row['email'];
    $asunto = "Felicidades";
    echo $mensaje ='



















<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<head><title></title>

 <meta charset="utf-8">
        <title>The Best Hair Salons</title>
        <link rel="icon" type="img/ico" href=""/>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/templatemo_misc.css">
        <link rel="stylesheet" href="../css/templatemo_style.css">

        <script src="../js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>




</head>
<script>

</script>
<body>

<div class="container">

<div class="row"><h1 class="lead text-info">¡Feliz cumpleaños te desea '.$row['nombre'].', '.utf8_encode($nombre).'!</h1></div>
<div class="row"><img src="../images/descarga.png" class="img-responsive" width=350" height="200"/></div>
</div>


<div class="row" >
    <footer >
            <div id="footer" style="background-color: #245580">
                <div class="container">
                    <div class="row">
                        <div class="contact-info">
                            <p class="lead text-warning">
                                Enviado de '.$row['nombre'].'
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
</div>





<script src="../js/vendor/jquery-1.11.0.min.js"></script>

<script src="../js/bootstrap.js"></script>
<script src="../js/plugins.js"></script>
<script src="../js/main.js"></script>
</body>

</html>





        ';

    $cabeceras = 'From:'.$correo . "\r\n" .
        'X-Mailer: PHP/' . phpversion();


    //  mail($para, $asunto, $mensaje, $cabeceras);
}


?>
