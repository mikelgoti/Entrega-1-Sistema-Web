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
?>