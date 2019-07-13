@extends(LAYOUT_FRONT.'app')

@section('title', 'Nosotros | '.APP_DISPLAY)
@section('description', 'Fundada en el año 1936, RIVARA S.A. es una empresa familiar prestando desde sus comienzos servicios necesarios para que el productor agropecuario alcance niveles de eficiencia.')
@section('author', APP_DISPLAY)
@section('keywords', '')
@section('image', LOGO_REDES)

@section('breadcrumb')
            @include('frontend.layout.includes.breadcrumb', [
                'title' => 'La Empresa', 
                'subtitle' => 'Sobre nosotros',
                'img' => 'img/rivara/fachadaoficina_baja2.jpg',
                'links' => array(
                    ['icon' => 'icon-copy', 'name' => 'Inicio', 'url' => route('home')],
                    ['icon' => 'icon-add', 'name' => 'Nosotros', 'url' => route('nosotros')],
                )
            ])
@endsection

@section('content')


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 sm-margin-30px-bottom">
                        <div class="padding-30px-right">

                            <h4 class="font-weight-600">@lang('about.title')</h4>

                            <p class="margin-10px-bottom">
                              @lang('about.content')
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <img class="img-responsive" src="{{ asset('img/rivara/fachadaoficina_baja.jpg') }}" alt="oficina" height="100%" width="100%">
                        {{-- TODO: falta poner bien esta foto --}}
                    </div>

                </div>
            </div>
        </section>
        <!-- end about section -->

        <!-- start counter section -->
        <section class="parallax" data-overlay-dark="7" data-background="{{ asset('img/rivara/sobre_nosotros.jpg') }}">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-12">

                        <h4 class="text-white font-weight-600">@lang('about.counter_title')</h4>

                        <p class="font-size16 sm-font-size14 text-white line-height-30 sm-line-height-28 width-90 no-margin">@lang('about.counter_content')</p>
                        <div class="separator-line-horrizontal-full bg-white opacity2 margin-50px-tb md-margin-40px-tb sm-margin-30px-tb xs-margin-25px-tb"></div>

                        <div class="row">
                            <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="counter-box text-left xs-text-center">

                                    <h4 class="countup text-white display-block">84</h4>
                                    <div class="separator-line-horrizontal-medium-light3 bg-theme margin-15px-tb sm-margin-10px-tb xs-margin-10px-tb opacity5 xs-center-col"></div>
                                    <p class="font-size24 sm-font-size20 xs-font-size18 font-weight-600 text-white no-margin">@lang('home.counter.1')</p>
                                </div>
                            </div>
                            <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="counter-box text-left xs-text-center">
                                    <h4 class="countup text-white display-block xs-text-center">150</h4>
                                    <div class="separator-line-horrizontal-medium-light3 bg-theme margin-15px-tb sm-margin-10px-tb xs-margin-10px-tb opacity5 xs-center-col"></div>
                                    <p class="font-size24 sm-font-size20 xs-font-size18 font-weight-600 text-white no-margin">@lang('home.counter.2')</p>
                                </div>
                            </div>
                            <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="counter-box text-left xs-text-center">
                                    <h4 class="countup text-white display-block xs-text-center">70000000</h4>
                                    <div class="separator-line-horrizontal-medium-light3 bg-theme margin-15px-tb sm-margin-10px-tb xs-margin-10px-tb opacity5 xs-center-col"></div>
                                    <p class="font-size24 sm-font-size20 xs-font-size18 font-weight-600 text-white no-margin">@lang('home.counter.3')</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end counter section -->

        @include('frontend._servicios')




@endsection



@push('styles')

  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

@endpush


@push('scripts')
  <script src="/z-theme/assets/js/page/page.about-us-option-2.js"></script>
@endpush