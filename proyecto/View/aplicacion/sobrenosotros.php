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
									<li><a href="index.php">Inicio</a></li>
									<li class="active"><a href="sobrenosotros.php">Sobre Nosotros</a></li>
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
		<div class="banner-header">
			<div class="container">
				<h2>Sobre Nosotros</h2>
			</div>
			</div>
	<div class="content">
			<div class="about-section">
				<div class="container">
						<div class="about-grids">
							<div class="col-md-6 about-grid">
								<h3>¿Quienes Somos?</h3>
								<img src="images/p5.jpg" class="img-responsive" alt="/">
								<div class="about1">
									<h4>Presentación</h4>
									<p>Somos Zootropolis, el zoológico más grande y moderno de Andalucía y formamos parte de distintas asociaciónes
									de Zoológicos y Acuarios. Situado en un ambiente abierto, ofrecemos la oportunidad de ver a los animales
									y vivir una experiencia única en sintonía con la naturaleza con el objeto de que cada visitante
									adquiera conocimientos y desarrolle conductas que vayan de la mano con el cuidado del medio ambiente.</p>
								</div>
								<div class="about2">
								<h4>Ejemplares</h4>
								<p>Con más de 2.000 ejemplares de 250 especies diferentes, Zootropolis ha logrado gran reputación a nivel continental por su iniciativa de conservación,
								alto cuidado de especies en peligro y programas de mejoramiento para la óptima salud de los animales..</p>
								</div>
								</div>
							<div class="col-md-6 about-grid">
							<h3>Historia</h3>
								<div class="history">
									<h5>1994-2005</h5>
									<p>Durante años, la estrella del Zoo fue el famoso Copito de Nieve, único gorila albino conocido</p>
								</div>
								<div class="history1">
									<h5>2008-2017</h5>
									<p>En 2008 se presentó un proyecto de reforma que incluía una plataforma marina.Sin embargo, a causa de la crisis económica, el proyecto ha quedado aparcado de forma indefinida.</p>
								</div>
							
							</div>
							<div class="col-md-4 about-grid">
							<h3>Video</h3>
								<div class="trend">
									<p>Visitas a nuestro Zoo</p>
								</div>
								<div class="trend">
	<video controls  preload="auto"  style="width:120%; height:10%;">
    <source src="video/visita.mp4" type="video/mp4" />
    <source src="video/visita.webm" type="video/webm" />
    <source src="video/visita.ogv" type="video/ogg" />
    Tu navegador no soporta HTML5 Video
	</video>
			</div>
			<h3>Audio</h3>
			<audio controls>
  <source src="audio/pajaros.ogg" type="audio/ogg">
  <source src="audio/pajaros.mp3" type="audio/mpeg">
    Tu navegador no soporta el elemento audio
</audio>
							</div>
											
 
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
				<div class="ourteam">
					<div class="container">
						<h3>Cuidadores</h3>
						<div class="team-grids">
						<div class="col-md-3 team-grid">
							<img src="images/t1.jpg" class="img-responsive" alt="" />
							<h4>Jesús Sanchez Olmedo</h4>
							<p>Cuidador profesional de anfibios</p>
						</div>
						<div class="col-md-3 team-grid">
							<img src="images/t2.jpg" class="img-responsive" alt="" />
							<h4>Jennifer Fernandez Florido</h4>
							<p>Cuidadora profesional de felinos</p>
						</div>
						<div class="col-md-3 team-grid">
							<img src="images/t3.jpg" class="img-responsive" alt="" />
							<h4>Isabel Garcia Fernandez</h4>
							<p>Cuidadora profesional de aves</p>
						</div>
						<div class="col-md-3 team-grid">
							<img src="images/t4.jpg" class="img-responsive" alt="" />
							<h4>Antonio Dominguez Garcia </h4>
							<p>Cuidador profesional de reptiles </p>
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