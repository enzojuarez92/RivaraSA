<section class="page-title-section bg-extra-dark-gray py-4 m-0">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-end">
            <div class="col-12 col-md-4">
                <h4 class="font-weight-bold mb-0 text-white">{{ $title }}</h4>
            </div>
            <div class="col-12 col-md-8">
                <ul class="d-flex justify-content-sm-end justify-content-md-end">
                    @foreach ($links as $l)
                        <li><a href="{{ $l['url'] }}">{{ $l['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- <section class="page-title-section bg-extra-dark-gray py-4 m-0">
    <div class="container">
        <div class="row d-sm-block d-md-flex justify-content-sm-start justify-content-md-between align-items-end">
            <div>
                <h3 class="font-weight-bold mb-0 text-white">{{ $title }}</h3>
            </div>
            <div>
                <ul>
                    @foreach ($links as $l)
                        <li><a href="{{ $l['url'] }}">{{ $l['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section> --}}