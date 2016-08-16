<?php
/**
 * Created by PhpStorm.
 * User: Eed
 * Date: 27/07/2016
 * Time: 09:07 PM
 */
//echo 'hola '.$_POST['countryId'];
include_once('modulos/controlador_registro.php');

$controlador = new Controlador();

$respuesta = $controlador->geoloc($_POST['countryId']);

$row=mysqli_fetch_assoc($respuesta);


?>

<!DOCTYPE html>
<html>
<head>
    <script>
    var longitud = <?php echo $row['longitud'];?>;
    var latitud = <?php echo $row['latitud'];?>;
    </script>
    <title>Prueba - jQuery - Google.maps</title>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.ui.map.js"></script>
    <script type="text/javascript">



        $(document).ready(function(){
            $('#id');
            var mapa;

            var marcador;
            var coordenadas = new google.maps.LatLng(latitud, longitud);
            var opciones = {
                center: coordenadas,
                zoom:11,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            mapa = new google.maps.Map($('#mapa')[0], opciones);
            var lating = {lat: latitud, lng: longitud};
            ponCoordenadas(lating);

            var lating2 = {lat: latitud, lng: longitud};
            ponCoordenadas(lating2);

            google.maps.event.addListener(mapa, 'click', function(event) {
                ponCoordenadas(event.latLng);
            });
            function ponCoordenadas(location) {
                if (marcador) {
                    marcador.setPosition(location);
                } else {

                    marcador = new google.maps.Marker({
                        position: location,
                        draggable: true,
                        title: 'Arrastrar para marcar nuevas coordenadas.',
                        map: mapa
                    });
                }
            }
            google.maps.event.addListener(mapa, 'click', function(event) {
                ponCoordenadas(event.latLng);
                jQuery('#v_latitud').val(marcador.getPosition().lat());
                jQuery('#v_longitud').val(marcador.getPosition().lng());
            });
            $("#b_reset").click(function(){location.reload();});
        });
    </script>
    <style>
        div#mapa {width: 500px;height:500px;}
        .cbr     {width: 500px; height:50px;}
    </style>
</head>
<body>

<div id="mapa"></div>