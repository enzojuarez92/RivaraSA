@extends(LAYOUT_FRONT . 'app')

@section('title', 'Nosotros | ' . APP_DISPLAY)
@section('description',
    'Fundada en el año 1936, RIVARA S.A. es una empresa familiar prestando desde sus comienzos
    servicios necesarios para que el productor agropecuario alcance niveles de eficiencia.')
@section('author', APP_DISPLAY)
@section('keywords', '')
@section('image', LOGO_REDES)

@section('breadcrumb')
    @include('frontend.layout.includes.breadcrumb', [
        'title' => __('about.title'),
        'subtitle' => 'Sobre nosotros',
        'img' => 'img/rivara/fachadaoficina_baja2.jpg',
        'links' => [
            ['icon' => 'icon-copy', 'name' => __('home.home'), 'url' => route('home')],
            ['icon' => 'icon-add', 'name' => __('about.title'), 'url' => route('nosotros')],
        ],
    ])
@endsection

@section('content')
    <section class="sm-padding-15px-lr">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="myCarousel" class="carousel slide mb-3 mb-sm-4" data-ride="carousel">
                        <!-- Indicadores -->
                        <ul class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ul>
                
                        <!-- Slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                {{-- <img src="{{ asset('img/rivara/sliders/granos/granos_1.jpg') }}" alt="slider insumos" /> --}}
                                <img src="{{ asset('img/rivara/2023/laempresa1.jpg') }}" alt="oficina">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/rivara/2023/laempresa2.jpg') }}" alt="oficina">
                            </div>
                        </div>
                
                        <!-- Controles de navegación -->
                        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="">
                        <p class="margin-10px-bottom text-justify">
                            @php
                                $content = Lang::get('about.content');
                                $halfLength = ceil(strlen($content) / 2) + 31;
                                $firstHalf = substr($content, 0, $halfLength);
                                $secondHalf = substr($content, $halfLength);
                            @endphp
                            {{ $firstHalf }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="">
                        <p class="margin-10px-bottom text-justify">
                            {{ $secondHalf }}
                        </p>
                    </div>
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
                    <h4 class="text-white font-weight-600 text-center">@lang('about.counter_title')</h4>
                    <p
                        class="font-size16 sm-font-size14 text-white line-height-30 sm-line-height-28 no-margin text-center">
                        @lang('about.counter_content')</p>
                    <div
                        class="separator-line-horrizontal-full bg-white opacity2 margin-50px-tb md-margin-40px-tb sm-margin-30px-tb xs-margin-25px-tb">
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-4 col-md-4">
                            <div class="counter-box text-left xs-text-center">

                                <h4 class="countup text-white display-block">{{ HOME_ANOS }}</h4>
                                <div
                                    class="separator-line-horrizontal-medium-light3 bg-theme margin-15px-tb sm-margin-10px-tb xs-margin-10px-tb opacity5 xs-center-col">
                                </div>
                                <p class="font-size24 sm-font-size20 xs-font-size18 font-weight-600 text-white no-margin">
                                    @lang('home.counter.1')</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4">
                            <div class="counter-box text-left xs-text-center">
                                <h4 class="countup text-white display-block xs-text-center">{{ HOME_EMPLEADOS }}</h4>
                                <div
                                    class="separator-line-horrizontal-medium-light3 bg-theme margin-15px-tb sm-margin-10px-tb xs-margin-10px-tb opacity5 xs-center-col">
                                </div>
                                <p class="font-size24 sm-font-size20 xs-font-size18 font-weight-600 text-white no-margin">
                                    @lang('home.counter.2')</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4">
                            <div class="counter-box text-left xs-text-center">
                                <h4 class="countup text-white display-block xs-text-center">{{ HOME_USD }}</h4>
                                <div
                                    class="separator-line-horrizontal-medium-light3 bg-theme margin-15px-tb sm-margin-10px-tb xs-margin-10px-tb opacity5 xs-center-col">
                                </div>
                                <p class="font-size24 sm-font-size20 xs-font-size18 font-weight-600 text-white no-margin">
                                    @lang('home.counter.3')</p>
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
