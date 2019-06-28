@extends(LAYOUT_FRONT.'app')

@section('title', 'Inicio | '.APP_DISPLAY)
@section('description', 'Rivara meta description')
@section('author', APP_DISPLAY)
@section('keywords', 'rivara, keywords')
@section('image', LOGO_REDES)



@section('content')


        <!-- start slideshow-->
        <div class="container-fluid full-screen">
            <div class="row slider-fade">
                <div class="owl-carousel owl-theme width-100">
                    <div class="text-center item bg-img" data-overlay-dark="7" data-background="{{ asset('img/rivara/sliders/Slider1.jpg') }}">
                        <div class="absolute-middle-center caption">
                            <div class="overflow-hidden">
                                <h3 class="alt-font font-size28 sm-font-size18 text-white no-margin">@lang('slider.slider_1_subtitle')</h3>
                                <h1 class="text-white">@lang('slider.slider_1_title')</h1>
                                <p class="margin-30px-bottom sm-margin-20px-bottom sm-display-none">@lang('slider.slider_1_content')</p>
                                <a href="javascript:void(0);" class="butn medium theme">
                                    <span class="alt-font">@lang('slider.learn_more')</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center item bg-img" data-overlay-dark="6" data-background="{{ asset('img/rivara/sliders/Slider2.jpg') }}">
                        <div class="absolute-middle-center caption">
                            <div class="overflow-hidden">
                                <h3 class="alt-font font-size28 sm-font-size18 text-white no-margin">@lang('slider.slider_2_subtitle')</h3>
                                <h1 class="text-white">@lang('slider.slider_2_title')</h1>
                                <p class="margin-30px-bottom sm-margin-20px-bottom sm-display-none">@lang('slider.slider_2_content')</p>
                                <a href="javascript:void(0);" class="butn medium theme">
                                    <span class="alt-font">@lang('slider.learn_more')</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center item bg-img" data-overlay-dark="6" data-background="{{ asset('img/rivara/sliders/Slider3.jpg') }}">
                        <div class="absolute-middle-center caption">
                            <div class="overflow-hidden">
                                <h3 class="alt-font font-size28 sm-font-size18 text-white no-margin">@lang('slider.slider_3_subtitle')</h3>
                                <h1 class="text-white">@lang('slider.slider_3_title')</h1>
                                <p class="margin-30px-bottom sm-margin-20px-bottom sm-display-none">@lang('slider.slider_3_content')</p>
                                <a href="javascript:void(0);" class="butn medium theme">
                                    <span class="alt-font">@lang('slider.learn_more')</span><i class="fas fa-angle-right font-size16 sm-font-size14 text-white margin-10px-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end slideshow-->

        <!-- start service section -->
        <section>
            <div class="container">

                <div class="section-heading">
                    <h3 class="title-style2">@lang('home.service_title')</h3>
                    <p class="width-55 sm-width-75 xs-width-95 center-col">@lang('home.service_content')</p>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="services-grids owl-carousel">

                            <!-- start feature box item-->
                            <div class="bg-white border border-color-light-black padding-25px-tb padding-30px-lr sm-padding-25px-lr feature-box-03">
                                <div class="col-md-12 col-sm-12 no-padding margin-15px-bottom xs-margin-10px-bottom alt-font">
                                    <i class="text-theme-color icon-genius font-size36 md-font-size34 sm-font-size30 margin-15px-bottom xs-margin-10px-bottom"></i>
                                    <h4 class="font-size18 sm-font-size16 xs-font-size15 margin-10px-bottom width-100 text-extra-dark-gray font-weight-600">@lang('home.service.title.1')</h4>
                                </div>
                                <p class="width-95">@lang('home.service.text.1')</p>
                                <div class="border-top border-color-light-black padding-15px-top sm-padding-10px-top">
                                    <a href="javascript:void(0)" class="font-weight-700">@lang('home.read')...</a>
                                </div>
                                <div class="show-details">
                                    <img src="img/content/feature-04.jpg" alt="" />
                                    <div class="feature-box-detail padding-30px-all">
                                        <div class="border border-color-light-white height-100 padding-20px-all">
                                            <h4 class="font-size18 sm-font-size16 xs-font-size15 margin-10px-bottom width-100 text-theme-color font-weight-600">@lang('home.service.title.1')</h4>
                                            <ul class="list-style-13 text-white">
                                                <li>@lang('home.service.item.1.1')</li>
                                                <li>@lang('home.service.item.1.2')</li>
                                            </ul>
                                            <a href="javascript:void(0)" class="font-weight-700 text-theme-color margin-15px-top sm-margin-10px-top display-inline-block">@lang('home.read')...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item-->

                            <!-- start feature box item-->
                            <div class="bg-white border border-color-light-black padding-25px-tb padding-30px-lr sm-padding-25px-lr feature-box-03">
                                <div class="col-md-12 col-sm-12 no-padding margin-15px-bottom xs-margin-10px-bottom alt-font">
                                    <i class="text-theme-color icon-adjustments font-size36 md-font-size34 sm-font-size30 margin-15px-bottom xs-margin-10px-bottom"></i>
                                    <h4 class="font-size18 sm-font-size16 xs-font-size15 margin-10px-bottom width-100 text-extra-dark-gray font-weight-600">@lang('home.service.title.2')</h4>
                                </div>
                                <p class="width-95">@lang('home.service.text.2')</p>
                                <div class="border-top border-color-light-black padding-15px-top sm-padding-10px-top">
                                    <a href="javascript:void(0)" class="font-weight-700">@lang('home.read')...</a>
                                </div>
                                <div class="show-details">
                                    <img src="img/content/feature-05.jpg" alt="" />
                                    <div class="feature-box-detail padding-30px-all">
                                        <div class="border border-color-light-white height-100 padding-20px-all">
                                            <h4 class="font-size18 sm-font-size16 xs-font-size15 margin-10px-bottom width-100 text-theme-color font-weight-600">@lang('home.service.title.2')</h4>
                                            <ul class="list-style-13 text-white">
                                                <li>@lang('home.service.item.2.1')</li>
                                                <li>@lang('home.service.item.2.2')</li>
                                            </ul>
                                            <a href="javascript:void(0)" class="font-weight-700 text-theme-color margin-15px-top sm-margin-10px-top display-inline-block">@lang('home.read')...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item-->

                            <!-- start feature box item-->
                            <div class="bg-white border border-color-light-black padding-25px-tb padding-30px-lr sm-padding-25px-lr feature-box-03">
                                <div class="col-md-12 col-sm-12 no-padding margin-15px-bottom xs-margin-10px-bottom alt-font">
                                    <i class="text-theme-color icon-recycle font-size36 md-font-size34 sm-font-size30 margin-15px-bottom xs-margin-10px-bottom"></i>
                                    <h4 class="font-size18 sm-font-size16 xs-font-size15 margin-10px-bottom width-100 text-extra-dark-gray font-weight-600">@lang('home.service.title.3')</h4>
                                </div>
                                <p class="width-95">@lang('home.service.text.3')</p>
                                <div class="border-top border-color-light-black padding-15px-top sm-padding-10px-top">
                                    <a href="javascript:void(0)" class="font-weight-700">@lang('home.read')...</a>
                                </div>
                                <div class="show-details">
                                    <img src="img/content/feature-06.jpg" alt="" />
                                    <div class="feature-box-detail padding-30px-all">
                                        <div class="border border-color-light-white height-100 padding-20px-all">
                                            <h4 class="font-size18 sm-font-size16 xs-font-size15 margin-10px-bottom width-100 text-theme-color font-weight-600">@lang('home.service.title.3')</h4>
                                            <ul class="list-style-13 text-white">
                                                <li>@lang('home.service.item.3.1')</li>
                                                <li>@lang('home.service.item.3.2')</li>
                                            </ul>
                                            <a href="javascript:void(0)" class="font-weight-700 text-theme-color margin-15px-top sm-margin-10px-top display-inline-block">@lang('home.read')...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item-->

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- end service section -->

        <!-- start about section -->
        <section class="bg-light-gray">
            <div class="container">
                <div class="bg-white box-shadow-primary">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="text-center">
                                <img src="{{ asset('img/rivara/sliders/fachadaoficina_baja.jpg') }}" alt="sobre nosotros" />
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
                                    </ul>
                                    <a href="javascript:void(0)" class="butn medium theme margin-25px-top sm-margin-20px-top xs-margin-15px-top"><span>@lang('home.read')</span></a>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end about section -->



        <!-- start counter section -->
        <section class="parallax" data-overlay-dark="8" data-background="{{ asset('img/rivara/bg11.jpg') }}">
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
                            <span class="icon margin-5px-bottom display-block text-white font-size36 sm-font-size34 xs-font-size30 xs-text-center"><i class="icon-happy"></i></span>
                            <h4 class="countup text-white display-block xs-text-center">70000000</h4>
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

                <div class="section-heading"><span>Blog</span>
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
            </div>
        </section>
        <!-- end blog section -->


@endsection


@push('styles')

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="/z-theme/assets/js/page/carousel-preload.js"></script>
  <link rel="stylesheet" type="text/css" href="/z-theme/assets/css/carousel-animate.css">
    
@endpush


@push('scripts')
  <script src="/z-theme/assets/js/page/page.home.js"></script>
@endpush