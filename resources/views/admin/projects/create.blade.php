@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Proyecto ('.$project_type->name.')', 
                'icon' => 'fa-project-diagram', 
                'subtitle' => 'Nuevo Proyecto', 
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
                        ['url' => route('admin.projects.index'), 'icon' => 'fa-folder-open', 'name' => 'Proyectos'],
                        ['url' => '#', 'icon' => null, 'name' => 'Crear']
                    )
            ])

@endsection

@section('content')
    @include('admin.projects._form', [
        'method' => 'POST',
        'action' => route('admin.projects.store', ['project_type' => $project_type])
    ])
@endsection