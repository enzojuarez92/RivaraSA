@extends(LAYOUT_FRONT.'app')

@section('title', 'Nosotros | '.APP_DISPLAY)
@section('description', 'Conocé más sobre nuestro equipo y como trabajamos.')
@section('author', APP_DISPLAY)
@section('keywords', '')
@section('image', LOGO_REDES)

@section('breadcrumb')
            @include('frontend.layout.includes.breadcrumb', [
                'title' => 'Nosotros', 
                'subtitle' => 'Subtitulo',
                'links' => array(
                    ['icon' => 'icon-copy', 'name' => 'Inicio', 'url' => route('home')],
                    ['icon' => 'icon-add', 'name' => 'Nosotros', 'url' => route('nosotros')],
                )
            ])
@endsection

@section('content')


<div class="section">
      <div class="container">
        <div class="row mb">
          <div class="col-sm-6 col-side">
            <!-- ACCORDION -->
            <div class="panel-acc panel-group panel-group-v1 panel-group-icon-v1 icon-right" id="accordion-icon-right">
              <div class="panel panel-default panel-collapse-in">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-icon-right" href="#content-icon-right-1" class="acc-on collapsed" aria-expanded="false">
                    ¿Qué hacemos?
                    </a>
                  </h4>
                </div>
                <div id="content-icon-right-1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                  <div class="panel-body">
                    <p class="text-theme">
                      Analizamos las necesidades de nuestros clientes y trabajamos para cumplir sus objetivos utilizando las diferentes herramientas según los objetivos deseen cumplir.
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-icon-right" href="#content-icon-right-2" class="acc-on collapsed" aria-expanded="false">
                    ¿Cómo lo hacemos?
                    </a>
                  </h4>
                </div>
                <div id="content-icon-right-2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                  <div class="panel-body">
                    <p class="text-theme">
                      Reuniones y tareas conjuntas, nos sumamos y somos parte de tu equipo.
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-icon-right" href="#content-icon-right-3" class="acc-on collapsed" aria-expanded="false">
                      ¿Cómo comenzaron?
                    </a>
                  </h4>
                </div>
                <div id="content-icon-right-3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                  <div class="panel-body">
                    <p class="text-theme">
                      Somos un grupo de desarrolladores que decidimos unir nuestros conocimientos para brindar una solución de 360º a cualquier necesidad de nuestros clientes.
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-icon-right" href="#content-icon-right-4" class="acc-on collapsed" aria-expanded="false">
                    ¿Por qué trabajar con nosotros
                    </a>
                  </h4>
                </div>
                <div id="content-icon-right-4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                  <div class="panel-body">
                    <p class="text-theme">
                      Sabemos interpretar tus necesidades, sabemos como llevar tus objetivos a la realidad, lo hacemos en el tiempo estimado a un valor de inversión apropiado.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <!-- SLIDER -->
            <div class="wrapper-slider">
              <div id="carousel-30" class="carousel slide" data-ride="carousel" data-interval="3500">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item">
                    <img class="img-slide" src="/img/dvs360/trabajos/arco.png" alt="theme-img">
                  </div>
                  <div class="item active">
                    <img class="img-slide" src="/img/dvs360/trabajos/exert.png" alt="theme-img">
                  </div>
                  <div class="item">
                    <img class="img-slide" src="/img/dvs360/trabajos/ate2.png" alt="theme-img">
                  </div>
                </div>
                <!-- Controls -->
                <a href="#carousel-30" role="button" data-slide="prev">
                  <i class="fa fa-angle-left fa-2x btn-prev"></i>
                </a>
                <a href="#carousel-30" role="button" data-slide="next">
                  <i class="fa fa-angle-right fa-2x btn-next"></i>
                </a>
              </div>
            </div>
            <!-- SLIDER END-->
          </div>
        </div>
      </div>
    </div>

    <!-- SECTION TEAM -->
    <!--===============================================================-->
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h3 class="title-v2">NUESTRO EQUIPO</h3>
          </div>
        </div>
        <div class="row">

        @foreach ($team as $t)
          <div class="col-sm-3 text-center">
            <div class="content-box bordered">
              <a href="#" class="img-wrapper text-theme-sm">
                <img class="img-responsive" src="{{ $t->image }}" alt="theme-img">
              </a>
              <h3 class="title-sm text-theme-sm">{{ $t->name }} {{ $t->lastName }}</h3>
              <p class="text-theme-sm">{{ $t->role }}</p>
              <div class="text-theme-sm">
                @isset($t->twitter)
                <a target="_blank" href="{{$t->twitter}}"><i class="fa fa-twitter fa-box bg" data-toggle="tooltip" data-placement="bottom" title="twitter"></i>
                </a>
                @endisset
                
                @isset($t->facebook)
                <a target="_blank" href="{{$t->facebook}}"><i class="fa fa-facebook fa-box bg" data-toggle="tooltip" data-placement="bottom" title="facebook"></i>
                </a>
                @endisset
                
                @isset($t->instagram)
                <a target="_blank" href="{{$t->instagram}}"><i class="fa fa-instagram fa-box bg" data-toggle="tooltip" data-placement="bottom" title="instagram"></i>
                </a>
                @endisset

                @isset($t->linkedin)
                <a target="_blank" href="{{$t->linkedin}}"><i class="fa fa-linkedin fa-box bg" data-toggle="tooltip" data-placement="bottom" title="linkedin"></i>
                </a>
                @endisset

              </div>
            </div>
          </div>
        @endforeach

        </div>
      </div>
    </div>


    <div class="section section-sm section-top section-white">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <p class="lead text-center">Trabajamos con las ultimas tecnologías</p>
            <div id="owl-clients-v2" class="owl-carousel mt-20">
                @foreach ($partners as $p)
                <div class="item">
                  <img class="img-responsive" src="{{ $p->image }}" alt="theme-img">
                </div>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection



@push('styles')

  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

@endpush


@push('scripts')
  <script src="/z-theme/assets/js/page/page.about-us-option-2.js"></script>
@endpush