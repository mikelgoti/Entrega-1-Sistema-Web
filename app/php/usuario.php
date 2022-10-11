<?php 
    /**CLASE USUARIO */
    include("con_db.php");

    class Usuario extends Database{
        
        private $usuario;
        private $email;
        private $nombre;
        private $apellido;
        private $apellido1;
        private $telefono;
        private $fecha;
        private $dni;
        private $password;

        //GETTERS
        public function getUsuario(){
            return $this-> usuario;
        }

        public function setUsuario($usuario){
            $this-> usuario = $usuario;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this-> email = $email;
        }

        public function getNombre(){
            return $this-> nombre;
        }

        public function getApellido(){
            return $this-> apellido;
        }

        public function getApellido1(){
            return $this-> apellido1;
        }

        public function getTelefono(){
            return $this-> telefono;
        }

        public function getFecha(){
            return $this-> fecha;
        }
        
        public function getDni(){
            return $this-> dni;
        }

        public function getPassword(){
            return $this->password;
        }

        public function swap($col,$u){

            $obj = new Database();
            $con = $obj -> conectar();

            $query = mysqli_query($con,"UPDATE iniciados SET $col = REPLACE($col,'$this-> usuario','$u')");
        }

        //SETTERS

        //FUNCION PARA VER SI LOS DATOS AL INICIAR SESION CORRESPONDEN CON LA BASE DE
        public function validarLogin($user,$password){
            //CONVERTIR LA PASS INTRODUCIDA A UN HASH PARA COMPARARLA CON EL HASH PREVIAMENTE GENERADO EN LA DB
            
            $obj = new Database();
            $con = $obj->conectar();

            $query = mysqli_query($con,"SELECT * FROM iniciados WHERE usuario='$user' AND password='$password';");
            if(mysqli_num_rows($query) == 1){
                return true;
            }
            else{
                return false;
            }
        }

        public function setInfo($user){
            
            $obj = new Database();
            $con = $obj->conectar();

            $query = mysqli_query($con,"SELECT * FROM iniciados WHERE usuario='$user';");

            foreach($query as $ite){
                $this-> usuario = $ite['usuario'];
                $this-> email = $ite['email'];
                $this-> nombre = $ite['nombre'];
                $this-> apellido = $ite['apellido'];
                $this-> apellido1 = $ite['apellido1'];
                $this-> telefono = $ite['telefono'];
                $this-> fecha = $ite['fecha'];
                $this-> dni = $ite['dni'];
                $this-> password = $ite['password'];
            }
        }
    }

?>