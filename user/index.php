<?php 
	session_start();
	unset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
	<div>
		<h1>BIENVENIDO A ASISTENCIAS UP</h1>
	</div>
</header>

	
	<div>
		<h2>Login</h2>
	</div>

	<form action="../admin/user/login.php" method="post">
		<p>
			<label>
				Cedula
			</label>
			<input type="text" name="cedula">
		</p>
		<p>
			<label>Clave</label>
			<input type="password" name="clave">
		</p>
		<p>
			<input type="hidden" name="entrar" value="entrar">
			<button>Aceptar</button>
		</p>
		<p>Si aún no tienes cuenta ve al siguiente link <a href="registrarse.php">Registrarse</a></p>
	</form>
<footer>
	<div>
		<h4>ASISTENCIAS UP 2022</h4>
	</div>
</footer>
</body>
</html>