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
$subservsel = $_POST['selserv'];
$subserv = $_POS['subserv'];
$text = $_POST['Descr'];
$otro = "";
$datos = "SELECT idser FROM servicio where  titulo = '$subservsel'"; 
if($resultado = $conn->query($datos)){
    while($fila = $resultado->fetch_row()){
            $otro = $fila[0];
    }
}
$datos = "insert into subservicio(titulo,texto,idserv) values('".$subserv."','".$text."','".$otro."')";
$inserta = mysql_query($datos);
$conn->close();
header("Location: editorserv.php");
?>