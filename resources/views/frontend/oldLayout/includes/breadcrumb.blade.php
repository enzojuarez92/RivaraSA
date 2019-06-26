<div class="section-heading-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            <h1 class="heading-page text-center-xs">{{ $title }}</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb text-right text-center-xs">
                @forelse($links as $link)
                    @if(!$loop->last)
                        <li>
                        <a href="{{ $link['url'] }}" class="breadcrumb-item"><i class="{{ $link['icon'] }} mr-2"></i> {{ $link['name'] }} </a>
                        </li>
                    @else
                        <li>
                        <span class="breadcrumb-item active">{{ $link['name'] }}</span>
                        </li>
                    @endif
                @empty
                    <li>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </li>
                @endforelse
            </ol>
            </div>
        </div>
    </div>
</div>
@if ($errors->any())
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endif