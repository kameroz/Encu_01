<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "servicio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_errno());
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////
$servi = $_POST['serv'];
$act = $_POST['act'];

$datos = "insert into servicio(`titulo`, `activo`) values('".$servi."','".$act."')";
echo $datos;
$conn->query($datos);

$conn->close();
header("Location: editorserv.php");
?>