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
    <title>Inicio</title>
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
  <h1>Inicio</h1>
   <div class="well">
       <form role="form" action="indexphp.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
      <label for="comment">Escrito principal</label>
  <textarea class="form-control" rows="10" name="desc"></textarea>
  </div>
  <div class="form-group">
    <label for="ejemplo_archivo_2">Selecione el video</label>
    <input type="file" name="foto1">
    <p class="help-block">Recuerde que el formato tiene que ser MP4.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" name="act" value="1"> Activo
    </label>
  </div>
  <button type="submit" class="btn btn-default">Guardar</button>
</form>
   </div>
   <form role="form" action="indexbanner.php" method="post" enctype="multipart/form-data">
   <h2>Banner</h2>
   <div class="well">
       <div class="form-group">
    <label for="ejemplo_archivo_2">Selecione la primer imagen</label>
    <input type="file" name="foto1">
    <p class="help-block">Recuerde que el formato tiene que ser jpg.</p>
           <div class="form-group">
    <label for="ejemplo_archivo_2">Selecione  la segunda imagen</label>
    <input type="file" name="foto2">
    <p class="help-block">Recuerde que el formato tiene que ser jpg.</p>
           <div class="form-group">
    <label for="ejemplo_archivo_2">Selecione la tercer imagen</label>
    <input type="file" name="foto3">
    <p class="help-block">Recuerde que el formato tiene que ser jpg.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" id="act" value="1"> Activo
    </label>
  </div>
  <button type="submit" class="btn btn-default">Guardar</button>
   </div>
    </div>
      </div>
      </form>
    </div>
</body>

</html>