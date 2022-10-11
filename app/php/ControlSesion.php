<?php 

class ControlSesion{
    
    //CONSTRUCTOR QUE EMPIEZA LA SESION AL CREARSE EL OBJ
    public function __construct()
    {
        session_start();
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