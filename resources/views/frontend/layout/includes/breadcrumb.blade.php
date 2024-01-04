<section class="page-title-section bg-extra-dark-gray py-4 m-0">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-end">
            <div>
                <h1 class="font-weight-bold">{{ $title }}</h1>
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
</section>
