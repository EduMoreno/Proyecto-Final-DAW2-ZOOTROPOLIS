<?php
session_start();

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Zootropolis</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="images/favicon.ico">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
  <?php if(!isset($_SESSION["user_id"])):?>

		<div class="header">
				<div class="container">
			<div><span style="float:right; "><a href="../Acceso.php"> Iniciar Sesión</a> o <a href="../registro.php">  Registrate </a></span></div>
		 <?php else:?>
		 			<div><span style="float:right; "><a href="../../Controller/logout.php"> Cerrar Sesión</a> </span></div>
		<?php endif;?>
		<br>
					<div class="header-top">
						<nav class="navbar navbar-default">
							<div class="container-fluid">
						<div class="navbar-header">
									  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
									  </button>
									  <div>
	  
									<div class="navbar-brand" style="display: inline-block; margin-right: 35px;">

										<h1><a href="index.php" >Zootropolis</a></h1>

									</div>
									
							 <span><img  style="display: inline-block;height: 49px; float:right; margin-left: -49px;margin-top: -8px;" src="images/logo.svg" alt="icon"></span>

								</div>
								</div>

							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							  <ul class="nav navbar-nav">
									<li class="active"><a href="index.php">Inicio</a></li>
									<li><a href="sobrenosotros.php">Sobre Nosotros</a></li>
									<li><a href="horario.php">Horario</a></li>
										<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galeria</a>
								<ul class="dropdown-menu">
									<li><a href="galeria.php">Fotos</a></li>
									<li><a href="videos.php">Videos</a></li>
								</ul>
									</li>
									<li><a href="contacto.php">Contacto</a></li>
								</ul>
							  
							</div>
  </div>
						</nav>

					</div>
				</div>
			</div>
			<div class="header-banner">
			
			
			</div>
		
			<div class="content">
				<div class="welcome">
					<div class="container">
						<h2>Bienvenido a zootropolis</h2>
							<div class="welcome-grids">
								<div class="col-md-3 welcome-grid">
									<img src="images/p1.jpg" alt=" " class="img-responsive" />
									<div class="wel-info">
										<h4>Gorilas</h4>
										<p></p>
									</div>
								</div>
								<div class="col-md-3 welcome-grid">
									<img src="images/p2.jpg" alt=" " class="img-responsive" />
									<div class="wel-info">
										<h4>Aves Marinas </h4>
										<p></p>
									</div>
								</div>
								<div class="col-md-3 welcome-grid">
									<img src="images/p3.jpg" alt=" " class="img-responsive" />
									<div class="wel-info">
										<h4>Aves</h4>
										<p></p>
									</div>
								</div>
								<div class="col-md-3 welcome-grid">
									<img src="images/p4.jpg" alt=" " class="img-responsive" />
									<div class="wel-info">
										<h4>Felinos</h4>
										<p></p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
					</div>
				</div>
			<div class="feature">
					<div class="container">
						<div class="feature-grids">
								<div class="col-md-6 feature-grid">
										<a href="galeria.php"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span></a>
										<h4>Fotos</h4>
										<p></p>
									</div>
									<div class="col-md-6 feature-grid">
										<a href="videos.php"><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span></a>
										<h4>Videos</h4>
										<p></p>
									</div>
									
									<div class="clearfix"></div>
								</div>
					</div>
				</div>
				<div class="animals">
						<div class="container">
							<h3>Animales</h3>
							<div class="clients">
								<ul id="flexiselDemo3">
									<li><img src="images/m1.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m2.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m3.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m4.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m5.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m1.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m2.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m3.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m4.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m5.jpg" class="img-responsive" alt=""/></li>
								</ul>
									<script type="text/javascript">
								$(window).load(function() {
									
								  $("#flexiselDemo3").flexisel({
										visibleItems: 5,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems: 1
											}, 
											landscape: { 
												changePoint:640,
												visibleItems: 2
											},
											tablet: { 
												changePoint:768,
												visibleItems: 3
											}
										}
									});
									});
								</script>
								<script type="text/javascript" src="js/jquery.flexisel.js"></script>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<div class="testimonials">
				<div class="container">
					<p>¿Sabes cuál es el animal más peligroso del zoológico? Había una flecha que señalaba una pequeña cortina. Tantas eran las manos curiosas e impacientes que tiraban de ella que cada dos por tres teníamos que cambiarla. Detrás de la cortina había un espejo.</p>
					<h4><a href="https://es.wikipedia.org/wiki/Yann_Martel">Yann Martel</a></h4>
				</div>
			</div>
							<div class="events">
								<div class="container">
									<h3>Eventos</h3>
									<div class="events-grids">
											<div class="col-md-3 event-grid">
												<a href="#" class="mask">
												<img src="images/g7.jpg" class="img-responsive zoom-img" alt=""></a>
											</div>
											<div class="col-md-3 event-grid1">
												<h4>Exposición de aves </h4>
												<h5>14-junio-2017</h5>
												<p>Exposición de aves en la zona 5 </p>
											</div>
											<div class="col-md-3 event-grid">
												<a href="#" class="mask">
												 <img src="images/g9.jpg" class="img-responsive zoom-img" alt=""></a>
											</div>
											<div class="col-md-3 event-grid1">
												<h4>Visita turistica</h4>
												<h5>20-junio-2017</h5>
												<p>Visita turistica por la zona de los osos polares.</p>
											</div>
										<div class="clearfix"></div>
								</div>
							</div>
							</div>
						
				<div class="specials-section">
					<div class="container">
						<div class="specials-grids">
							
							<div class="col-md-4 specials1">
								<h3> Detalles</h3>
								<ul>
									<li><a href="sobrenosotros.php">Sobre Nosotros</a></li>
									<li><a href="contacto.php">¿Donde Encontrarnos?</a></li>
								</ul>
							</div>
							<div class="col-md-4 specials1">
								<h3>Contacto</h3>
								<address>
									<p>Zootropolis</p>
									<p>Maria Curie 7, Campanillas.</p>
									<p>Telefono : 952452585</p>
									<p>Email : <a href="mailto:edumorenoh@gmail.com">edumorenoh@gmail</a></p>
								</address>
							</div>
							<div class="col-md-4 specials1">
								<h3> Redes Sociales</h3>
								<ul>
									<li><a href="http://www.facebook.com">facebook</a></li>
									<li><a href="http://www.twitter.com">twitter</a></li>
									<li><a href="http://www.instagram.com">Instagram</a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-section">
				<div class="container">
					<div class="footer-top">
						<p>&copy; 2017 Eduardo Moreno</p>
					</div>
				</div>
			</div>
</body>
</html>
