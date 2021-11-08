@extends(LAYOUT_FRONT.'landing')

@section('title', 'Inicio | ' . APP_DISPLAY)
@section('description', 'Fundada en el año 1936, RIVARA S.A. es una empresa familiar prestando desde sus comienzos servicios necesarios para que el productor agropecuario alcance niveles de eficiencia.')
@section('author', APP_DISPLAY)
@section('keywords', 'rivara, keywords')
@section('image', LOGO_REDES)

@section('content')
        <!-- start slideshow-->
        <div class="container-fluid full-screen">
            <div class="row slider-fade">
                <div class="owl-carousel owl-theme width-100">
                    <div class="text-center item bg-img" data-overlay-dark="3" data-background="{{ asset('img/rivara/sliders/Slider5.jpg') }}">
                        <div class="absolute-middle-center caption">
                            <div class="overflow-hidden">
                                <h3 class="alt-font font-size28 sm-font-size18 text-white no-margin">@lang('slider.slider_5_subtitle')</h3>
                                <h1 class="text-white">@lang('slider.slider_5_title')</h1>
                                <p class="margin-30px-bottom sm-margin-20px-bottom sm-display-none">@lang('slider.slider_5_content')</p>
                                <a target="_blank" href="https://clientes.rivara.com.ar/" class="butn medium theme">
                                    <span class="alt-font">@lang('slider.slider_5_link')</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
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

        <section id="servicios" class="bg-light-gray">
            <div class="container">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-columns">
                                <div class="card">
                                    <img class="card-img-top" src="http://localhost:8000/img/rivara/fachadaoficina_baja.jpg" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title">Title</h4>
                                        <p class="card-text">Text</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="http://localhost:8000/img/rivara/fachadaoficina_baja.jpg" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title">Title</h4>
                                        <p class="card-text">Text</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="http://localhost:8000/img/rivara/fachadaoficina_baja.jpg" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title">Title</h4>
                                        <p class="card-text">Text</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>        

        
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
                                    <a href="{{ route('nosotros') }}" class="butn medium theme margin-25px-top sm-margin-20px-top xs-margin-15px-top"><span>@lang('home.know')</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end about section -->




@endsection


@push('styles')

  <link rel="stylesheet" type="text/css" href="/z-theme/assets/css/carousel-animate.css">
    
@endpush


@push('scripts')
  <script src="/z-theme/assets/js/page/page.home.js"></script>
@endpush