<?php
//incluye la clase User y CrudUser
	require_once('crud_user.php');
	require_once('user.php');
	$crud= new CrudUser();
	$user=new User();
	//busca el usuario utilizando el id, que es enviado por GET desde la vista mostrar.php
	$user=$crud->obtenerUser($_GET['id']);
?>
<html>
<head>
	<title>Actualizar Usuario</title>
</head>
<body>
	<form action='administrar_user.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $user->getId()?>'>
			<td>Nombre:</td>
			<td> <input type='text' name='nombre' value='<?php echo $user->getNombre()?>'></td>
		</tr>
		<tr>
			<td>Apellido:</td>
			<td><input type='text' name='apellido' value='<?php echo $user->getApellido()?>' ></td>
		</tr>
		<tr>
			<td>Cedula:</td>
			<td><input type='text' name='cedula' value='<?php echo $user->getCedula() ?>'></td>
		</tr>
        <tr>
			<td>Programa:</td>
			<td><input type='text' name='programa' value='<?php echo $user->getPrograma() ?>'></td>
		</tr>
        <tr>
			<td>Rol:</td>
			<td><input type='text' name='rol' value='<?php echo $user->getRol() ?>'></td>
		</tr>
        <tr>
			<td>Firma:</td>
			<td><input type='text' name='firma' value='<?php echo $user->getFirma() ?>'></td>
		</tr>
        <tr>
			<td>Clave:</td>
			<td><input type='text' name='clave' value='<?php echo $user->getClave() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>