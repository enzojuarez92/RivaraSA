@extends('layout')


@section('content')

		
		<div id="page-title" class="image-bg">
			<div class="container text-center">
				<div class="title-content">
					<h1>Contactenos</h1>
					<p>
                        Puede hacerlo a través de nuestro teléfono, dirección de mail o bien, por aquí mismo: Dejenos su mensaje y a la brevedad nos comunicaremos con usted. 
                    </p>
				</div>
			</div>
		</div><!--/#page title-->
			
		<div id="contact-us">
			
			<div class="contact-wrap padding"> 
				<div class="container">	
					<div class="section-title text-center">
						<h1>¿Tiene consultas?</h1>
						<h2>Escribanos un mensaje</h2>
						
					</div>
					<form id="main-contact-form" class="contact-form" name="contact-form" method="POST" action="{{route('enviarMensaje')}}">
						@csrf
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
									<input value="{{old('name')}}" type="text" name="name" class="form-control" placeholder="Nombre Completo">
									{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
								</div>
								<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
									<input value="{{old('email')}}" type="email" name="email" class="form-control" placeholder="Correo eléctronico">
									{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
								</div>
								<div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
									<input value="{{old('subject')}}" type="text" name="subject" class="form-control" placeholder="Asunto de Consulta">
									{!! $errors->first('subject', '<span class="help-block">:message</span>') !!}
								</div>	
							</div>
							<div class="col-sm-6">
								 <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
									<textarea value="{{old('message')}}" name="message" id="message" class="form-control" rows="9" placeholder="Escriba aquí su mensaje"></textarea>
									{!! $errors->first('message', '<span class="help-block">:message</span>') !!}
								</div> 
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-animated">Enviar Mensaje</button>
								</div>							
							</div>					
						</div>
					</form>
				</div>
			</div>
		</div><!--/#login-wrapper-->
		



@endsection



@push('styles')
@endpush



@push('scripts')
    <script id="dsq-count-scr" src="//zendero.disqus.com/count.js" async></script>
@endpush
