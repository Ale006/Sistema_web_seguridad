<?php
    require_once '../../Controller/EController.php';
    if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['claveuser']) && !empty($_POST['claveuser']))
    {
        $user=$_POST['username'];
        $clave=$_POST['claveuser'];
        // comprobacion de usuario
        $comprobacion = EstudiantesController::prelogin($user,$clave);
        if($comprobacion >=1 && $comprobacion !=NULL)
        {
            foreach($comprobacion as $plog)
            {
                $userbd=$plog['username'];
                $clavebd=$plog['password'];
                //$estadodb=$plog['fk_estado'];
            }
            if($userbd==$user&&$clavebd==$clave)
            {
                $login = EstudiantesController::login($user,$clave);
            }
            else
            {
                echo '
                <div class="container">
                    <div class="alert alert-danger" role="alert">
                        Usuario no habilitado!
                    </div>
                </div>';
            }
        }
        else
        {
            echo '
            <div class="container">
                <div class="alert alert-danger" role="alert">
                    Usuario o contraseña incorrecta!
                </div>
            </div>';
        }
    }
?>

<?php /*    PRIMERA  BD
    require_once 'Controller/UController.php';
    if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['claveuser']) && !empty($_POST['claveuser']))
    {
        $user=$_POST['username'];
        $clave=$_POST['claveuser'];
        // comprovacion de usuario
        $comprobacion = UsuariosController::prelogin($user,$clave);
        if($comprobacion >=1 && $comprobacion !=NULL)
        {
            foreach($comprobacion as $plog)
            {
                $userbd=$plog['unick'];
                $clavebd=$plog['upass'];
                $estadodb=$plog['fk_estado'];
            }
            if($userbd==$user&&$clavebd==$clave&&$estadodb==1)
            {
                $login = UsuariosController::login($user,$clave);
            }
            else
            {
                echo '
                <div class="container">
                    <div class="alert alert-danger" role="alert">
                        Usuario no habilitado!
                    </div>
                </div>';
            }
        }
        else
        {
            echo '
            <div class="container">
                <div class="alert alert-danger" role="alert">
                    Usuario o contraseña incorrecta!
                </div>
            </div>';
        }
    } */
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Natural Centric 1.5</title>
    <meta name="description" content="Grupo6-Capstone Admin - HTML5">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Logo ejemplo letra "e"=https://i.imgur.com/QRAUqs9-->

    <!-- Logo oficial del sitio web=https://i.imgur.com/QRAUqs9-->
   <!-- <link rel="apple-touch-icon" href="https://imgur.com/eF4N1Tr"> -->
   
   <!-- Logo de la pagina-->
    <!-- <link rel="shortcut icon" href="assets/images/Favicon.PNG"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <!-- <link rel="stylesheet" href="assets/css/cs-skin-elastic.css"> -->
    <link rel="stylesheet" href="css/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-light">
<form action="" method="Post">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="assets/images/naturalcentric.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" class="form-control" name="username" placeholder="usuario" required>
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" name="claveuser" placeholder="Contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>