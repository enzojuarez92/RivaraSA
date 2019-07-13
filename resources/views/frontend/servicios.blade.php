@extends(LAYOUT_FRONT.'app')

@section('title', 'Servicios | '.APP_DISPLAY)
@section('description', '')
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
                            <h6 class="font-weight-700 font-size16 sm-font-size14 text-uppercase left-title margin-20px-bottom">Nuestros Servicios</h6>
                            <div class="services-single-menu bg-light-gray margin-30px-bottom sm-margin-25px-bottom">
                                <ul class="no-margin">
                                    <li><a href="investment-planning.html">Insumos</a></li>
                                    <li><a href="investment-planning.html">Granos</a></li>
                                    <li><a href="investment-planning.html">Alimentos</a></li>
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
                                <h5 class="text-white font-weight-600 margin-5px-bottom">¿Necesitás ayuda?</h5>
                                <p class="text-white font-weight-500">Llamanos</p>

                                <div class="bg-white separator-line-horrizontal-full opacity3 margin-20px-bottom sm-margin-15px-bottom"></div>
                                <ul class="text-center no-padding no-margin">
                                    <li class="text-white margin-5px-bottom"><i class="fa fa-user font-size16 text-white margin-15px-right"></i><a href="tel:123456789" class="text-white">Ing. Agr. Alejandro Sanchez Cabezudo</a></li>
                                    <li class="text-white margin-5px-bottom"><i class="fa fa-phone font-size16 text-white margin-15px-right"></i><a href="tel:2346-538870" class="text-white">(2346) 538870</a></li>
                                    <li class="text-white"><i class="fas fa-envelope-open font-size16 text-white margin-15px-right"></i><a href="mailto:alejandros@rivara.com.ar" class="text-white">alejandros@rivara.com.ar</a></li>
                                </ul>
                                <br>
                                <div class="bg-white separator-line-horrizontal-full opacity3 margin-20px-bottom sm-margin-15px-bottom"></div>
                                <ul class="text-center no-padding no-margin">
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

                    <!-- start right side section -->
                    <div class="col-lg-8 col-md-12 order-1 order-lg-2 sm-margin-30px-bottom">
                        <div class="services-single-right">
                            <h5 class="font-weight-600">Insumos</h5>
                            <div class="margin-40px-bottom sm-margin-30px-bottom"><img src="{{ asset('img/rivara/insumos/insumos1.jpg') }}" class="border-radius-5 box-shadow-primary" alt="" /></div>


                            <div class="row">
                                <div class="col-12">
                                    <div class="inner-title">
                                        <h6>Agroquímicos y fertilizantes</h6>
                                    </div>
                                </div>
                                <p class="margin-30px-bottom sm-margin-20px-bottom width-95">
                                    Uno de nuestros objetivos principales es abarcar todos los productos que cubran las necesidades del productor y estar en la búsqueda de la mejor relación precio/calidad, contando siempre con stock para entregas inmediatas.
                                    <br>
                                    Para ayudar al productor, ofrecemos canjes por granos disponibles y/o a cosecha. Para eso disponemos con un asesor agronómico quién se encuentra a su servico para profundizar estos temas, evacuar dudas y brindar asesoramiento, cotizando los productos que el productor necesita.
                                    <br>
                                    Además contamos con una planta de fertilizantes sólidos a granel y líquidos e incorporamos camiones especialmente adaptados para entregar ambos fertilizantes, donde lo necesite en tiempo y forma.
                                </p>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="inner-title">
                                        <h6>Combustibles</h6>
                                    </div>
                                </div>
                                <p class="margin-30px-bottom sm-margin-20px-bottom width-95">
                                    Nuestra estación de servicio, ubicada sobre la Ruta Nac. Nro. 5, cuenta con un Agroservicio equipado con tanques de gasoil para carga rápida y con entrega de combustibles y lubricantes donde el productor lo solicite. Contamos con dos camiones cisternas con medidores volumétricos para prestar dicho servicio.
                                    <br>
                                    Nuestra empresa tiene a su disposición a un vendedor especializado, quién se encuentra a su disposición para el asesoramiento o cotización de los productos.
                                </p>
                            </div>


                        </div>
                    </div>
                    <!-- end right side section -->

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