<?php

class Conexion{
    static public function conectar(){
            $cn=New PDO("mysql:host=localhost;dbname=bd_educiber","root","rodrigo");
            $cn->exec("SET NAMES UTF8");
            return $cn;
    }
}

?>
