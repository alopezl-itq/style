<?php
$servername = "localhost";
$username = "alejan14_style";
$password = "style16";
$dbname = "alejan14_style";

include_once('../../clases/conexion.php');

session_start();

$conn = new Conexion();

echo $sql = "INSERT INTO agendas (id_cliente,id_usuario,hora,fecha,tiempo,id_servicio) VALUES (".$_SESSION['id_user'].",".utf8_decode($_POST['empleado']).",'".$_POST['hora']."','".$_POST['fecha']."',".$_POST['tiempo'].",".$_POST['desc'].")";


$insertGoTo = "agenda.php";
if ($conn->query($sql) === TRUE) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header(sprintf("Location: %s", $insertGoTo));
$conn->close();
?>


