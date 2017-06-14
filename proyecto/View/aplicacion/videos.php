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
									<li><a href="sobrenosotros.php">Sobre Nosotros</a></li>
									<li><a href="horario.php">Horario</a></li>
									<li class="dropdown active">
										<a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galeria</a>
								<ul class="dropdown-menu">
									<li><a href="galeria.php">Fotos</a></li>
									<li class="active"><a href="videos.php">Videos</a></li>
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
				<h2>Videos</h2>
			</div>
			</div>
	 <div class="content">
 		<div class="contact">
 			<div class="container">
<div id="main_area">
        <div class="row">
            <div class="col-sm-12" id="slider-thumbs">
                <ul class="hide-bullets">
                    <li class="col-sm-3">
                      
                        <iframe width="260" height="260" src="https://www.youtube.com/embed/2f8Hpid8YWA" frameborder="0" allowfullscreen></iframe>
                    </li>
					<li class="col-sm-3">
						<iframe width="260" height="260" src="https://www.youtube.com/embed/_UbDeqPdUek" frameborder="0" allowfullscreen></iframe>
                    </li>
					<li class="col-sm-3">
						<iframe width="260" height="260" src="https://www.youtube.com/embed/pVxOK9fAmaY" frameborder="0" allowfullscreen></iframe>
                    </li>
					<li class="col-sm-3">
						<iframe width="260" height="260" src="https://www.youtube.com/embed/0LwWwm_SkkM" frameborder="0" allowfullscreen></iframe>
                    </li>
                </ul>
            </div>
            <!--/Slider-->
        </div>

    </div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--specials-->
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

<script>
  
  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 25000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
</script>