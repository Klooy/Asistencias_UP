<?php
//incluye la clase User y CrudUser
require_once('crud_user.php');
require_once('user.php');
$crud=new CrudUser();
$user= new User();
//obtiene todos los usuarios con el método mostrar de la clase crud
$listaUser=$crud->mostrar();
?>

<html>
<head>
	<title>Mostrar Usuarios</title>
</head>
<body>
	<table border=1>
		<head>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Cedula</td>
            <td>Programa</td>
            <td>Rol</td>
            <td>Firma</td>
            <td>Clave</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaUser as $user) {?>
			<tr>
				<td><?php echo $user->getNombre() ?></td>
				<td><?php echo $user->getApellido() ?></td>
				<td><?php echo $user->getCedula()?> </td>
                <td><?php echo $user->getPrograma()?> </td>
                <td><?php echo $user->getRol()?> </td>
                <td><?php echo $user->getFirma()?> </td>
                <td><?php echo $user->getClave()?> </td>
				<td><a href="actualizar.php?id=<?php echo $user->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_user.php?id=<?php echo $user->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>
</html>