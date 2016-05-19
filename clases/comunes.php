<?php


 function salir(){
    session_start();
    session_destroy();
    session_write_close();
}


function validarSesion(){
    if(isset($_SESSION['login'])){
        echo "Bienvenido ".$_SESSION['nombre'];
    }else{
        header ("location:index.html");
    }


}
?>