<?php 
    include_once("con_db.php");
    $obj = new Database();
    $con = $obj-> conectar();

    /**
     * Usamos la funcion mysql_real_scape_string para poder evitar los caracteres y los simbolos
     * */
    $usuario = mysqli_real_escape_string($con,$_POST['usuario']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $nombre = mysqli_real_escape_string($con,$_POST['nombre']);
    $apellido = mysqli_real_escape_string($con,$_POST['apellido']);
    $apellido1 = mysqli_real_escape_string($con,$_POST['apellido1']);
    $telefono = mysqli_real_escape_string($con,$_POST['telefono']);
    $fecha = mysqli_real_escape_string($con,$_POST['fecha']);
    $dni = mysqli_real_escape_string($con,$_POST['dni']);
    $password = password_hash(mysqli_real_escape_string($con,$_POST['password']),PASSWORD_DEFAULT);
    //echo $password;


/*$res = $con->query("SELECT EXISTS (SELECT * FROM iniciados WHERE usuario='$usuario');");
$row = mysqli_fetch_row($res);*/
/**
 * Prepare statement select para checkear que el usuario no exista.
 */
$sqlcheck = "SELECT EXISTS (SELECT * FROM iniciados WHERE usuario=?);";
$stmtcheck = mysqli_stmt_init($con);// iniciamos la PREPARE STATEMENT

if(!mysqli_stmt_prepare($stmtcheck,$sqlcheck)){
    echo "Error SQL prepare statement checkear usuario existente.";
}
else{
    mysqli_stmt_bind_param($stmtcheck,"s",$usuario);
    mysqli_stmt_execute($stmtcheck);
    $res = mysqli_stmt_get_result($stmtcheck);
    $row = mysqli_fetch_row($res);

    
    if($row[0] == 0){
        
        //$h = encriptarPass($password);
        //almacenar el hash generado de la password en la db
        /*$con->query("INSERT INTO iniciados(usuario,email,nombre,apellido,apellido1,telefono,fecha,dni,password)
        VALUES('$usuario','$email','$nombre','$apellido','$apellido1','$telefono','$fecha','$dni','$password')");*/

        /**
         * SQL PREPARE STATEMENET PARA PODER INSERTAR LA INFORMACION EN LA DB
         */
        $sqlinsert = "INSERT INTO iniciados(usuario,email,nombre,apellido,apellido1,telefono,fecha,dni,password)
        VALUES(?,?,?,?,?,?,?,?,?)";//Sql consulta
        $stmtinsert = mysqli_stmt_init($con);//Iniciamos la p.s

        if(!mysqli_stmt_prepare($stmtinsert,$sqlinsert)){//handleo de error
            echo "Error SQL prepare statement insertar usuario existente.";
        }
        else{
            mysqli_stmt_bind_param($stmtinsert,"sssssssss",$usuario,$email,$nombre,$apellido,$apellido1,$telefono,$fecha,$dni,$password);//bindeo de parametros
            mysqli_stmt_execute($stmtinsert);//ejecutamos la consulta.
            
            $mensaje_correcto ="Usuario agregado. Ya te has registrado! Vuelve para iniciar sesion.";
            include_once("pagina_registrarse.php");
        }

    }
    else{
        $mensaje_error = "El usuario ya existe pruebe con otro.";
        include_once("pagina_registrarse.php");
    }
    
    /*function encriptarPass($p){
        return password_hash($p, PASSWORD_DEFAULT);
    }*/
}
    
?>