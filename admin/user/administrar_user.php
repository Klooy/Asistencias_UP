<?php
//incluye la clase User y CrudUser
require_once('crud_user.php');
require_once('user.php');

$crud= new CrudUser();
$user= new User();

	// si el elemento insertar no viene nulo llama al crud e inserta un usuario
	if (isset($_POST['insertar'])) {
		$user->setNombre($_POST['nombre']);
		$user->setApellido($_POST['apellido']);
		$user->setCedula($_POST['cedula']);
        $user->setPrograma($_POST['programa']);
        $user->setRol($_POST['rol']);
        $user->setFirma($_POST['firma']);
        $user->setClave($_POST['clave']);
		//llama a la función insertar definida en el crud
		$crud->insertar($user);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el usuario
	}elseif(isset($_POST['actualizar'])){
        $user->setId($_POST['id']);
		$user->setNombre($_POST['nombre']);
		$user->setApellido($_POST['apellido']);
		$user->setCedula($_POST['cedula']);
        $user->setPrograma($_POST['programa']);
        $user->setRol($_POST['rol']);
        $user->setFirma($_POST['firma']);
        $user->setClave($_POST['clave']);
		$crud->actualizar($user);
        header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un usuario
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>