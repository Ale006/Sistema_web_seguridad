<?php
require_once '../../Controller/EController.php';
if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['claveuser']) && !empty($_POST['claveuser'])) {
    $user = $_POST['username'];
    $clave = $_POST['claveuser'];
    // comprobacion de usuario
    $comprobacion = EstudiantesController::prelogin($user, $clave);
    if ($comprobacion >= 1 && $comprobacion != NULL) {
        foreach ($comprobacion as $plog) {
            $userbd = $plog['username'];
            $clavebd = $plog['password'];
            //$estadodb=$plog['fk_estado'];
        }
        if ($userbd == $user && $clavebd == $clave) {
            $login = EstudiantesController::login($user, $clave);
        } else {
            echo '
                <div class="container">
                    <div class="alert alert-danger" role="alert">
                        Usuario no habilitado!
                    </div>
                </div>';
        }
    } else {
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
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Seguridad</title>
    <meta name="description" content="Grupo6-Capstone Admin - HTML5">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ICONOS -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


    <!-- Logo ejemplo letra "e"=https://i.imgur.com/QRAUqs9-->

    <!-- Logo oficial del sitio web=https://i.imgur.com/QRAUqs9-->
    <!-- <link rel="apple-touch-icon" href="https://imgur.com/eF4N1Tr"> -->

    <!-- Logo de la pagina-->
    <!-- <link rel="shortcut icon" href="assets/images/Favicon.PNG"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <!-- <link rel="stylesheet" href="assets/css/cs-skin-elastic.css"> -->
    <link rel="stylesheet" href="css/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>

<body class="bg-light">
    <div id="login-container">
        <form action="" method="Post">
            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="login.php" role="tab"
                        aria-controls="pills-login" aria-selected="true">Login</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="registrar.php" role="tab"
                        aria-controls="pills-register" aria-selected="false">Register</a>
                </li>
            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                    <form>
                        <div class="text-center mb-3">
                            <p>Sign in with:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                            </button>
                        </div>

                        <p class="text-center">or:</p>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="loginName" class="form-control" />
                            <label class="form-label" for="loginName">Email or username</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="loginPassword" class="form-control" />
                            <label class="form-label" for="loginPassword">Password</label>
                        </div>

                        <!-- 2 column grid layout -->
                        <div class="row mb-4">
                            <div class="col-md-6 d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-3 mb-md-0">
                                    <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                    <label class="form-check-label" for="loginCheck"> Remember me </label>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-center">
                                <!-- Simple link -->
                                <a href="#!">Olvidaste la contraseña?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>No eres miembro? <a href="registrar.php">Registrate</a></p>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <!-- Pills content -->

    <style>
        #login-container {
            width: 500px;
            /* Ancho deseado */
            margin: 0 auto;
            /* Centrar horizontalmente */
            /* Otros estilos personalizados que desees agregar */
        }
    </style>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>