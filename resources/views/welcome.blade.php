@extends('layout')


@section('content')

	<div id="home-section">
		<div class="container">
			<div class="home-content text-center">
				<h1 id="typer">Preparate para llegar más alto</h1>
				<h2><img style="max-width:200px;" src="{{asset('img/altura/logo.png')}}" alt="" srcset=""></h2>
				<a href="#welcome-section" class="btn btn-primary btn-animated">Comenzar</a>
				<div class="scroll-arrow">
					<div class="arrow-icon">
						<a class="animated" href="#welcome-section"><i class="fa fa-angle-down"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div><!--/#home-section--> 
		
    <div id="welcome-section" class="padding">
		<div class="container">
			<div class="text-center section-title">
				<h1>Bienvenido a tu próximo socio </h1>
				<h2>Altura Máxima</h2>
			</div>
			<div class="welcome-content">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="welcome-image">
							<a class="image-popup" href="{{asset('img/altura/home1.jpg')}}">
								<i class="fa fa-plus-square-o"></i>
								<img class="img-responsive" src="{{asset('img/altura/home1.jpg')}}" alt="">
							</a>
						</div>						
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="welcome-image">							
							<a class="image-popup" href="{{asset('img/altura/home2.jpg')}}">
								<i class="fa fa-plus-square-o"></i>
								<img class="img-responsive" src="{{asset('img/altura/home2.jpg')}}" alt="">
							</a>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="welcome-info">
						<p>
							Somos una empresa dedicada a resolver todo tipo de trabajos en altura con profesionales especializados y cumpliendo con todos los estandares de seguridad.<br>
							Brindamos servicio de alquiler de andamios colgantes eléctricos y de estructuras tubulares para la reparación y pintura de frentes. Realizamos protecciones peatonales en edificios para resguardar la seguridad tanto de la gente como del edificio: andamios con pórtico, bandejas de protección ante la posible caída de algún elemento, arcadas para paso vehicular, etc.
						</p>
							<a href="#">Descargar Info</a>
						</div>						
					</div>
				</div>
			</div>
		</div>
    </div><!--/#welcome-section-->
	
	<div id="recent-projects" class="padding">
		<div class="container">
			<div class="text-center section-title">
				<h1>Calidad y Servicio </h1>
				<h2>Nuestros Trabajos</h2>
			</div>
			<div class="recent-projects">
				<div class="row"> 
				
				@foreach ($posts as $post)
					<div class="col-md-3 col-sm-6">
						<div class="project-content">
							<div class="project-title">
								<a href="{{ route('proyectos',$post) }}">
								<h3>{{$post->title}}</h3>
								</a>
								<span>Tipo de Trabajo: {{$post->category->name}}</span>
							</div>
							<div class="project-item">
							@if ($post->fotos->count() != 0)
								<a href="{{ route('proyectos',$post) }}" class="image-link">
									<figure><img class="img-responsive" src="{{ asset('img/'.$post->fotos->first()->url) }}" alt="foto-{{ $post->title }}" /></figure>
								</a>
							@endif
							</div>
							<div class="project-info">
								<p>{{$post->extract}}</p>
							</div>
						</div>
					</div>
				@endforeach
				</div>
			</div>
		</div>
    </div><!--/#Recent projects-->
	
	<div id="amazing-features" class="padding">
		<div class="container">
			<div class="col-md-6">
				<div class="section-title">
					<h1>Su principal socio</h1>
					<h2>Nuestros Servicios</h2>
					<p>Contamos con una amplia gama de servicios para la construcción.</p>
				</div>
				<div class="amazing-features">
					<div class="features">
						<h4><i class="fa fa-paper-plane"></i> Recubrimiento de Fachadas</h4>
						<p>Alquiler y montaje de estructuras tubulares para trabajo en fachadas ya sea para su restauración, reparación o mantenimiento.</p>
					</div>
					<div class="features">
						<h4><i class="fa fa-paper-plane"></i> Pantallas de protección peatonal</h4>
						<p>Estructuras para la protección peatonal y vehicular.</p>
					</div>
					<div class="features">
						<h4><i class="fa fa-paper-plane"></i> Andamios colgantes eléctricos</h4>
						<p>La última tecnología en sistemas de trabajo en altura. Optimizá y marcá la diferencia ahorrando tiempo y dinero con excelentes resultados.</p>
					</div>
					<div class="features">
						<h4><i class="fa fa-paper-plane"></i> Alquiler y montaje. Asesoramiento en obra.</h4>
						<p>Contamos con personal calificado y preparado para asesorarlo en el lugar SIN COSTO. Consulte con nuestros especialistas.</p>
					</div>
				</div>
			</div>	
			<div class="col-md-6">
				<div class="layer-slide">
					<img class="img-responsive" src="{{asset('img/altura/plano-1.jpg')}}" alt="" />
					<img class="img-responsive" src="{{asset('img/altura/plano-2.jpg')}}" alt="" />
				</div>
			</div>
		</div>
	</div><!--/#amazing-features-->
	
	<div id="fun-facts" class="padding">
		<div class="container">
			<div class="fun-facts text-center">
				<div class="row">
					<div class="col-sm-3">
						<i class="fa fa-building"></i>
						<h1 class="timer" >300</h1>
						<h2>Trabajos Realizados</h2>						
					</div>
					<div class="col-sm-3">
						<i class="fa fa-bell"></i>
						<h1 class="timer" >20</h1>
						<h2>Proyectos actuales</h2>						
					</div>
					<div class="col-sm-3">
						<i class="fa fa-users"></i>
						<h1 class="timer" >200</h1>
						<h2>Clientes Felices</h2>						
					</div>
					<div class="col-sm-3">
						<i class="fa fa-trophy"></i>
						<h1 class="timer" >14000</h1>
						<h2>Metros alcanzados</h2>						
					</div>
				</div>
			</div>
		</div>
	</div><!--/#fun-facts-->
	

	<div id="twitter" class="padding">
		<div class="overlay-bg"></div>
		<div class="container text-center">
			<div class="twitter-icon">
				<i class="fa fa-twitter"></i>
				<p>¿Qué dicen de nosotros?</p>
			</div>
			<div id="twitter-carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#twitter-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#twitter-carousel" data-slide-to="1"></li>
					<li data-target="#twitter-carousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<p>Muy contentos con altura bla bla bla.</p>
						<p><small>Pepito construcciones</small></p>
						<a href="#">https://t.co/7FoVSP0vIf</a>
					</div>
					<div class="item">
						<p>Muy contentos con altura bla bla bla.</p>
						<p><small>Pepito construcciones</small></p>
						<a href="#">https://t.co/7FoVSP0vIf</a>
					</div>
					<div class="item">
						<p>Muy contentos con altura bla bla bla.</p>
						<p><small>Pepito construcciones</small></p>
						<a href="#">https://t.co/7FoVSP0vIf</a>
					</div>
				</div>
			</div>			
		</div>				
	</div><!--/twitter-->
	
	<div id="clients" class="padding">
		<div class="container">
			<div class="row">
				<div class="text-center section-title">
					<h1>Nuestros Clientes</h1>
					<h2>Clientes Felices</h2>				
				</div>				
			</div>
			<div class="clients text-center">
				<ul class="list-inline">
					<li><a href="#"><img class="img-responsive" src="https://themeregion.com/demo/arki/default-images/others/client1.png" alt="" /></a></li>
					<li><a href="#"><img class="img-responsive" src="https://themeregion.com/demo/arki/default-images/others/client2.png" alt="" /></a></li>
					<li><a href="#"><img class="img-responsive" src="https://themeregion.com/demo/arki/default-images/others/client3.png" alt="" /></a></li>
					<li><a href="#"><img class="img-responsive" src="https://themeregion.com/demo/arki/default-images/others/client4.png" alt="" /></a></li>
				</ul>
			</div>
		</div>
	</div><!--/Clients-->
	
	<div id="promotion" class="padding">
		<div class="container text-center">
			<h1>¿Podemos ayudar en algo?</h1>
			<a class="btn btn-primary btn-animated" href="#">Contactenos</a>
		</div>
	</div><!--/Promotion-->


@endsection



@push('styles')
@endpush



@push('scripts')
    <script id="dsq-count-scr" src="//zendero.disqus.com/count.js" async></script>
@endpush
