<?php

require_once '/wamp64/www/Sistema_web_seguridad/Model/EModel.php';

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

static public function log($user)
    {
        $tabla="usuarios";
        if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
            $respuesta = EstudiantesModel::datosuser($user,$tabla);
            return $respuesta;
        }
    }

    public function cerrarSesion($cerrar)
    {
        if(isset($_GET['cerrar']) && $_GET['cerrar']=='ok'){
            $salir = $_GET['cerrar'];
            if($salir == "ok"){
                session_unset();
            }
            header('Location: ./index.php');
            $salir = "ok";
        }
        return $salir;
    }
}
