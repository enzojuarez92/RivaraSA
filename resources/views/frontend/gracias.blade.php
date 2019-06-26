@extends(LAYOUT_FRONT.'app')

@section('title', 'Gracias | '.APP_DISPLAY)
@section('description', 'Gracias por Contactarnos')
@section('author', APP_DISPLAY)
@section('keywords', '')
@section('image', LOGO_REDES)


@section('breadcrumb')
            @include('frontend.layout.includes.breadcrumb', [
                'title' => 'Gracias', 
                'subtitle' => 'Subtitulo',
                'links' => array(
                    ['icon' => 'icon-copy', 'name' => 'Contacto', 'url' => route('contacto')],
                    ['icon' => 'icon-add', 'name' => 'Gracias', 'url' => ''],
                )
            ])
@endsection

@section('content')


<div class="section">
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Muchas gracias!</strong> Muy pronto te estaremos contactando.
                </div>
            </div>
        </div>
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



@endsection



@push('styles')

  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

@endpush


@push('scripts')
  <script src="/z-theme/assets/js/page/page.about-us-option-2.js"></script>
@endpush