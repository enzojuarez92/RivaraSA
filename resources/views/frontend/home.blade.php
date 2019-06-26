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
                    <h3 class="title-style2">What we do</h3>
                    <p class="width-55 sm-width-75 xs-width-95 center-col">Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum market.</p>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="services-grids owl-carousel">

                            <!-- start feature box item-->
                            <div class="bg-white border border-color-light-black padding-25px-tb padding-30px-lr sm-padding-25px-lr feature-box-03">
                                <div class="col-md-12 col-sm-12 no-padding margin-15px-bottom xs-margin-10px-bottom alt-font">
                                    <i class="text-theme-color icon-genius font-size36 md-font-size34 sm-font-size30 margin-15px-bottom xs-margin-10px-bottom"></i>
                                    <h4 class="font-size18 sm-font-size16 xs-font-size15 margin-10px-bottom width-100 text-extra-dark-gray font-weight-600">Investment<br>planning & strategy</h4>
                                </div>
                                <p class="width-95">International business consulting pers piciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem apenventore veritatis architecto.</p>
                                <div class="border-top border-color-light-black padding-15px-top sm-padding-10px-top">
                                    <a href="javascript:void(0)" class="font-weight-700">read more...</a>
                                </div>
                                <div class="show-details">
                                    <img src="img/content/feature-04.jpg" alt="" />
                                    <div class="feature-box-detail padding-30px-all">
                                        <div class="border border-color-light-white height-100 padding-20px-all">
                                            <h4 class="font-size18 sm-font-size16 xs-font-size15 margin-10px-bottom width-100 text-theme-color font-weight-600">Investment <br /> planning & strategy</h4>
                                            <ul class="list-style-13 text-white">
                                                <li>Financial services</li>
                                                <li>Investment plan</li>
                                                <li>Blend of energy</li>
                                                <li>Business strategy</li>
                                            </ul>
                                            <a href="javascript:void(0)" class="font-weight-700 text-theme-color margin-15px-top sm-margin-10px-top display-inline-block">read more...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item-->

                            <!-- start feature box item-->
                            <div class="bg-white border border-color-light-black padding-25px-tb padding-30px-lr sm-padding-25px-lr feature-box-03">
                                <div class="col-md-12 col-sm-12 no-padding margin-15px-bottom xs-margin-10px-bottom alt-font">
                                    <i class="text-theme-color icon-adjustments font-size36 md-font-size34 sm-font-size30 margin-15px-bottom xs-margin-10px-bottom"></i>
                                    <h4 class="font-size18 sm-font-size16 xs-font-size15 margin-10px-bottom width-100 text-extra-dark-gray font-weight-600">International<br> business opportunities</h4>
                                </div>
                                <p class="width-95">Consulting international business pers piciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem apenventore veritatis architecto.</p>
                                <div class="border-top border-color-light-black padding-15px-top sm-padding-10px-top">
                                    <a href="javascript:void(0)" class="font-weight-700">read more...</a>
                                </div>
                                <div class="show-details">
                                    <img src="img/content/feature-05.jpg" alt="" />
                                    <div class="feature-box-detail padding-30px-all">
                                        <div class="border border-color-light-white height-100 padding-20px-all">
                                            <h4 class="font-size18 sm-font-size16 xs-font-size15 margin-10px-bottom width-100 text-theme-color font-weight-600">International <br /> business opportunities</h4>
                                            <ul class="list-style-13 text-white">
                                                <li>Investment plan</li>
                                                <li>Financial services</li>
                                                <li>Business strategy</li>
                                                <li>Blend of energy</li>
                                            </ul>
                                            <a href="javascript:void(0)" class="font-weight-700 text-theme-color margin-15px-top sm-margin-10px-top display-inline-block">read more...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item-->

                            <!-- start feature box item-->
                            <div class="bg-white border border-color-light-black padding-25px-tb padding-30px-lr sm-padding-25px-lr feature-box-03">
                                <div class="col-md-12 col-sm-12 no-padding margin-15px-bottom xs-margin-10px-bottom alt-font">
                                    <i class="text-theme-color icon-recycle font-size36 md-font-size34 sm-font-size30 margin-15px-bottom xs-margin-10px-bottom"></i>
                                    <h4 class="font-size18 sm-font-size16 xs-font-size15 margin-10px-bottom width-100 text-extra-dark-gray font-weight-600">Approach<br> strategic & commercial</h4>
                                </div>
                                <p class="width-95">Business consulting international pers piciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem apenventore veritatis architecto.</p>
                                <div class="border-top border-color-light-black padding-15px-top sm-padding-10px-top">
                                    <a href="javascript:void(0)" class="font-weight-700">read more...</a>
                                </div>
                                <div class="show-details">
                                    <img src="img/content/feature-06.jpg" alt="" />
                                    <div class="feature-box-detail padding-30px-all">
                                        <div class="border border-color-light-white height-100 padding-20px-all">
                                            <h4 class="font-size18 sm-font-size16 xs-font-size15 margin-10px-bottom width-100 text-theme-color font-weight-600">Approach <br /> strategic & commercial</h4>
                                            <ul class="list-style-13 text-white">
                                                <li>Business strategy</li>
                                                <li>Investment plan</li>
                                                <li>Financial services</li>
                                                <li>Blend of energy</li>
                                            </ul>
                                            <a href="javascript:void(0)" class="font-weight-700 text-theme-color margin-15px-top sm-margin-10px-top display-inline-block">read more...</a>
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
                                <img src="img/content/contant-left02.jpg" alt="" />
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="display-table height-100">

                                <div class="padding-30px-lr padding-25px-tb sm-padding-30px-all xs-padding-25px-all display-table-cell vertical-align-middle width-50">
                                    <h4>Welcome to crizal template.</h4>
                                    <div class="margin-20px-bottom sm-margin-15px-bottom"><span class="font-size20 sm-font-size16 font-weight-600 text-dark-gray"><span class="fas fa-quote-left font-size20 opacity2 margin-10px-right"></span>Pride of the business for over a hundred years. </span> for public &amp; private clients.</div>
                                    <p class="width-95 sm-margin-15px-bottom">Perspiciatis unde omnis iste natus error sit voluptatem accusantium accusantium laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                                    <ul class="list-style-14">
                                        <li>Performing at high levels</li>
                                        <li>Financial Investment planning</li>
                                        <li>Strategic & commercial approach</li>
                                    </ul>
                                    <a href="javascript:void(0)" class="butn medium theme margin-25px-top sm-margin-20px-top xs-margin-15px-top"><span>About Crizal</span></a>
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

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="/z-theme/assets/js/page/carousel-preload.js"></script>
  <link rel="stylesheet" type="text/css" href="/z-theme/assets/css/carousel-animate.css">
    
@endpush


@push('scripts')
  <script src="/z-theme/assets/js/page/page.home.js"></script>
@endpush