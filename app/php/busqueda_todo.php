<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS_LINK-->
    <link rel="stylesheet" href="../css/tabla_todo.css">
    <!--FONTAWESOME_LINK-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>TITULO</title>
    <link rel="icon" href="../img/comic.png" type="image/x-icon">
</head>
<body>

    <header>
        <h1><?php
        include_once("con_db.php");
    
        $obj = new Database();
        $con = $obj-> conectar();

        $con-> query("CREATE TABLE IF NOT EXISTS todo(

            id int(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nombre varchar(40) DEFAULT NULL,
            autor varchar(40) DEFAULT NULL,
            editorial varchar(40) DEFAULT NULL,
            genero varchar(40) DEFAULT NULL,
            publicacion varchar(40) DEFAULT NULL,
            formato varchar(40) DEFAULT NULL,
            descarga varchar(500) DEFAULT NULL

        )");
        
        if(isset($_POST['b'])){
            echo "HAS BUSCADO ",$_POST['b'];}
        ?>
        </h1>
        <div class="header2">
            <h1>EDITA, AGREGA Y BORRA.</h1>
            
            <form id="filtro" class="searchbar" action="busqueda_todo.php" method="POST">
            <h2>Filtro de busqueda.</h2>
                    <h4>Se filtran solo las columnas nombre, autor, editorial, genero.
                    Para ver la lista completa de nuevo presiona la lupa.
                </h4>    
            <input type="text" id="search" name="b" placeholder="buscador..." ><button type="submit" class="btn_lupa_todo"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </header>
    <form class="contenedor" action="borrar.php" method="POST">
        <div class="agregar_comic" id="agregar">
            <div class="campo_usuario">
                <input type="text" name="nombre" placeholder="nombre comic/manga/libro">
            </div>
            <div class="campo_autor">
                <input type="text" name="autor" placeholder="autor">
            </div>
            <div class="campo_editorial">
                <input type="text" name="editorial" placeholder="editorial">
            </div>
            <div class="campo_genero">
                <input type="text" name="genero" placeholder="genero">
            </div>
            <div class="campo_publicacion">
                <input type="text" name="publicacion" placeholder="fecha de publicacion">
            </div>
            <div class="campo_formato">
                <input type="text" name="formato" placeholder="breve formato">
            </div>
            <div class="campo_link">
                <input type="text" name="descarga" placeholder="link">
            </div>
            <input type="submit" name="btn_agregar" value="agregar">
        </div>
    </form>

<?php
    if(isset($_POST['btn_editar'])){
        $id = $_POST['id'];
        $res = $con-> query("SELECT * FROM todo WHERE id='$id'");
        echo "Fila de edicion, cambiale el nombre, el autor, etc... y presiona editar para guardar los cambios y agregarlos a la lista.";
        if(mysqli_num_rows($res) > 0){
            
            while($fila = mysqli_fetch_array($res)){
        ?>
        <form class="contenedor" action="borrar.php" method="POST">
            <div class="agregar_comic" id="agregar">
                <div class="campo_id">
                    <input type="hidden" name="id"  value="<?php echo $fila['id']?>">
                </div>
                <div class="campo_usuario">
                    <input type="text" name="nombre"  value="<?php echo $fila['nombre']?>" placeholder="nombre comic/manga/libro">
                </div>
                <div class="campo_autor">
                    <input type="text" name="autor" value="<?php echo $fila['autor']?>" placeholder="autor">
                </div>
                <div class="campo_editorial">
                    <input type="text" name="editorial" value="<?php echo $fila['editorial']?>" placeholder="editorial">
                </div>
                <div class="campo_genero">
                    <input type="text" name="genero" value="<?php echo $fila['genero']?>" placeholder="genero">
                </div>
                <div class="campo_publicacion">
                    <input type="text" name="publicacion" value="<?php echo $fila['publicacion']?>" placeholder="fecha de publicacion">
                </div>
                <div class="campo_formato">
                    <input type="text" name="formato" value="<?php echo $fila['formato']?>" placeholder="breve formato">
                </div>
                <div class="campo_link">
                    <input type="text" name="descarga" value="<?php echo $fila['descarga']?>" placeholder="link">
                </div>
                <input type="submit" name="btn_e" value="editar">
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
            <?php 
                include_once("con_db.php");

                $obj = new Database();
                $con = $obj->conectar();

                if(isset($_POST['b']) || "1" == "1"){
                    
                    $busqueda = isset($_POST['b']) ? $_POST['b'] : null;
                
                    $consulta = $con->query("SELECT * FROM todo WHERE 
                    CONCAT(nombre,autor,editorial,genero) LIKE '%$busqueda%'");

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
                                <td> <div class="icono_link_descarga"><a href="<?php echo $fila['descarga'];?>" target="_blank"><i id="icono_descarga" class="fa-solid fa-cloud-arrow-down"></i>Descargar</a></td></div>
                                <!--El link introducido se guarda en la base de datos y directamente se carga en el href-->
                                <td>
                                    <!--BOTON DE EDITAR-->
                                    <form action="busqueda_todo.php" method="POST">
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
                        echo "No hay nada con ese nombre";
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