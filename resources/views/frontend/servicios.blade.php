@extends(LAYOUT_FRONT.'app')

@section('title', 'Servicios | '.APP_DISPLAY)
@section('description', 'Fundada en el año 1936, RIVARA S.A. es una empresa familiar prestando desde sus comienzos servicios necesarios para que el productor agropecuario alcance niveles de eficiencia.')
@section('author', APP_DISPLAY)
@section('keywords', '')
@section('image', LOGO_REDES)

@section('breadcrumb')
            @include('frontend.layout.includes.breadcrumb', [
                'title' => __("services.title"), 
                'subtitle' => 'Conozca nuestros servicios',
                'img' => 'img/rivara/fachadaoficina_baja2.jpg',
                'links' => array(
                    ['icon' => 'icon-copy', 'name' => __("home.home"), 'url' => route('home')],
                    ['icon' => 'icon-add', 'name' => __("services.title"), 'url' => route('servicios')],
                )
            ])
@endsection

@section('content')

        <!-- start service detail section -->
        <section>
            <div class="container">
                <div class="row">
                    {{-- @include('frontend.servicios.'.$servicio) --}}

                    @if ($subservicio !== null && $servicio === 'granos' && $subservicio === 'acopio-logistica-comercializacion')
                        @include('frontend.servicios.granos.acopio-logistica-comercializacion')
                    @elseif ($subservicio !== null && $servicio === 'granos' && $subservicio === 'arrendamientos-asociaciones')
                        @include('frontend.servicios.granos.arrendamientos-asociaciones')
                    @elseif ($subservicio !== null && $servicio === 'insumos' && $subservicio === 'agroquimicos-fertilizantes')
                        @include('frontend.servicios.insumos.agroquimicos-fertilizantes')
                    @elseif ($subservicio !== null && $servicio === 'insumos' && $subservicio === 'combustibles')
                        @include('frontend.servicios.insumos.combustibles')
                    {{-- @else
                        @include('frontend.servicios.'.$servicio) --}}
                    @endif


                    
                </div>
                <div class="row">
                    <!-- start left side section -->
                    <div class="col-lg-12 col-md-12 padding-50px-right md-padding-30px-right sm-padding-15px-right order-2 order-lg-1">

                        @forelse ($contactosPorArea as $item)
                            @include('frontend.servicios.contacto', [
                                'nombre' => $item->name . ' ' . $item->lastname,
                                'role' => $item->role ?? '',
                                'telefono' => $item->phone ?? 'Sin Información',
                                'email' => $item->email,
                                'foto' => $item->foto ?? 'assets/img/default-avatar.png',
                            ])
                        @empty
                            <p>No hay contactos para mostrar</p>                        
                        @endforelse

                    </div>
                    <!-- end left side section -->
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

