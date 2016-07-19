
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php
session_start();
$id_empresa=$_SESSION['estetica'];
?>

    <head>
        <meta charset="utf-8">
        <title>The Best Hair Salons</title>
        <link rel="icon" type="img/ico" href="../../images/icoB.ico"/>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		   <!-- Necesitas esto para el bootstrap para el modal-->
  <meta charset="utf-8">
	 <link rel="stylesheet" href="../../css/templatemo_misc.css">
        <link rel="stylesheet" href="../../css/templatemo_style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- Fin bootstrap para el modal-->

        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/pestanas.css">
        <link rel="stylesheet" href="../../css/font-awesome.css">
        <link rel="stylesheet" href="../../css/animate.css">
        <link rel="stylesheet" href="../../css/templatemo_misc.css">
        <link rel="stylesheet" href="../../css/templatemo_style.css">
<?php 
echo "	<script src='js/vendor/modernizr-2.6.1-respond-1.1.0.min.js'></script>"; 
?>
    </head>
    <body>
    
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
                                    <h1>
                                       <a href="#">Productos</a>
                                    </h1>
                                </div> <!-- /.logo-wrapper -->
                                <div class="col-md-10 col-sm-10 main-menu text-right">
                                    <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                                    <ul class="menu-first">
                                        <li class="active"><a href="../../principal.php">Inicio</a></li>
                                        <li class="glyphicon-book"><a href="tabla.php">Ver Productos registrados</a></li>
                                    <li><a class="glyphicon-book" href="../../clases/salir.php">Salir</a></li>
                                    </ul>                                    
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->                        
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
        </div> <!-- /.site-main -->

        <div class="content-section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="heading-section  text-center">
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                
                <TABLE BORDER=1 WIDTH=600>

<TR>
<TD WIDTH=600>
<FORM METHOD="POST" ACTION="productos.php">
<INPUT TYPE='HIDDEN' VALUE=1 name='numero'>
<input type="image" name="1" src="img/1.jpg" />
</FORM>
</TD>

<TD WIDTH=500>
<FORM METHOD="POST" ACTION="productos.php">
<INPUT TYPE='HIDDEN' VALUE=2 name='numero'>
<input type="image" name="2" src="img/2.jpg" />
</FORM>
</TD>

<TD WIDTH=500>
<FORM METHOD="POST" ACTION="productos.php">
<INPUT TYPE='HIDDEN' VALUE=3 name='numero'>
<input type="image" name="3" src="img/3.png" />
</FORM>
</TD>

<TD WIDTH=500>
<FORM METHOD="POST" ACTION="productos.php">
<INPUT TYPE='HIDDEN' VALUE=4 name='numero'>
<input type="image" name="4" src="img/4.png" />
</FORM>
</TD>



<TD WIDTH=500>
<FORM METHOD="POST" ACTION="productos.php">
<INPUT TYPE='HIDDEN' VALUE=5 name='numero'>
<input type="image" name="5" src="img/5.jpg" />
</FORM>
</TD>
</TR>

<TR>
<TD WIDTH=500>
<FORM METHOD="POST" ACTION="productos.php">
<INPUT TYPE='HIDDEN' VALUE=6 name='numero'>
<input type="image" name="6" src="img/6.jpg" />
</FORM>
</TD>

<TD WIDTH=500>
<FORM METHOD="POST" ACTION="productos.php">
<INPUT TYPE='HIDDEN' VALUE=7 name='numero'>
<input type="image" name="7" src="img/7.jpg" />
</FORM>
</TD>

<TD WIDTH=500>
<FORM METHOD="POST" ACTION="productos.php">
<INPUT TYPE='HIDDEN' VALUE=8 name='numero'>
<input type="image" name="8" src="img/8.jpg" />
</FORM>
</TD>

<TD WIDTH=500>
<FORM METHOD="POST" ACTION="productos.php">
<INPUT TYPE='HIDDEN' VALUE=9 name='numero'>
<input type="image" name="9" src="img/9.png" />
</FORM>
</TD>


<TD WIDTH=500>
<FORM METHOD="POST" ACTION="productos.php">
<INPUT TYPE='HIDDEN' VALUE=10 name='numero'>
<input type="image" name="10" src="img/10.png" />
</FORM>
</TD>
</TR>

<TR>
<TD WIDTH=500>
<FORM METHOD="POST" ACTION="productos.php">
<INPUT TYPE='HIDDEN' VALUE=11 name='numero'>
<input type="image" name="1" src="img/11.gif" />
</FORM>
</TD>

<TD WIDTH=500>
<FORM METHOD="POST" ACTION="productos.php">
<INPUT TYPE='HIDDEN' VALUE=12 name='numero'>
<input type="image" name="12" src="img/12.png" />
</FORM>
</TD>



<TD WIDTH=500>
<FORM METHOD="POST" ACTION="productos.php">
<INPUT TYPE='HIDDEN' VALUE=13 name='numero'>
<input type="image" name="13" src="img/13.gif" />
</FORM>
</TD>
</TR>

</TABLE>

</div>
                
            </div> <!-- /.container -->
        </div> <!-- /#contact -->
         
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 hidden-xs text-right">
                        <a href="#top" id="go-top">Ir Arriba</a>
                    </div> <!-- /.text-center -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#footer -->
        
        <?php
echo "<script type='text/javascript' src='../../js/jquery.js'></script>";
echo "<script type='text/javascript' src='../../js/jqueryui.js'></script>";
echo "<script type='text/javascript'>";

echo "var x;";
echo "x=$(document);";
echo "x.ready(inicializar);";

echo "function inicializar()";
echo "{";
echo "	var x=$('#pestanas');";
echo "	x.tabs();";
echo "	}";
echo "</script>";
?>

    </body>
</html>