<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Brindamos servicio de Alquiler de estructuras para la reparación y pinturas de frentes, montaje de estructuras de andamios, alquiler de andamios y estructuras tubulares, bandejas de proteccion para peatones y vehiculos.">
    <meta name="keywords" content="alquiler de estructuras, alquiler de andamios, alquiler de estructuras tubulares, estructuras tubulares, bandejas de proteccion para peatones, bandejas de proteccion">
    <meta name="author" content="Altura Máxima SRL">
	<!--title-->
    <title>@yield('meta-title', 'Altura Máxima S.R.L')</title>
	
	<!--CSS-->
    <link href="/Arki-dark/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Arki-dark/css/font-awesome.min.css" rel="stylesheet">
	<link href="/Arki-dark/css/magnific-popup.css" rel="stylesheet">
	<link href="/Arki-dark/css/twentytwenty.css" rel="stylesheet" type="text/css" />
	<link href="/Arki-dark/css/main.css" rel="stylesheet">
	<link href="/Arki-dark/css/tr-animation.css" rel="stylesheet">
	<link href="/Arki-dark/css/dark.css" rel="stylesheet">
	<link href="/Arki-dark/css/responsive.css" rel="stylesheet">		
	
	<!--Google Fonts-->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,700italic,900' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,900' rel='stylesheet' type='text/css'>
	
    <!--[if lt IE 9]>
	    <script src="/Arki-dark/js/html5shiv.js"></script>
	    <script src="/Arki-dark/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="https://themeregion.com/demo/arki/default-images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" </head><!--/head-->
<body>
	<div id="page">
		<header id="navigation">
			<div class="navbar" role="banner">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						<a class="navbar-brand" href="{{route('home')}}">
							<img class="main-logo img-responsive" src="{{asset('img/altura/logo.png')}}" alt="@yield('meta-title', 'Logo - Altura Máxima')">
							<img style="width:50px;" class="logo-two img-responsive" src="{{asset('img/altura/logo.png')}}" alt="">
						</a> 

					</div>  
					{{--  <div class="top-bar">
						<ul class="list-inline social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
						</ul>
						<span class="login-section">
							<a href="login-signup.html"><i class="fa fa-user"></i>Signup / Login</a>
						</span>
					</div>  --}}
					<nav id="main-menu" class="collapse navbar-collapse navbar-right">         
						<ul class="nav navbar-nav">
							<li>
								<a href="{{route('home')}}">
									Inicio
								</a>
							</li>
							
							<li class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
									Nosotros
								</a>
								<ul class="dropdown-menu">                               
									<li>
										<a href="{{route('home','#welcome-section')}}">¿Quienes Somos?</a>
									</li>
									<li>
										<a href="{{route('home','#amazing-features')}}">Servicios</a>
									</li>
									<li>
										<a href="{{route('home','#twitter')}}">Clientes</a>
									</li>
								</ul>
							</li>						
							
							<li>
								<a href="{{route('proyectos')}}">
									Trabajos
								</a>
							</li>
							
							<li><a href="{{route('contacto')}}">Contacto</a></li>
						</ul>         
					</nav>
					{{--  <div class="search-icon">
						<span><i class="fa fa-search"></i></span>
					</div>                  --}}
				</div>
				{{--  <div class="search">
					<form role="form">
					<input type="text" class="search-form" autocomplete="off" placeholder="Write something and press enter">
					<span class="search-close"><i class="fa fa-times"></i></span>
					</form>
				</div>  --}}
			</div>
		</header><!--/#navigation--> 

		
        @yield('content')
        

		<footer id="footer">			
			<div class="container">
				<div class="padding">
					<div class="row">
						<div class="col-sm-4">
							<div class="footer-widget">
								<a class="logo" href="#"><img class="img-responsive" src="{{asset('img/altura/logo.png')}}" alt="" /></a>
								<p>
									Brindamos servicio de Alquiler de estructuras para la reparación y pinturas de frentes, montaje de estructuras de andamios, alquiler de andamios y estructuras tubulares, bandejas de proteccion para peatones y vehiculos.
								</p>
								<address>
									<ul>
										<li><span>Dirección:</span> Av. Juan B justo 5761 - Capital Federal - Buenos Aires - Argentina</li>
										<li><span>Teléfono:</span>(011) 4672-8181</li>
										<li><span>Email:</span><a href="mailto:info@alturamaxima.com.ar">info@alturamaxima.com.ar</a></li>
									</ul>
								</address>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="footer-widget">
								<h2>Secciones</h2>
								<ul>
									<li><a href="#">Inicio</a></li>
									<li><a href="{{route('proyectos')}}">Trabajos</a></li>
									<li><a href="{{route('contacto')}}">Contacto</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="footer-widget instagram">
								<h2>Instagram</h2>
								<ul class="list-inline">
									<li><a href="https://themeregion.com/demo/arki/default-images/others/s1.jpg" class="image-link"><img class="img-responsive" src="https://themeregion.com/demo/arki/default-images/others/s1.jpg" alt="" /></a></li>
									<li><a href="https://themeregion.com/demo/arki/default-images/others/2.jpg" class="image-link"><img class="img-responsive" src="https://themeregion.com/demo/arki/default-images/others/2.jpg" alt="" /></a></li>
									<li><a href="https://themeregion.com/demo/arki/default-images/others/3.jpg" class="image-link"><img class="img-responsive" src="https://themeregion.com/demo/arki/default-images/others/3.jpg" alt="" /></a></li>
									<li><a href="https://themeregion.com/demo/arki/default-images/others/4.jpg" class="image-link"><img class="img-responsive" src="https://themeregion.com/demo/arki/default-images/others/4.jpg" alt="" /></a></li>
									<li><a href="https://themeregion.com/demo/arki/default-images/others/5.jpg" class="image-link"><img class="img-responsive" src="https://themeregion.com/demo/arki/default-images/others/5.jpg" alt="" /></a></li>
									<li><a href="https://themeregion.com/demo/arki/default-images/others/6.jpg" class="image-link"><img class="img-responsive" src="https://themeregion.com/demo/arki/default-images/others/6.jpg" alt="" /></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="footer-bottom">
				<div class="container text-center">
					<p>© Copyright 2018 <a target="_blank" href="#">KenshoPublicidad</a>. Todos los derechos reservados.</p>
				</div>			
			</div>
		</footer>
	</div>
	
	<!--/#scripts--> 
    <script type="text/javascript" src="/Arki-dark/js/jquery.js"></script>
    <script type="text/javascript" src="/Arki-dark/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
  	<script type="text/javascript" src="/Arki-dark/js/gmaps.js"></script>
	<script type="text/javascript" src="/Arki-dark/js/jquery.parallax.js"></script>
	<script type="text/javascript" src="/Arki-dark/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="/Arki-dark/js/jquery.nav.js"></script> 
	<script type="text/javascript" src="/Arki-dark/js/jquery.typer.js"></script>
	<script type="text/javascript" src="/Arki-dark/js/jquery.event.move.js"></script>
    <script type="text/javascript" src="/Arki-dark/js/jquery.twentytwenty.js"></script>
    <script type="text/javascript" src="/Arki-dark/js/jquery.countTo.js"></script>
    <script type="text/javascript" src="/Arki-dark/js/jquery.inview.min.js"></script>
    <script type="text/javascript" src="/Arki-dark/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="/Arki-dark/js/main.js"></script>	
	
</body>
</html>