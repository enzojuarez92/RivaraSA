@extends(LAYOUT_FRONT . 'app')

@section('title', 'Servicios | ' . APP_DISPLAY)
@section('description',
    'Fundada en el año 1936, RIVARA S.A. es una empresa familiar prestando desde sus comienzos
    servicios necesarios para que el productor agropecuario alcance niveles de eficiencia.')
@section('author', APP_DISPLAY)
@section('keywords', '')
@section('image', LOGO_REDES)

@section('breadcrumb')
    @include('frontend.layout.includes.breadcrumb', [
        'title' => __('services.title'),
        'subtitle' => 'Conozca nuestros servicios',
        'img' => 'img/rivara/fachadaoficina_baja2.jpg',
        'links' => [
            ['icon' => 'icon-copy', 'name' => __('home.home'), 'url' => route('home')],
            ['icon' => 'icon-add', 'name' => __('services.title'), 'url' => route('servicios')],
        ],
    ])
@endsection

@section('content')

    <!-- start service detail section -->
    <section>
        <div class="container">
            <div class="row">
                <div
                    class="col-lg-4 col-md-12 md-padding-30px-right sm-padding-15px-right order-2 order-lg-1">

                    @forelse ($contactosPorArea as $item)
                        @include('frontend.servicios.contacto', [
                            'nombre' => $item->name . ' ' . $item->lastname,
                            'role' => $item->role ?? '',
                            'telefono' => $item->phone ?? 'Sin Información',
                            'email' => $item->email,
                            'foto' => $item->foto ?? 'assets/img/default-avatar.png',
                        ])
                    @empty
                        <p>No hay contactos para mostrar</p>
                    @endforelse

                </div>


                <div class="col-lg-8 col-md-12 order-1 order-lg-2 sm-margin-30px-bottom">
                    <div class="horizontaltab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list hor_1">
                            <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0" role="tab"
                                style="background-color: white; border-color: rgb(193, 193, 193);">
                                <i class="fas fa-corn"></i> Molienda de Maíz no GMO</li>
                            <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-1" role="tab"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><i class="fas fa-solid fa-jar-wheat"></i> Aceites y Harinas</li>
                            <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-2" role="tab"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"> Alimentos Balanceados</li>
                        </ul>
                        <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                            <h2 class="resp-accordion hor_1 resp-tab-active" role="tab" aria-controls="hor_1_tab_item-0"
                                style="background: none white; border-color: rgb(193, 193, 193);"><span
                                    class="resp-arrow"></span><i class="fas fa-medkit"></i> Planning</h2>
                            <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0"
                                style="display:block">
                                <div id="myCarousel" class="carousel slide margin-40px-bottom" data-ride="carousel"
                                            style="margin-bottom: 20px">
                                            <!-- Indicadores -->
                                            <ul class="carousel-indicators">
                                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                                <li data-target="#myCarousel" data-slide-to="4"></li>
                                                <li data-target="#myCarousel" data-slide-to="5"></li>
                                                <li data-target="#myCarousel" data-slide-to="6"></li>
                                                <li data-target="#myCarousel" data-slide-to="7"></li>
                                                <li data-target="#myCarousel" data-slide-to="8"></li>
                                                <li data-target="#myCarousel" data-slide-to="9"></li>
                                                <li data-target="#myCarousel" data-slide-to="10"></li>
                                                <li data-target="#myCarousel" data-slide-to="11"></li>
                                                <li data-target="#myCarousel" data-slide-to="12"></li>
                                            </ul>


                                            <!-- Slides -->
                                            <div class="carousel-inner">
                                                {{-- ITEMS DE MOLIENDA_1 AL MOLIENDA_13 --}}
                                                <div class="carousel-item active">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_1.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_2.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_3.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_4.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_5.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_6.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_7.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_8.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_9.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_10.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_11.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_12.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_13.jpg') }}"
                                                        alt="slider insumos" />
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

                                        <div style="text-align: justify">
                                            En 1995 iniciamos una etapa de industrialización de granos, siendo el primer paso la inauguración de un molino de maíz, que por su capacidad de molienda se ubica en el 2º lugar de Argentina. Como valor fundacional buscamos producir
                                            alimentos saludables y que cumplieran con los más altos estándares de calidad internacional. Molemos granos de maíz Flint libres de modificaciones genéticas. La calidad de nuestros productos fue reconocida por los consumidores y hoy, prácticamente, todas las grandes tiendas tienen sus marcas propias de polenta abastecidas exclusivamente por nuestra empresa. Calidad también reconocida internacionalmente que nos permitió ser proveedores de grits para cereales de
                                            desayuno a Dinamarca, Japón, Suiza y EEUU.
                                            <br>
                                            Nuestros productos de la molienda son libres de transgénicos, aptos para celíacos, con análisis exhaustivos de pesticidas y micotoxinas que convierten nuestras polentas y grits en productos de calidad premium. La certificación de BPM y HCCP asegura la misma calidad para el mercado interno que para el externo,
                                            con un sistema de trazabilidad que nos permite el seguimiento desde la semilla hasta el producto en góndola.
                                            <br>
                                            En nuestro compromiso permanente de cuidar el medio ambiente y reducir la emisión de gases contaminantes, en 2019 incorporamos una fuente de energía limpia y renovable con un sistema solar fotovoltaico de 315 paneles que generan una potencia de 203.000 Kwp anuales, con una captura de CO2 de 177,3 toneladas/año
                                        </div>
                            </div>
                            <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-1"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span
                                    class="resp-arrow"></span><i class="fas fa-cog"></i> Marketing</h2>
                            <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-1">
                                <div id="myCarousel2" class="carousel slide margin-40px-bottom"
                                            data-ride="carousel" style="margin-bottom: 20px">
                                            <!-- Indicadores -->
                                            <ul class="carousel-indicators">
                                                <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel2" data-slide-to="1"></li>
                                                <li data-target="#myCarousel2" data-slide-to="2"></li>
                                            </ul>
                                            <!-- Slides -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{ asset('img/rivara/2023/SAIMG_9130015.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/2023/SAIMG_9132016.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/2023/SAIMG_9138018.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                            </div>
                                            <!-- Controles de navegación -->
                                            <a class="carousel-control-prev" href="#myCarousel2" data-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </a>
                                            <a class="carousel-control-next" href="#myCarousel2" data-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </a>
                                        </div>
                                        Nuestro siguiente emprendimiento, en 2003, fue una unidad de procesamiento de granos
                                        oleaginosos por extrusión y prensado, que nos permitió generar harinas libres de
                                        solventes, porque apoyamos la tendencia mundial de promover alimentos naturales, con
                                        menos refinamiento, menos contaminación y mayor cuidado en preservar las virtudes
                                        contenidas en los granos con los que nos alimentamos.
                                        <br>
                                        Este proceso de extrusión-prensado nos permite obtener, por un lado, harinas de
                                        excelente digestibilidad y alto valor nutricional al tener intactos los aminoácidos
                                        de las proteínas y por otro lado aceites que retienen sus porcentajes de ácidos
                                        grasos, omega3, tocoferoles, vitamina E y esteroles.
                            </div>
                            <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-2"
                                style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span
                                    class="resp-arrow"></span><i class="fas fa-flask"></i> Growth</h2>
                            <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-2">
                                <div id="myCarousel3" class="carousel slide margin-40px-bottom margin-40px-top"
                                            data-ride="carousel" style="margin-bottom: 20px">
                                            <!-- Indicadores -->
                                            <ul class="carousel-indicators">
                                                <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel3" data-slide-to="1"></li>
                                                <li data-target="#myCarousel3" data-slide-to="2"></li>
                                                <li data-target="#myCarousel3" data-slide-to="3"></li>
                                                <li data-target="#myCarousel3" data-slide-to="4"></li>
                                                <li data-target="#myCarousel3" data-slide-to="5"></li>
                                                <li data-target="#myCarousel3" data-slide-to="6"></li>
                                            </ul>
                                            <!-- Slides -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{ asset('img/rivara/sliders/alimentosbalanceados/alimentos_1.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/alimentosbalanceados/alimentos_2.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/alimentosbalanceados/alimentos_3.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/alimentosbalanceados/alimentos_4.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/alimentosbalanceados/alimentos_5.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/alimentosbalanceados/alimentos_6.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/alimentosbalanceados/alimentos_7.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                            </div>
                                            <!-- Controles de navegación -->
                                            <a class="carousel-control-prev" href="#myCarousel3" data-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </a>
                                            <a class="carousel-control-next" href="#myCarousel3" data-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </a>
                                        </div>

                                        En 2020 inauguramos una planta modelo de alimentos balanceados con calidad orgánica
                                        certificada. Procesamos granos orgánicos y garantizamos la trazabilidad de todos
                                        nuestros alimentos. Esto nos permitió ser los proveedores exclusivos de la red de
                                        tambos orgánicos de Nestlé Argentina. También proveemos a distintos criaderos de
                                        aves dentro del país y exportamos a emprendimientos orgánicos de países vecinos. <br>

                                        En 2023 finalizamos la construcción de una moderna planta de clasificación de maíz
                                        pop corn ( o pisingallo) con silos de fondo plano y aireación inferior que protegen
                                        el volumen de expansión , norias de baja velocidad, detectores de metal,
                                        prelimpiezas, zarandas y mesas densimétricas Cimbria, clasificadora óptica Buhler
                                        para exportar un producto de calidad inmejorable

                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-8 col-md-12 order-1 order-lg-2 sm-margin-30px-bottom">
                    <div class="services-single-right">
                        <div id="accordion" class="accordion-style">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            Molienda de Maíz no GMO
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"
                                    style="">
                                    <div class="card-body" style="text-align: justify">

                                        <div id="myCarousel" class="carousel slide margin-40px-bottom" data-ride="carousel"
                                            style="margin-bottom: 20px">
                                            <!-- Indicadores -->
                                            <ul class="carousel-indicators">
                                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                                <li data-target="#myCarousel" data-slide-to="4"></li>
                                                <li data-target="#myCarousel" data-slide-to="5"></li>
                                                <li data-target="#myCarousel" data-slide-to="6"></li>
                                                <li data-target="#myCarousel" data-slide-to="7"></li>
                                                <li data-target="#myCarousel" data-slide-to="8"></li>
                                                <li data-target="#myCarousel" data-slide-to="9"></li>
                                                <li data-target="#myCarousel" data-slide-to="10"></li>
                                                <li data-target="#myCarousel" data-slide-to="11"></li>
                                                <li data-target="#myCarousel" data-slide-to="12"></li>
                                            </ul>


                                            <!-- Slides -->
                                            <div class="carousel-inner">
                                                ITEMS DE MOLIENDA_1 AL MOLIENDA_13
                                                <div class="carousel-item active">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_1.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_2.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_3.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_4.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_5.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_6.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_7.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_8.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_9.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_10.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_11.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_12.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/molienda/molienda_13.jpg') }}"
                                                        alt="slider insumos" />
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

                                        <div style="text-align: justify">
                                            En 1995 iniciamos una etapa de industrialización de granos, siendo el primer
                                            paso la inauguración de un molino de maíz, que por su capacidad de molienda se
                                            ubica en el 2º lugar de Argentina. Como valor fundacional buscamos producir
                                            alimentos saludables y que cumplieran con los más altos estándares de calidad
                                            internacional. Molemos granos de maíz Flint libres de modificaciones genéticas.
                                            La calidad de nuestros productos fue reconocida por los consumidores y hoy,
                                            prácticamente, todas las grandes tiendas tienen sus marcas propias de polenta
                                            abastecidas exclusivamente por nuestra empresa. Calidad también reconocida
                                            internacionalmente que nos permitió ser proveedores de grits para cereales de
                                            desayuno a Dinamarca, Japón, Suiza y EEUU.
                                            <br>
                                            Nuestros productos de la molienda son libres de transgénicos, aptos para
                                            celíacos, con análisis exhaustivos de pesticidas y micotoxinas que convierten
                                            nuestras polentas y grits en productos de calidad premium. La certificación de
                                            BPM y HCCP asegura la misma calidad para el mercado interno que para el externo,
                                            con un sistema de trazabilidad que nos permite el seguimiento desde la semilla
                                            hasta el producto en góndola.
                                            <br>
                                            En nuestro compromiso permanente de cuidar el medio ambiente y reducir la
                                            emisión de gases contaminantes, en 2019 incorporamos una fuente de energía
                                            limpia y renovable con un sistema solar fotovoltaico de 315 paneles que generan
                                            una potencia de 203.000 Kwp anuales, con una captura de CO2 de 177,3
                                            toneladas/año
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Aceites y Harinas
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion" style="">
                                    <div class="card-body" style="text-align: justify">


                                        <div id="myCarousel2" class="carousel slide margin-40px-bottom"
                                            data-ride="carousel" style="margin-bottom: 20px">
                                            <!-- Indicadores -->
                                            <ul class="carousel-indicators">
                                                <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel2" data-slide-to="1"></li>
                                                <li data-target="#myCarousel2" data-slide-to="2"></li>
                                            </ul>
                                            <!-- Slides -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{ asset('img/rivara/2023/SAIMG_9130015.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/2023/SAIMG_9132016.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/2023/SAIMG_9138018.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                            </div>
                                            <!-- Controles de navegación -->
                                            <a class="carousel-control-prev" href="#myCarousel2" data-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </a>
                                            <a class="carousel-control-next" href="#myCarousel2" data-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </a>
                                        </div>
                                        Nuestro siguiente emprendimiento, en 2003, fue una unidad de procesamiento de granos
                                        oleaginosos por extrusión y prensado, que nos permitió generar harinas libres de
                                        solventes, porque apoyamos la tendencia mundial de promover alimentos naturales, con
                                        menos refinamiento, menos contaminación y mayor cuidado en preservar las virtudes
                                        contenidas en los granos con los que nos alimentamos.
                                        <br>
                                        Este proceso de extrusión-prensado nos permite obtener, por un lado, harinas de
                                        excelente digestibilidad y alto valor nutricional al tener intactos los aminoácidos
                                        de las proteínas y por otro lado aceites que retienen sus porcentajes de ácidos
                                        grasos, omega3, tocoferoles, vitamina E y esteroles.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Alimentos Balanceados
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion" style="">
                                    <div class="card-body" style="text-align: justify">

                                        <div id="myCarousel3" class="carousel slide margin-40px-bottom margin-40px-top"
                                            data-ride="carousel" style="margin-bottom: 20px">
                                            <!-- Indicadores -->
                                            <ul class="carousel-indicators">
                                                <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel3" data-slide-to="1"></li>
                                                <li data-target="#myCarousel3" data-slide-to="2"></li>
                                                <li data-target="#myCarousel3" data-slide-to="3"></li>
                                                <li data-target="#myCarousel3" data-slide-to="4"></li>
                                                <li data-target="#myCarousel3" data-slide-to="5"></li>
                                                <li data-target="#myCarousel3" data-slide-to="6"></li>
                                            </ul>
                                            <!-- Slides -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{ asset('img/rivara/sliders/alimentosbalanceados/alimentos_1.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/alimentosbalanceados/alimentos_2.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/alimentosbalanceados/alimentos_3.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/alimentosbalanceados/alimentos_4.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/alimentosbalanceados/alimentos_5.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/alimentosbalanceados/alimentos_6.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/alimentosbalanceados/alimentos_7.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                            </div>
                                            <!-- Controles de navegación -->
                                            <a class="carousel-control-prev" href="#myCarousel3" data-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </a>
                                            <a class="carousel-control-next" href="#myCarousel3" data-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </a>
                                        </div>

                                        En 2020 inauguramos una planta modelo de alimentos balanceados con calidad orgánica
                                        certificada. Procesamos granos orgánicos y garantizamos la trazabilidad de todos
                                        nuestros alimentos. Esto nos permitió ser los proveedores exclusivos de la red de
                                        tambos orgánicos de Nestlé Argentina. También proveemos a distintos criaderos de
                                        aves dentro del país y exportamos a emprendimientos orgánicos de países vecinos. <br>

                                        En 2023 finalizamos la construcción de una moderna planta de clasificación de maíz
                                        pop corn ( o pisingallo) con silos de fondo plano y aireación inferior que protegen
                                        el volumen de expansión , norias de baja velocidad, detectores de metal,
                                        prelimpiezas, zarandas y mesas densimétricas Cimbria, clasificadora óptica Buhler
                                        para exportar un producto de calidad inmejorable


                                        <div id="myCarousel4" class="carousel slide margin-40px-bottom margin-40px-top"
                                            data-ride="carousel" style="margin-bottom: 20px">
                                            <!-- Indicadores -->
                                            <ul class="carousel-indicators">
                                                <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel4" data-slide-to="1"></li>
                                                <li data-target="#myCarousel4" data-slide-to="2"></li>
                                                <li data-target="#myCarousel4" data-slide-to="2"></li>
                                            </ul>
                                            <!-- Slides -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{ asset('img/rivara/sliders/alimentosbalanceados/alimentos_4.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/alimentosbalanceados/alimentos_5.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/alimentosbalanceados/alimentos_6.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('img/rivara/sliders/alimentosbalanceados/alimentos_7.jpg') }}"
                                                        alt="slider insumos" />
                                                </div>
                                            </div>
                                            <!-- Controles de navegación -->
                                            <a class="carousel-control-prev" href="#myCarousel4" data-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </a>
                                            <a class="carousel-control-next" href="#myCarousel4" data-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </a>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> --}}
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
