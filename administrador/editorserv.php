<?php
//creamos la sesion
session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Servicio</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body>
  <div class="container">
        <ul class="nav nav-pills">
    <li class="active"><a href="index.php">Inicio</a></li>
<li><a href="editorquienes.php">Quienes Somos?</a></li>
    <li><a href="editorciie.php">CIIE</a></li>
    <li><a href="editorprocesos.php">Proceso</a></li>
     <li><a href="editorserv.php">Servicio</a></li>
    <li><a href="editorexito.php">Casos de Exito</a></li>
    <li><a href="editorcurso.php">Curso</a></li>
    <li><a href="noticiaphpl">Noticias</a></li>
  </ul>
   <h1>Servicio</h1>
   <div class="well">
    <form role="form" action="insertarserv.php" enctype="multipart/form-data">
  <div class="form-group">
      <label for="usr">Servicio</label>
  <input type="text" class="form-control" name="serv">
  <div class="checkbox">
    <label>
      <input type="checkbox" name="act" value="1"> Activo
    </label>
  </div>
  <button type="submit" class="btn btn-default">Guardar</button>
        </div>
</form>
  </div>
   <div class="well">
    <form role="form" action="Insertarsubserv.php" enctype="multipart/form-data">
        <div class="form-group">
  <label for="sel1">Servicio</label>
  <select class="form-control" id="sel1" name="selserv">
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
$datos = "SELECT titulo FROM servicio where activo = 1";
if($resultado = $conn->query($datos)){
    while($fila = $resultado->fetch_row()){?>
       <option><?php echo $fila[0];?></option>
        
        <?php
    }
}

$conn->close();
?>
  </select>
  <p class="help-block">Recuerde que tiene que selecionar el servicio al  que pertenese.</p>
</div>
  <div class="form-group">
      <label for="usr"> Sub Servicio</label>
  <input type="text" class="form-control" name="subserv">
   <label for="comment">Descripcion</label>
  <textarea class="form-control" rows="10" name="Descr"></textarea>
  <br>
  <button type="submit" class="btn btn-default">Guardar</button>
        </div>
</form>
    </div>
    </div>
    
</body>
</html>