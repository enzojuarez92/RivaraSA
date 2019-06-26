@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Etiqueta', 
                'icon' => 'fa-tags', 
                'subtitle' => 'Editar Etiqueta', 
                'icons' => array(
                    ['img' => 'icon-tags', 'name' => 'Usuarios', 'url' => route('admin')],
                    ['img' => 'icon-copy', 'name' => 'Presupuestos', 'url' => route('admin')],
                    ['img' => 'icon-inbox-alt', 'name' => 'Proveedores', 'url' => route('admin')],
                    ['img' => 'icon-gear', 'name' => 'Reparaciones', 'url' => route('admin')],
                )
            ])

@endsection

@section('breadcrumb')

            @include(LAYOUT_ADMIN.'.includes.breadcrumb', [ 
                'links' => array(
                        ['url' => route('admin.tags.index'), 'icon' => 'fa-tags', 'name' => 'Etiquetas'],
                        ['url' => '#', 'icon' => null, 'name' => 'Editar']
                    )
            ])

@endsection

@section('content')

	{{--  Content  --}}
	<div class="box">
		<div class="box-body">
			@include('admin.tags._update')
		</div>
	</div>
	
@endsection