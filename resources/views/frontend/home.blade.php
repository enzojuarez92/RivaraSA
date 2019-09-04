@extends(LAYOUT_FRONT.'app')

@section('title', 'Inicio | '.APP_DISPLAY)
@section('description', 'Fundada en el año 1936, RIVARA S.A. es una empresa familiar prestando desde sus comienzos servicios necesarios para que el productor agropecuario alcance niveles de eficiencia.')
@section('author', APP_DISPLAY)
@section('keywords', 'rivara, keywords')
@section('image', LOGO_REDES)



@section('content')


        <!-- start slideshow-->
        <div class="container-fluid full-screen">
            <div class="row slider-fade">
                <div class="owl-carousel owl-theme width-100">
                    <div class="text-center item bg-img" data-overlay-dark="3" data-background="{{ asset('img/rivara/sliders/alta/Slider1.jpg') }}">
                        <div class="absolute-middle-center caption">
                            <div class="overflow-hidden">
                                <h3 class="alt-font font-size28 sm-font-size18 text-white no-margin">@lang('slider.slider_1_subtitle')</h3>
                                <h1 class="text-white">@lang('slider.slider_1_title')</h1>
                                <p class="margin-30px-bottom sm-margin-20px-bottom sm-display-none">@lang('slider.slider_1_content')</p>
                                <a href="{{ route('nosotros') }}" class="butn medium theme">
                                    <span class="alt-font">@lang('slider.slider_1_link')</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center item bg-img" data-overlay-dark="3" data-background="{{ asset('img/rivara/sliders/alta/Slider2.jpg') }}">
                        <div class="absolute-middle-center caption">
                            <div class="overflow-hidden">
                                <h3 class="alt-font font-size28 sm-font-size18 text-white no-margin">@lang('slider.slider_2_subtitle')</h3>
                                <h1 class="text-white">@lang('slider.slider_2_title')</h1>
                                <p class="margin-30px-bottom sm-margin-20px-bottom sm-display-none">@lang('slider.slider_2_content')</p>
                                <a href="{{ route('home', '#servicios') }}" class="butn medium theme">
                                    <span class="alt-font">@lang('slider.slider_2_link')</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center item bg-img" data-overlay-dark="1" data-background="{{ asset('img/rivara/sliders/alta/Slider4.jpg') }}">
                        <div class="absolute-middle-center caption">
                            <div class="overflow-hidden">
                                <h3 class="alt-font font-size28 sm-font-size18 text-white no-margin">@lang('slider.slider_3_subtitle')</h3>
                                <h1 class="text-white">@lang('slider.slider_3_title')</h1>
                                <p class="margin-30px-bottom sm-margin-20px-bottom sm-display-none">@lang('slider.slider_3_content')</p>
                                <a href="{{ route('nosotros') }}" class="butn medium theme">
                                    <span class="alt-font">@lang('slider.slider_3_link')</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end slideshow-->

        @include('frontend._mercados')

        @include('frontend._servicios')
        <!-- start about section -->
        <section>
            <div class="container">
                <div class="bg-white box-shadow-primary">
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <img src="{{ asset('img/rivara/fachadaoficina_baja.jpg') }}" alt="sobre nosotros" />
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="display-table height-100">

                                <div class="padding-30px-lr padding-25px-tb sm-padding-30px-all xs-padding-25px-all display-table-cell vertical-align-middle width-50">
                                    <h4>@lang('home.about.title')</h4>
                                    <p class="width-95 sm-margin-15px-bottom">@lang('home.about.text')</p>
                                    <ul class="list-style-14">
                                        <li>@lang('home.about.item.1')</li>
                                        <li>@lang('home.about.item.2')</li>
                                        <li>@lang('home.about.item.3')</li>
                                        <li>@lang('home.about.item.4')</li>
                                        <li>@lang('home.about.item.5')</li>
                                    </ul>
                                    <a href="{{ route('nosotros') }}" class="butn medium theme margin-25px-top sm-margin-20px-top xs-margin-15px-top"><span>Conocenos</span></a>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end about section -->



        <!-- start counter section -->
        <section class="parallax" data-overlay-dark="6" data-background="{{ asset('img/rivara/atras_contador.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-4 col-md-6 sm-margin-30px-bottom">
                        <div class="counter-box">
                            <span class="icon margin-5px-bottom display-block text-white font-size36 sm-font-size34 xs-font-size30 xs-text-center"><i class="icon-calendar"></i></span>
                            <h4 class="countup text-white display-block xs-text-center">84</h4>
                            <div class="separator-line-horrizontal-medium-light3 bg-white margin-15px-tb xs-margin-10px-tb opacity5 center-col"></div>
                            <p class="font-size24 sm-font-size20 xs-font-size18 font-weight-600 text-white no-margin text-center">@lang('home.counter.1')</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-6 sm-margin-30px-bottom">
                        <div class="counter-box">
                            <span class="icon margin-5px-bottom display-block text-white font-size36 sm-font-size34 xs-font-size30 xs-text-center"><i class="icon-profile-male"></i></span>
                            <h4 class="countup text-white display-block xs-text-center">150</h4>
                            <div class="separator-line-horrizontal-medium-light3 bg-white margin-15px-tb xs-margin-10px-tb opacity5 center-col"></div>
                            <p class="font-size24 sm-font-size20 xs-font-size18 font-weight-600 text-white no-margin text-center">@lang('home.counter.2')</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="counter-box">
                            <span class="icon margin-5px-bottom display-block text-white font-size36 sm-font-size34 xs-font-size30 xs-text-center"><i class="icon-linegraph"></i></span>
                            <h4 class="countup text-white display-block xs-text-center">70,000,000</h4>
                            <div class="separator-line-horrizontal-medium-light3 bg-white margin-15px-tb xs-margin-10px-tb opacity5 center-col"></div>
                            <p class="font-size24 sm-font-size20 xs-font-size18 font-weight-600 text-white no-margin text-center">@lang('home.counter.3')</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end counter section -->



        <!-- start blog section -->
        <section class="bg-light-gray">
            <div class="container">

                <div class="section-heading"><span>NUESTRAS</span>
                    <h3>@lang('home.recipes')</h3>
                    <p class="width-55 sm-width-75 xs-width-95">@lang('home.recipes.text')</p>
                </div>

                <div class="row">
                    @foreach ($posts as $p)
                    <div class="col-lg-4 col-md-12 sm-margin-30px-bottom">
                        <div class="blog-grids4">
                            <div class="blog-grid-img position-relative">
                                <img src="{{ asset($p->imagen()) }}" alt="{{ $p->title }}" />
                                <div class="blog-date">
                                    <span>{{  $p->day() }} / {{  $p->month() }}</span>
                                </div>
                            </div>
                            <div class="blog-grid-text sm-padding-20px-tb bg-white">
                                <h4><a href="{{ $p->link() }}">{{ $p->title }}</a></h4>
                                <div class="sepratar"></div>
                                <p class="no-margin">{{ $p->extract }}</p>
                            </div>
                        </div>
                    </div>                        
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a class="butn medium theme margin-25px-top sm-margin-20px-top xs-margin-15px-top" style="color:white" href="{{ route('blog.index') }}">
                            <span>Ver Más</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end blog section -->


@endsection


@push('styles')

  <link rel="stylesheet" type="text/css" href="/z-theme/assets/css/carousel-animate.css">
    
@endpush


@push('scripts')
  <script src="/z-theme/assets/js/page/page.home.js"></script>
@endpush