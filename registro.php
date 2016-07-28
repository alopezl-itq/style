<?php

include_once('modulos/controlador_registro.php');

$controlador = new controlador();
if(isset($_POST['enviar'])){
    $controlador->crearUsuario(utf8_decode($_POST['nombre_usuario']), utf8_decode($_POST['apellido_p']), utf8_decode($_POST['apellido_m']),$_POST['sexo'],$_POST['fecha_nacimiento'],utf8_decode($_POST['email']),$_POST['id_empresa'],3,$_POST['id_municipio'],utf8_decode($_POST['usuario']),utf8_decode($_POST['password']));


}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">


    <link rel="icon" type="img/ico" href="images/icoB.ico"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.ui.map.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/templatemo_style.css">

</head>

<body>

<form method="post" action="">



<script  src="js/jquery.js"></script>




        <br/>
        <div class="col-lg-3 col-md-3"></div>
        <div class="col-lg-6 col-md-6">
            <form action="" method="POST" name="frm">
                <div class="form-group">
                    <h5><i>User:</i></h5><label for="user"><input type="text" id="user" placeholder="Ingrese Username" name="usuario" maxlength="50"
                                                                  size="20" required/></label>
                </div>

                <div class="form-group">
                    <h5><i>Password:</i></h5><label for="password"><input type="password"
                                                                          id="password" placeholder="Ingrese Password" name="password" maxlength="50" size="20" required/></label>
                </div>

                <div class="form-group">
                    <h5><i>Confirmar Password:</i></h5><label for="confirmpassword"><input type="password"
                                                                                           id="confirmpassword" placeholder="Ingrese Password" name="confirmpassword" maxlength="50" size="20" required/></label>
                </div>
                <div class="form-group">
                    <h5><i>Nombre:</i></h5><label for="nombre"><input type="text" placeholder="Nombre(s)*" name="nombre_usuario"
                                                                      id="nombre_usuario" maxlength="50" size="20" style="width:100%;" required/></label>
                </div>

                <div class="form-group">
                    <h5><i>Apellidos Paterno:</i></h5><label for="apellido_p"><input type="text" placeholder="Apellido Paterno*"
                                                                                     id="apellidos" name="apellido_p" maxlength="50" size="20" required/></label>
                </div>

                <div class="form-group">
                    <h5><i>Apellidos Materno:</i></h5><label for="apellido_m"><input type="text" placeholder="Apellido Materno*"
                                                                                     id="apellidos" name="apellido_m" maxlength="50" size="20" required/></label>
                </div>

                <div class="form-group">
                    <h5><i>Sexo:</i></h5>
                    <select name="sexo">
                        <option value="null" selected>Seleccione el sexo</option>
                        <option value="2">Mujer</option>
                        <option value="1">Hombre</option>
                    </select>
                </div>

                <div class="form-group">
                    <h5><i>Fecha de nacimiento:</i></h5><label for="date"><input type="date"  name="fecha_nacimiento"
                                                                                 id="date" required /></label>
                </div>
        </div>
        <div class="col-lg-3 col-md-3"></div>

        <br/>
        <div class="col-lg-3 col-md-3"></div>
        <div class="col-lg-6 col-md-6">


            <div class="form-group">
                <h5><i>Correo Electronico:</i></h5><label for="email"><input type="email"  pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="correo@email.com" id="email" name="email" size="20"  maxlength="50" required /></label>
            </div>




        </div>
        <div class="col-lg-3 col-md-3"></div>

        <br/>
        <div class="col-lg-3 col-md-3"></div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <h5><i>Estado de Residencia:</i></h5>
                <select name="id_estado" id="id_estado">
                    <option value="">Seleccione un Estado</option>
                    <?php
                    $usuario = new Usuario();
                    $resultadoestado=$usuario->verestados();
                    while($row=mysqli_fetch_array($resultadoestado)){
                        echo '<option value="'.$row["id_estado"].'">'.utf8_encode($row["descripcion_estados"]).'</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <h5><i>Municipio de Residencia:</i></h5>

                <select name="id_municipio" id="id_municipio">
                    <option value="">Selecciona un Municipio</option>
                </select>



                <script>
                    $(document).ready(function(){
                        $('#id_estado').change(function(){
                            var country_id = $(this).val();
                            $.ajax({
                                url:"vistas/usuarios/fetch_state.php",
                                method:"POST",
                                data:{countryId:country_id},
                                dataType:"text",
                                success:function(data)
                                {
                                    $('#id_municipio').html(data);
                                }
                            });
                        });
                    });
                </script>
                <div class="form-group">
                    <h5><i>Estética:</i></h5>
                    <select name="id_empresa" id="id_empresa">
                        <option value="" selected>Selecciona una Estetica</option>
                        <?php
                        $usuario = new Usuario();
                        $resultado1=$usuario->verempresas();
                        while($row=mysqli_fetch_array($resultado1)){
                            echo '<option value="'.$row["id_empresa"].'">'.utf8_encode($row["nombre"]).'</option>';
                        }
                        ?>
                    </select>
                </div>
                <script>
                    $(document).ready(function(){
                        $('#id_estado').change(function(){
                            var country_id = $(this).val();
                            $.ajax({
                                url:"vistas/usuarios/fetch_state.php",
                                method:"POST",
                                data:{countryId:country_id},
                                dataType:"text",
                                success:function(data)
                                {
                                    $('#id_municipio').html(data);
                                }
                            });
                        });
                    });
                </script>
                <script>
                    $(document).ready(function(){
                        $('#id_empresa').change(function(){
                            var country_id = $(this).val();
                            $.ajax({
                                url:"mapa.php",
                                method:"POST",
                                data:{countryId:country_id},
                                dataType:"text",
                                success:function(data)
                                {
                                    $('#mapa').html(data);
                                }
                            });
                        });
                    });
                </script>
            </div>




        </div>
        <div class="col-lg-3 col-md-3" id="mapa" name="mapa"></div>

        <br/>
        <div class="col-lg-3 col-md-3"></div>
        <div class="col-lg-6 col-md-6">
            <script type="text/javascript">
                function val(){



                    if(frm.confirmpassword.value != frm.password.value)
                    {
                        alert("El Password no Coincide.");
                        return false;
                    }

                    return true;
                }
            </script>


            <div class="col-sm-12 modal-footer" align="center">

                <div align="center">
                    <input type="submit"  name="enviar" value="ENVIAR" onclick="return val();" style="width:30%"/>
                </div>
                </form>
            </div>
        </div>
        <div class="col-lg-3 col-md-3"></div>
    </div>





<script src="js/vendor/jquery-1.11.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jqueryui.js'></script>
</form>
</body>

</html>