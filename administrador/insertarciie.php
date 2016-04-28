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
$texto = $_POST['editor'];
$act= $_POST['act'];
$datos ="insert into msciie(`mensage`, `activo`) values('".$texto."','".$act."')";
$conn->query($datos);

$conn->close();
header("Location: Editorciie.php");
?>