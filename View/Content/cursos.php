<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Cursos</title>
    <meta name="description" content="Responsive HTML5 Template">
    <meta name="author" content="RodrigoAlexis">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/Sistema_web_seguridad/Images/cursos.png">

    <link href="../../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../../fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../css/animations.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-qzFighx3q3jKilo+nmSE7VwaxdJGpPbWEaIj+IwFJQO/nXqD0Qc1t4+gKo0Gw4J4" crossorigin="anonymous">
</head>

<?php
include_once '../Layout/header.php';
?>

<!-- section start -->

<body style="margin-top: 80px;">
    <section class="section secPadding">
        <div class="container">
            <h1 class="text-center title" id="portfolio">Aprende</h1>
            <div class="separator"></div>
            <p class="lead text-center">Aprende los conceptos basicos de la seguridad y evita que te roben tu informacion personal.<br> Unete a nuestra comunidad.</p>
            <br>
            <div class="row no-view" data-animation-effect="fadeIn">
                <div class="col-md-12">

                    <!-- isotope filters start -->
                    <div class="filters text-center">
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".web-design">Privacidad</a></li>
                            <li><a href="#" data-filter=".app-development">Seguridad</a></li>
                            <li><a href="#" data-filter=".mobile-apps">Juegos</a></li>
                            <li><a href="#" data-filter=".mobile-apps">Pruebas</a></li>
                        </ul>
                    </div>
                    <!-- isotope filters end -->

                    <!-- portfolio items start -->
                    <div class="isotope-container row grid-space-20">
                        <div class="col-sm-6 col-md-3 isotope-item web-design">
                            <div class="image-box">
                                <div class="overlay-container">
                                    <img src="/Sistema_web_seguridad/images/portfolio-1.jpg" alt="">
                                    <a class="overlay" data-toggle="modal" data-target="#project-1">
                                        <i class="fa fa-search-plus"></i>

                                    </a>
                                </div>
                                <a class="btn btn-default btn-block" data-toggle="modal"
                                    data-target="#project-1">Project
                                    Title</a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="project-1" tabindex="-1" role="dialog"
                                aria-labelledby="project-1-label" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span
                                                    aria-hidden="true">&times;</span><span
                                                    class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="project-1-label">Project Title</h4>
                                        </div>
                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="/Sistema_web_seguridad/images/portfolio-1.jpg" alt="">
                                                    <br />
                                                    <h3>Project Description</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
                                                        sed,
                                                        quidem quis praesentium, ut unde. Quae sed, incidunt laudantium
                                                        nesciunt, optio corporis quod earum pariatur omnis illo saepe
                                                        numquam suscipit, nemo placeat dignissimos eius mollitia et quas
                                                        officia doloremque ipsum labore rem deserunt.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-default"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal end -->
                        </div>

                        <div class="col-sm-6 col-md-3 isotope-item app-development">
                            <div class="image-box">
                                <div class="overlay-container">
                                    <img src="/Sistema_web_seguridad/images/portfolio-2.jpg" alt="">
                                    <a class="overlay" data-toggle="modal" data-target="#project-2">
                                        <i class="fa fa-search-plus"></i>

                                    </a>
                                </div>
                                <a class="btn btn-default btn-block" data-toggle="modal"
                                    data-target="#project-2">Project
                                    Title</a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="project-2" tabindex="-1" role="dialog"
                                aria-labelledby="project-2-label" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span
                                                    aria-hidden="true">&times;</span><span
                                                    class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="project-2-label">Project Title</h4>
                                        </div>
                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="/Sistema_web_seguridad/images/portfolio-2.jpg" alt="">
                                                    <br />
                                                    <h3>Project Description</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
                                                        sed,
                                                        quidem quis praesentium, ut unde. Quae sed, incidunt laudantium
                                                        nesciunt, optio corporis quod earum pariatur omnis illo saepe
                                                        numquam suscipit, nemo placeat dignissimos eius mollitia et quas
                                                        officia doloremque ipsum labore rem deserunt.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-default"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal end -->
                        </div>

                        <div class="col-sm-6 col-md-3 isotope-item web-design">
                            <div class="image-box">
                                <div class="overlay-container">
                                    <img src="/Sistema_web_seguridad/images/portfolio-3.jpg" alt="">
                                    <a class="overlay" data-toggle="modal" data-target="#project-3">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <a class="btn btn-default btn-block" data-toggle="modal"
                                    data-target="#project-3">Project
                                    Title</a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="project-3" tabindex="-1" role="dialog"
                                aria-labelledby="project-3-label" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span
                                                    aria-hidden="true">&times;</span><span
                                                    class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="project-3-label">Project Title</h4>
                                        </div>
                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="/Sistema_web_seguridad/images/portfolio-3.jpg" alt="">
                                                    <br />
                                                    <h3>Project Description</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
                                                        sed,
                                                        quidem quis praesentium, ut unde. Quae sed, incidunt laudantium
                                                        nesciunt, optio corporis quod earum pariatur omnis illo saepe
                                                        numquam suscipit, nemo placeat dignissimos eius mollitia et quas
                                                        officia doloremque ipsum labore rem deserunt.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-default"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal end -->
                        </div>

                        <div class="col-sm-6 col-md-3 isotope-item mobile-apps">
                            <div class="image-box">
                                <div class="overlay-container">
                                    <img src="/Sistema_web_seguridad/images/portfolio-4.jpg" alt="">
                                    <a class="overlay" data-toggle="modal" data-target="#project-4">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <a class="btn btn-default btn-block" data-toggle="modal"
                                    data-target="#project-4">Project
                                    Title</a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="project-4" tabindex="-1" role="dialog"
                                aria-labelledby="project-4-label" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span
                                                    aria-hidden="true">&times;</span><span
                                                    class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="project-4-label">Project Title</h4>
                                        </div>
                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="/Sistema_web_seguridad/images/portfolio-4.jpg" alt="">
                                                    <br />
                                                    <h3>Project Description</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
                                                        sed,
                                                        quidem quis praesentium, ut unde. Quae sed, incidunt laudantium
                                                        nesciunt, optio corporis quod earum pariatur omnis illo saepe
                                                        numquam suscipit, nemo placeat dignissimos eius mollitia et quas
                                                        officia doloremque ipsum labore rem deserunt.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-default"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal end -->
                        </div>

                        <div class="col-sm-6 col-md-3 isotope-item app-development">
                            <div class="image-box">
                                <div class="overlay-container">
                                    <img src="/Sistema_web_seguridad/images/portfolio-5.jpg" alt="">
                                    <a class="overlay" data-toggle="modal" data-target="#project-5">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <a class="btn btn-default btn-block" data-toggle="modal"
                                    data-target="#project-5">Project
                                    Title</a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="project-5" tabindex="-1" role="dialog"
                                aria-labelledby="project-5-label" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span
                                                    aria-hidden="true">&times;</span><span
                                                    class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="project-5-label">Project Title</h4>
                                        </div>
                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="/Sistema_web_seguridad/images/portfolio-5.jpg" alt="">
                                                    <br />
                                                    <h3>Project Description</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
                                                        sed,
                                                        quidem quis praesentium, ut unde. Quae sed, incidunt laudantium
                                                        nesciunt, optio corporis quod earum pariatur omnis illo saepe
                                                        numquam suscipit, nemo placeat dignissimos eius mollitia et quas
                                                        officia doloremque ipsum labore rem deserunt.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-default"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal end -->
                        </div>

                        <div class="col-sm-6 col-md-3 isotope-item web-design">
                            <div class="image-box">
                                <div class="overlay-container">
                                    <img src="/Sistema_web_seguridad/images/portfolio-6.jpg" alt="">
                                    <a class="overlay" data-toggle="modal" data-target="#project-6">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <a class="btn btn-default btn-block" data-toggle="modal"
                                    data-target="#project-6">Project
                                    Title</a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="project-6" tabindex="-1" role="dialog"
                                aria-labelledby="project-6-label" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span
                                                    aria-hidden="true">&times;</span><span
                                                    class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="project-6-label">Project Title</h4>
                                        </div>
                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="/Sistema_web_seguridad/images/portfolio-6.jpg" alt="">
                                                    <br />
                                                    <h3>Project Description</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
                                                        sed,
                                                        quidem quis praesentium, ut unde. Quae sed, incidunt laudantium
                                                        nesciunt, optio corporis quod earum pariatur omnis illo saepe
                                                        numquam suscipit, nemo placeat dignissimos eius mollitia et quas
                                                        officia doloremque ipsum labore rem deserunt.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-default"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal end -->
                        </div>

                        <div class="col-sm-6 col-md-3 isotope-item mobile-apps">
                            <div class="image-box">
                                <div class="overlay-container">
                                    <img src="/Sistema_web_seguridad/images/portfolio-7.jpg" alt="">
                                    <a class="overlay" data-toggle="modal" data-target="#project-7">
                                        <i class="fa fa-search-plus"></i>
                                        <span>Site Building</span>
                                    </a>
                                </div>
                                <a class="btn btn-default btn-block" data-toggle="modal"
                                    data-target="#project-7">Project
                                    Title</a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="project-7" tabindex="-1" role="dialog"
                                aria-labelledby="project-7-label" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span
                                                    aria-hidden="true">&times;</span><span
                                                    class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="project-7-label">Project Title</h4>
                                        </div>
                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="/Sistema_web_seguridad/images/portfolio-7.jpg" alt="">
                                                    <br />
                                                    <h3>Project Description</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
                                                        sed,
                                                        quidem quis praesentium, ut unde. Quae sed, incidunt laudantium
                                                        nesciunt, optio corporis quod earum pariatur omnis illo saepe
                                                        numquam suscipit, nemo placeat dignissimos eius mollitia et quas
                                                        officia doloremque ipsum labore rem deserunt.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-default"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- JavaScript -->
                            <script type="text/javascript" src="../../plugins/jquery.min.js"></script>
                            <script type="text/javascript" src="../../bootstrap/js/bootstrap.min.js"></script>
                            <script type="text/javascript" src="../../plugins/modernizr.js"></script>
                            <script type="text/javascript" src="../../plugins/isotope/isotope.pkgd.min.js"></script>
                            <script type="text/javascript" src="../../plugins/jquery.backstretch.min.js"></script>
                            <script type="text/javascript" src="../../plugins/jquery.appear.js"></script>

                            <!-- Custom Scripts -->
                            <script type="text/javascript" src="../../js/custom.js"></script>
</body>