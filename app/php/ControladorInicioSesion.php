<?php 

include_once("usuario.php");
include_once("ControlSesion.php");
include_once("actualizarTabla.php");

$usuarioSesion = new ControlSesion();
$usuario = new Usuario();

if(isset($_SESSION['usuario'])){
    /**
     * PROBLEMA POR RESOLVER
     * NO FUNCIONA BIEN A LA HORA DE SABER SI HAY O NO SESION
     */
    $usuario->setInfo($usuarioSesion->getUsuarioActual());
    include_once("pagina_principal.php");
}
else if(isset($_POST['usuario']) && isset($_POST['password'])){
    
    $u = $_POST['usuario'];
    $p = $_POST['password'];

    if($usuario-> validarLogin($u,$p)){
        $usuarioSesion-> setUsuarioActual($u);//PARA ASIGNAR EL USUARIO A LA SESION ACTUAL HASTA QUE CERREMOS SESION
        $usuario-> setInfo($u);//ESTE METODO SE UTILIZA PARA ACCEDER A LA DB Y ASIGNAR EN LA CLASE USUARIO() EL USUARIO Y EL NOMBRE SEGUN EL USUARIO QUE SE INTRODUZCA
        include_once("pagina_principal.php");
    }
    else{
        /**
         * AQUI SE PODRIA AGREGAR UN CONTADOR PARA PONER UN LIMITE A LA HORA DE ACCEDER A LA PAGINA
         * PONGAMOS 10 veces SI SE SUPERAN LLAMAMOS AL FBI
         */
        $mensaje_incorrecto = "El usuario o la contraseña son incorrectos.";
        include_once("pagina_iniciarsesion.php");
    }
}
/**
 * El ultimo else quiere decir que no se esta intentando iniciar sesion y que tampoco hay una sesion iniciada.
 * Por tanto, queremos que automaticamente vaya a la pagina de iniciarSesionHTML que es donde se inicia sesion.
 */
else{
    include_once("iniciarSesionHTML.php");
}
?>