<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
	<div class="w3-container w3-black">
		<h1>BIENVENIDO A ASISTENCIAS UP</h1>
	</div>
</header>
		<div>
			<h1>Registrarse</h1>
		</div>
		<div>
			<form action="../admin/user/login.php" method="post">
				<p>
					<label>Nombre</label>
					<input type="text" name="nombre">
				</p>
                <p>
					<label>Apellido</label>
					<input type="text" name="apellido">
				</p>
                <p>
					<label>Cedula</label>
					<input type="text" name="cedula">
				</p>
                <p>
					<label>Rol</label>
					<input type="text" name="rol">
				</p>
                <p>
					<label>Programa</label>
					<input type="text" name="programa">
				</p>
				<p>
					<label>Clave</label>
					<input type="password" name="clave">
				</p>
				<p>
                    <input type="hidden" name="firma" value="">
					<input type="hidden" name="registrarse" value="registrarse">
					<button>Registrarse</button>
				</p>
				<p><a href="index.php">Ahora no</a></p>
			</form>
		</div>
<footer>
	<div>
		<h4>ASISTENCIAS UP 2022</h4>
	</div>
</footer>

</body>
</html>