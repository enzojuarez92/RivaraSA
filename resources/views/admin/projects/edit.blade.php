@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Proyecto', 
                'icon' => 'fa-folder-open', 
                'subtitle' => 'Editar Proyecto', 
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
                ['url' => route('admin.projects.index'), 'icon' => 'fa-folder-open', 'name' => 'Proyecto'],
                ['url' => '#', 'icon' => null, 'name' => 'Editar']
            )
    ])
@endsection

@section('content')
    @if($project->fotos->count() > 0)
    @include('admin.fotos._delete', [
        'fotos' => $project->fotos
    ])
    @endif
    @include('admin.projects._form',[
        'method' => 'PUT',
        'action' => route('admin.projects.update', $project->id),
        'project_type' => $project->type
    ])
@endsection