                    <!-- start right side section -->
                    <div class="col-lg-8 col-md-12 order-1 order-lg-2 sm-margin-30px-bottom">
                        <div class="services-single-right">
                            <h5 class="font-weight-600">@lang('services.granos.item_1_titulo')</h5>
                            {{-- <div class="margin-40px-bottom sm-margin-30px-bottom">
                                <div class="owl-carousel owl-theme text-center">
                                    <div class="item">
                                        <img src="{{ asset('img/rivara/servicios/acopio4.jpg') }}" alt="slider insumos" />
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/rivara/servicios/acopio5.jpg') }}" alt="slider insumos" />
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/rivara/servicios/acopio3.jpg') }}" alt="slider insumos" />
                                    </div>
                                </div>
                            </div> --}}

                            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom: 20px">
                                <!-- Indicadores -->
                                <ul class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ul>
                        
                                <!-- Slides -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('img/rivara/servicios/acopio4.jpg') }}" alt="slider insumos" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/rivara/servicios/acopio5.jpg') }}" alt="slider insumos" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/rivara/servicios/acopio3.jpg') }}" alt="slider insumos" />
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


                                <div class="col-12">
                                    {{-- <div class="inner-title">
                                        <h6>@lang('services.granos.item_1_titulo')</h6>
                                    </div> --}}
                                    <p class="margin-30px-bottom sm-margin-20px-bottom width-100 text-justify">
                                        @lang('services.granos.item_1_texto')
                                    </p>
                                </div>



                        </div>
                    </div>
                    <!-- end right side section -->
