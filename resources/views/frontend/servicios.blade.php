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
        'title' => $servicio === 'granos' ? 'Granos' : 'Insumos',
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
    <section class="sm-padding-15px-lr sm-padding-30px-top">
        <div class="container">
            <div class="row">
                {{-- @include('frontend.servicios.'.$servicio) --}}

                @if ($subservicio !== null && $servicio === 'granos' && $subservicio === 'acopio-logistica-comercializacion')
                    @include('frontend.servicios.granos.acopio-logistica-comercializacion')
                    <div class="col-12 col-md-4 order-2 order-md-1">
                        @forelse ($contactosPorArea as $item)
                            @include('frontend.servicios.contacto', [
                                'nombre' => $item->name . ' ' . $item->lastname,
                                'role' => $item->role ?? '',
                                'telefono' => $item->phone ?? 'Sin Información',
                                'email' => $item->email,
                                'foto' => $item->image ?? 'assets/img/default-avatar.png'
                            ])
                        @empty
                            <div class="alert alert-success text-center" role="alert">
                                No se registraron contactos
                            </div>
                        @endforelse
                    </div>
                    <div class="col-12 col-md-8 order-1 order-md-2 sm-margin-10px-top">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <p class="text-justify">
                                    @php
                                        $content = Lang::get('services.granos.item_1_texto');
                                        $halfLength = ceil(strlen($content) / 2);
                                        $firstHalf = substr($content, 0, $halfLength);
                                        $secondHalf = substr($content, $halfLength);
                                    @endphp
                                    {!! $firstHalf !!}
                                </p>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <p class="text-justify">
                                    {!! $secondHalf !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @elseif ($subservicio !== null && $servicio === 'granos' && $subservicio === 'arrendamientos-asociaciones')
                    @include('frontend.servicios.granos.arrendamientos-asociaciones')
                    <div class="col-12 col-md-4 order-2 order-md-1">
                        @forelse ($contactosPorArea as $item)
                            @include('frontend.servicios.contacto', [
                                'nombre' => $item->name . ' ' . $item->lastname,
                                'role' => $item->role ?? '',
                                'telefono' => $item->phone ?? 'Sin Información',
                                'email' => $item->email,
                                'foto' => $item->image ?? 'assets/img/default-avatar.png'
                            ])
                        @empty
                            <div class="alert alert-success text-center" role="alert">
                                No se registraron contactos
                            </div>
                        @endforelse
                    </div>
                    <div class="col-12 col-md-8 order-1 order-md-2 sm-margin-10px-top">
                        <h6>PRODUCCIÓN AGRÍCOLA</h6>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <p class="text-justify">
                                    @php
                                        $content = Lang::get('services.granos.item_2_texto');
                                        $halfLength = ceil(strlen($content) / 2) + 11;
                                        $firstHalf = substr($content, 0, $halfLength);
                                        $secondHalf = substr($content, $halfLength);
                                    @endphp
                                    {!! $firstHalf !!}
                                </p>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <p class="text-justify">
                                    {!! $secondHalf !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @elseif ($subservicio !== null && $servicio === 'insumos' && $subservicio === 'agroquimicos-fertilizantes')
                    @include('frontend.servicios.insumos.agroquimicos-fertilizantes')
                    <div class="col-12 col-md-4 order-2 order-md-1">
                        @forelse ($contactosPorArea as $item)
                            @include('frontend.servicios.contacto', [
                                'nombre' => $item->name . ' ' . $item->lastname,
                                'role' => $item->role ?? '',
                                'telefono' => $item->phone ?? 'Sin Información',
                                'email' => $item->email,
                                'foto' => $item->image ?? 'assets/img/default-avatar.png'
                            ])
                        @empty
                            <div class="alert alert-success text-center" role="alert">
                                No se registraron contactos
                            </div>
                        @endforelse
                    </div>
                    <div class="col-12 col-md-8 order-1 order-md-2 sm-margin-10px-top">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <p class="margin-10px-bottom text-justify">
                                    @php
                                        $content = Lang::get('services.insumos.item_1_texto');
                                        $halfLength = ceil(strlen($content) / 2) + 20;
                                        $firstHalf = substr($content, 0, $halfLength);
                                        $secondHalf = substr($content, $halfLength);
                                    @endphp
                                    {!! $firstHalf !!}
                                </p>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <p class="text-justify">
                                    {!! $secondHalf !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @elseif ($subservicio !== null && $servicio === 'insumos' && $subservicio === 'combustibles')
                    @include('frontend.servicios.insumos.combustibles')
                    <div class="col-12 col-md-4 order-2 order-md-1">
                        @forelse ($contactosPorArea as $item)
                            @include('frontend.servicios.contacto', [
                                'nombre' => $item->name . ' ' . $item->lastname,
                                'role' => $item->role ?? '',
                                'telefono' => $item->phone ?? 'Sin Información',
                                'email' => $item->email,
                                'foto' => $item->image ?? 'assets/img/default-avatar.png'
                            ])
                        @empty
                            <div class="alert alert-success text-center" role="alert">
                                No se registraron contactos
                            </div>
                        @endforelse
                    </div>
                    <div class="col-12 col-md-8 order-1 order-md-2 sm-margin-10px-top">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <p class="margin-10px-bottom text-justify">
                                    @php
                                        $content = Lang::get('services.insumos.item_2_texto');
                                        $halfLength = ceil(strlen($content) / 2) - 23;
                                        $firstHalf = substr($content, 0, $halfLength);
                                        $secondHalf = substr($content, $halfLength);
                                    @endphp
                                    {!! $firstHalf !!}
                                </p>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <p class="text-justify">
                                    {!! $secondHalf !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
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
