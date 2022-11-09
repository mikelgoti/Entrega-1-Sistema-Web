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

        //FUNCION PARA VER SI LOS DATOS AL INICIAR SESION CORRESPONDEN CON LA BASE DE
        public function validarLogin($user,$password){
            
            //CONVERTIR LA PASS INTRODUCIDA A UN HASH PARA COMPARARLA CON EL HASH PREVIAMENTE GENERADO EN LA DB
            
            $obj = new Database();
            $con = $obj->conectar();

            $sqlU = "SELECT usuario FROM `iniciados` WHERE usuario=?;";
            $stmtU = mysqli_stmt_init($con);

            /**
             * PREPARE STATEMENT DEL USUARIO
             */
            if(!mysqli_stmt_prepare($stmtU,$sqlU)){
                echo "SQL prepare statement ha fallado.";
                return false; 
            }
            else{
                mysqli_stmt_bind_param($stmtU,"s",$user);//Bindeamos los parametros
                mysqli_stmt_execute($stmtU);//Ejecutamos la prepare estatement
                $qU = mysqli_stmt_get_result($stmtU);//guardamos el resultado
            }

            /**
             * PREPARE STATEMENT DE LA pass
             */
            $sqlP = "SELECT password FROM `iniciados` WHERE usuario=?;";
            $stmtP = mysqli_stmt_init($con);

            mysqli_stmt_prepare($stmtP,$sqlP);
            
            mysqli_stmt_bind_param($stmtP,"s",$user);//Bindeamos los parametros
            mysqli_stmt_execute($stmtP);//Ejecutamos la prepare estatement
            $qP = mysqli_stmt_get_result($stmtP);//guardamos el resultado
            
            /**
             * 1. Si el usuario introducido y la contraseña existen y solamente hay una en la base de datos se procede sino devuelve fasle.
             * 2. Se guarda el usuario y la contraseña hasheada mediante los whiles en las variables $u y $pHASH.
             * 3. Se checkea que la contraseña sea veridica mediante la funcion password_verify. Esto es posible porque a sido almacenada en la base de datos ussando un hash + sal.
             * 4. Si el usuario de la base de datos coincide con el que se a introducido y la contraseña se verifica correctamente se devuelve true.
             * 
             */
            //1
            if(mysqli_num_rows($qU) == 1 && mysqli_num_rows($qP) == 1){
            //2    
                while($ite = mysqli_fetch_array($qU)){
                    $u = $ite['usuario'];
                }
                while($ite = mysqli_fetch_array($qP)){
                    $pHASH = $ite['password'];
                }
            //3
                $v = password_verify($password,$pHASH);
            //4
                return $user == $u && $v ? true : false;
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