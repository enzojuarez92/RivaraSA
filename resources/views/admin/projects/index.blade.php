@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Proyectos', 
                'icon' => 'fa-folder-open', 
                'subtitle' => 'Proyectos', 
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
                        ['url' => route('admin'), 'icon' => 'fa fa-dashboard', 'name' => 'Inicio'],
                        ['url' => '#', 'icon' => null, 'name' => 'Listado']
                    )
            ])

@endsection

@section('content')

	{{--  Content  --}}
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				{{-- <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addUsuario">Nuevo Proyecto</a> --}}
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Nuevo Proyecto
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              @foreach ($project_types as $p_type)
              <li><a href="{{route('admin.projects.create', ['project_type' => $p_type->id])}}" >{{$p_type->name}}</a></li>                  
              @endforeach
            </ul>
          </div>
      </div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Lista de Proyectos</h3>
					</div>
					<div class="panel-body">
						@include('admin.projects._list', ['actions' => true])
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

{{--  @section('script')
	@include('includes.common.script_modal_error', ['modal_id' => 'addUsuario'])
@endsection  --}}


@push('styles')

  <!-- DataTables -->
  <link rel="stylesheet" href="/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

@endpush

@push('scripts')

<!-- DataTables -->
<script src="/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#table').DataTable()
  })
</script>


<script>
  if(window.location.hash == '#create')
  {
    $('#exampleModal').modal('show');
  }

  $('#exampleModal').on('hide.bs.modal', function(){
    window.location.hash = '#';
  });
</script>


@endpush
