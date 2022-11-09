<?  
    /*session_start();*/
    include_once("con_db.php");
    //include_once("Token.php");

    $obj = new Database();
    $con = $obj->conectar();

    if(isset($_POST['b'])){
        if($_POST['b'] == ""){
            ?>
            <h1><?
                echo htmlspecialchars($_POST['b']);
                echo "No has buscado nada.";
            ?></h1>
            <?
        }
        else{
            ?><h1><?
            echo "HAS BUSCADO ", htmlspecialchars($_POST['b']);
            ?></h1><?
        }
    }

    /*$t = null;

    if(isset($_POST['t'])){
        $t = $_POST['t'];
    }*/
?>

<?
    /*if(isset($_POST['b']) && isset($_POST['t'])){
        
        //$objToken = new Token($_POST['t']);
        echo "Token asignado a la sesion actual-> ".$_SESSION['token']."<br>";
        echo "<br>Token original sin asignar a la sesion actual->".$t."<br>";

        if(isset($_SESSION['token']) && $_SESSION['token'] == $t){
            
        }
        else{
            echo "El token no coincide con el de la sesion. Posible amenzada CSRF.";
        }
    }*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS_LINK-->
    <link rel="stylesheet" href="../css/lista_comunitaria.css">
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
        <h1>
        </h1>
        <div class="header2">
            <h1>LISTA COMUNITARIA</h1>
            <!--BUSQUEDA-->
            <form id="filtro" class="searchbar" action="lista_comunitaria.php" method="POST">
            <h2>Filtro de busqueda.</h2>
            <input type="text" id="search" name="b" placeholder="buscar por nombre, autor, editorial y genero " ><button type="submit" class="btn_lupa_todo"><i class="fa-solid fa-magnifying-glass"></i></button>
            <!--<input type="hidden" name="t" value="">-->    
        </form>
        </div>
    </header>
    
    <!--AGREGAR-->
    <h3 id="AGREGAR">AGREGAR</h3>
    <form class="contenedor_agregar" action="borrar.php" method="POST">
        <div class="agregar_comic" id="add_agregar">
            
            <div class="campo">
                <input type="text" name="nombre" placeholder="nombre comic/manga/libro">
            </div>
            <div class="campo">
                <input type="text" name="autor" placeholder="autor">
            </div>
            <div class="campo">
                <input type="text" name="editorial" placeholder="editorial">
            </div>
            <div class="campo">
                <input type="text" name="genero" placeholder="genero">
            </div>
            <div class="campo">
                <input type="text" name="publicacion" placeholder="fecha de publicacion">
            </div>
            <div class="campo">
                <input type="text" name="formato" placeholder="breve formato">
            </div>
            <div class="campo">
                <input type="text" name="descarga" placeholder="link">
            </div>
            <input class="btns" type="submit" name="btn_agregar" value="AGREGAR">
        </div>
    </form>
    <!--EDITAR-->
<?php
    if(isset($_POST['btn_editar'])){

        /*$objToken = new Token($_POST['t']);*/
        
        $id = mysqli_real_escape_string($con,$_POST['id']);
        /*$res = $con-> query("SELECT * FROM todo WHERE id='$id'");*/
        $sqlEditar = "SELECT * FROM todo WHERE id=?";

        $stmtEditar = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmtEditar,$sqlEditar)){//handleo de error
            echo "Error SQL prepare statement.";
        }
        else{
            mysqli_stmt_bind_param($stmtEditar,"s",$id);//bindeo de parametros
            mysqli_stmt_execute($stmtEditar);//ejecutamos la consulta.
            $res = mysqli_stmt_get_result($stmtEditar);//guardamos el resultado
        }
        if(mysqli_num_rows($res) > 0){
            
            while($fila = mysqli_fetch_array($res)){
        ?>
        <h3 id="EDITAR">EDITAR</h3>
        <form class="contenedor_editar" action="borrar.php" method="POST">
            <!--<input type="hidden" name="t" value="">-->  
            <div class="agregar_comic" id="editar_comic">
                <div class="campo">
                    <input type="hidden" name="id"  value="<?php echo $fila['id']?>">
                </div>
                <div class="campo">
                    <input type="text" name="nombre"  value="<?php echo $fila['nombre']?>" placeholder="nombre comic/manga/libro">
                </div>
                <div class="campo">
                    <input type="text" name="autor" value="<?php echo $fila['autor']?>" placeholder="autor">
                </div>
                <div class="campo">
                    <input type="text" name="editorial" value="<?php echo $fila['editorial']?>" placeholder="editorial">
                </div>
                <div class="campo">
                    <input type="text" name="genero" value="<?php echo $fila['genero']?>" placeholder="genero">
                </div>
                <div class="campo">
                    <input type="text" name="publicacion" value="<?php echo $fila['publicacion']?>" placeholder="fecha de publicacion">
                </div>
                <div class="campo">
                    <input type="text" name="formato" value="<?php echo $fila['formato']?>" placeholder="breve formato">
                </div>
                <div class="campo">
                    <input type="text" name="descarga" value="<?php echo $fila['descarga']?>" placeholder="link">
                </div>
                <input class="btns" type="submit" name="btn_e" value="EDITAR">
            </div>
        </form>
        <?php
            }
        }
    }
