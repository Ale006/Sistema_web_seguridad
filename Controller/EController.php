<?php
require_once 'Model/Emodel.php'; 

class EstudiantesController{

    static public function prelogin($user,$clave)
    {
        if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['claveuser']) && !empty($_POST['claveuser'])){
            $user=$_POST['username'];
            $clave=$_POST['claveuser'];
            $tabla="estudiantes";

            $respuesta=EstudiantesModel::prelogin($user,$clave,$tabla);
            return $respuesta;
        }
    }

    static public function login($user,$clave)
    {
            $user=$_POST['username'];
            $clave=$_POST['claveuser'];
            $tabla="estudiantes";
        if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['claveuser']) && !empty($_POST['claveuser'])){
            $respuesta=EstudiantesModel::login($user,$clave,$tabla);
            if($respuesta == 'ok'){
                session_start();
                $_SESSION['user'] = $user;
                header('Location:body.php');
            }else{
                header('Location:index.php');
            }
        }
        return $respuesta;
    }
}