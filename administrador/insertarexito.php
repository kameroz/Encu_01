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
$nomemp = ($_POST['nomempre']);
$desc = ($_POST['Descr']);
$nombrefoto1=$_FILES['foto1']['name'];
$ruta1=$_FILES['foto1']['tmp_name'];

if(is_uploaded_file($ruta1))
{ 
if($_FILES['foto1']['type'] == 'image/png' OR $_FILES['foto1']['type'] == 'image/gif' OR $_FILES['foto1']['type'] == 'image/jpeg')
		{
$tips = 'jpg';
$type = array('image/jpeg' => 'jpg');
$name = $id.'Foto-1'.'.'.$tips;
$destino2 ="Media/".$name;
$destino1 =  "C:/wamp/www/Encu_01/Media/".$name;
copy($ruta1,$destino1);

}
}
$act= $_POST['Act'];
$datos = "insert into empresa(`nombre`, `urlimg`, `desc`, `activo`) values('".$nomemp."','".$destino2."','".$desc."','".$act."')";
$conn->query($datos);

$conn->close();
header("Location: editorexito.php");

?> 
