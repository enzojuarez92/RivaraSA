<!-- start right side section -->
<div class="col-lg-8 col-md-12 order-1 order-lg-2 sm-margin-30px-bottom">
    <div class="services-single-right">
        <h5 class="font-weight-600">@lang('services.alimentos.titulo')</h5>
        <div class="margin-40px-bottom sm-margin-30px-bottom">
            <div class="owl-carousel owl-theme text-center">
                <div class="item"><img src="{{ asset('img/rivara/servicios/alimentos8.jpg') }}" alt="slider insumos" /></div>
                <div class="item"><img src="{{ asset('img/rivara/servicios/alimentos2.jpg') }}" alt="slider insumos" /></div>
                <div class="item"><img src="{{ asset('img/rivara/servicios/alimentos3.jpg') }}" alt="slider insumos" /></div>
                <div class="item"><img src="{{ asset('img/rivara/servicios/alimentos4.jpg') }}" alt="slider insumos" /></div>
                <div class="item"><img src="{{ asset('img/rivara/servicios/alimentos9.jpg') }}" alt="slider insumos" /></div>
                <div class="item"><img src="{{ asset('img/rivara/servicios/alimentos6.jpg') }}" alt="slider insumos" /></div>
                <div class="item"><img src="{{ asset('img/rivara/servicios/alimentos7.jpg') }}" alt="slider insumos" /></div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="inner-title">
                    <h6>@lang('services.alimentos.item_1_titulo')</h6>
                </div>
            </div>
            <p class="margin-30px-bottom sm-margin-20px-bottom width-95 text-justify">
                @lang('services.alimentos.item_1_texto')
            </p>

            @lang('services.alimentos.points')
        </div>

        @if (Session::get('locale') == 'en')        
        <div class="row" style="margin-top:30px;">
            <div class="col-lg-12">
                <p class="margin-30px-bottom sm-margin-20px-bottom width-95 text-justify">
                    We deeply believe that quality of the raw material is the fundamental piece to achieve a great final product, and this is the reason why we behave towards the grains with great delicacy. We dry them carefully to avoid cracks and we keep them in material silos with low temperatures, which prevents the use of pesticides to control infestations.
                    <br>
                    Next step is the grain Milling, which is carried on with the most advanced technology in the Milling industry, necessary to obtain products that clearly excel because of his quality, color and healthy safeness.
                    <br>
                    Our milling consist in split the husk and germ from the grain, previously sieved and cleaned, and then we mill the vitreous part of the grain to achieve exactly the size desired by the customer.
                    <br>
                    Our Corn Mill Products can be classified as follows:
                </p>
                <ol>
                    <li>Industrial Products:</li>
                    <p class="margin-30px-bottom sm-margin-20px-bottom width-95 text-justify">
                        <i class="fa fa-file-pdf"></i> <a target="_blank" href="{{ env('APP_URL') }}/pdf/alimentos1/1.pdf">Corn Grits</a> <br> 
                        <i class="fa fa-file-pdf"></i> <a target="_blank" href="{{ env('APP_URL') }}/pdf/alimentos1/2.pdf">Semolina</a> <br>
                        <i class="fa fa-file-pdf"></i> <a target="_blank" href="{{ env('APP_URL') }}/pdf/alimentos1/3.pdf">Flour</a> <br>
                    </p>
                    <li>Retail Products:</li>
                    <p class="margin-30px-bottom sm-margin-20px-bottom width-95 text-justify">
                        <i class="fa fa-file-pdf"></i> <a target="_blank" href="{{ env('APP_URL') }}/pdf/alimentos1/4.pdf">Traditional Polenta</a> <br>
                        <i class="fa fa-file-pdf"></i> <a target="_blank" href="{{ env('APP_URL') }}/pdf/alimentos1/5.pdf">Instant Polenta</a> <br>
                    </p>
                    <li>Feed Product:</li>
                    <p class="margin-30px-bottom sm-margin-20px-bottom width-95 text-justify">
                        <i class="fa fa-file-pdf"></i> <a target="_blank" href="{{ env('APP_URL') }}/pdf/alimentos1/6.pdf">Hominy feed flour</a> <br>
                    </p>
                </ol>
            </div>
        </div>
        @endif

        <div class="row" style="margin-top:30px;">
            <div class="col-12">
                <div class="inner-title">
                    <h6>@lang('services.alimentos.item_2_titulo')</h6>
                </div>
            </div>
            <p class="margin-30px-bottom sm-margin-20px-bottom width-95 text-justify">
                @lang('services.alimentos.item_2_texto')
            </p>
        </div>


        @if (Session::get('locale') == 'en')        
        <div class="row" style="margin-top:30px;">
            <div class="col-lg-12">
                <p class="margin-30px-bottom sm-margin-20px-bottom width-95 text-justify">
                    We process exclusively Organic and non-GMO grains to obtain the following products:
                </p>
                <ul>
                    <li>Our products:</li>
                    <p class="margin-30px-bottom sm-margin-20px-bottom width-95 text-justify">
                        <i class="fa fa-file-pdf"></i> <a target="_blank" href="{{ env('APP_URL') }}/pdf/alimentos2/1.pdf">Soybean Meal</a> <br> 
                        <i class="fa fa-file-pdf"></i> <a target="_blank" href="{{ env('APP_URL') }}/pdf/alimentos2/2.pdf">Soybean Oil</a> <br>
                        <i class="fa fa-file-pdf"></i> <a target="_blank" href="{{ env('APP_URL') }}/pdf/alimentos2/3.pdf">Sunflower Meal</a> <br>
                        <i class="fa fa-file-pdf"></i> <a target="_blank" href="{{ env('APP_URL') }}/pdf/alimentos2/3.pdf">Sunflower High Oleic Oil</a> <br>
                    </p>
                </ul>
            </div>
        </div>
        @endif

        <div class="row" style="margin-top:30px;">
            <div class="col-12">
                <div class="inner-title">
                    <h6>@lang('services.alimentos.item_3_titulo')</h6>
                </div>
            </div>
            <p class="margin-30px-bottom sm-margin-20px-bottom width-95 text-justify">
                @lang('services.alimentos.item_3_texto')
            </p>
        </div>



    </div>
</div>
<!-- end right side section -->
