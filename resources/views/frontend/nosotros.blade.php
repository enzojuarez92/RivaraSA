@extends(LAYOUT_FRONT.'app')

@section('title', 'Nosotros | '.APP_DISPLAY)
@section('description', '')
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
                        <div class="story-video bg-img cover-background box-shadow-primary" data-overlay-dark="0" data-background="{{ asset('img/rivara/fachadaoficina_baja.jpg') }}">
                            

                            <!-- <div class="inner-border"></div> -->
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

                    <div class="col-md-5 col-sm-12 xs-margin-20px-bottom">
                        <div class="story-video">

                            <div class="text-center center-col absolute-middle-center z-index-1">
                                <a class="video video_btn" href="video/down-time.mp4"><i class="fas fa-play font-size18 xs-font-size16"></i>
                            </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-7 col-sm-12 col-12">

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

        <!-- start what we do section -->
        <section>
            <div class="container">
                <div class="section-heading">
                    <h3>What We Do</h3>
                </div>
                <div class="row feature-boxes-container">

                    <div class="col-lg-4 col-md-12 sm-margin-20px-bottom feature-box-04">
                        <div class="feature-box-inner">
                            <i class="icon-layers font-size50 md-font-size46 sm-font-size40 xs-font-size38"></i>
                            <h4 class="font-size15 xs-font-size14 margin-10px-top xs-margin-8px-top text-uppercase font-weight-600 text-black">Business Services</h4>
                            <div class="sepratar"></div>
                            <p>Exhaustive technology of implementing multi purpose projects is putting your project successful.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 sm-margin-20px-bottom feature-box-04">
                        <div class="feature-box-inner">
                            <i class="icon-genius font-size50 md-font-size46 sm-font-size40 xs-font-size38"></i>
                            <h4 class="font-size15 xs-font-size14 margin-10px-top xs-margin-8px-top text-uppercase font-weight-600 text-black">Saving Investments</h4>
                            <div class="sepratar"></div>
                            <p>Exhaustive technology of implementing multi purpose projects is putting your project successful.</p>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-12 feature-box-04">
                        <div class="feature-box-inner">
                            <i class="icon-hotairballoon font-size50 md-font-size46 sm-font-size40 xs-font-size38"></i>
                            <h4 class="font-size15 xs-font-size14 margin-10px-top xs-margin-8px-top text-uppercase font-weight-600 text-black">Online Consulting</h4>
                            <div class="sepratar"></div>
                            <p>Exhaustive technology of implementing multi purpose projects is putting your project successful.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- end what we do section -->

        <!-- start team section -->
        <section class="bg-light-gray">
            <div class="container">

                <div class="section-heading">
                    <h3>Our Team</h3>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3 xs-margin-20px-bottom mobile-margin-15px-bottom">
                        <div class="team-members">
                            <div class="team-members-img"><img alt="img" src="img/team/team-01.jpg"></div>
                            <div class="team-members-text">
                                <h4><a href="javascript:void(0)">Jamara Karle</a></h4><span>Founder</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3 xs-margin-20px-bottom mobile-margin-15px-bottom">
                        <div class="team-members">
                            <div class="team-members-img"><img alt="img" src="img/team/team-02.jpg">
                            </div>
                            <div class="team-members-text">
                                <h4><a href="javascript:void(0)">Keir Prestonly</a></h4><span>Co-Founder</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3 mobile-margin-15px-bottom">
                        <div class="team-members">
                            <div class="team-members-img"><img alt="img" src="img/team/team-03.jpg"></div>
                            <div class="team-members-text">
                                <h4><a href="javascript:void(0)">Finley Walkeror</a></h4><span>Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="team-members">
                            <div class="team-members-img"><img alt="img" src="img/team/team-04.jpg"></div>
                            <div class="team-members-text">
                                <h4><a href="javascript:void(0)">Lenethi  Miloler</a></h4><span>Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end team section -->




@endsection



@push('styles')

  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

@endpush


@push('scripts')
  <script src="/z-theme/assets/js/page/page.about-us-option-2.js"></script>
@endpush