<?php 
    include_once("con_db.php");
    $obj = new Database();
    $con = $obj-> conectar();

    $con-> query("CREATE TABLE IF NOT EXIST 'iniciados'(
        'usuario' varchar(30) DEFAULT NULL,
        'email' varchar(40) DEFAULT NULL,
        'apellido' varchar(30) DEFAULT NULL,
        'apellido1' varchar(30) DEFAULT NULL,
        'telefono' int(9) DEFAULT NULL,
        'fecha' varchar(10) DEFAULT NULL,
        'dni' varcha(10) DEFAULT NULL,
        'password' varchar(40) DEFAULT NULL
        
    )");

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
        echo "Usuario agregado. Enorabuena ya estas registrado!";
    }
    else{
        echo "El usuario ya existe pruebe con otro";
    }
    
    /*function encriptarPass($p){
        Convertir $p en un hash.
    }*/
?>