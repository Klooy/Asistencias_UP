<?php
// incluye la clase Db
require_once('../utils/conexion.php');

	class CrudUser{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo usuario
		public function insertar($user){
			$db=Db::conectar();

			$insert=$db->prepare('INSERT INTO usuarios values(NULL,:nombre,:apellido,:cedula,:programa,:rol,:firma,:clave)');
			$insert->bindValue('nombre',$user->getNombre());
			$insert->bindValue('apellido',$user->getApellido());
			$insert->bindValue('cedula',$user->getCedula());
            $insert->bindValue('programa',$user->getPrograma());
            $insert->bindValue('rol',$user->getRol());
            $insert->bindValue('firma',$user->getFirma());
			$pass=password_hash($user->getClave(),PASSWORD_DEFAULT);
            $insert->bindValue('clave',$pass);
			$insert->execute();

		}

		// método para mostrar todos los usuarios
		public function mostrar(){
			$db=Db::conectar();
			$listaLibros=[];
			$select=$db->query('SELECT * FROM usuarios');

			foreach($select->fetchAll() as $user){
				$myUser= new User();
				$myUser->setId($user['id']);
				$myUser->setNombre($user['nombre']);
				$myUser->setApellido($user['apellido']);
				$myUser->setCedula($user['cedula']);
                $myUser->setPrograma($user['programa']);
                $myUser->setRol($user['rol']);
                $myUser->setFirma($user['firma']);
                $myUser->setClave($user['clave']);
				$listaUsers[]=$myUser;
			}
			return $listaUsers;
		}

		// método para eliminar un usuario, recibe como parámetro el id del usuario
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM usuarios WHERE id=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un usuario, recibe como parámetro el id del usuario
		public function obtenerUser($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM usuarios WHERE id=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$user=$select->fetch();
			$myUser= new User();
            $myUser->setId($user['id']);
            $myUser->setNombre($user['nombre']);
            $myUser->setApellido($user['apellido']);
            $myUser->setCedula($user['cedula']);
            $myUser->setPrograma($user['programa']);
            $myUser->setRol($user['rol']);
            $myUser->setFirma($user['firma']);
            $myUser->setClave($user['clave']);
			return $myUser;
		}

		//obtiene el usuario para el login
		public function obtenerUsuarioLogin($cedula, $clave){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM usuarios WHERE cedula=:cedula');//AND clave=:clave
			$select->bindValue('cedula',$cedula);
			$select->execute();
			$registro=$select->fetch();
			$usuario=new User();
			//verifica si la clave es conrrecta
			if (password_verify($clave, $registro['clave'])) {			
				//si es correcta, asigna los valores que trae desde la base de datos
				$usuario->setId($registro['id']);
            	$usuario->setNombre($registro['nombre']);
            	$usuario->setApellido($registro['apellido']);
            	$usuario->setCedula($registro['cedula']);
            	$usuario->setPrograma($registro['programa']);
            	$usuario->setRol($registro['rol']);
            	$usuario->setFirma($registro['firma']);
            	$usuario->setClave($registro['clave']);
			}			
			return $usuario;
		}

		//busca el nombre del usuario si existe
		public function buscarUsuario($cedula){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM usuarios WHERE cedula=:cedula');
			$select->bindValue('cedula',$cedula);
			$select->execute();
			$registro=$select->fetch();
			if($registro['id']!=NULL){
				$usado=False;
			}else{
				$usado=True;
			}	
			return $usado;
		}

		// método para actualizar un usuario, recibe como parámetro el usuario
		public function actualizar($user){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE usuarios SET nombre=:nombre, apellido=:apellido, cedula=:cedula, programa=:programa, rol=:rol, firma=:firma, clave=:clave WHERE id=:id');
			$actualizar->bindValue('id',$user->getId());
			$actualizar->bindValue('nombre',$user->getNombre());
			$actualizar->bindValue('apellido',$user->getApellido());
			$actualizar->bindValue('cedula',$user->getCedula());
            $actualizar->bindValue('programa',$user->getPrograma());
            $actualizar->bindValue('rol',$user->getRol());
            $actualizar->bindValue('firma',$user->getFirma());
            $actualizar->bindValue('clave',$user->getClave());
            echo $user->getId();
            echo $user->getNombre();
            echo $user->getApellido();
			$actualizar->execute();
		}
	}
?>