@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Acceso Denegado', 
                'icon' => 'fa-ticket', 
                'subtitle' => 'Sin permisos para ingresar', 
                'icons' => array(
                    ['img' => 'icon-users', 'name' => 'Acceso Denegado', 'url' => ''],
                )
            ])

@endsection

@section('breadcrumb')

            @include(LAYOUT_ADMIN.'.includes.breadcrumb', [ 
                'links' => array(
                        ['url' => '#', 'icon' => 'fa-ticket', 'name' => 'Tickets'],
                        ['url' => '#', 'icon' => null, 'name' => 'Listado']
                    )
            ])

@endsection


@section('content')


<div class="error-page">
    <h2 class="headline text-yellow"> 403</h2>

    <div class="error-content">
        <h3><i class="fa fa-warning text-yellow"></i> Acceso denegado.</h3>

        <p>
        No tiene permisos para ingresar en esta sección, por favor contacte al administrador del sistema.
        </p>

        <form class="search-form">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search">

            <div class="input-group-btn">
            <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
            </button>
            </div>
        </div>
        <!-- /.input-group -->
        </form>
    </div>
    <!-- /.error-content -->
</div>

@stop






