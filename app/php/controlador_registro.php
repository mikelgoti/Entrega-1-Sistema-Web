<?php 
    include_once("con_db.php");
    $obj = new Database();
    $con = $obj-> conectar();

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $apellido1 = $_POST['apellido1'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $dni = $_POST['dni'];
    $password = $_POST['password'];



$res = $con->query("SELECT EXISTS (SELECT * FROM iniciados WHERE usuario='$usuario');");
$row = mysqli_fetch_row($res);

    if($row[0] == 0){
        //$h = encriptarPass($password);
        //almacenar el hash generado de la password en la db
        $con->query("INSERT INTO iniciados(usuario,email,nombre,apellido,apellido1,telefono,fecha,dni,password)
        VALUES('$usuario','$email','$nombre','$apellido','$apellido1','$telefono','$fecha','$dni','$password')");
        $mensaje_correcto ="Usuario agregado. Ya te has registrado! Vuelve para iniciar sesion.";
        include_once("pagina_registrarse.php");
    }
    else{
        $mensaje_error = "El usuario ya existe pruebe con otro.";
        include_once("pagina_registrarse.php");
    }
    
    /*function encriptarPass($p){
        Convertir $p en un hash.
    }*/
?>