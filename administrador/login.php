<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-escale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="css/css/foundation.css">
      <link rel="stylesheet" type="text/css" href="css/css/foundation.min.css">
</head>
<body>
    
       <div class="jumbotron boxlogin">
           <form  method="post" name="flogin" id="flogin" action="validar.php">
              <label>Emprendedor</label>
               <label>:</label>
               <input type="text" name="username" id="username" class="form-control">
               <label>Contraseña:</label>
               <input type="password" name="password" id="password" class="form-control">
               <input type="submit" value="Entrar" class="button expanded"  >
           </form>
          <p class="text-center"><a href="restaurarcontr.php">Olvidaste la contraseña?</a></p>  
       </div>
        
</body>
</html>