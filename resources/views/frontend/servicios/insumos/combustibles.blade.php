<!-- start right side section -->
<div class="col-12 sm-margin-30px-bottom">
    <div class="services-single-right">
        <h5 class="font-weight-600">@lang('services.insumos.item_2_titulo')</h5>

        <div id="myCarousel" class="carousel slide margin-40px-bottom" data-ride="carousel" style="margin-bottom: 20px">
            <!-- Indicadores -->
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ul>
    
            
            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img width="100%" height="auto" src="{{ asset('img/rivara/sliders/combustibles/comb_1.jpg') }}" alt="slider insumos" />
                </div>
                <div class="carousel-item">
                    <img width="100%" height="auto" src="{{ asset('img/rivara/sliders/combustibles/comb_2.jpg') }}" alt="slider insumos" />
                </div>
                <div class="carousel-item">
                    <img width="100%" height="auto" src="{{ asset('img/rivara/sliders/combustibles/comb_3.jpg') }}" alt="slider insumos" />
                </div>
                <div class="carousel-item">
                    <img width="100%" height="auto" src="{{ asset('img/rivara/sliders/combustibles/comb_4.jpg') }}" alt="slider insumos" />
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


        <div class="row">
            <div class="col-12">
                <p class="margin-30px-bottom sm-margin-20px-bottom width-95 text-justify">
                    @lang('services.insumos.item_2_texto')
                </p>
            </div>
        </div>
    </div>
</div>
<!-- end right side section -->
