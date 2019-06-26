@extends(LAYOUT_FRONT.'app')

@section('title', 'Inicio | '.APP_DISPLAY)
@section('description', 'Empresa de Desarrollo Web, Mobile, especialistas en Laravel, .NET, VUE.js, JavaScript.')
@section('author', APP_DISPLAY)
@section('keywords', 'desarrollo web, desarrollo mobile, laravel, .net')
@section('image', LOGO_REDES)



@section('content')

    <!-- SECTION INTRO SLIDER -->
    <!--===============================================================-->
    <div class="section-intro-bg-slider section-slider">
      <!-- SLIDER -->
      <div class="wrapper-slider" id="intro-slider-wrapper">
        <div class="carousel slide carousel-intro" id="carousel-intro" data-ride="carousel" data-interval="6000">
          <div class="wrapper-preloader">
            <div id="preloader"></div>
          </div>
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-intro" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-intro" data-slide-to="1"></li>
            <li data-target="#carousel-intro" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <!-- first slide -->
            <div class="item item-bg-1 item-theme-first active">
              <div class="layer-intro layer-bg-slider">
                <div class="container">
                  <div class="row text-center">
                    <div class="col-sm-12">
                      <h1 class="text-theme title-xl mt-40 text-uppercase animation an-delay-06 an-duration-04 fadeInUpSlider">Aplicaciones Web</h1>
                      <p class="text-theme lead animation an-delay-08 an-duration-04 fadeInRightSlider">Digitaliza procesos, renová tu forma de trabajar</p>
                      <a href="{{ route('contacto') }}" class="text-theme btn btn-rounded btn-lg btn-primary btn-md animation an-delay-09 an-duration-04 fadeInUpSlider">
                        <i class="fa fa-at"></i>Contactanos
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- second slide -->
            <div class="item item-bg-2 item-theme">
              <div class="layer-bg-slider">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-6 col-sm-offset-6">
                      <h1 class="text-theme title-xl animation an-delay-06 an-duration-04 fadeInUpSlider">Desarrollos a medida</h1>
                      <p class="text-theme lead animation an-delay-08 an-duration-04 fadeInRightSlider">Contanos tu idea, somos el mejor socio para hacerla realidad</p>
                      <ul class="list-unstyled list-md text-theme">
                        <li class="animation an-delay-11 an-duration-04 fadeInRightSlider"><i class="fa fa-check fa-round"></i>Responsabilidad y Compromiso</li>
                        <li class="animation an-delay-13 an-duration-04 fadeInRightSlider"><i class="fa fa-code fa-round"></i>Las mejores tecnologías</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- third slide -->
            <div class="item item-bg-3 item-theme">
              <div class="layer-bg-slider">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-6 col-sm-offset-1">
                      <h1 class="text-theme title-xl animation an-delay-06 an-duration-04 fadeInUpSlider">Lo que necesitas, está en DVS360</h1>
                      <a href="{{ route('contacto') }}" class="text-theme btn btn-rounded btn-lg btn-primary btn-md animation an-delay-09 an-duration-04 fadeInLeftSlider">
                        <i class="fa fa-envelope"></i>¡Empecemos!
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- SLIDER END-->
      <!-- Controls -->
      <a href="#carousel-intro" role="button" data-slide="prev">
        <i class="fa fa-angle-left fa-2x btn-prev-intro"></i>
      </a>
      <a href="#carousel-intro" role="button" data-slide="next">
        <i class="fa fa-angle-right fa-2x btn-next-intro"></i>
      </a>
    </div>



    <!-- SECTION CALL-TO -->
    <!--===============================================================-->
    {{-- <div class="section section-xs section-both section-primary section-call-to">
      <div class="container">
        <div class="row text-center-xs">
          <div class="col-sm-8">
            <h3 class="title-md">Conocé nuestro catálogo de aplicaciones y servicios</h3>
          </div>
          <div class="col-sm-4 text-right text-center-xs">
            <a class="btn btn-ghost-white btn-lg"><i class="fa fa-download"></i>Descargar</a>
          </div>
        </div>
      </div>
    </div> --}}

    <!-- SEECTION FEATURES -->
    <!--===============================================================-->
    <div class="section section-sm section-both ">
      <div class="container">
        <div class="row">
          <!-- FEATURES -->
          <div class="col-sm-3">
            <div class="icon-box">
              <i class="fa fa-cogs fa-round fa-4x text-theme"></i>
              <h3 class="title-sm text-theme-sm text-theme">APLICACIONES WEB</h3>
              <p class="text-theme-sm">Desarrollamos junto a nuestros clientes herramientas de gestión, digitalizando procesos para un mejor rendimiento en las tareas del día a día.</p>
            </div>
          </div>
          <!-- FEATURES -->
          <div class="col-sm-3">
            <div class="icon-box">
              <i class="fa fa-desktop fa-round fa-4x text-theme"></i>
              <h3 class="title-sm text-theme-sm text-theme">SITIOS WEB</h3>
              <p class="text-theme-sm">En la nueva era digital, la primera imagen de la empresa es el sitio web. Por ello, es fundamental que desarrollarlo con profesionales que innoven y creen sitios según los requerimientos de sus clientes.</p>
            </div>
          </div>
          <!-- FEATURES -->
          <div class="col-sm-3">
            <div class="icon-box">
              <i class="fa fa-mobile fa-round fa-4x text-theme"></i>
              <h3 class="title-sm text-theme-sm text-theme">MOBILE</h3>
              <p class="text-theme-sm">Desarrollamos aplicaciones mobile para iOS y Android, priorizando la usabilidad y la experiencia de usuario.</p>
            </div>
          </div>
          <!-- FEATURES -->
          <div class="col-sm-3">
            <div class="icon-box">
              <i class="fa fa-code fa-round fa-4x text-theme"></i>
              <h3 class="title-sm text-theme-sm text-theme">OUTSOURCING Y TERCERIZACIÓN</h3>
              <p class="text-theme-sm">Mantenimiento y actualización de las aplicaciones, desarrollo de nuevas caracteristicas y mantenimiento técnico.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SECTION -->
    <!--===============================================================-->
    <div class="section section-both section-sm section-dark">
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <img class="img-responsive" src="{{ LOGO }}" alt="imac">
          </div>
          <div class="col-sm-6 col-sm-offset-1">
            <h3 class="text-theme title-lg">SOLUCIONES 360º</h3>
            <p class="text-theme">Nuestro amplio equipo esta capacitado en diversas tecnologias, para asegurarnos un producto de calidad y ajustado a los últimos requerimientos del mercado. <br> Todo, apoyado en nuestras mejores cualidades:</p>
            <ul class="text-theme list-unstyled list-md">
              <li><i class="fa fa-check colored"></i>Cumplimos con los tiempos</li>
              <li><i class="fa fa-check colored"></i>Soporte 7/24</li>
              <li><i class="fa fa-check colored"></i>Trabajo en equipo</li>
              <li><i class="fa fa-check colored"></i>Compromiso</li>
            </ul>
            <a href="{{ route('nosotros') }}" class="text-theme btn btn-lg btn-primary"><i class="fa fa-users"></i>Conocenos</a>
          </div>
        </div>
      </div>
    </div>

    {{--  <!-- SECTION -->
    <!--===============================================================-->
    <div class="section section-sm section-both">
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <h3 class="text-theme title-lg">Great Tools to Start With</h3>
            <p class="text-theme">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur auctor. Aliquam nec ultricies dolor. Aliquam ornare posuere purus, sed gravida magna venenatis eu.</p>
            <ul class="text-theme list-unstyled list-xl">
              <li><i class="fa fa-cogs fa-2x fa-round bg"></i><span>Easily customizable, made for developers</span></li>
              <li><i class="fa fa-code fa-2x fa-round bg"></i><span>7/24 Customer Support</span></li>
              <li><i class="fa fa-cloud-download fa-2x fa-round bg"></i><span>Experienced Team</span></li>
              <li><i class="fa fa-bolt fa-2x fa-round bg"></i><span>Joyful Experience</span></li>
              <li><i class="fa fa-rocket fa-2x fa-round bg"></i><span>Rocket Fast</span></li>
              <li><i class="fa fa-paypal fa-2x fa-round bg"></i><span>Rocket Fast</span></li>
            </ul>
          </div>
          <div class="col-sm-5">
            <img class="img-responsive pull-right" src="assets/images/general/imac.png" alt="theme-img">
          </div>
        </div>
      </div>
    </div>  --}}

    <!-- SECTION COUNT -->
    <!--===============================================================-->
    <div class="section-polygonal-black section-arrow-bottom">
      <div class="opacity-layer section section-both section-lg">
        <div class="container">
          <div id="count-wrapper" class="row">
            <div class="col-sm-3">
              <div class="icon-box">
                <i class="fa fa-coffee fa-4x text-theme-sm"></i>
                <h3 class="title-count title-lg text-theme-sm hr" data-from="25" data-speed="1400" data-refresh-interval="50" data-to="200">0</h3>
                <h3 class="title-md text-theme-sm">CAFÉ</h3>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="icon-box">
                <i class="fa fa-code fa-4x text-theme-sm"></i>
                <h3 class="title-count title-lg text-theme-sm hr" data-from="25" data-speed="1400" data-refresh-interval="50" data-to="30000">0</h3>
                <h3 class="title-md text-theme-sm">LINEAS DE CÓDIGO</h3>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="icon-box">
                <i class="fa fa-building fa-4x text-theme-sm"></i>
                <h3 class="title-count title-lg text-theme-sm hr" data-from="25" data-speed="1400" data-refresh-interval="50" data-to="10">0</h3>
                <h3 class="title-md text-theme-sm">CLIENTES FELICES</h3>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="icon-box">
                <i class="fa fa-project-diagram fa-4x text-theme-sm"></i>
                <h3 class="title-count title-lg text-theme-sm hr" data-from="25" data-speed="1400" data-refresh-interval="50" data-to="30">0</h3>
                <h3 class="title-md text-theme-sm">PROYECTOS</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{--  <!-- SECTION WORK AND CLIENTS -->
    <!--===============================================================-->
    <div class="section section-lg section-both section-dark">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h3 class="text-theme title-xl title-section text-uppercase hr">¿Que hicimos ultimamente?</h3>
            <p class="text-theme lead lead-section">Revisa nuestros últimos proyectos.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div id="owl-our-work" class="owl-carousel">
              <div class="item">
                <a href="/z-theme/assets/images/portfolio/800x600.gif" class="img-wrapper rounded">
                  <img class="img-responsive img-rounded" src="/z-theme/assets/images/portfolio/800x600.gif" alt="theme-img">
                </a>
              </div>
              <div class="item">
                <a href="/z-theme/assets/images/portfolio/800x600.gif" class="img-wrapper rounded">
                  <img class="img-responsive img-rounded" src="/z-theme/assets/images/portfolio/800x600.gif" alt="theme-img">
                </a>
              </div>
              <div class="item">
                <a href="/z-theme/assets/images/portfolio/800x600.gif" class="img-wrapper rounded">
                  <img class="img-responsive img-rounded" src="/z-theme/assets/images/portfolio/800x600.gif" alt="theme-img">
                </a>
              </div>
              <div class="item">
                <a href="/z-theme/assets/images/portfolio/800x600.gif" class="img-wrapper rounded">
                  <img class="img-responsive img-rounded" src="/z-theme/assets/images/portfolio/800x600.gif" alt="theme-img">
                </a>
              </div>
            </div>
          </div>
        </div>  --}}
        <div class="row">
          <div class="col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2">
            <p class="lead text-center mt-70">Trabajamos codo a codo con nuestros clientes</p>
            <div id="owl-clients" class="owl-carousel">
              @foreach ($clients as $c)
              <div class="item">
                <img class="img-responsive" src="{{ $c->image }}" alt="Logo cliente - {{ $c->name }}">
              </div>                  
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>



@endsection


@push('styles')

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="/z-theme/assets/js/page/carousel-preload.js"></script>
  <link rel="stylesheet" type="text/css" href="/z-theme/assets/css/carousel-animate.css">
    
@endpush


@push('scripts')
  <script src="/z-theme/assets/js/page/page.home.js"></script>
@endpush