<!DOCTYPE html>
<html>
<head>
	<title>FLOR HERN</title>
	<link rel="stylesheet" type="text/css" href="../Archivos CSS/EstilosFormularios.css">
	<script language="Javascript" type="text/javascript">
		function eliminar()
		{
			if (confirm('¿Anular la suscripcion?')){
				document.login-form.submit();
			}
		}
	</script>
</head>

<body>
	<div class="contenidoForm">
	  <div class="info">
	    <h4>DECEA HACER</h4><span>Flor Hernan</span>
	  </div>
	</div>
	<div class="formulario">
		<div class="form">
			<?php  
			include("Conexion.php");

			if (isset($_POST['Cambiar'])=='Modificar'){
				$username = utf8_decode($_POST['iUsername']);
			$nombre = utf8_decode($_POST['iNombre']);
			$apellidos = utf8_decode($_POST['iApellidos']);
			$edad = utf8_decode($_POST['iEdad']);
			$correo = utf8_decode($_POST['iCorreo']);
			$password = utf8_decode($_POST['iContraseña']);
				echo '<form class="login-form" action="Conexion.php" method="post">';
				echo '<input type="text" name="iUsername" placeholder="Username" value='.$username.'/>';
				echo '<input type="text" placeholder="Nombre" name="iNombre" value='.$nombre.'/>';
				echo '<input type="text" placeholder="Apellidos" name="iApellidos" value='.$apellidos.'/>';
				echo '<input type="number" placeholder="Edad" name="iEdad" value='.$edad.'/>';
				echo '<input type="email" placeholder="Correo" name="iCorreo" value='.$correo.'/>';
				echo '<input type="password" placeholder="Crea una contraseña" name="iContraseña" value='.$password.'/>';
				echo '<input type="button" name="Cambiar" class="boton" value="Cambiar" onclick="eliminar();"/>';
				echo '<input type="reset" name="Cancelar" class="boton" value="Cancelar"/>';
				echo '<p class="message">Mas acciones <br><a href="Index.html">Regresar</a></pc>';
				echo ' </form>';
			}
			else{

			$sqlEliminar= "DELETE FROM clientes WHERE Username='$username'";
			$eliminar=mysqli_query($conexion,$sqlEliminar);

			if(!$eliminar){
			echo "<script>
                alert('Ocurrio un error, no se pudo eliminar');
                </script>";
			die('Error: '.mysqli_error($conexion));
		    }else{
			echo "<script>
                alert('Cliente borrado');
                </script>";
		    } 
	        }

			?>
		   
		</div>
	</div>
</body>
</html>