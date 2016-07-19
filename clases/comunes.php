<?php
	
	function cursos_banner(){
	
	$sql="SELECT  * from cursos ";
	
	 		$db = new Conexion();
	 		if($cursos=mysqli_query($db,$sql)){
	 			$imagen=1;
	 			while($dato=mysqli_fetch_array($cursos)){
		 			
		 			
		 			echo "<li>
                                <div class='overlay'></div>
                                <img src='images/slide".$imagen.".jpg' alt=''>
                                <div class='slider-caption visible-md visible-lg'>
                                    <h2>".$dato['nombre_curso']." </h2>
                                    <p>".utf8_encode($dato['descripcion_cursos'])."</p>
                                    <a href='vistas/cursos/".$dato['archivo']."' target='blank' class='slider-btn'>Leer +</a>
                                </div>
                            </li>";
                            $imagen=$imagen+1;
                            if ($imagen>2) $imagen=1;
		 	}
	 		} else {
	 			echo mysqli_error($db);
	 		}
	
}


function elimina_acentos($text)
    {
        $text = htmlentities($text, ENT_QUOTES, 'UTF-8');
        $text = strtolower($text);
        $patron = array (
            // Espacios, puntos y comas por guion
            //'/[\., ]+/' => ' ',
 
            // Vocales
            '/\+/' => '',
            '/&agrave;/' => 'a',
            '/&egrave;/' => 'e',
            '/&igrave;/' => 'i',
            '/&ograve;/' => 'o',
            '/&ugrave;/' => 'u',
 
            '/&aacute;/' => 'a',
            '/&eacute;/' => 'e',
            '/&iacute;/' => 'i',
            '/&oacute;/' => 'o',
            '/&uacute;/' => 'u',
 
            '/&acirc;/' => 'a',
            '/&ecirc;/' => 'e',
            '/&icirc;/' => 'i',
            '/&ocirc;/' => 'o',
            '/&ucirc;/' => 'u',
 
            '/&atilde;/' => 'a',
            '/&etilde;/' => 'e',
            '/&itilde;/' => 'i',
            '/&otilde;/' => 'o',
            '/&utilde;/' => 'u',
 
            '/&auml;/' => 'a',
            '/&euml;/' => 'e',
            '/&iuml;/' => 'i',
            '/&ouml;/' => 'o',
            '/&uuml;/' => 'u',
 
            '/&auml;/' => 'a',
            '/&euml;/' => 'e',
            '/&iuml;/' => 'i',
            '/&ouml;/' => 'o',
            '/&uuml;/' => 'u',
 
            // Otras letras y caracteres especiales
            '/&aring;/' => 'a',
            '/&ntilde;/' => 'n',
 
            // Agregar aqui mas caracteres si es necesario
 
        );
 
        $text = preg_replace(array_keys($patron),array_values($patron),$text);
        return $text;
    }

	
	
include_once('conexion.php');
 function salir(){
    session_start();
    session_destroy();
    session_write_close();
}

function validarSesionEnVistas(){
    if(isset($_SESSION['login'])){
        echo "Bienvenido ".utf8_encode($_SESSION['nombre']);
    }else{
        header ("location:index.html");
    }
    
}

function validarSesion(){
    if(isset($_SESSION['login'])){
        echo "Bienvenido ".$_SESSION['nombre'];
    }else{
        header ("location:index.html");
    }
    
}

function verValorClienteEmpresa($id_empresa,$tipo){
    $sql='SELECT cliente_'.$tipo.' FROM `empresas` where id_empresa='.$id_empresa;
    $db = new Conexion();
    $resultado =$db->consultaR($sql);

}

function menu(){
	 $id=$_SESSION['id_user'];
	 //$sql="select * from modulo_usuario where id_usuario='".$id."'";
	 $sql="SELECT * from modulo n, modulo_usuario m where (m.id_usuario='".$id."' and n.id_modulo=m.id_modulo)";
	
	 $db = new Conexion();
	 if($menu=mysqli_query($db,$sql)){
		 
		 while($dato=mysqli_fetch_array($menu)){
			 echo  "<li><a href='vistas/".$dato['vista']."?cargar=".$dato['controlador']."'>".$dato['descripcion']."</a></li>"; 
		 }
	 } else {
		 echo mysqli_error($db);
	 }	
}

function redes(){
	
	if(!isset($_SESSION['estetica'])){
		
		echo "<li><a href='#' class='fa fa-facebook'></a></li>
                                <li><a href='#' class='fa fa-twitter'></a></li>";
	}else{
		$sql="SELECT  facebook, twitter, instagram from empresas where id_empresa=".$_SESSION['estetica'];
	
	 		$db = new Conexion();
	 		if($red=mysqli_query($db,$sql)){
		 
	 			while($dato=mysqli_fetch_array($red)){
		 		
		 			
	 			if($dato['facebook']<>'NULL') echo  "<li><a href='https://www.facebook.com/".$dato['facebook']."' target='_blank' class='fa fa-facebook'></a></li>";
	 			if($dato['twitter']<>'NULL')  echo  "<li><a href='https://www.twitter.com/".$dato['twitter']."' target='_blank' class='fa fa-twitter'></a></li>";
	 			if($dato['instagram']<>'NULL') echo  "<li><a href='https://www.instagram.com/".$dato['instagram']."' target='_blank' class='fa fa-instagram'></a></li>";

		 	}
	 		} else {
	 			echo mysqli_error($db);
	 		}
	 }
		
	
	
}

?>