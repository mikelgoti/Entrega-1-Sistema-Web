<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS_LINK-->
    <link rel="stylesheet" href="../css/pagina_principal.css">
    <link rel="stylesheet" href="../css/pagina_principal.css">
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
    <header id="inicio">
        <div class="titulo">
            <h1 id="TITULO_COMIC_CENTRAL">COMIC CENTRAL</h1>
            <a href="../index.php"><h4 id="cerrar_sesion"><i class="fa-solid fa-power-off"></i> Cerrar sesion</h4></a>
        </div>
        
                                            <!--<i class="fa-solid fa-bars"></i>-->
        <span class="menuSpan" id="btnMenu"><i class="fa-solid fa-bars"></i></i> MENU</span>
        <nav class="menu_nav">
            <ul class="menu" id="menu">
                <li class="menu_a"><a href="#" class="menu_link">CONTACTO</a></li>
                <li class="menu_a"><a href="#dc" class="menu_link">DC</a></li>
                <li class="menu_a"><a href="#" class="menu_link">MARVEL</a></li>
                <li class="menu_a"><a href="#" class="menu_link">MANGAS</a></li>
                <li class="menu_a"><a href="#" class="menu_link"></i>LIBROS</a></li>
                <li class="menu_a"><a href="lista_comunitaria.php" target="_blank" class="menu_link"></i><i class="fa-regular fa-rectangle-list"></i>  LISTA COMUNITARIA <i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
                <div id="segundomenu">
                    <li class="menu_a contenedor-perfil">
                        <a href="#" class="menu_link perfil-btn"><i class="fa-solid fa-circle-user"></i>  <?php echo $usuario-> getUsuario()?>  <i class="fa-solid fa-arrow-turn-down"></i></a>
                        <ul class="perfil">
                            <!--USUARIO-->
                            <li class="menu__a">Usuario<a href="#" id="aqui" onclick="actualizar('div_usuario','input_usuario')"><i class="fa-solid fa-rotate"></i></a>
                            <div class="php_info" id="div_usuario" style="display: block;">
                                <br>    
                                    <?php echo $usuario-> getUsuario()?>
                                </div>
                                <form action="actualizarTabla.php" method="POST">
                                    <div class="input_cambio" id="input_usuario" style="display: none;">
                                        <input type="text" class="input" name="usuarioAntiguo" placeholder="usuario antiguo">
                                        <br>
                                        <div id="grupo__usuario">
                                        <input type="text" class="campo_input" name="usuario" id="perfil_nuevo_input" placeholder="usuario nuevo">
                                        </div>
                                        <input class="input_cambio_btn" id="perfil_cambio_btn" type="submit" value="Cambiar" name="btn_u">
                                    </div>
                                </form>  
                            </li>
                            <!--NOMBRE-->
                            <li class="menu__a">Nombre<a href="#" onclick="actualizar('div_nombre','input_nombre')"><i class="fa-solid fa-rotate"></i></a>
                            <div class="php_info" id="div_nombre" style="display: block;">
                                <br>    
                                <?php echo $usuario-> getNombre()?>
                                </div>
                                <form action="actualizarTabla.php" method="POST">
                                    <div class="input_cambio" id="input_nombre" style="display: none;">
                                        <input type="text" class="input" name="nombreAntiguo" placeholder="nombre antiguo">
                                        <br>
                                        <div id="grupo__nombre">
                                        <input type="text" class="campo_input" name="nombre" id="perfil_nuevo_input" placeholder="nombre nuevo">
                                        </div>
                                        <input class="input_cambio_btn" id="perfil_cambio_btn" type="submit" value="Cambiar" name="btn_n">
                                    </div>
                                </form> 
                            </li>
                            <!--APLLEIDO-->
                            <li class="menu__a">Apellido<a href="#" onclick="actualizar('div_apellido','input_apellido')"><i class="fa-solid fa-rotate"></i></a>
                            <div class="php_info" id="div_apellido" style="display: block;">
                                <br>    
                                <?php echo $usuario-> getApellido()?>
                                </div>
                                <form action="actualizarTabla.php" method="POST">
                                    <div class="input_cambio" id="input_apellido" style="display: none;">
                                        <input type="text" class="input" name="apellidoAntiguo" placeholder="apellido antiguo">
                                        <br>
                                        <div id="grupo__apellido">
                                        <input type="text" class="campo_input" name="apellido" id="perfil_nuevo_input" placeholder="apellido nuevo">
                                        </div>
                                        <input class="input_cambio_btn" id="perfil_cambio_btn" type="submit" value="Cambiar" name="btn_a">
                                    </div>
                                </form> 
                            </li>
                            
                            <!--APELLIDO1-->
                            <li class="menu__a">Segundo Apellido<a href="#" onclick="actualizar('div_apellido1','input_apellido1')"><i class="fa-solid fa-rotate"></i></a>
                            <div class="php_info" id="div_apellido1" style="display: block;">
                                <br>    
                                <?php echo $usuario-> getApellido1()?>
                                </div>
                                <form action="actualizarTabla.php" method="POST">
                                    <div class="input_cambio" id="input_apellido1" style="display: none;">
                                        <input type="text" class="input" name="apellido1Antiguo" placeholder="segundo apellido antiguo">
                                        <br>
                                        <div id="grupo__apellido1">
                                        <input type="text" class="campo_input" name="apellido1" id="perfil_nuevo_input" placeholder="segundo apellido nuevo">
                                        </div>
                                        <input class="input_cambio_btn" id="perfil_cambio_btn" type="submit" value="Cambiar" name="btn_a1">
                                    </div>
                                </form> 
                            </li>
                            
                            <li class="menu__a"><a id="mas_info" onclick="masInfo()"><i class="fa-solid fa-circle-info"> </i>Mas informacion</a></li>
                            <div id="desplegableMasInfo" style="display: none;">
                                <!--EMAIL-->
                                <li class="menu__a">Email<a href="#" onclick="actualizar('div_email','input_email')"><i class="fa-solid fa-rotate"></i></a>
                                <div class="php_info" id="div_email" style="display: block;">
                                    <br>    
                                    <?php echo $usuario-> getEmail()?>
                                    </div>
                                    <form action="actualizarTabla.php" method="POST">
                                        <div class="input_cambio" id="input_email" style="display: none;">
                                            <input type="text" class="input" name="emailAntiguo" placeholder="email antiguo">
                                            <br>
                                            <div id="grupo__email">
                                            <input type="text" class="campo_input" name="email" id="perfil_nuevo_input" placeholder="nuevo email">
                                            </div>
                                            <input class="input_cambio_btn" id="perfil_cambio_btn" type="submit" value="Cambiar" name="btn_e">
                                        </div>
                                    </form> 
                                </li>
                                
                                <!--DNI-->
                                <li class="menu__a">DNI<a href="#" onclick="actualizar('div_dni','input_dni')"><i class="fa-solid fa-rotate"></i></a>
                                    <div class="php_info" id="div_dni" style="display: block;">
                                    <br>    
                                    <?php echo $usuario-> getDni()?>
                                    </div>
                                    <form action="actualizarTabla.php" method="POST">
                                        <div class="input_cambio" id="input_dni" style="display: none;">
                                            <input type="text" class="input" name="dniAntiguo" placeholder="dni antiguo">
                                            <br>
                                            <div id="grupo__dni">
                                            <input type="text" class="campo_input" name="dni" id="perfil_nuevo_input" placeholder="nuevo dni">
                                            </div>
                                            <input class="input_cambio_btn" id="perfil_cambio_btn" type="submit" value="Cambiar" name="btn_d">
                                        </div>
                                    </form> 
                                </li>
                                
                                <!--FECHA-->
                                <li class="menu__a">Fecha<a href="#" onclick="actualizar('div_fecha','input_fecha')"><i class="fa-solid fa-rotate"></i></a>
                                <div class="php_info" id="div_fecha" style="display: block;">
                                    <br>    
                                    <?php echo $usuario-> getFecha()?>
                                    </div>
                                    <form action="actualizarTabla.php" method="POST">
                                        <div class="input_cambio" id="input_fecha" style="display: none;">
                                            <input type="text" class="input" name="fechaAntiguo" placeholder="fecha antigua">
                                            <br>
                                            <div id="grupo__fecha">
                                            <input type="text" class="campo_input" name="fecha" id="perfil_nuevo_input" placeholder="nueva fecha">
                                            </div>
                                            <input class="input_cambio_btn" id="perfil_cambio_btn" type="submit" value="Cambiar" name="btn_f">
                                        </div>
                                    </form>
                                </li>
                                
                                <!--TELEFONO-->
                                <li class="menu__a">Teléfono<a href="#" onclick="actualizar('div_telefono','input_telefono')"><i class="fa-solid fa-rotate"></i></a>
                                <div class="php_info" id="div_telefono" style="display: block;">
                                    <br>    
                                    <?php echo $usuario-> getTelefono()?>
                                    </div>
                                    <form action="actualizarTabla.php" method="POST">
                                        <div class="input_cambio" id="input_telefono" style="display: none;">
                                            <input type="text" class="input" name="telefonoAntiguo" placeholder="telefono antiguo">
                                            <br>
                                            <div id="grupo__telefono">
                                            <input type="text" class="campo_input" name="telefono" id="perfil_nuevo_input" placeholder="telefono nuevo">
                                            </div>
                                            <input class="input_cambio_btn" id="perfil_cambio_btn" type="submit" value="Cambiar" name="btn_t">
                                        </div>
                                    </form>
                                </li>
                                
                                <!--CONTRASEÑA-->
                                <li class="menu__a">Contraseña<a href="#" onclick="actualizar('div_password','input_password')"><i class="fa-solid fa-rotate"></i></a>
                                <div class="php_info" id="div_password" style="display: block;">
                                    <br>    
                                    <?php echo "*********"?>
                                    </div>
                                    <form action="actualizarTabla.php" method="POST">
                                        <div class="input_cambio" id="input_password" style="display: none;">
                                            <input type="text" class="input" name="passwordAntiguo" placeholder="contraseña antigua">
                                            <br>
                                            <div id="grupo__password">
                                            <input type="text" class="campo_input" name="password" id="perfil_nuevo_input" placeholder="contraseña nueva">
                                            </div>
                                            <input class="input_cambio_btn" id="perfil_cambio_btn" type="submit" value="Cambiar" name="btn_p">
                                        </div>
                                    </form>
                                </li>
                            </div>
                        </ul>
                    </li><!--FINAL DE LA LISTA DEL PERFIL-->
                </div>
            </ul>
        </nav>
    </header>

    <!--1.SECCION-->
    <!--COMICS PASANDO-->
    <div class="contenedor_imagenes_comic">
        <div class="slider-list" id="slider-list">
            <button class="slider-flecha slider-siguiente" id="button-siguiente" data-button="button-siguiente" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
            </button>
            <div class="slider-seguimiento" id="seguimiento">
                <div class="slider">
                    <div>
                        <a href="https://mega.nz/file/2RBA2JIQ#XHdO70ioJqWbC-fKP1DdT16XjFRH6WUEFRzrIhSrM2o" target="_blank">
                            <picture>
                                <img src="../img/pasarela/b1.png" alt="Image1">
                                <button class="descargar_btn"><i class="fa-solid fa-cloud-arrow-down"></i>Descargar</button>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slider">
                    <div>
                        <a href="https://mega.nz/file/6dImRB6J#QZR2fTp_JqPUrCq5hVaS8wnhkgT33H2h6P_a7GzMMGA" target="_blank">
                            <picture>
                                <img src="../img/pasarela/s1.png" alt="Image2">
                                <button class="descargar_btn"><i class="fa-solid fa-cloud-arrow-down"></i>Descargar</button>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slider">
                    <div>
                        <a href="https://mega.nz/file/3BwVBISJ#Dy4likQOV7FVwU1c57jzIeV5Ggz3J3KjklPSPwJzpnk" target="_blank">
                            <picture>
                                <img src="../img/pasarela/vader.jpg" alt="Image3">
                                <button  class="descargar_btn"><i class="fa-solid fa-cloud-arrow-down"></i>Descargar</button>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slider">
                    <div>
                        <a href="https://mega.nz/file/iBIyGQ4Z#8HdzHnAfoT3cN32VISQl4SKbuLKgY7ot-fAkAZFVWD8" target="_blank">
                            <picture>
                                <img src="../img/pasarela/b2.png" alt="Image4">
                                <button class="descargar_btn"><i class="fa-solid fa-cloud-arrow-down"></i>Descargar</button>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slider">
                    <div>
                        <a href="https://mega.nz/file/zVww1ZJB#oayaSftuvYQDSPJEJ00qoNl1e1OnLzm-X_4d-W6SFEs" target="_blank">
                            <picture>
                                <img src="../img/pasarela/5.jpg" alt="Image5">
                                <button class="descargar_btn"><i class="fa-solid fa-cloud-arrow-down"></i>Descargar</button>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slider">
                    <div>
                        <a href="https://mega.nz/file/6BQBhByR#BdKJ1hilacwNFQRKL7YdMuySTQAZKpNxISu-NIt3yYg" target="_blank">
                            <picture>
                                <img src="../img/pasarela/6.jpg" alt="Image6">
                                <button class="descargar_btn"><i class="fa-solid fa-cloud-arrow-down"></i>Descargar</button>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slider">
                    <div>
                        <a href="https://mega.nz/file/TVQykD6T#t6WQPg18CchAVfGQWSKtBA1yCiP1qi7wqUxknMdY4BU" target="_blank">
                            <picture>
                                <img src="../img/pasarela/7.jpg" alt="Image7">
                                <button class="descargar_btn"><i class="fa-solid fa-cloud-arrow-down"></i>Descargar</button>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slider">
                    <div>
                        <a href="https://mega.nz/file/aIoEWJRb#oYIp3RKn8EP3_A-wZgmuM6K-CD9Rj4_IZS190uqDVtQ" target="_blank">
                            <picture>
                                <img src="../img/pasarela/8.jpg" alt="Image8">
                                <button class="descargar_btn"><i class="fa-solid fa-cloud-arrow-down"></i>Descargar</button>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slider">
                    <div>
                        <a href="#" target="_blank">
                            <picture>
                                <img src="../img/pasarela/9.jpg" alt="Image9">
                                <button class="descargar_btn"><i class="fa-solid fa-cloud-arrow-down"></i>Descargar</button>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slider">
                    <div>
                        <a href="https://mega.nz/file/3c4zFD5b#Ilv3lfv2X44zQGGezSBFXph4miJvgn8QnWUyV-jjELU" target="_blank">
                            <picture>
                                <img src="../img/pasarela/10.jpg" alt="Image10">
                                <button class="descargar_btn"><i class="fa-solid fa-cloud-arrow-down"></i>Descargar</button>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slider">
                    <div>
                        <a href="https://mega.nz/file/nI4FwagY#lXWvpyn1Vf6nvgy3GpnsiWofWNHNmXwfhPniRcJ5oBw" target="_blank">
                            <picture>
                                <img src="../img/pasarela/11.jpg" alt="Image11">
                                <button class="descargar_btn"><i class="fa-solid fa-cloud-arrow-down"></i>Descargar</button>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slider">
                    <div>
                        <a href="https://mega.nz/file/TEpUAKIZ#XOJBM_qOBH_58Q5oJ-DHyk3fnl8otgAQ4xOoidfjTPk" target="_blank">
                            <picture>
                                <img src="../img/pasarela/12.jpg" alt="Image12">
                                <button class="descargar_btn"><i class="fa-solid fa-cloud-arrow-down"></i>Descargar</button>
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
            <button class="slider-flecha slider-anterior" id="button-anterior" data-button="button-anterior" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
            </button>
        </div>
    </div>

    <!--2.SECCION-->
    <div class="secondSection">
        
        <!--LECTURAS OBLIGAROTIAS-->
        <div class="contenedor_must_reads">
            <h1>LECTURAS OBLIGATORIAS</h1>   
            <div class="must_reads">
                <img class="imagen" src="../img/invencible.jpg" width="180px" alt="invencible_img">
                <div class="texto">
                    <h3>IVENCIBLE</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Reiciendis dolor odit debitis nesciunt quidem maxime tempore aliquam, 
                        nisi veniam modi pariatur obcaecati eos! Magni dolor voluptatum porro atque placeat earum!</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint sapiente 
                        vel necessitatibus repellendus optio, obcaecati delectus hic, unde molestiae 
                        exercitationem natus perferendis velit! Ducimus consequuntur repellendus labore voluptate facere cum.</p>
                </div><!--fin_texto-->
            </div><!--fin_must_reads-->
            <div class="must_reads">
                <div class="texto">
                    <h3>HELLBOY</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Reiciendis dolor odit debitis nesciunt quidem maxime tempore aliquam, 
                        nisi veniam modi pariatur obcaecati eos! Magni dolor voluptatum porro atque placeat earum!</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint sapiente 
                        vel necessitatibus repellendus optio, obcaecati delectus hic, unde molestiae 
                        exercitationem natus perferendis velit! Ducimus consequuntur repellendus labore voluptate facere cum.</p>
                </div><!--fin_texto-->
                <img class="imagen" src="../img/hellboy.jpg" width="180px" alt="hellboy_img">
            </div><!--fin_must_reads-->
            <div class="must_reads">
                <img class="imagen" src="../img/vinland.jpg" width="180px" alt="vinland_img">
                <div class="texto">
                    <h3>VINLAND SAGA</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Reiciendis dolor odit debitis nesciunt quidem maxime tempore aliquam, 
                        nisi veniam modi pariatur obcaecati eos! Magni dolor voluptatum porro atque placeat earum!</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint sapiente 
                        vel necessitatibus repellendus optio, obcaecati delectus hic, unde molestiae 
                        exercitationem natus perferendis velit! Ducimus consequuntur repellendus labore voluptate facere cum.</p>
                </div><!--fin_texto-->
            </div><!--fin_must_reads-->
        </div>

    <!--SLIDERS LIGTHS Y LISTA ABREVIADA-->
        <div class="ligths">
            <h1><a id="link_lista_comunitaria_titulo" href="lista_comunitaria.php" target="_blank">LISTA COMUNITARIA</a> AÑADIDOS RECIENTES</h1>
            <div class="contenedor_tabla_recientes">
                <table class="tabla_recientes">
                    <thead class="tabla_recientes_head">
                        <th></th>
                        <th>NOMBRE</th>
                        <th>AUTOR</th>
                        <th>EDITORIAL</th>
                        <th>FORMATO</th>
                        <th>DESCARGA</th>
                    </thead>
                    <tbody>
                        <?php 
                            include_once("con_db.php");
                            $obj = new Database();
                            $con = $obj-> conectar();
                            
                            $f = $con-> query("SELECT * FROM todo ORDER BY id DESC LIMIT 6");
                            $cont = 1;
                            while($fil = mysqli_fetch_array($f)){
                                
                                if( $fil['id'] == $fil['id']){
                                    $fil['id'] = $cont;
                                    $cont ++;
                                }
                            ?>
                                <tr>
                                    <td><?php echo $fil['id']?></td>
                                    <td><?php echo $fil['nombre']?></td>
                                    <td><?php echo $fil['autor']?></td>
                                    <td><?php echo $fil['editorial']?></td>
                                    <td><?php echo $fil['formato']?></td>
                                    <td><div class="icono_link_descarga"><a href="<?php echo $fil['descarga'];?>" target="_blank"><i id="icono_descarga" class="fa-solid fa-cloud-arrow-down"></i>Descargar</a></div></td>
                                </tr>
                            <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!--FINAL MUST_READS Y LISTA-->
    
    <!--SECTION-DC-->
    <section class="contenedor_dc">
        <div class="dc_header" id="dc">
            <div class="cd_header_logo">
            <a id="title_dc"><img src="../img/DC.png" width="200px" alt="dc_logo"></a>
            <a href="#inicio" id="dc_inicio"> INICIO</a>
            </div>
        </div>
        <div class="cd_body">
            <div class="contenedor_img_s">
                <div class="img_s"></div>
                <div class="img_s"></div>
                <div class="img_s"></div>
            </div>
            
        </div>
    </section>

    <footer>
        
    </footer>

    <!--Scripts-->
    <script src="../js/menu.js"></script>
    <script src="../js/scripthome.js"></script>
</body>
</html>