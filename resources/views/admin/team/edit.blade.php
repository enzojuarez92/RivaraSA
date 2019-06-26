@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Equipo', 
                'icon' => 'fa-users', 
                'subtitle' => 'Editar Integrante', 
                'icons' => array(
                    ['img' => 'icon-users', 'name' => 'Usuarios', 'url' => route('admin')],
                    ['img' => 'icon-copy', 'name' => 'Presupuestos', 'url' => route('admin')],
                    ['img' => 'icon-inbox-alt', 'name' => 'Proveedores', 'url' => route('admin')],
                    ['img' => 'icon-gear', 'name' => 'Reparaciones', 'url' => route('admin')],
                )
            ])

@endsection

@section('breadcrumb')

            @include(LAYOUT_ADMIN.'.includes.breadcrumb', [ 
                'links' => array(
                        ['url' => route('team.index'), 'icon' => 'fa-rss', 'name' => 'Equipo'],
                        ['url' => '#', 'icon' => null, 'name' => 'Editar']
                    )
            ])

@endsection

@section('content')

	{{--  Content  --}}
	<div class="box">
		<div class="box-body">
			@include('admin.team._update')
		</div>
	</div>
	
@endsection