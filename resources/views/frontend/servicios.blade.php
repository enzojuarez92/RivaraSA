@extends(LAYOUT_FRONT.'app')

@section('title', 'Servicios | '.APP_DISPLAY)
@section('description', 'Fundada en el año 1936, RIVARA S.A. es una empresa familiar prestando desde sus comienzos servicios necesarios para que el productor agropecuario alcance niveles de eficiencia.')
@section('author', APP_DISPLAY)
@section('keywords', '')
@section('image', LOGO_REDES)

@section('breadcrumb')
            @include('frontend.layout.includes.breadcrumb', [
                'title' => 'Servicios', 
                'subtitle' => 'Conozca nuestros servicios',
                'img' => 'img/rivara/fachadaoficina_baja2.jpg',
                'links' => array(
                    ['icon' => 'icon-copy', 'name' => 'Inicio', 'url' => route('home')],
                    ['icon' => 'icon-add', 'name' => 'Servicios', 'url' => route('servicios')],
                )
            ])
@endsection

@section('content')


        <!-- start service detail section -->
        <section>
            <div class="container">
                <div class="row">

                    <!-- start left side section -->
                    <div class="col-lg-4 col-md-12 padding-50px-right md-padding-30px-right sm-padding-15px-right order-2 order-lg-1">

                        <!-- start services -->
                        <div class="services-single-left-box">
                            <h6 class="font-weight-700 font-size16 sm-font-size14 text-uppercase left-title margin-20px-bottom">@lang('services.cuadro-1')</h6>
                            <div class="services-single-menu bg-light-gray margin-30px-bottom sm-margin-25px-bottom">
                                <ul class="no-margin">
                                    <li><a href="{{ route('servicios', 'granos') }}">@lang('services.cuadro-2')</a></li>
                                    <li><a href="{{ route('servicios', 'insumos') }}">@lang('services.cuadro-3')</a></li>
                                    <li><a href="{{ route('servicios', 'alimentos') }}">@lang('services.cuadro-4')</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end services -->

                        <!-- start testimonial -->
                        {{-- <div class="bg-light-gray padding-25px-all md-padding-20px-all border-radius-5 margin-30px-bottom sm-margin-25px-bottom">
                            <div class="testimonial-style7 owl-carousel owl-theme">
                                <div class="testmonial-single center-col width-85 md-width-80">
                                    <p>Exercitation ullamco laboris nisiut aliqu exeaea commo. Duisltrtohg aute irure.</p>
                                    <img src="img/testmonials/t-1.jpg" class="rounded-circle" alt="" />
                                    <div class="d-block vertical-align-middle text-center">
                                        <h4>Alivin Corondo</h4>
                                        <h6>Networking Lead</h6>
                                    </div>
                                </div>
                                <div class="testmonial-single center-col width-85 md-width-80">
                                    <p>Exercitation ullamco laboris nisiut aliqu exeaea commo. Duisltrtohg aute irure.</p>
                                    <img src="img/testmonials/t-2.jpg" class="rounded-circle" alt="" />
                                    <div class="d-block vertical-align-middle text-center">
                                        <h4>Stepha Kruse</h4>
                                        <h6>Design Lead</h6>
                                    </div>
                                </div>
                                <div class="testmonial-single center-col width-85 md-width-80">
                                    <p>Exercitation ullamco laboris nisiut aliqu exeaea commo. Duisltrtohg aute irure.</p>
                                    <img src="img/testmonials/t-3.jpg" class="rounded-circle" alt="" />
                                    <div class="d-block vertical-align-middle text-center">
                                        <h4>Dunican keithly</h4>
                                        <h6>Networking Lead</h6>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- start testimonial -->

                        <!-- start help -->
                        <div class="bg-img cover-background theme-overlay border-radius-5 margin-30px-bottom sm-margin-25px-bottom" data-overlay-dark="8" data-background="img/bg/bg2.jpg">
                            <div class="position-relative z-index-9 text-center padding-50px-tb md-padding-40px-tb sm-padding-30px-tb padding-30px-lr">
                                <i class="fas fa-headset font-size50 md-font-size46 sm-font-size42 text-white margin-15px-bottom"></i>
                                <h5 class="text-white font-weight-600 margin-5px-bottom">@lang('services.ayuda')</h5>
                                <p class="text-white font-weight-500"></p>

                                {{--  <div class="bg-white separator-line-horrizontal-full opacity3 margin-20px-bottom sm-margin-15px-bottom"></div>
                                <ul class="text-center no-padding no-margin">
                                    <li class="text-white margin-5px-bottom"><b>Comercialización de Granos:</b></li>
                                    <li class="text-white margin-5px-bottom"><i class="fa fa-user font-size16 text-white margin-15px-right"></i><a href="tel:123456789" class="text-white">Ing. ...</a></li>
                                    <li class="text-white margin-5px-bottom"><i class="fa fa-phone font-size16 text-white margin-15px-right"></i><a href="tel:2346-538870" class="text-white">....</a></li>
                                    <li class="text-white"><i class="fas fa-envelope-open font-size16 text-white margin-15px-right"></i><a href="mailto:..." class="text-white">...</a></li>
                                </ul>  --}}
                                {{-- TODO: agregar ñato aca --}}
                                <br>
                                <div class="bg-white separator-line-horrizontal-full opacity3 margin-20px-bottom sm-margin-15px-bottom"></div>
                                <ul class="text-center no-padding no-margin">
                                    <li class="text-white margin-5px-bottom"><b>@lang('services.ayuda-1'):</b></li>
                                    <li class="text-white margin-5px-bottom"><i class="fa fa-user font-size16 text-white margin-15px-right"></i><a href="tel:123456789" class="text-white">Ing. Agr. Alejandro Sanchez Cabezudo</a></li>
                                    <li class="text-white margin-5px-bottom"><i class="fa fa-phone font-size16 text-white margin-15px-right"></i><a href="tel:2346-538870" class="text-white">(2346) 538870</a></li>
                                    <li class="text-white"><i class="fas fa-envelope-open font-size16 text-white margin-15px-right"></i><a href="mailto:alejandros@rivara.com.ar" class="text-white">alejandros@rivara.com.ar</a></li>
                                </ul>
                                <br>
                                <div class="bg-white separator-line-horrizontal-full opacity3 margin-20px-bottom sm-margin-15px-bottom"></div>
                                <ul class="text-center no-padding no-margin">
                                    <li class="text-white margin-5px-bottom"><b>@lang('services.ayuda-2'):</b></li>
                                    <li class="text-white margin-5px-bottom"><i class="fa fa-user font-size16 text-white margin-15px-right"></i><a href="tel:123456789" class="text-white">Javier Tristant</a></li>
                                    <li class="text-white margin-5px-bottom"><i class="fa fa-phone font-size16 text-white margin-15px-right"></i><a href="tel:" class="text-white">(2346) 471303 | (2346) 538428</a></li>
                                    <li class="text-white"><i class="fas fa-envelope-open font-size16 text-white margin-15px-right"></i><a href="mailto:javiertristant@rivara.com.ar" class="text-white">javiertristant@rivara.com.ar</a></li>
                                </ul>

                            </div>
                        </div>
                        <!-- end help -->

                        <!-- start download -->
                        {{-- <h6 class="font-weight-700 font-size16 sm-font-size14 text-uppercase left-title margin-20px-bottom">Downloads</h6>
                        <ul class="downloads no-margin-bottom">
                            <li class="margin-10px-bottom"><a href="img/content/profile.pdf"><i class="far fa-file-pdf font-size24"></i><span class="label font-weight-600">Company Profile</span></a></li>
                            <li><a href="img/content/profile.pdf"><i class="far fa-file-pdf font-size24"></i><span class="label font-weight-600">Our Case Study</span></a></li>
                        </ul> --}}
                        <!-- end download -->

                    </div>
                    <!-- end left side section -->

                    @include('frontend.servicios.'.$servicio)

                </div>
            </div>
        </section>
        <!-- end service detail section -->



@endsection



@push('styles')

  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

@endpush


@push('scripts')
  <script src="/z-theme/assets/js/page/page.about-us-option-2.js"></script>
@endpush