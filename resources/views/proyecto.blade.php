@extends('layout')


@section('content')



@if ($post->id)    
		<div id="page-title" class="image-bg">
			<div class="container text-center">
				<div class="title-content">
					<h1>{{$post->title}}</h1>
					<p>
                        {{$post->extract}}
                    </p>
				</div>
			</div>
        </div><!--/#page title-->
			
		<div id="project-details" class="padding">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
                        
                        @include('partials.fotos')
                        
					</div>
					<div class="col-sm-6">
						<div class="project-info">
							<h2>{{$post->title}}</h2>
							<p>{!!$post->body!!}</p>
							<div class="project-details">
								<h4>Detalles del proyecto</h4>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur</p>
								<ul>
									<li><span>Tipo de Trabajo:</span> {{$post->category->name}}</li>
									<li><span>Location: </span> Rome, Italy</li>
									<li><span>Value: </span> $5,67,040,000</li>
									<li><span>Category: </span> Building Projects</li>
									<li><span>Investor:</span> Aribind Wilson</li>
								</ul>
							</div>
						</div>						
					</div>
				</div>
			</div>
        </div><!--/#project-details-->
@endif
		
		<div id="project-list" class="padding">
			<div class="container">
				<div class="text-center section-title">
					<h1>Calidad en Servicio </h1>
					<h2>Proyectos</h2>
				</div>
				
				<div class="project-filter text-center">
					<ul class="list-inline">
                        <li><a class="active" href="#" data-filter="*">Todos</a></li>
                
                @foreach ($categories as $category)
                    <li><a href="#" data-filter=".{{$category->url}}">{{$category->name}}</a></li>
                @endforeach
                
					</ul>
				</div>	

				<div id="projects" class="recent-projects">
					<div class="all-projects">
                        
                        @foreach ($posts as $obra)
						<div class="project-content {{$obra->category->url}} plumbing">
							<div class="project-title">
                                <a href="{{route('proyectos',$obra)}}">
                                <h3>{{$obra->title}}</h3>
                                </a>
								<span>Clients: Arival</span>
							</div>
							<div class="project-item">
								
								@if ($obra->fotos->count() != 0)
								<a href="{{route('proyectos',$obra)}}">
									<img class="img-responsive" src="{{ $obra->fotos->first()->url ? asset('img/'.$obra->fotos->first()->url) : '' }}" alt="" />
								</a>
								@endif
							</div>
							<div class="project-info">
								<p>{{$obra->extract}}</p>
							</div>
						</div>
                        @endforeach
                        
					</div>
					
				</div>
			</div>
		</div><!--/#Recent projects-->



@endsection



@push('styles')
@endpush



@push('scripts')
    <script id="dsq-count-scr" src="//zendero.disqus.com/count.js" async></script>
@endpush
