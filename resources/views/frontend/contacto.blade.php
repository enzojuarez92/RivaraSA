@extends(LAYOUT_FRONT.'app')

@section('title', 'Contacto | '.APP_DISPLAY)
@section('description', 'Contactanos, contanos tu proyecto y trabajemos juntos.')
@section('author', APP_DISPLAY)
@section('keywords', '')
@section('image', LOGO_REDES)

@section('breadcrumb')
            @include('frontend.layout.includes.breadcrumb', [
                'title' => 'Contacto', 
                'subtitle' => 'Subtitulo',
                'links' => array(
                    ['icon' => 'icon-copy', 'name' => 'Inicio', 'url' => route('home')],
                    ['icon' => 'icon-add', 'name' => 'Contacto', 'url' => route('contacto')],
                )
            ])
@endsection

@section('content')

    <!-- SECTION -->
    <!--===============================================================-->
    <div class="section section-sm section-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
      
            <h3 class="title-md text-theme hr-left">Contanos tu proyecto</h3>
			<form class="form-bg text-theme" id="contacto" name="contact" method="post" novalidate="novalidate" method="POST" action="{{route('enviarMensaje')}}" autocomplete="off">
				@csrf
              <div class="form-group">
                <label for="name">Asunto
                  <span class="required">*</span>
                </label>
                <input value="{{old('subject')}}" type="text" name="subject" class="form-control" placeholder="Escriba motivo de consulta" required>
                {!! $errors->first('subject', '<span class="help-block">:message</span>') !!}
              </div>
              <div class="form-group">
                <label for="name">Nombre
                  <span class="required">*</span>
                </label>
                <input value="{{old('name')}}" type="text" name="name" class="form-control" placeholder="Nombre Completo" required>
                {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
              </div>
              <div class="form-group">
                  <div class="col-lg-6">
                    <label for="email">Correo
                      <span class="required">*</span>
                    </label>
                    <input value="{{old('email')}}" type="email" name="email" class="form-control" placeholder="Correo eléctronico" required>
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                  </div>
                  <div class="col-lg-6">
                    <label for="email">Teléfono
                    </label>
                    <input value="{{old('telefono')}}" type="telefono" name="telefono" class="form-control" placeholder="Número de teléfono" required>
                    {!! $errors->first('telefono', '<span class="help-block">:message</span>') !!}
                  </div>
              </div>
              <div class="form-group text-theme">
                <label for="fuente">¿Como nos conocio?
                  <span class="required">*</span>
                </label>
                <select class="form-control" name="conocio" id="">
                  <option value="">Seleccionar</option>
                  @foreach ($conocio as $c)
                    <option value="{{ $c->id }}">{{ $c->titulo }}</option>
                  @endforeach
                </select>
                {!! $errors->first('fuente', '<span class="help-block">:message</span>') !!}
              </div>
              <div class="form-group text-theme">
                <label for="message">Mensaje
                  <span class="required">*</span>
                </label>
                <textarea value="{{old('message')}}" name="message" id="message" class="form-control" rows="6" placeholder="Escriba aquí su mensaje" required></textarea>
                {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
              </div>
              <button style="margin-top: 5px"
                      type="submit"
                      class="btn btn-primary text-theme btn-key g-recaptcha"
                      data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"
                      data-callback='onSubmitContacto'>
                <i class="fa fa-paper-plane"></i>Enviar Consulta
              </button>
            </form>


            <div id="success" class="mt-40">
              <div class="icon-box bordered">
                <i class="fa fa-check fa-round fa-4x text-theme"></i>
                <h3 class="lead text-theme">Your message was successfully sent!</h3>
              </div>
            </div>

            <div id="error" class="mt-40">
              <div class="icon-box bordered">
                <i class="fa fa-lock fa-round fa-4x text-theme"></i>
                <h3 class="lead text-theme">Something went wrong, try refreshing and submitting the form again.</h3>
              </div>
            </div>
          </div>

          <div class="col-md-5 col-md-offset-1">
            <h3 class="title-md text-theme hr-left">¿Donde estamos?</h3>
            <p class="text-theme lead">Tenemos nuestras oficinas en Buenos Aires, Argentina.</p>
            <h3 class="title-md text-theme">Oficina</h3>
            <ul class="list-unstyled list-md text-theme">
              <li><i class="fa fa-map-marker fa-box"></i>Direccion: {{ Config::get('direccion') ?? 'Sin datos' }}</li>
              <li><i class="fa fa-phone fa-box"></i>Teléfono: {{ Config::get('telefono') ?? 'Sin datos' }}</li>
              <li><i class="fa fa-envelope fa-box"></i>Correo: {{ Config::get('correo') ?? 'Sin datos' }}</li>
            </ul>
            <h3 class="title-md text-theme">Horario de Atención</h3>
            <ul class="list-unstyled list-md text-theme">
              <li><i class="fa fa-clock-o fa-box"></i>{{ Config::get('horario') ?? 'Sin datos' }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

@endsection

@push('styles')
    
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

@endpush