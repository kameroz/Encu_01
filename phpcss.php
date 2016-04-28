<?php
    header("Content-type: text/css; charset: UTF-8");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "servicio";
$bann[0] = "";
$banne[0] ="";
$bane[0] ="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_errno());
}
	?>.banner{
					width: 1000px;
					height: 250px;
					margin: auto; 

					background-size: 100% 100%;
					
					animation: banner 10s infinite;
					animation-direction: alternate;

					}
					<?php
$datos = "SELECT  urlimg FROM banner where activo = 1";
if($resultado = $conn->query($datos)){
    while($fila = $resultado->fetch_row()){
        if($banne[0]!= $bann[0]){
            $img1[0]= $fila[0];
            $bann[0] = $fila[0];
            
        }elseif($bane[0]!=$banne[0]){
            $img2[0]=$fila[0];
            $banne[0] = $fila[0];
            
        }elseif($fila[0]!=$bane[0]){
            $img3[0]=$fila[0];
            $bane[0] = $fila[0];
        }
        
        
        
    
        
         
    }
   
}

?>@keyframes banner {
				0%, 30%{
					background-image:url(<?php echo $img3[0];?>);
					opacity: 1;
				}
				31%, 34%{
					opacity: 0.1;
				}
				35%, 65%{
					background-image: url(<?php echo $img2[0];?>);
					opacity: 1;
				}
				66%, 69%{
					opacity: 0.1;
				}
				70%, 100%{
					background-image: url(<?php echo $img1[0];?>);
					opacity: 1;
				}
			}<?php
$conn->close();
?>