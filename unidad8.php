<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>

	<section>

		<h2>Registro</h2>

		<form action="cargarusuario.php" method="post">

			<p>
				Email:<br>
				<input type="email" name="email" required>
			</p>

			<p>
				Contraseña:<br>
				<input type="password" name="contrasena" required>
			</p>

			<p>
				<input type="submit" value="Registrarse">
			</p>

		</form>


		<h2>Ingreso de Usuario</h2>

		<form action="verificarusuario.php" method="post">

			<p>
				Email:<br>
				<input type="email" name="email" required>
			</p>

			<p>
				Contraseña:<br>
				<input type="password" name="contrasena" required>
			</p>

			<p>
				<input type="submit" value="Ingresar">
			</p>

		</form>

	</section>

	<aside>
    
  </aside>

	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>