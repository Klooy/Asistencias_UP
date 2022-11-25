<?php 
    require_once('../admin/user/user.php');
    session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tu cuenta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div>
		<h1>BIENVENIDO A TU CUENTA </h1>
	</div>
	<p>
        Nombre: <?php echo $_SESSION['usuario']->getNombre() ?>
    </p>
    <p>
        Apellido: <?php echo $_SESSION['usuario']->getApellido() ?>
    </p>
    <p>
        Cedula: <?php echo $_SESSION['usuario']->getCedula() ?>
    </p>
    <p>
        Rol: <?php echo $_SESSION['usuario']->getRol() ?>
    </p>
    <p>
        Programa: <?php echo $_SESSION['usuario']->getPrograma() ?>
    </p>
	<form action="../admin/user/login.php" method="post">
		<input type="hidden" name="salir" value="salir">
		<button>Salir</button>
	</form>
</body>
</html>