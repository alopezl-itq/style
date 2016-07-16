<?php
$servername = "localhost";
$username = "alejan14_style";
$password = "style16";
$dbname = "alejan14_style";

session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo $sql = "INSERT INTO agendas (id_cliente,id_usuario,hora,fecha,tiempo,id_servicio) VALUES (".$_SESSION['id_user'].",".$_POST['empleado'].",'".$_POST['hora']."','".$_POST['fecha']."',".$_POST['tiempo'].",".$_POST['desc'].")";


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


