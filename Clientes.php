<!DOCTYPE html>
<html>
<head>
	<title>FLOR HERN</title>
	<link rel="stylesheet" type="text/css" href="Archivos CSS/EstilosFormularios.css">
</head>
<body>
	<div class="contenidoForm">
	  <div class="info">
	    <h4>REGISTRATE PARA PODER COMPRAR EN NUESTRA TIENDA</h4><span>Flor Hernan</span>
	  </div>
	</div>
	<div class="formulario">
  		<div class="thumbnail"><img src="Recursos/Iconos/Usuario.png"></div>
		<div class="form">
		  <form class="login-form" action="RegistrarClientes.php" method="post" >
		    <input type="text" placeholder="Username" name="iUsername" />
		    <input type="text" placeholder="Nombre" name="iNombre" />
		    <input type="text" placeholder="Apellidos" name="iApellidos" />
		    <input type="number" placeholder="Edad" name="iEdad"/>
		    <input type="email" placeholder="Correo" name="iCorreo"/>
		    <input type="password" placeholder="Crea una contraseña" name="iContraseña"/>
		    <input type="submit" name="Registrar" class="boton" value="Registrar">
		    <input type="submit" name="Nuevo" class="boton" value="Modificar">
		    <p class="message">Mas acciones <br><a href="Index.html">Regresar</a></p>
		  </form>
		</div>
	</div>
</body>
</html>