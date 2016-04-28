<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Noticia</title>
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
   <h1>Notici</h1>
   <div class="well">
      <form role="form" action="insertarnotica.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
      <label for="usr">Titulo de la noticia</label>
  <input type="text" class="form-control" name="noticia">
      <label for="comment">Informacion de la noticia</label>
  <textarea class="form-control" rows="10" name="infonot"></textarea>
  </div>
  <div class="form-group">
    <label for="ejemplo_archivo_2">Selecione  la imagen que tiene que suvir</label>
    <input name="foto1" type="file">
    <p class="help-block">Recuerde que el formato tiene que ser JPG.</p>
  </div>
  <button type="submit" class="btn btn-default">Guardar</button>
</form>
      </div>
    </div>
    
</body>
</html>