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
$usuario = $_POST["username"];   
$password = $_POST["password"];

$datos = "SELECT nombre_administrador,password FROM administradores WHERE nombre_administrador = '$usuario'";
$resultado = $conn->query($datos);

if($row = $resultado->fetch_row())
{     

 if($row[1] == $password)
 {
  session_start();  
  $_SESSION['usuario'] = $usuario;  
  header("Location: index.php");  
 }
 else
 {
  ?>
   <script languaje="javascript">
    alert("Contraseña Incorrecta");
    location.href = "login.php";
   </script>
  <?php
            
 }
}
else
{
?>
 <script languaje="javascript">
  alert("El nombre de usuario es incorrecto!");
  location.href = "login.php";
 </script>
<?php   
        
}

mysql_free_result($result);

$conn->close();
?>
