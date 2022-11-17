<?php
    //header('X-Frame-Options:SAMEORIGIN');
    if(isset($_SESSION['bloqueo'])){

        $d = time() - $_SESSION['bloqueo'];
        $_SESSION['tiempo'] = $d;
        if($d > 30){
            unset($_SESSION['intentos']);
            unset($_SESSION['bloqueo']);
            unset($mensaje_incorrecto);
        }
    }

    if(!isset($_SESSION)){
        session_start();
        //session_set_cookie_params(['secure' => true, 'httponly' => true]);
    }  
    /**
     * GENERAMOS UN TOKEN MD5 para evitar el CSRF
     * El token se pasa mediante post a ControladorInicioSesion.php
     */
    $token = md5(time());
    $_SESSION['csrf_token'] = $token;
    print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--LINK_CSS-->
    <link rel="stylesheet" href="../css/pagina_iniciarsesion.css">
    <!--FONTAWESOME_LINK-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--FUENTE PARA EL TITULO DE GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    
    <title>Comic Central</title>
    <link rel="icon" href="../img/comic.png" type="image/x-icon">
</head>
<body>
    <header>
        <h1>COMIC CENTRAL<br></h1>
		<h2>INICIA SESION</h2>
    </header>

    <form class="registro_total" action="ControladorInicioSesion.php" method="POST">
    <input name="csrf_token" value="<?php echo $token?>" type="hidden">
    <div id="mensaje_incorrecto"><?php if(isset($mensaje_incorrecto)){echo $mensaje_incorrecto;}?></div>

    <div class="contenedor">
        <!--email-->
        <div class="campo_inicio" id="campo_usuario">
            <label class="etiqueta">Usuario</label>
            <div class="campo_input"></div>
                <input type="text" class="input" name="usuario" placeholder="">
            </div>
            <p class="mensaje">Introduce el usuario.</p>
        </div>
        <!--password-->
        <div class="campos_inicio" id="campo_password">
            <label class="etiqueta">Contraseña</label>
            <div class="campo_input"></div>
                <input type="password" class="input" name="password" placeholder="">
            </div>
            <p class="mensaje">Introduce tu contraeña.</p>
        </div>
        <div class="campos_inicio" id="btn">
            <?php

                if(!isset($_SESSION['intentos'])){
                    //session_start();
                    $_SESSION["intentos"] = 0;
                }
                
                if($_SESSION['intentos'] > 5){
                    echo "Has superado el limite de inicio de sesiones.<br>Espera 30 segundos para volver a intentar iniciar sesion.<br>";
                    $_SESSION['bloqueo'] = time();
                }
                else{
                    
            ?>
            <button type="submit" class="campo_btn">INICIAR SESION</button>
            <?php }?>
            <a href="../index.php" type="submit" class="campo_btn">VOLVER</a>
        </div>
        
    </div>    
    </form>
</body>
</html>