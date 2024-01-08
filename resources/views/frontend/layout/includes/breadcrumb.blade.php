<section class="page-title-section bg-extra-dark-gray py-4 m-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <h1 class="font-weight-bold">{{ $title }}</h1>
            </div>
            <div class="col-12 col-md-8 d-flex justify-content-md-end justify-content-md-start">
                <ul>
                    @foreach ($links as $l)
                        <li><a href="{{ $l['url'] }}">{{ $l['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
