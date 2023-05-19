<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>CiberEducacion</title>
	<meta name="description" content="Responsive HTML5 Template">
	<meta name="author" content="RodrigoAlexis">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="images/policia.png">

	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="css/animations.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
		integrity="sha384-qzFighx3q3jKilo+nmSE7VwaxdJGpPbWEaIj+IwFJQO/nXqD0Qc1t4+gKo0Gw4J4" crossorigin="anonymous">
</head>

<body class="no-trans">
	<!-- scrollToTop -->
	<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

	<!-- header start -->
	<?php 
		include_once '/wamp64/www/Sistema_web_seguridad/View/Layout/header.php';
	?>
	<!-- header end -->

	<!-- banner start -->
	<div id="banner" class="banner">
		<div class="banner-image"></div>
		<div class="banner-caption">
			<div class="container">
				<div class="row">
					<div class="caption-data" style="margin-top: 0px; opacity: 1;" data-animation-effect="fadeIn">
						<h1>TUS DATOS ESTAN EXPUESTOS</h1>
						<h3 class="padding-top30">Sabias que mas del 60% de usuarios tiene datos privados como
							contraseñas, fotos y videos expuestos en Internet</h3>
						<div class="padding-top60 contact-form">
							<button class="btn cta-button">Saber mas</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->
	<section class="hero-caption secPadding">

		<div class="container">

			<div class="row " style="margin-top: 0px;">
				<div class="col-sm-12">
					<h2>Bienvenido a <strong>CiberEdu</strong> - <span>Institucion </span> Educativa</h2>
					<p>¡Bienvenido al sitio web educacional sobre ciberseguridad! Aquí aprenderás cómo proteger tus
						datos personales, evitar los ataques de hackers y navegar por internet de forma segura y
						responsable. También te divertirás con nuestros juegos, retos y actividades interactivas. No te
						preocupes, no te pediremos tu contraseña ni tu número de tarjeta de crédito. Eso sería muy poco
						ciberseguro, ¿verdad? 😉</p>
				</div>

			</div>

		</div>

	</section>
	<!-- section start -->
	<section class="section transprant-bg pclear secPadding">
		<div class="container no-view" data-animation-effect="fadeIn">
			<h1 id="services" class="title text-center">Tips sobre Seguridad</h1>
			<div class="space"></div>
			<div class="row">
				<div class="col-md-4">
					<div class="media block-list">
						<div class="media-left">
							<!-- <i class="fa fa-trophy"></i>  -->


							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-asterisk" viewBox="0 0 16 16">
								<path
									d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-asterisk" viewBox="0 0 16 16" transform="translate(20, -22)">
								<path
									d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-asterisk" viewBox="0 0 16 16" transform="translate(40, -44)">
								<path
									d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
							</svg>




						</div>
						<div class="media-body">
							<h3 class="media-heading">Contraseñas seguras</h3>
							<blockquote>
								<p>Elije contraseñas fuertes y seguras, utilizando una combinación de letras, números y
									caracteres especiales. Recuerda cambiarlas regularmente y no las compartas con
									nadie.</p>

							</blockquote>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="media block-list">
						<div class="media-left">
							<!-- <i class="fa fa-gear"></i> -->
							<svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor"
								class="bi bi-check2-all" viewBox="0 0 16 16">
								<path
									d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z" />
								<path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
							</svg>
						</div>
						<div class="media-body">
							<h3 class="media-heading">Verificación en dos pasos</h3>
							<blockquote>
								<p>Activa la autenticación de dos factores en todas tus cuentas, esto proporcionara una
									capa adicional de seguridad.</p>

							</blockquote>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="media block-list">
						<div class="media-left">
							<!--<i class="fa fa-laptop"></i>-->
							<svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor"
								class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
								<path fill-rule="evenodd"
									d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z" />
								<path
									d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z" />
							</svg>
						</div>
						<div class="media-body">
							<h3 class="media-heading">Actualizaciones de software</h3>
							<blockquote>
								<p>Siempre mantenen tu software actualizado, ya que los parches de seguridad pueden
									proteger contra vulnerabilidades conocidas.</p>

							</blockquote>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="media block-list">
						<div class="media-left">
							<!-- <i class="fa fa-clock-o"></i> -->
							<svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor"
								class="bi bi-database-check" viewBox="0 0 16 16">
								<path
									d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514Z" />
								<path
									d="M12.096 6.223A4.92 4.92 0 0 0 13 5.698V7c0 .289-.213.654-.753 1.007a4.493 4.493 0 0 1 1.753.25V4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.525 4.525 0 0 1-.813-.927C8.5 14.992 8.252 15 8 15c-1.464 0-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13h.027a4.552 4.552 0 0 1 0-1H8c-1.464 0-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10c.262 0 .52-.008.774-.024a4.525 4.525 0 0 1 1.102-1.132C9.298 8.944 8.666 9 8 9c-1.464 0-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777ZM3 4c0-.374.356-.875 1.318-1.313C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4Z" />
							</svg>
						</div>
						<div class="media-body">
							<h3 class="media-heading">Copias de seguridad</h3>
							<blockquote>
								<p>Realiza copias de seguridad de todos tus datos importantes regularmente para evitar
									la pérdida de información.</p>

							</blockquote>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="media block-list">
						<div class="media-left">
							<!-- <i class="fa fa-heart"></i> -->
							<svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor"
								class="bi bi-browser-chrome" viewBox="0 0 16 16">
								<path fill-rule="evenodd"
									d="M16 8a8.001 8.001 0 0 1-7.022 7.94l1.902-7.098a2.995 2.995 0 0 0 .05-1.492A2.977 2.977 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8ZM0 8a8 8 0 0 0 7.927 8l1.426-5.321a2.978 2.978 0 0 1-.723.255 2.979 2.979 0 0 1-1.743-.147 2.986 2.986 0 0 1-1.043-.7L.633 4.876A7.975 7.975 0 0 0 0 8Zm5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a2.979 2.979 0 0 0-1.252.243 2.987 2.987 0 0 0-1.81 2.59ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
							</svg>
						</div>
						<div class="media-body">
							<h3 class="media-heading">Comprobar la URL</h3>
							<blockquote>
								<p>Siempre debes verificar la URL antes de ingresar información personal o financiera,
									ya que los sitios de phishing pueden imitar la apariencia de sitios web legítimos.
								</p>

							</blockquote>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="media block-list">
						<div class="media-left">
							<!-- <i class="fa fa-magic"></i> -->
							<svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor"
								class="bi bi-lock" viewBox="0 0 16 16">
								<path
									d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
							</svg>
						</div>
						<div class="media-body">
							<h3 class="media-heading">Privacidad de datos</h3>
							<blockquote>
								<p>Recuerda que las redes sociales cuentan con politicas de privacidad que podrás
									aprender en este sitio web..</p>

							</blockquote>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section end -->

	<!-- section start -->
	<section class="section clearfix no-view secPadding" data-animation-effect="fadeIn">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 id="about" class="title text-center">Prueba nuestros <span>Juegos</span></h1>
					<p class="lead text-center">Diviertete aprendiendo con nuestros juegos de seguridad informatica y
						participa por grandes premios .</p>
					<div class="space"></div>
					<div class="row">
						<div class="col-md-6">
							<img src="https://media.istockphoto.com/id/1376339349/es/vector/ilustraci%C3%B3n-vectorial-neon-future-game-pad-fondo.jpg?s=1024x1024&w=is&k=20&c=JPk0114ljfbJM65QgRW1yKeTztxJfGx2PoRG0zsrxqQ="
								alt="">
							<div class="space"></div>
						</div>
						<div class="col-md-6">
							<p>Estos juegos pueden incluir simulaciones interactivas de situaciones de la vida real en
								las que se debe aplicar la seguridad informática, como la prevención de ataques de
								phishing o la protección de la información personal. También incluye juegos de trivia o
								rompecabezas que desafíen a los usuarios a poner en práctica sus conocimientos sobre
								seguridad informática.</p>
							<p>Aqui te mostramos una lista de los juegos que puedes ocupar.</p>
							<ul class="list-unstyled">
								<li><i class="fa fa-arrow-circle-right pr-10 colored"></i><a href="hack_atrap.py"> El
										hacker atrapado </a></li>
								<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Proteccion de Datos</li>
								<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Contraseña seguras</li>
								<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Cyber Escape Room</li>
								<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Desafio de Ingenieria social
								</li>
							</ul>
						</div>
					</div>
					<div class="space"></div>
					<h2>Ofrecemos la mejor educación en ciberseguridad</h2>
					<div class="row">
						<div class="col-md-6">
							<p>En nuestro sitio web de enseñanza sobre ciberseguridad para escolares, aprenderás todo lo
								necesario para proteger tus dispositivos, información personal y actividades en línea.
								Nuestros contenidos didácticos están diseñados especialmente para que los niños y
								jóvenes entiendan de forma fácil y divertida conceptos complejos sobre ciberseguridad.
							</p>
							<ul class="list-unstyled">
								<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Aprenderás a crear
									contraseñas seguras y proteger tu información personal en línea</li>
								<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Sabrás cómo identificar y
									evitar posibles amenazas y riesgos en interne</li>
								<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Conocerás las herramientas y
									programas de seguridad que te ayudarán a navegar de forma más segura</li>
								<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Te enseñaremos cómo actuar si
									eres víctima de un ciberataque o acoso en línea</li>
								<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Descubrirás cómo ser un
									ciudadano digital responsable y ético</li>
							</ul>
							<p>En definitiva, en nuestro sitio web encontrarás todo lo que necesitas saber para navegar
								de forma segura y responsable en internet.</p>
						</div>
						<div class="col-md-6">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
												aria-expanded="true" aria-controls="collapseOne">
												¿Qué es la ciberseguridad?
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
										aria-labelledby="headingOne">
										<div class="panel-body">
											La ciberseguridad es el conjunto de medidas y prácticas que se utilizan para
											proteger los dispositivos, redes y sistemas informáticos de posibles
											amenazas y riesgos en internet. En nuestro sitio web aprenderás todo lo
											necesario para navegar de forma segura en línea.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion"
												href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												¿Por qué es importante la ciberseguridad?
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
										aria-labelledby="headingTwo">
										<div class="panel-body">
											La ciberseguridad es importante porque te ayuda a proteger tu información
											personal y financiera. También te ayuda a evitar ser víctima de robo de
											identidad y otras formas de fraude en línea.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion"
												href="#collapseThree" aria-expanded="false"
												aria-controls="collapseThree">
												¿Cómo puedo proteger mi información personal en línea?
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
										aria-labelledby="headingThree">
										<div class="panel-body">
											Para proteger tu información personal en línea, es importante utilizar
											contraseñas seguras y únicas para cada cuenta. También debes tener cuidado
											con los correos electrónicos no solicitados y las solicitudes de amistad en
											las redes sociales. Además, es importante no compartir información personal
											en línea, como tu número de seguro social o información bancaria.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section end -->

	<!-- section start -->
	<div class="default-bg colord secPadding">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h1 class="text-center">Aprende de forma 100% gratuita.</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- section end -->

	<!-- section start -->
	<section class="section secPadding">
		<div class="container">
			<h1 class="text-center title" id="portfolio">Aprende</h1>
			<div class="separator"></div>
			<p class="lead text-center">Aprende los conceptos basicos de la seguridad y evita que te roben tu
				informacion personal.<br> Unete a nuestra comunidad.</p>
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
						</ul>
					</div>
					<!-- isotope filters end -->

					<!-- portfolio items start -->
					<div class="isotope-container row grid-space-20">
						<div class="col-sm-6 col-md-3 isotope-item web-design">
							<div class="image-box">
								<div class="overlay-container">
									<img src="images/portfolio-1.jpg" alt="">
									<a class="overlay" data-toggle="modal" data-target="#project-1">
										<i class="fa fa-search-plus"></i>

									</a>
								</div>
								<a class="btn btn-default btn-block" data-toggle="modal"
									data-target="#project-1">Project Title</a>
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
													<img src="images/portfolio-1.jpg" alt="">
													<br />
													<h3>Project Description</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
														sed, quidem quis praesentium, ut unde. Quae sed, incidunt
														laudantium nesciunt, optio corporis quod earum pariatur omnis
														illo saepe numquam suscipit, nemo placeat dignissimos eius
														mollitia et quas officia doloremque ipsum labore rem deserunt.
													</p>
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
									<img src="images/portfolio-2.jpg" alt="">
									<a class="overlay" data-toggle="modal" data-target="#project-2">
										<i class="fa fa-search-plus"></i>

									</a>
								</div>
								<a class="btn btn-default btn-block" data-toggle="modal"
									data-target="#project-2">Project Title</a>
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
													<img src="images/portfolio-2.jpg" alt="">
													<br />
													<h3>Project Description</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
														sed, quidem quis praesentium, ut unde. Quae sed, incidunt
														laudantium nesciunt, optio corporis quod earum pariatur omnis
														illo saepe numquam suscipit, nemo placeat dignissimos eius
														mollitia et quas officia doloremque ipsum labore rem deserunt.
													</p>
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
									<img src="images/portfolio-3.jpg" alt="">
									<a class="overlay" data-toggle="modal" data-target="#project-3">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
								<a class="btn btn-default btn-block" data-toggle="modal"
									data-target="#project-3">Project Title</a>
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
													<img src="images/portfolio-3.jpg" alt="">
													<br />
													<h3>Project Description</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
														sed, quidem quis praesentium, ut unde. Quae sed, incidunt
														laudantium nesciunt, optio corporis quod earum pariatur omnis
														illo saepe numquam suscipit, nemo placeat dignissimos eius
														mollitia et quas officia doloremque ipsum labore rem deserunt.
													</p>
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
									<img src="images/portfolio-4.jpg" alt="">
									<a class="overlay" data-toggle="modal" data-target="#project-4">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
								<a class="btn btn-default btn-block" data-toggle="modal"
									data-target="#project-4">Project Title</a>
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
													<img src="images/portfolio-4.jpg" alt="">
													<br />
													<h3>Project Description</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
														sed, quidem quis praesentium, ut unde. Quae sed, incidunt
														laudantium nesciunt, optio corporis quod earum pariatur omnis
														illo saepe numquam suscipit, nemo placeat dignissimos eius
														mollitia et quas officia doloremque ipsum labore rem deserunt.
													</p>
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
									<img src="images/portfolio-5.jpg" alt="">
									<a class="overlay" data-toggle="modal" data-target="#project-5">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
								<a class="btn btn-default btn-block" data-toggle="modal"
									data-target="#project-5">Project Title</a>
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
													<img src="images/portfolio-5.jpg" alt="">
													<br />
													<h3>Project Description</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
														sed, quidem quis praesentium, ut unde. Quae sed, incidunt
														laudantium nesciunt, optio corporis quod earum pariatur omnis
														illo saepe numquam suscipit, nemo placeat dignissimos eius
														mollitia et quas officia doloremque ipsum labore rem deserunt.
													</p>
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
									<img src="images/portfolio-6.jpg" alt="">
									<a class="overlay" data-toggle="modal" data-target="#project-6">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
								<a class="btn btn-default btn-block" data-toggle="modal"
									data-target="#project-6">Project Title</a>
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
													<img src="images/portfolio-6.jpg" alt="">
													<br />
													<h3>Project Description</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
														sed, quidem quis praesentium, ut unde. Quae sed, incidunt
														laudantium nesciunt, optio corporis quod earum pariatur omnis
														illo saepe numquam suscipit, nemo placeat dignissimos eius
														mollitia et quas officia doloremque ipsum labore rem deserunt.
													</p>
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
									<img src="images/portfolio-7.jpg" alt="">
									<a class="overlay" data-toggle="modal" data-target="#project-7">
										<i class="fa fa-search-plus"></i>
										<span>Site Building</span>
									</a>
								</div>
								<a class="btn btn-default btn-block" data-toggle="modal"
									data-target="#project-7">Project Title</a>
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
													<img src="images/portfolio-7.jpg" alt="">
													<br />
													<h3>Project Description</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
														sed, quidem quis praesentium, ut unde. Quae sed, incidunt
														laudantium nesciunt, optio corporis quod earum pariatur omnis
														illo saepe numquam suscipit, nemo placeat dignissimos eius
														mollitia et quas officia doloremque ipsum labore rem deserunt.
													</p>
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
									<img src="images/portfolio-8.jpg" alt="">
									<a class="overlay" data-toggle="modal" data-target="#project-8">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
								<a class="btn btn-default btn-block" data-toggle="modal"
									data-target="#project-8">Project Title</a>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="project-8" tabindex="-1" role="dialog"
								aria-labelledby="project-8-label" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span
													aria-hidden="true">&times;</span><span
													class="sr-only">Close</span></button>
											<h4 class="modal-title" id="project-8-label">Project Title</h4>
										</div>
										<div class="modal-body">

											<div class="row">
												<div class="col-md-12">
													<img src="images/portfolio-8.jpg" alt="">
													<br />
													<h3>Project Description</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
														sed, quidem quis praesentium, ut unde. Quae sed, incidunt
														laudantium nesciunt, optio corporis quod earum pariatur omnis
														illo saepe numquam suscipit, nemo placeat dignissimos eius
														mollitia et quas officia doloremque ipsum labore rem deserunt.
													</p>
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
									<img src="images/portfolio-9.jpg" alt="">
									<a class="overlay" data-toggle="modal" data-target="#project-9">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
								<a class="btn btn-default btn-block" data-toggle="modal"
									data-target="#project-9">Project Title</a>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="project-9" tabindex="-1" role="dialog"
								aria-labelledby="project-9-label" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span
													aria-hidden="true">&times;</span><span
													class="sr-only">Close</span></button>
											<h4 class="modal-title" id="project-9-label">Project Title</h4>
										</div>
										<div class="modal-body">

											<div class="row">
												<div class="col-md-12">
													<img src="images/portfolio-9.jpg" alt="">
													<br />
													<h3>Project Description</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
														sed, quidem quis praesentium, ut unde. Quae sed, incidunt
														laudantium nesciunt, optio corporis quod earum pariatur omnis
														illo saepe numquam suscipit, nemo placeat dignissimos eius
														mollitia et quas officia doloremque ipsum labore rem deserunt.
													</p>
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
									<img src="images/portfolio-10.jpg" alt="">
									<a class="overlay" data-toggle="modal" data-target="#project-10">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
								<a class="btn btn-default btn-block" data-toggle="modal"
									data-target="#project-10">Project Title</a>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="project-10" tabindex="-1" role="dialog"
								aria-labelledby="project-10-label" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span
													aria-hidden="true">&times;</span><span
													class="sr-only">Close</span></button>
											<h4 class="modal-title" id="project-10-label">Project Title</h4>
										</div>
										<div class="modal-body">

											<div class="row">
												<div class="col-md-12">
													<img src="images/portfolio-10.jpg" alt="">
													<br />
													<h3>Project Description</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
														sed, quidem quis praesentium, ut unde. Quae sed, incidunt
														laudantium nesciunt, optio corporis quod earum pariatur omnis
														illo saepe numquam suscipit, nemo placeat dignissimos eius
														mollitia et quas officia doloremque ipsum labore rem deserunt.
													</p>
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
									<img src="images/portfolio-11.jpg" alt="">
									<a class="overlay" data-toggle="modal" data-target="#project-11">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
								<a class="btn btn-default btn-block" data-toggle="modal"
									data-target="#project-11">Project Title</a>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="project-11" tabindex="-1" role="dialog"
								aria-labelledby="project-11-label" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span
													aria-hidden="true">&times;</span><span
													class="sr-only">Close</span></button>
											<h4 class="modal-title" id="project-11-label">Project Title</h4>
										</div>
										<div class="modal-body">

											<div class="row">
												<div class="col-md-12">
													<img src="images/portfolio-11.jpg" alt="">
													<br />
													<h3>Project Description</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
														sed, quidem quis praesentium, ut unde. Quae sed, incidunt
														laudantium nesciunt, optio corporis quod earum pariatur omnis
														illo saepe numquam suscipit, nemo placeat dignissimos eius
														mollitia et quas officia doloremque ipsum labore rem deserunt.
													</p>
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
									<img src="images/portfolio-12.jpg" alt="">
									<a class="overlay" data-toggle="modal" data-target="#project-12">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
								<a class="btn btn-default btn-block" data-toggle="modal"
									data-target="#project-12">Project Title</a>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="project-12" tabindex="-1" role="dialog"
								aria-labelledby="project-12-label" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span
													aria-hidden="true">&times;</span><span
													class="sr-only">Close</span></button>
											<h4 class="modal-title" id="project-12-label">Project Title</h4>
										</div>
										<div class="modal-body">

											<div class="row">
												<div class="col-md-12">
													<img src="images/portfolio-12.jpg" alt="">
													<br />
													<h3>Project Description</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
														sed, quidem quis praesentium, ut unde. Quae sed, incidunt
														laudantium nesciunt, optio corporis quod earum pariatur omnis
														illo saepe numquam suscipit, nemo placeat dignissimos eius
														mollitia et quas officia doloremque ipsum labore rem deserunt.
													</p>
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

					</div>
					<!-- portfolio items end -->

				</div>
			</div>
		</div>
	</section>
	<!-- section end -->
	<!-- section start -->
	<section class="default-bg secPadding">

		<div class="container">
			<div class="row">
				<div class='col-md-offset-2 col-md-8 text-center'>
					<h2>Testimonios</h2>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-offset-2 col-md-8'>
					<div class="carousel slide" data-ride="carousel" id="quote-carousel">
						<!-- Bottom Carousel Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#quote-carousel" data-slide-to="1"></li>
							<li data-target="#quote-carousel" data-slide-to="2"></li>
						</ol>

						<!-- Carousel Slides / Quotes -->
						<div class="carousel-inner">

							<!-- Quote 1 -->
							<div class="item active">
								<blockquote>
									<div class="row">
										<div class="col-sm-3 text-center">
											<img class="img-circle"
												src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg"
												style="width: 100px;height:100px;">
										</div>
										<div class="col-sm-9">
											<p>Nunca he tomado importanacia sobre los terminos y condiciones que acepto,
												porque siempre tengo confianza en las grandes corporaciones</p>
											<small>Piero Matias - Usuario</small>
										</div>
									</div>
								</blockquote>
							</div>
							<!-- Quote 2 -->
							<div class="item">
								<blockquote>
									<div class="row">
										<div class="col-sm-3 text-center">
											<img class="img-circle"
												src="https://s3.amazonaws.com/uifaces/faces/twitter/mijustin/128.jpg"
												style="width: 100px;height:100px;">
										</div>
										<div class="col-sm-9">
											<p>No le presto importancia a los terminos porque nunca he sentido que me
												roben algo, o no he percibido esa conducta.</p>
											<small>Andres Ventura - Estudiante</small>
										</div>
									</div>
								</blockquote>
							</div>
							<!-- Quote 3 -->
							<div class="item">
								<blockquote>
									<div class="row">
										<div class="col-sm-3 text-center">
											<img class="img-circle"
												src="https://s3.amazonaws.com/uifaces/faces/twitter/keizgoesboom/128.jpg"
												style="width: 100px;height:100px;">
										</div>
										<div class="col-sm-9">
											<p>A mi nunca me han robado nada, creo que no es muy importante la
												informacion que comparten.</p>
											<small>Liliana Andrea - Administradora</small>
										</div>
									</div>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section end -->
	<section id="price" class="price-table secPadding">
		<div class="container text-center">
			<div class="heading">
				<h1 class="text-center title" id="">Noticias</h1>
				<div class="separator"></div>
				<p class="lead text-center">Lee nuestras últimas noticias y consejos para mantenerte seguro en línea.
				</p>
				<br>
			</div>
			<section class="noticias">
				<h2>Noticias</h2>
				<div id="noticias-contenedor">
					<article>
						<h3><b> HACKERS ROBAN DATOS DE MILLONES DE USUARIOS DE UNA POPULAR RED SOCIAL</b></h3>
						<div class="noticia">
							<div class="imagen">
								<img src="https://cdn.pixabay.com/photo/2016/12/21/17/39/cyber-security-1923446_1280.png"
									alt="Descripción de la imagen" alt="Descripción de la imagen">
							</div>
							<div class="contenido_noticia">
								<p>Esta noticia se refiere a un ataque cibernético realizado por hackers en el que
									lograron obtener información personal de millones de usuarios de una red social
									popular. </p>
							</div>
							<a href="#">Leer más</a>
						</div>


					</article>

					<article>
						<h3><b> Expertos en seguridad descubren una nueva vulnerabilidad en sistemas operativos
								móviles</b></h3>
						<div class="noticia">
							<div class="imagen">
								<img src="https://media.istockphoto.com/id/1170045922/es/foto/persona-an%C3%B3nima-en-el-cap%C3%B3-sentado-frente-a-la-computadora-trabajando-con-el-ordenador.jpg?s=1024x1024&w=is&k=20&c=Ka2nUxzwJLhXVFERCBjRhJeywQn7BqlN4wScfH0OKOU="
									alt="Descripción de la imagen" alt="Descripción de la imagen">
							</div>
							<div class="contenido_noticia">
								<p>Esta noticia se refiere a la identificación de una nueva vulnerabilidad en los
									sistemas operativos móviles, la cual podría ser explotada por ciberdelincuentes para
									obtener acceso no autorizado a datos personales... </p>
							</div>
							<a href="#">Leer más</a>
						</div>
					</article>

					<article>
						<h3><b> Ransomware ataca a importantes empresas de todo el mundo</b></h3>
						<div class="noticia">
							<div class="imagen">
								<img src="https://media.istockphoto.com/id/1345797360/es/vector/sistema-hackeado-mensaje-de-alerta-de-advertencia-en-la-pantalla.jpg?s=1024x1024&w=is&k=20&c=gysXgs8BnE_lsJ1dM0KWiUFM4IHs0qqupkzbjtB6fuE="
									alt="Descripción de la imagen">
							</div>
							<div class="contenido_noticia">
								<p>Esta noticia se refiere a un ataque cibernético en el que un software malicioso
									llamado ransomware infectó los sistemas informáticos de varias empresas importantes
									alrededor del mundo, exigiendo un rescate a cambio de la recuperación de los datos
									cifrados. </p>
							</div>
							<a href="#">Leer más</a>
						</div>
					</article>
					<article>
						<h3><b> Expertos en seguridad descubren una nueva vulnerabilidad en sistemas operativos
								móviles</b></h3>
						<div class="noticia">
							<div class="imagen">
								<img src="https://media.istockphoto.com/id/1170045922/es/foto/persona-an%C3%B3nima-en-el-cap%C3%B3-sentado-frente-a-la-computadora-trabajando-con-el-ordenador.jpg?s=1024x1024&w=is&k=20&c=Ka2nUxzwJLhXVFERCBjRhJeywQn7BqlN4wScfH0OKOU="
									alt="Descripción de la imagen" alt="Descripción de la imagen">
							</div>
							<div class="contenido_noticia">
								<p>Esta noticia se refiere a la identificación de una nueva vulnerabilidad en los
									sistemas operativos móviles, la cual podría ser explotada por ciberdelincuentes para
									obtener acceso no autorizado a datos personales... </p>
							</div>
							<a href="#">Leer más</a>
						</div>
					</article>
					<article>
						<h3><b> Expertos en seguridad descubren una nueva vulnerabilidad en sistemas operativos
								móviles</b></h3>
						<div class="noticia">
							<div class="imagen">
								<img src="https://media.istockphoto.com/id/1170045922/es/foto/persona-an%C3%B3nima-en-el-cap%C3%B3-sentado-frente-a-la-computadora-trabajando-con-el-ordenador.jpg?s=1024x1024&w=is&k=20&c=Ka2nUxzwJLhXVFERCBjRhJeywQn7BqlN4wScfH0OKOU="
									alt="Descripción de la imagen" alt="Descripción de la imagen">
							</div>
							<div class="contenido_noticia">
								<p>Esta noticia se refiere a la identificación de una nueva vulnerabilidad en los
									sistemas operativos móviles, la cual podría ser explotada por ciberdelincuentes para
									obtener acceso no autorizado a datos personales... </p>
							</div>
							<a href="#">Leer más</a>
						</div>
					</article>
					<article>
						<h3><b> Expertos en seguridad descubren una nueva vulnerabilidad en sistemas operativos
								móviles</b></h3>
						<div class="noticia">
							<div class="imagen">
								<img src="https://media.istockphoto.com/id/1170045922/es/foto/persona-an%C3%B3nima-en-el-cap%C3%B3-sentado-frente-a-la-computadora-trabajando-con-el-ordenador.jpg?s=1024x1024&w=is&k=20&c=Ka2nUxzwJLhXVFERCBjRhJeywQn7BqlN4wScfH0OKOU="
									alt="Descripción de la imagen" alt="Descripción de la imagen">
							</div>
							<div class="contenido_noticia">
								<p>Esta noticia se refiere a la identificación de una nueva vulnerabilidad en los
									sistemas operativos móviles, la cual podría ser explotada por ciberdelincuentes para
									obtener acceso no autorizado a datos personales... </p>
							</div>
							<a href="#">Leer más</a>
						</div>
					</article>
					<article>
						<h3><b> Expertos en seguridad descubren una nueva vulnerabilidad en sistemas operativos
								móviles</b></h3>
						<div class="noticia">
							<div class="imagen">
								<img src="https://media.istockphoto.com/id/1170045922/es/foto/persona-an%C3%B3nima-en-el-cap%C3%B3-sentado-frente-a-la-computadora-trabajando-con-el-ordenador.jpg?s=1024x1024&w=is&k=20&c=Ka2nUxzwJLhXVFERCBjRhJeywQn7BqlN4wScfH0OKOU="
									alt="Descripción de la imagen" alt="Descripción de la imagen">
							</div>
							<div class="contenido_noticia">
								<p>Esta noticia se refiere a la identificación de una nueva vulnerabilidad en los
									sistemas operativos móviles, la cual podría ser explotada por ciberdelincuentes para
									obtener acceso no autorizado a datos personales... </p>
							</div>
							<a href="#">Leer más</a>
						</div>
					</article>
				</div>

				<div id="paginacion-noticias"></div>
			</section>
			<script src="bootstrap/js/pagination.js"></script>
			<script> paginarNoticias(); </script>

			<!-- 
         	<div class="row"> 
            <div class="col-sm-3">
              <div class="panel panel-default text-center">
                <div class="panel-heading">
                  <h3>Basic</h3>
                </div>
                
                <ul class="list-group">
                  <p>
					El ransomware sigue siendo una amenaza creciente para las empresas. Según un informe reciente, se estima que el costo promedio de recuperación después de un ataque de ransomware es de más de $1 millón. Los expertos en ciberseguridad aconsejan a las empresas tomar medidas preventivas como implementar medidas de seguridad adicionales y capacitar a los empleados en ciberseguridad para evitar ataques costosos</p>
                  <li class="list-group-item"><a class="btn btn-default">Leer mas!</a></li> 
                </ul>
              </div>          
            </div>
            <div class="col-sm-3">
              <div class="panel panel-default text-center">
                <div class="panel-heading">
                  <h3>Plus</h3>
                </div>
                <div class="panel-body">
                  <h3 class="panel-title price">$19<span class="price-cents">99</span><span class="price-month">mo.</span></h3>
                </div>
                <ul class="list-group">
                  <li class="list-group-item">10 Projects</li>
                  <li class="list-group-item">10 GB of Storage</li>
                  <li class="list-group-item">Up to 250 Users</li>
                  <li class="list-group-item">25 GB Bandwidth</li>
                  <li class="list-group-item">Security Suite</li>
                  <li class="list-group-item"><a class="btn btn-default">Sign Up Now!</a></li>
                </ul>
              </div>          
            </div>
            <div class="col-sm-3">
              <div class="panel panel-danger text-center">
                <div class="panel-heading">
                  <h3>Premium</h3>
                </div>
                <div class="panel-body">
                  <h3 class="panel-title price">$29<span class="price-cents">99</span><span class="price-month">mo.</span></h3>
                </div>
                <ul class="list-group">
                  <li class="list-group-item">Unlimited</li>
                  <li class="list-group-item">50 GB of Storage</li>
                  <li class="list-group-item">Up to 1000 Users</li>
                  <li class="list-group-item">100 GB Bandwidth</li>
                  <li class="list-group-item">Security Suite</li>
                  <li class="list-group-item"><a class="btn btn-primary">Sign Up Now!</a></li>
                </ul>
              </div>          
            </div>
            <div class="col-sm-3">
              <div class="panel panel-default text-center">
                <div class="panel-heading">
                  <h3>Ultimate</h3>
                </div>
                <div class="panel-body">
                  <h3 class="panel-title price">$49<span class="price-cents">99</span><span class="price-month">mo.</span></h3>
                </div>
                <ul class="list-group">
                  <li class="list-group-item">Unlimited</li>
                  <li class="list-group-item">150 GB of Storage</li>
                  <li class="list-group-item">Unlimited</li>
                  <li class="list-group-item">500 GB Bandwidth</li>
                  <li class="list-group-item">Security Suite</li>
                  <li class="list-group-item"><a class="btn btn-default">Sign Up Now!</a></li>
                </ul>
              </div>          
            </div>
     
          </div>
         </div>      
    </section> -->


			<!-- footer start -->
			<footer id="footer">

				<!-- .footer start -->
				<div class="footer section">
					<div class="container">
						<h1 class="title text-center" id="contact">Contacto</h1>
						<div class="space"></div>
						<div class="row">

							<div class="col-sm-6">
								<div class="footer-content">
									<form role="form" id="footer-form">
										<div class="form-group has-feedback">
											<label class="sr-only" for="name2">Name</label>
											<input type="text" class="form-control" id="name2" placeholder="Nombre"
												name="name2" required>
											<i class="fa fa-user form-control-feedback"></i>
										</div>
										<div class="form-group has-feedback">
											<label class="sr-only" for="email2">Email address</label>
											<input type="email" class="form-control" id="email2"
												placeholder="Ingrese email" name="email2" required>
											<i class="fa fa-envelope form-control-feedback"></i>
										</div>
										<div class="form-group has-feedback">
											<label class="sr-only" for="message2">Message</label>
											<textarea class="form-control" rows="8" id="message2" placeholder="Mensaje"
												name="message2" required></textarea>
											<i class="fa fa-pencil form-control-feedback"></i>
										</div>
										<input type="submit" value="Enviar" class="btn btn-default">
									</form>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="footer-content">


									<div class="widget-content">

										<p>Ante cualquier duda que tengas con el sitio web o alguna informacion que no
											tenga explicado, no dudes en comunicarte con nosotros. Te ayudaremos en el
											menor tiempo posible. </p><br />

										<p class="contacts"><i class="fa fa-map-marker"></i> 1508 Puente Piedra, Lima,
											PE 150015 </p>

										<p class="contacts"><i class="fa fa-phone"></i> 945817823</p>

										<p class="contacts"><i class="fa fa-envelope"></i> support@biss.com</p>



									</div>

									</aside>
									<ul class="social-links">
										<li class="facebook"><a target="_blank" href="#"><i
													class="fa fa-facebook"></i></a></li>
										<li class="twitter"><a target="_blank" href="#"><i
													class="fa fa-twitter"></i></a></li>
										<li class="googleplus"><a target="_blank" href="#"><i
													class="fa fa-google-plus"></i></a></li>
										<li class="skype"><a target="_blank" href="#"><i class="fa fa-skype"></i></a>
										</li>
										<li class="linkedin"><a target="_blank" href="#"><i
													class="fa fa-linkedin"></i></a></li>
										<li class="youtube"><a target="_blank" href="#"><i
													class="fa fa-youtube"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .footer end -->

				<!-- .subfooter start -->
				<div class="subfooter">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<p class="text-center">Copyright © 2023. <a href="https://webthemez.com/tag/free"
										target="_blank">Todos los derechos reservados</a> by Rodrigo Alexis</p>
							</div>
						</div>
					</div>
				</div>
				<!-- .subfooter end -->

			</footer>
			<!-- footer end -->

			<!-- JavaScript -->
			<script type="text/javascript" src="plugins/jquery.min.js"></script>
			<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="plugins/modernizr.js"></script>
			<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
			<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>
			<script type="text/javascript" src="plugins/jquery.appear.js"></script>

			<!-- Custom Scripts -->
			<script type="text/javascript" src="js/custom.js"></script>

</body>

</html>