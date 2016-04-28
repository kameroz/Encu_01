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
$not = $_POST['noticia'];
$infonot = $_POST['infonot'];
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
$fecha = date("Y-m-d");

$datos1 = "insert into noticia(`titulo`, `texto`, `fecha`) VALUES('".$not."','".$infonot."','".$fecha."')";
$conn->query($datos1);
$datos2 = "insert into foto(`idfoto`, `urlfoto`) values('".$conn->insert_id."','".$destino2."')";
$conn->query($datos2);
$que=$conn->insert_id;
$datos3 = "insert into notfoto(`idnot`, `idfoto`) values('".$que."','".$que."')";
$conn->query($datos3);

$conn->close();
header("Location: noticia.php");
?> 