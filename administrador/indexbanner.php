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
$act= $_POST['act'];
$datos = "insert into banner( `urlimg`, `activo`) values('".$destino2."','".$act."')";
$conn->query($datos);
/////////////////////////////////////////////////////////////////////////////////////////////////////
$nombrefoto1=$_FILES['foto2']['name'];
$ruta1=$_FILES['foto1']['tmp_name'];

if(is_uploaded_file($ruta1))
{ 
if($_FILES['foto2']['type'] == 'image/png' OR $_FILES['foto2']['type'] == 'image/gif' OR $_FILES['foto2']['type'] == 'image/jpeg')
		{
$tips = 'jpg';
$type = array('image/jpeg' => 'jpg');
$name = $id.'Foto-2'.'.'.$tips;
$destino3 ="Media/".$name;
$destino1 =  "C:/wamp/www/Encu_01/Media/".$name;
copy($ruta1,$destino1);

}
}
$datos = "insert into banner( `urlimg`, `activo`) values('".$destino3."','".$act."')";
$conn->query($datos);
/////////////////////////////////////////////////////////////////////////////////////////////////////
$nombrefoto1=$_FILES['foto3']['name'];
$ruta1=$_FILES['foto3']['tmp_name'];

if(is_uploaded_file($ruta1))
{ 
if($_FILES['foto3']['type'] == 'image/png' OR $_FILES['foto3']['type'] == 'image/gif' OR $_FILES['foto3']['type'] == 'image/jpeg')
		{
$tips = 'jpg';
$type = array('image/jpeg' => 'jpg');
$name = $id.'Foto-3'.'.'.$tips;
$destino4 ="Media/".$name;
$destino1 =  "C:/wamp/www/Encu_01/Media/".$name;
copy($ruta1,$destino1);

}
}
$datos = "insert into banner( `urlimg`, `activo`) values('".$destino4."','".$act."')";
$conn->query($datos);

$conn->close();
header("Location: index.php");
?> 