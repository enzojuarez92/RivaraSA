<!-- start right side section -->
<div class="col-12 sm-margin-15px-bottom margin-30px-bottom">
    <h5 class="font-weight-600">@lang('services.granos.item_1_titulo')</h5>
    

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicadores -->
        <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            {{-- <li data-target="#myCarousel" data-slide-to="6"></li> --}}
        </ul>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img width="100%" height="auto" src="{{ asset('img/rivara/sliders/granos/acopio 1.jpg') }}" alt="slider insumos" />
            </div>
            <div class="carousel-item">
                <img width="100%" height="auto" src="{{ asset('img/rivara/sliders/granos/acopio 2.jpg') }}" alt="slider insumos" />
            </div>
            <div class="carousel-item">
                <img width="100%" height="auto" src="{{ asset('img/rivara/sliders/granos/acopio 3.jpg') }}" alt="slider insumos" />
            </div>
            <div class="carousel-item">
                <img width="100%" height="auto" src="{{ asset('img/rivara/sliders/granos/acopio 4.jpg') }}" alt="slider insumos" />
            </div>
            <div class="carousel-item">
                <img width="100%" height="auto" src="{{ asset('img/rivara/sliders/granos/acopio 5.jpg') }}" alt="slider insumos" />
            </div>
            <div class="carousel-item">
                <img width="100%" height="auto" src="{{ asset('img/rivara/sliders/granos/acopio 6.jpg') }}" alt="slider insumos" />
            </div>
            {{-- <div class="carousel-item">
                <img width="100%" height="auto" src="{{ asset('img/rivara/sliders/granos/acopio 7.jpg') }}" alt="slider insumos" />
            </div> --}}
        </div>

        <!-- Controles de navegación -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<!-- end right side section -->
