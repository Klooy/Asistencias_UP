<?php
	class User{
		private $id;
		private $nombre;
		private $apellido;
		private $cedula;
        private $programa;
        private $rol;
        private $firma;
        private $clave;

		function __construct(){}

		public function getNombre(){
		return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getApellido(){
			return $this->apellido;
		}

		public function setApellido($apellido){
			$this->apellido = $apellido;
		}

		public function getCedula(){
		return $this->cedula;
		}

		public function setCedula($cedula){
			$this->cedula = $cedula;
		}
		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

        public function getPrograma(){
            return $this->programa;
        }
    
        public function setPrograma($programa){
            $this->programa = $programa;
        }

        public function getRol(){
            return $this->rol;
        }
    
        public function setRol($rol){
            $this->rol = $rol;
        }

        public function getFirma(){
            return $this->firma;
        }
    
        public function setFirma($firma){
            $this->firma = $firma;
        }

        public function getClave(){
            return $this->clave;
        }
    
        public function setClave($clave){
            $this->clave = $clave;
        }
	}
?>