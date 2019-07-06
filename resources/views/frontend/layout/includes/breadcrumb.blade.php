        <!-- start page title section -->
        <section class="page-title-section2 bg-img cover-background" data-overlay-dark="7" data-background="{{ asset($img ?? 'img/rivara/sliders/Slider1.jpg') }}">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <h1>{{ $title }}</h1>
                    </div>
                    <div class="col-md-12">
                        <ul>
                            @foreach ($links as $l)
                            <li><a href="{{ $l['url'] }}">{{ $l['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <!-- end page title section -->
