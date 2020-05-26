<?php 
	include ("Conexion.php");

	if(isset($_POST["Registrar"])){
		$username = utf8_decode($_POST['iUsername']);
		$nombre = utf8_decode($_POST['iNombre']);
		$apellidos = utf8_decode($_POST['iApellidos']);
		$edad = utf8_decode($_POST['iEdad']);
		$correo = utf8_decode($_POST['iCorreo']);
		$password = utf8_decode($_POST['iContraseña']);
		$agregar = 'INSERT INTO `bdflorhernan`.`clientes` (`Username`, `Nombre`, `Apellidos`, `Edad`, `Correo`, `Contraseña`) VALUES ("'. $username .'", "'.$nombre.'","'.$apellidos.'", "'.$edad.'","'.$correo.'","'.$password.'")';

		$retry_value = mysqli_query($conexion, $agregar);
		if(!$retry_value){
			echo "<script>
                alert('Error, Posible username en uso.');
                </script>";
			die('Error: '.mysqli_error($conexion));
		}else{
			echo "<script>
                alert('Registrado');
                window.location= 'Index.html'
                </script>";
		}
	}
	else{
		include ("Conexion.php");

		    $username = utf8_decode($_POST['iUsername']);
			$nombre = utf8_decode($_POST['iNombre']);
			$apellidos = utf8_decode($_POST['iApellidos']);
			$edad = utf8_decode($_POST['iEdad']);
			$correo = utf8_decode($_POST['iCorreo']);
			$password = utf8_decode($_POST['iContraseña']);

			$sqlModfClientes= "UPDATE clientes SET Nombre='$nombre', Apellidos='$apellidos', Edad='$edad', Correo='$correo', Contraseña='$password' WHERE Username='$username'";

			$modificar=mysqli_query($conexion,$sqlModfClientes);

			if(!$modificar){
			echo "<script>
                alert('Ocurrio un error, no se guardo el registro');
                </script>";
			die('Error: '.mysqli_error($conexion));
		    }else{
			echo "<script>
                alert('Cliente modificado');
                </script>";
                header("location: Index.html");
		    }
	    }
?>