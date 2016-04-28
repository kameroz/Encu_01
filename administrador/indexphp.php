<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "servicio";
$id = rand();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_errno());
}
$desc = $_POST['desc'];
$nombrefoto1=$_FILES['foto1']['name'];
$ruta1=$_FILES['foto1']['tmp_name'];

if(is_uploaded_file($ruta1))
{ 
$tips = 'MP4';
$name = $id.'Video-1'.'.'.$tips;
$destino2 ="Media/".$name;
$destino1 =  "C:/wamp/www/Encu_01/Media/".$name;
copy($ruta1,$destino1);


}
$act= $_POST['act'];
$datos1 = "insert into msginicio(`desc`, `activo`) values('".$desc."','".$act."')";
$conn->query($datos2);
$datos2 = "insert into video(`urlvideo`, `activo`) values('".$destino2."','".$act."')";
$conn->query($datos2);

$conn->close();
header("Location: index.php");
?> 