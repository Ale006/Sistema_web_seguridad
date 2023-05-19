<?php 

require_once '/wamp64/www/Sistema_web_seguridad/BD/conexion.php';
 
class EstudiantesModel{

    static public function prelogin($user,$clave,$tabla)
    {
        $sql="SELECT usuario_estu,pass_estu FROM $tabla WHERE usuario_estu='$user' AND pass_estu='$clave'";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function login($user,$clave,$tabla)
    {
        $sql="SELECT * FROM $tabla WHERE usuario_estu='$user' AND pass_estu='$clave'";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        if($cn->execute()){
            return 'ok';
        }

        $cn->close();
        $cn=NULL;
    }

    static public function datosuser($user,$tabla)
    {
        $sql="SELECT *,substring(usario_estu,1,1) AS 'inicial' FROM $tabla WHERE usuario_estu='$user'";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }
}