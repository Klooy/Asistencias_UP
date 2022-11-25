<?php 
	require_once('user.php');
	require_once('crud_user.php');
	require_once('../utils/conexion.php');

	//inicio de sesion
	session_start();

	$usuario=new User();
	$crud=new CrudUser();
	//verifica si la variable registrarse está definida
	//se da que está definicda cuando el usuario se loguea, ya que la envía en la petición
	if (isset($_POST['registrarse'])) {
		$usuario->setNombre($_POST['nombre']);
        $usuario->setApellido($_POST['apellido']);
        $usuario->setCedula($_POST['cedula']);
        $usuario->setPrograma($_POST['programa']);
        $usuario->setRol($_POST['rol']);
        $usuario->setFirma($_POST['firma']);
		$usuario->setClave($_POST['clave']);
		if ($crud->buscarUsuario($_POST['cedula'])) {
			$crud->insertar($usuario);
			header('Location: ../../user/index.php');
		}else{
			header('Location: ../utils/error.php?mensaje=El nombre de usuario ya existe');
		}		
		
	}elseif (isset($_POST['entrar'])) { //verifica si la variable entrar está definida
		$usuario=$crud->obtenerUsuarioLogin($_POST['cedula'],$_POST['clave']);
		// si el id del objeto retornado no es null, quiere decir que encontro un registro en la base
		if ($usuario->getId()!=NULL) {
			$_SESSION['usuario']=$usuario; //si el usuario se encuentra, crea la sesión de usuario
            header('Location: ../../user/cuenta.php'); //envia a la página que simula la cuenta
		}else{
			header('Location: ../utils/error.php?mensaje=Tus nombre de usuario o clave son incorrectos'); // cuando los datos son incorrectos envia a la página de error
		}
	}elseif(isset($_POST['salir'])){ // cuando presiona el botòn salir
		header('Location: ../../user/index.php');
		unset($_SESSION['usuario']); //destruye la sesión
	}
?>