<?php

    /*if(isset($_POST['eNuevo']) && isset($_POST['eAntiguo'])){
        $eNuevo = $_POST['eNuevo'];
        $eAntiguo = $_POST['eAntiguo'];
        $col = "email";

        update($col,$eAntiguo,$eNuevo);*/
        
    switch(true){

        case isset($_POST['btn_u']):
            echo "USUARIO";
            $uN= $_POST['usuario'];
            $uA = $_POST['usuarioAntiguo'];
            $col = "usuario";

            //echo $uN,$uA,$col;
            update($col,$uA,$uN);
        break;

        case isset($_POST['btn_e']):
            $eNuevo = $_POST['email'];
            $eAntiguo = $_POST['eAntiguo'];
            $col = "email";
            update($col,$eAntiguo,$eNuevo);
        break;

        case isset($_POST['btn_n']):
            $nN = $_POST['nombre'];
            $nA = $_POST['nombreAntiguo'];
            $col = "nombre";
            update($col,$nA,$nN);
        break;

        case isset($_POST['btn_a']):
            $aN = $_POST['apellido'];
            $aA = $_POST['apellidoAntiguo'];
            $col = "apellido";
            update($col,$aA,$aN);
        break;

        case isset($_POST['btn_a1']):
            $a1N = $_POST['apellido1'];
            $a1A = $_POST['apellido1Antiguo'];
            $col = "apellido1";
            update($col,$a1A,$a1N);
        break;

        case isset($_POST['btn_d']):
            $a1N = $_POST['dni'];
            $a1A = $_POST['dniAntiguo'];
            $col = "dni";
            update($col,$a1A,$a1N);
        break;

        case isset($_POST['btn_t']):
            $a1N = $_POST['telefono'];
            $a1A = $_POST['telefonoAntiguo'];
            $col = "telefono";
            update($col,$a1A,$a1N);
        break;

        case isset($_POST['btn_f']):
            $a1N = $_POST['fecha'];
            $a1A = $_POST['fechaAntiguo'];
            $col = "fecha";
            update($col,$a1A,$a1N);
        break;

        
    }

    function update($col,$pAntiguo,$pNuevo){
        include_once("con_db.php");

        $obj = new Database();
        $con = $obj-> conectar();

        $res = $con->query("SELECT EXISTS (SELECT * FROM iniciados WHERE $col='$pAntiguo');");
        $row = mysqli_fetch_row($res);

        if($row[0] == 1){
            $con-> query("UPDATE iniciados SET $col= '$pNuevo' WHERE $col= '$pAntiguo'");
            echo "Se a actualizado la informacion satisfactoriamente. Vuelve a iniciar sesion para verificar los cambios.";

        }
        else{
            echo "Para actualizar la informacion introduce correctamente tu antiguo ",$col,".";

            include_once("pagina_principal.php");
        }
        
    }
?>