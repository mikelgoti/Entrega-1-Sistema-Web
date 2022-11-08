<?php
    session_start();
    
    class Token{
        
        private $token;

        /**
         * CONSTRUCTOR DE LA CLASE TOKEN
         */
        public function __construct($token)
        {   
            Token::setToken($token);
        }

        function setToken($token){
            $this-> token = $token;
        }
        function getToken(){
            return $this-> token;
        }

        function validar(){
            /*echo "<br>Token asignado a la sesion actual-> ".$_SESSION['token'];
            echo "<br>Token original sin asignar a la sesion actual->".$this->token."<br>";*/
            if(isset($_SESSION['token']) && $_SESSION['token'] == $this->token){
                return true;
            }
            else{
                return false;
            }
            
        }
        
    }
?>