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
$curso = $_POST['curso'];        
$des = $_POST['descripcion'];          
$dur = $_POST['duracion'];          
$fi = $_POST['FI'];          
$ft = $_POST['FT'];          
$ac = $_POST['Activocurso'];


$datos1 = "insert into curso(`titulo`, `duracion`, `desc`, `activo`) VALUES('".$curso."','".$dur."','".$des."','".$ac."')";
$conn->query($datos1);
$datos2 = "insert into programado(`idcurso`, `FI`, `FT`) values('".$conn->insert_id."','".$fi."','".$ft."')";
$conn->query($datos2);
$conn->close();
header("Location: editorcurso.php"); 
?>