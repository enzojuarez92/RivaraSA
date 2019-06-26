@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Categoria', 
                'icon' => 'fa-list-alt', 
                'subtitle' => 'Editar Categoria', 
                'icons' => array(
                    ['img' => 'icon-categories', 'name' => 'Usuarios', 'url' => route('admin')],
                    ['img' => 'icon-copy', 'name' => 'Presupuestos', 'url' => route('admin')],
                    ['img' => 'icon-inbox-alt', 'name' => 'Proveedores', 'url' => route('admin')],
                    ['img' => 'icon-gear', 'name' => 'Reparaciones', 'url' => route('admin')],
                )
            ])

@endsection

@section('breadcrumb')

            @include(LAYOUT_ADMIN.'.includes.breadcrumb', [ 
                'links' => array(
                        ['url' => route('admin.categories.index'), 'icon' => 'fa-list-alt', 'name' => 'Categorias'],
                        ['url' => '#', 'icon' => null, 'name' => 'Editar']
                    )
            ])

@endsection

@section('content')

	{{--  Content  --}}
	<div class="box">
		<div class="box-body">
			@include('admin.categories._update')
		</div>
	</div>
	
@endsection