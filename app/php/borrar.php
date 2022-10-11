<?php
    session_start();
    include_once("con_db.php");
    
    $obj = new Database();
    $con = $obj-> conectar();

    switch(true){

        case isset($_POST['btn_e']):
            $i = $_POST['id'];
            $n = $_POST['nombre'];
            $a = $_POST['autor'];
            $e = $_POST['editorial'];
            $g = $_POST['genero'];
            $p = $_POST['publicacion'];
            $d = $_POST['formato'];
            $ld = $_POST['descarga'];

            $con-> query("UPDATE todo SET nombre='$n',autor='$a',editorial='$e',genero='$g',publicacion='$p',formato='$d',descarga='$ld' WHERE id='$i'");
            echo "fila editada.";
            include_once("busqueda_todo.php");
        break;

        case isset($_POST['btn_agregar']):
            $n = $_POST['nombre'];
            $a = $_POST['autor'];
            $e = $_POST['editorial'];
            $g = $_POST['genero'];
            $p = $_POST['publicacion'];
            $d = $_POST['formato'];
            $ld = $_POST['descarga'];

            $con-> query("INSERT INTO todo(nombre,autor,editorial,genero,publicacion,formato,descarga)VALUES('$n','$a','$e','$g','$p','$d','$ld')");

            echo "Fila agregada.";
            include_once("busqueda_todo.php");
        break;

        case isset($_GET['borrar']):
            $id = $_GET['borrar'];
            $con-> query("DELETE FROM todo WHERE id=$id");

            echo "Fila eliminada.";
            include_once("busqueda_todo.php");
        break;
    }

    /*if(isset($_POST['btn_editar'])){
        $id = $_POST['id'];
        $res = $con-> query("SELECT * FROM todo WHERE id='$id'");
        echo "Ultima modificacion de la lista";
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
                    <input type="text" name="descripcion" value="<?php echo $fila['descripcion']?>" placeholder="breve descripcion">
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
    }*/
?>