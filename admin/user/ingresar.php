<html>
<head>
	<title> Ingresar Libro</title>
</head>
<header>
Ingrese los datos del usuario
</header>
<form action='administrar_user.php' method='post'>
	<table>
		<tr>
			<td>Nombre:</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
			<td>Apellido:</td>
			<td><input type='text' name='apellido' ></td>
		</tr>
		<tr>
			<td>Cedula:</td>
			<td><input type='text' name='cedula' ></td>
		</tr>
        <tr>
			<td>Rol:</td>
			<td><input type='text' name='rol' ></td>
		</tr>
        <tr>
			<td>Programa:</td>
			<td><input type='text' name='programa' ></td>
		</tr>
        <tr>
			<td>Contraseña:</td>
			<td><input type='password' name='clave' ></td>
		</tr>
        <input type='hidden' name='firma' value=''>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>

</html>