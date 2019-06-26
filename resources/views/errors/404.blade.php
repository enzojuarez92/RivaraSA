@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'No encontrada', 
                'icon' => 'fa-ticket', 
                'subtitle' => 'Página no encontrada', 
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
    <h2 class="headline text-yellow"> 404</h2>

    <div class="error-content">
        <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>

        <p>
        We could not find the page you were looking for.
        Meanwhile, you may <a href="../../index.html">return to dashboard</a> or try using the search form.
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






