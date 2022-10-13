<?php
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

            $res = $con->query("SELECT EXISTS (SELECT * FROM todo WHERE nombre='$n');");
            $row = mysqli_fetch_row($res);

            if($row[0] == 0){
                $con-> query("UPDATE todo SET nombre='$n',autor='$a',editorial='$e',genero='$g',publicacion='$p',formato='$d',descarga='$ld' WHERE id='$i'");
                echo "fila editada.";
                include_once("lista_comunitaria.php");
            }
            else{
                echo "La modificacion del articulo coincide con otro en la lista.";
                include_once("lista_comunitaria.php");
            }
            
        break;

        case isset($_POST['btn_agregar']):
            $n = $_POST['nombre'];
            $a = $_POST['autor'];
            $e = $_POST['editorial'];
            $g = $_POST['genero'];
            $p = $_POST['publicacion'];
            $f = $_POST['formato'];
            $ld = $_POST['descarga'];

            $res = $con->query("SELECT EXISTS (SELECT * FROM todo WHERE nombre='$n');");
            $row = mysqli_fetch_row($res);

            if($row[0] == 0){//No hay nada agregado a la lista con ese nombre
                $con-> query("INSERT INTO todo(nombre,autor,editorial,genero,publicacion,formato,descarga)VALUES('$n','$a','$e','$g','$p','$f','$ld')");
                echo "Fila agregada.";
                include_once("lista_comunitaria.php");
            }
            else{
                echo "Ya existe un articulo con ese nombre en la lista. Si es diferente modifica el nombre y vuelve a intentarlo.";
                include_once("lista_comunitaria.php");
            }
        break;

        case isset($_GET['borrar']):
            $id = $_GET['borrar'];
            $con-> query("DELETE FROM todo WHERE id=$id");

            echo "Fila eliminada.";
            include_once("lista_comunitaria.php");
        break;
    }
?>