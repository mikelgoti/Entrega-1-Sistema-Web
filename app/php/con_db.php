<?php

class Database{
    
    private $hostname;
    private $username;
    private $password;
    private $db;

    public function __construct()
    {
        $this->hostname = "db";
        $this->username = "admin";
        $this->password = "test";
        $this->db = "database";
    }
    //$connnection = mysqli_connect($hostname,$username,$password,$db);

    function conectar(){
        $conexion = mysqli_connect($this->hostname,$this->username,$this->password,$this->db);
        if($conexion){
            return $conexion;
        }
        else{
            echo "CONEXION FALLIDA CON LA BASE DE DATOS<br><br>";
        }
    }
}

?>