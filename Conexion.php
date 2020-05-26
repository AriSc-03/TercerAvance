 <?php

    $servidor="localhost";
    $BD="bdflorhernan";
 	$usuario="root";
 	$contraseña="";
 	$conexion= new mysqli($servidor,$usuario,$contraseña,$BD);

 	if($conexion -> connect_errno){
 		echo "ERROR EN LA CONEXION DEL SERVIDOR";
 	}
 ?>