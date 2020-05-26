<!DOCTYPE html>
<html>
<head>
	<title>FLOR HERN</title>
	<link rel="stylesheet" type="text/css" href="../Archivos CSS/EstilosFormularios.css">
</head>
<body>
	<div class="contenidoForm">
	  <div class="info">
	    <h4>CONSULTAS</h4><span>Flor Hernan</span>
	  </div>
	</div>
	<div class="formulario">
		<div class="form">
		  <form class="login-form" action="MostrarModificar.php" method="post" >
		    <select name="iUsername" placeholder="Username">
		    	<?php
		    	include("Conexion.php");
		    	$username = utf8_decode($_POST['iUsername']);
		    	if (isset($_POST["iUsername"])){
		    	$sqlClientes="SELECT*FROM clientes";
				$tablaClientes = mysqli_query($sqlClientes);
				$numFclientes = mysqli_num_rows($tablaClientes);
				for ($i=0; $i<$numFclientes; $i++) { 
					$filaCliente = mysqli_fetch_array($tablaClientes);
					if ($filaCliente['Username']==$username) {
						echo '<option selected="selected">'.$filaCliente['Username'].'</option>';
					}
					else{
						echo '<option>'.$filaCliente['Username'].'</option>';

					}
				}
		    	}
		    	 ?>
		    </select>
		    <input type="submit" name="Consultar" class="boton" value="Consultar">
		    <p class="message">Mas acciones <br><a href="Index.html">Regresar</a></p>
		  </form>
		</div>
	</div>
</body>
</html>