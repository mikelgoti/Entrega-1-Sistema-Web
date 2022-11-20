<?php 

    header("Content-Security-Policy: default-src 'self'");

    header('X-Frame-Options:SAMEORIGIN');
    include_once("php/ControlSesion.php");

    session_start();

    $sid = session_id();
    setcookie('PHPSESSID', $sid, ['samesite' => 'Strict', 'secure' => true, 'httponly' => true]);
    
    $us = new ControlSesion();
    $us-> killSesion();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charst="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--LINK_CSS-->
    <link rel="stylesheet" href="css/index.css">
    <!--FONTAWESOME_LINK-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!--FUENTE PARA EL TITULO DE GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    
    <title>Comic Central</title>
    <link rel="icon" href="img/comic.png" type="image/x-icon">
</head>
<body>
    <!--HEADER-->
    <header>
        <h1 id="bottom">BIENVENIDO A COMIC CENTRAL!</h1>
    </header>
    
    <!--LOGIN_OR_SINGUP-->
    <div class="contenedor">
        <div class="center">
            <nav class="links">
                <a href="php/pagina_iniciarsesion.php" id="link_iniciar_sesion">INICIAR SESION<i class="fa-solid fa-comment-check"></i></a>
                <a href="php/pagina_registrarse.php" id="link_registrarse">REGISTRARSE</a><br>
            </nav>
        </div>
    </div>
</body>
</html>