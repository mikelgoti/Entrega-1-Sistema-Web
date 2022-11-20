<?php
    /*if(!isset($_SESSION)){
        session_start();
    }*/
    session_start();
    header('X-Frame-Options:SAMEORIGIN');
    include_once("usuario.php");
    include_once("ControlSesion.php");   

    $t = $_POST['csrf_token'];
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

        include_once("con_db.php");
        $obj = new Database();
        $con = $obj->conectar();
        
        /**
         * Usamos la funcion mysql_real_scape_string para poder evitar los caracteres y los simbolos
         * */
        $u = mysqli_real_escape_string($con,$_POST['usuario']);
        $p = mysqli_real_escape_string($con,$_POST['password']);
        
        if($usuario-> validarLogin($u,$p) && validarToken($t)){
            $usuarioSesion-> setUsuarioActual($u);//PARA ASIGNAR EL USUARIO A LA SESION ACTUAL HASTA QUE CERREMOS SESION
            $usuario-> setInfo($u);//ESTE METODO SE UTILIZA PARA ACCEDER A LA DB Y ASIGNAR EN LA CLASE USUARIO() EL USUARIO Y EL NOMBRE SEGUN EL USUARIO QUE SE INTRODUZCA
            
            echo "CSRF token valido";
            include_once("pagina_principal.php");//SI SE VERIFICAN EL USUARIO Y LA CONTRASEÑA Y SI EL TOKEN COINCIDE CON EL DE LA SESION REDIRIGE A LA PAGINA_PRINCIPAL DFE LA WEB
            //header("location:pagina_principal.php");
        }
        else{

            $_SESSION["intentos"] += 1;
                
            if(!validarToken($t)){
                echo "Posible amenaza CSRF.";
            }
            
            $mensaje_incorrecto = "El usuario o la contraseña son incorrectos. Te quedan ". 6 - $_SESSION['intentos']." intentos.";
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

    function validarToken($t){
        return isset($_SESSION['csrf_token']) && $_SESSION['csrf_token'] == $t;
    }
?>