<?php 

class ControlSesion{
    
    //CONSTRUCTOR QUE EMPIEZA LA SESION AL CREARSE EL OBJ
    public function __construct()
    {
        session_start();

        //$_SESSION['token'] = $token = md5(time()); 
    }

    /**
    * TOKEN CSRF 
    */
    //setter
    public function setTokenCSRF($token){
        $_SESSION['token'] = $token;
    }

    //getter
    public static function getToken(){
        return $_SESSION['token'];
    }

    //METODO PARA ASIGNAR AL USUARIO ACTUAL
    public function setUsuarioActual($usuario){
        $_SESSION['user'] = $usuario;
    }
    //GETTER
    public function getUsuarioActual(){
        return $_SESSION['user'];
    }
    //PARA HACER LOG OUT
    public function killSesion(){
        session_unset();
        session_destroy();
    }

}
?>