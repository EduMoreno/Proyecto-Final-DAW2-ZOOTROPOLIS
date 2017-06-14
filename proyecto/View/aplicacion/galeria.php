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
<link rel="shortcut icon" href="images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox.css">
<script src="js/jquery.lightbox.js"></script>
<script>
  $(function() {
    $('.gallery a').lightbox(); 
  });
</script>
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
									<li><a href="sobrenosotros.php">Sobre Nosotros</a></li>
									<li><a href="horario.php">Horario</a></li>
										<li class="dropdown active">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galeria</a>
								<ul class="dropdown-menu">
									<li class="active"><a href="galeria.php">Fotos</a></li>
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
				<h2>Galeria</h2>
			</div>
			</div>
	<div class="content">
			<div class="gallery-section">
					<div class="container">
					<div class="gallery-grids">
				<div class="col-md-4 gallery-grid">
					<div class="gallery">
						<a class="mask" href="images/g1.jpg"><img src="images/g1.jpg" class="img-responsive zoom-img" alt="/" title="image-name"></a>
					</div>	
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="gallery">
						<a class="mask" href="images/g2.jpg"><img src="images/g2.jpg" class="img-responsive zoom-img" alt="/" title="image-name"></a>
					</div>	
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="gallery">
						<a class="mask" href="images/g3.jpg"><img src="images/g3.jpg" class="img-responsive zoom-img" alt="/" title="image-name"></a>
					</div>	
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="gallery-grids">
				<div class="col-md-4 gallery-grid">
					<div class="gallery">
						<a class="mask" href="images/g4.jpg"><img src="images/g4.jpg" class="img-responsive zoom-img" alt="/" title="image-name"></a>
					</div>	
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="gallery">
						<a class="mask" href="images/g5.jpg"><img src="images/g5.jpg" class="img-responsive zoom-img" alt="/" title="image-name"></a>
					</div>	
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="gallery">
						<a class="mask" href="images/g6.jpg"><img src="images/g6.jpg" class="img-responsive zoom-img" alt="/" title="image-name"></a>
					</div>	
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="gallery-grids">
				<div class="col-md-4 gallery-grid">
					<div class="gallery">
							<a class="mask" href="images/g7.jpg"><img src="images/g7.jpg" class="img-responsive zoom-img" alt="/" title="image-name"></a>
						</div>	
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="gallery">
							<a class="mask" href="images/g8.jpg"><img src="images/g8.jpg" class="img-responsive zoom-img" alt="/" title="image-name"></a>
						</div>	
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="gallery">
							<a class="mask" href="images/g9.jpg"><img src="images/g9.jpg" class="img-responsive zoom-img" alt="/" title="image-name"></a>
						</div>	
				</div>
				<div class="clearfix"> </div>
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
									<li><a href="contacto.php"> ¿Donde Encontrarnos?</a></li>
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