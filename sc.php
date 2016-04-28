<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SC</title>

	<link rel="icon" href="http://www.itcolima.edu.mx/assets/img/favicon.ico" type="image/ico">
	<link rel="stylesheet" href="style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/css.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/slider.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/organigrama.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/bjqs.css" type="text/css" media="screen"> 
	<link rel="stylesheet" href="css/jquery.dataTables.css" type="text/css"><!-- DataTables CSS -->
	<script type="text/javascript" src="css/jquery-1.8.1.min.js"></script><style type="text/css"></style> 
	<script type="text/javascript" src="css/bjqs-1.3.min.js"></script> 
	<script type="text/javascript" src="css/approot.js"></script><!--relevante -->
	<script type="text/javascript" src="css/jquery.dataTables.js"></script><!-- DataTables -->
	<script type="text/javascript" src="css/generic.js"></script><!-- DataTables -->
	<script type="text/javascript" src="css/jquery.jeditable.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="contenedor">
	            <span class="InicioSeccion"></span>
            <div id="header">
                <div id="barra_herramientas">
                    <div id="acceso" class="group">
                        <a href="index.php">Inicio</a> |
                        <a href="qs.php" target="_blank">CIIE</a> |
                        <a href="contacto.php">Contacto</a>
                        <!--<a href="http://www.itcolima.edu.mx/">Mapa de Sitio</a> |-->
                    </div>
                </div>
                <div id="logos" class="group">
                    <div id="logo_sep_nombre_tec">  
                        <div id="logo_sep">
                            <a href="http://www.sep.gob.mx/" target="_blank">
                                <img src="css/logoSEP_hoz.png" alt="Logo SEP">                            
                            </a>                              
                            <a><img src="css/separador.png" alt="Separador"></a>   
                        </div>  
                        <div id="nombre">
                            <label>Centro de Incubación e Innovación Empresarial &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <label id="tec">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Instituto Tecnologico de Colima</label>
                        </div>
                    </div>                         
                    <div id="logo_dgest_tec">                      
                        <a href="./Instituto Tecnológico de Colima_files/Instituto Tecnológico de Colima.html">
                            <img src="css/logoregistradotec.gif" alt="Logo TEC">                            
                        </a>                                                   
                    </div>
                </div>
                <div id="nav">
                    <div id="nav-bar">
                        <ul>
                            <li><a href="index.php" class="">INICIO</a>
                            </li>
                            <li><a href="qs.php" class="">QUIENES SOMOS</a>
                            </li>
                            <li><a href="ciie.php" class="">CIIE</a>
                				<div class="submenu">
                					<ul>
										<li><a href="ciie.php" class="">CONOCE EL CIIE</a></li>
            							<li><a href="proceso.php" class="">PROCESO</a></li> 
                        			</ul>
                        		</div>
                            </li>
                            <li><a href="sc.php" class="">SERVICIOS</a></li>
                            <li><a href="ce.php" class="">CASOS DE EXITO</a></li> 
                            <li><a href="capacitacion.php" class="">CAPACITACION</a></li> 
                            <li><a href="consultoria.php" class="">CONSULTORÍA</a></li>     
                            <li><a href="contacto.php" class="">CONTACTANOS</a></li>
                        </ul> <!-- fin UL principal -->
                    </div> <!-- fin de nav bar -->
                </div>    <!-- fin de nav -->
		<table  style="margin: 0 auto;" WIDTH="700">
			<tr>
				<td>
<!-- Single button -->
<div class="btn-group">
 <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "servicio";
$pollo = "";
$r = "";
$f = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_errno());
}
$datos = "SELECT titulo,idser FROM servicio where activo = 1";
if($resultado = $conn->query($datos)){
    while($fila = $resultado->fetch_row()){ 
        $pollo = $fila[1];
        $f = $fila[0];
        
        $r = $resultado;
    ?>
     <div class="btn-group">
      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b><?php echo $fila[0];?></b><span class="caret"></span>
  </button>
      <ul class="dropdown-menu">
<?php $datos2 = "SELECT subservicio.titulo FROM subservicio,servicio where subservicio.idser ='$pollo' and servicio.titulo != '$f' limit 3";
if($resultado = $conn->query($datos2)){
    while($fila2 = $resultado->fetch_row()){?>
      <li><a href="#"><?php echo $fila2[0];?></a></li>
        
        <?php
    }
    ?> </ul> 
    <?php
    $resultado = $r;
}
    ?>
      
      
       <?php
        
    }
    
}
    ?>  
    </div><?php
$conn->close();
?>



<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>   

				</td>
			</tr>
		</table>
					    <ul class="social-bts">
				        <li><a class="facebook" target="_blank" href="https://www.facebook.com/CIIE-Tecnol%C3%B3gico-de-Colima-352504781598297/?fref=ts"> Facebook </a></li>
        				<li><a class="twitter" target="_blank" href="https://twitter.com/ciieitcolima"> Twitter </a></li>
    				</ul>

</body>
</html>