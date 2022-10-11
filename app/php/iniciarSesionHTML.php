<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--LINK_CSS-->
    <link rel="stylesheet" href="../css/iniciarSesion.css">
    <!--FONTAWESOME_LINK-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>TITULO</title>
    <link rel="icon" href="../img/comic.png" type="image/x-icon">
</head>
<body>
    <header>
        <h1>SI TIENES CUENTA INICIA SESION</h1>
    </header>

    <form class="registro_total" action="ControladorInicioSesion.php" method="POST">
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
            <button type="submit" class="campo_btn">Iniciar Sesion</button>
        </div>
        <a href="../index.html">VOLVER</a>
    </div>    
    </form>
</body>
</html>