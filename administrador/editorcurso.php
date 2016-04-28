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
    <title>Curso</title>
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
    <li><a href="noticia.php">Noticias</a></li>
  </ul>
   <h1>Curso</h1>
    </div>
    <div class="well">
    <form role="form" action="insertarcurso.php" method="post">
    <table class="table table-hover">
    <thead>
      <tr>
        <th><font color="silver"> Curso</font></th>
        <th><font color="silver">Descripcion</font></th>
        <th><font color="silver">Duracion</font></th>
        <th><font color="silver">Fecha de Inicio</font></th>
        <th><font color="silver">Fecha de Termino</font></th>
        <th><font color="silver">Activo</font></th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
          <td><input type="text" class="form-control" name="curso"></td>
          <td><input type="text" class="form-control" name="descripcion"></td>
          <td><input type="text" class="form-control" name="duracion"></td>
          <td><input type="text" class="form-control" name="FI"></td>
          <td><input type="text" class="form-control" name="FT"></td>
          <td><input type="checkbox" name="Activocurso" value="1"></td>

      </tr>
    </tbody>
  </table>
  <button type="submit" class="btn btn-default">Guardar</button>
        </form>
   </div>	 
    </body> 
</html>