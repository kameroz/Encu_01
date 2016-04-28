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
    <title>Casos-Exito</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body>
  <div class="container">
        <ul class="nav nav-pills">
    <li class="active"><a href="index.php">Inicio</a></li>
<li><a href="Editorquienes.php">Quienes Somos?</a></li>
    <li><a href="editorciie.php">CIIE</a></li>
    <li><a href="editorprocesos.php">Proceso</a></li>
     <li><a href="editorserv.php">Servicio</a></li>
    <li><a href="editorexito.php">Casos de Exito</a></li>
    <li><a href="editorcurso.php">Curso</a></li>
    <li><a href="noticia.php">Noticias</a></li>
  </ul>
   <h1>Casos de Exito</h1>
   <div class="well">
       <form role="form" action="insertarexito.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    
      <label for="usr">Nombre de la empresa</label>
  <input type="text" class="form-control" name="nomempre">
      <label for="comment">Descripcion</label>
  <textarea class="form-control" rows="10" name="Descr"></textarea>
  </div>
  <div class="form-group">
    <label for="ejemplo_archivo_2">Selecione el logo</label>
    <input name="foto1" type="file" />
    <p class="help-block">Recuerde que el formato tiene que ser JPG.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" name="Act" value="1"> Activo
    </label>
  </div>
  <button type="submit" class="btn btn-default">Guardar</button>
</form>
   </div>
   
    </div>
 
</body>

</html>