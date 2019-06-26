@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Tags', 
                'icon' => 'fa-tags', 
                'subtitle' => 'Etiquetas', 
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
                        ['url' => route('admin.tags.index'), 'icon' => 'fa-tags', 'name' => 'Tags'],
                        ['url' => '#', 'icon' => null, 'name' => 'Listado']
                    )
            ])

@endsection

@section('content')

	{{--  Content  --}}
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addUsuario">Nueva Etiqueta</a>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Lista de Etiquetas</h3>
					</div>
					<div class="panel-body">
						@include('admin.tags._list', ['actions' => true])
					</div>
					{{--  <div class="panel-footer">
						<p class="text-muted"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>  --}}
				</div>
			</div>
		</div>
	</div>

	{{--  Modal con formulario para carga de miembro. --}}
	@include('admin.tags._create')
@endsection

{{-- @section('script')
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
