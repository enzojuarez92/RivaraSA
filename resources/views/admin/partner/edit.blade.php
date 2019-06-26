@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Partners', 
                'icon' => 'fa-tags', 
                'subtitle' => 'Editar Partner', 
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
                        ['url' => route('partner.index'), 'icon' => 'fa-tags', 'name' => 'Partners'],
                        ['url' => '#', 'icon' => null, 'name' => 'Editar']
                    )
            ])

@endsection

@section('content')

	{{--  Content  --}}
	<div class="box">
		<div class="box-body">
			@include('admin.partner._update')
		</div>
	</div>
	
@endsection