?>

    <div class="contenedor_tabla">
        <table class="tabla">
            <thead class="tabla_cabecera">
                <th>NOMBRE</th>
                <th>AUTOR</th>
                <th>EDITORIAL</th>
                <th>GENERO</th>
                <th>PUBLICACION</th>
                <th>FORMATO</th>
                <th>LINK DESCARGA</th>
            </thead>
            <tbody>
                <!--MOSTRAR TABLA-->
            <?php

                if(isset($_POST['b']) || true){
                    
                    $busqueda = isset($_POST['b']) ? mysqli_real_escape_string($con,$_POST['b']) : null;
                    
                    $consulta = $con->query("SELECT * FROM todo WHERE 
                    CONCAT(nombre,autor,editorial,genero) LIKE '%$busqueda%'");
                    
                    /*$sqlBusqueda = "SELECT * FROM todo WHERE 
                    CONCAT(nombre,autor,editorial,genero) LIKE '?'";
                    $stmtBusqueda = mysqli_stmt_init($con);

                    if(!mysqli_stmt_prepare($stmtBusqueda,$sqlBusqueda)){
                        echo "SQL prepare statement ha fallado.";
                        return false;
                    }
                    else{
                        mysqli_stmt_bind_param($stmtBusqueda,"s",$busqueda);
                        mysqli_stmt_execute($stmtBusqueda);//Ejecutamos la prepare estatement
                        $consulta = mysqli_stmt_get_result($stmtBusqueda);//guardamos el resultado
                    }*/
                    
                    if(mysqli_num_rows($consulta) > 0){
                        foreach($consulta as $fila){
                            ?>
                            <tr>
                                <td><?php echo $fila['nombre'];?></td>
                                <td><?php echo $fila['autor'];?></td>
                                <td><?php echo $fila['editorial'];?></td>
                                <td><?php echo $fila['genero'];?></td>
                                <td><?php echo $fila['publicacion'];?></td>
                                <td><?php echo $fila['formato'];?></td>
                                <td><div class="icono_link_descarga"><a href="<?php echo $fila['descarga'];?>" target="_blank"><i id="icono_descarga" class="fa-solid fa-cloud-arrow-down"> </i>Descargar</a></div></td>
                                <!--El link introducido se guarda en la base de datos y directamente se carga en el href-->
                                <td>
                                    <!--BOTON DE EDITAR-->
                                    <form action="lista_comunitaria.php" method="POST">
                                    <!--<input type="hidden" name="t" value="">-->
                                        <input style="display: none;" name="id" value="<?php echo $fila['id']?>">
                                        <button id="btn_editar" class="btn_editar_borrar" type="submit" name="btn_editar">Editar</button>
                                    </form>
                                    <!--BOTON PARA BORRAR-->
                                    <button id="btn_borrar" class="btn_editar_borrar" onclick="confirmacion(<?php echo $fila['id']?>,'<?php echo $fila['nombre']?>')">Eliminar</button>
                                    <!--para obtener la confirmacion de borrado con el nombre hay que pasarselo como un string de hay las singles quotes-->
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    else{
                        echo "No hay nada con ese nombre. Presiona la lupa sin introducir nada para volver a mostrar la lista completa.";
                    }
                    }   
            ?>
            </tbody>
        </table>
    </div>
    
    <script type="text/javascript">
        function confirmacion(id,nombre){
            if(confirm("¿Seguro que quieres borrar "+nombre+"?")){
                console.log("sE EJECUTA");
                window.location.href = "borrar.php?borrar="+id;
            }
        }
    </script>
    
</body>
</html>