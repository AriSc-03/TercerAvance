<?php
include ("Conexion.php");
if(isset($_POST["Eliminar"])){

		    $username = utf8_decode($_POST['iUsername']);
			$sqlEliminar= "DELETE FROM clientes WHERE Username='$username'";

			$eliminar=mysqli_query($conexion,$sqlEliminar);

			if(!$eliminar){
			echo "<script>
                alert('Ocurrio un error, no se pudo eliminar');
                </script>";
			die('Error: '.mysqli_error($conexion));
		    }else{
                header("location: Index.html");
                echo "<script>
                alert('Cliente borrado');
                </script>";
		    }
	}
	
 ?>