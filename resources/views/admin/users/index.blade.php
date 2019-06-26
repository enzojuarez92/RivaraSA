@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Usuarios', 
                'icon' => 'fa-users', 
                'subtitle' => 'Listado de Usuarios', 
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
                        ['url' => '#', 'icon' => 'fa-users', 'name' => 'Usuarios'],
                        ['url' => '#', 'icon' => null, 'name' => 'Listado']
                    )
            ])

@endsection


@section('content')
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de Usuarios</h3>
              <a href="{{route('admin.users.create')}}" class="btn btn-primary pull-right"><i class="fa fa-user-plus"></i> Crear Nuevo</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="post-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Permisos</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->getRoleNames()->implode(', ') }}</td>
                        <td>
                            <a href="{{ route('admin.users.show',$user->id) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="post" style="display:inline">
                                @csrf
                                {{ method_field('DELETE')}}
                                <button onclick="return confirm('¿Seguro desea eliminar?')" class="btn btn-xs btn-danger" type="submit"><i class="fa fa-times"></i></button>
                            </form>
                        </td>
                    </tr>
                    
                @endforeach
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>


@stop





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
    $('#post-table').DataTable()
  })
</script>


@include('admin.blog.crear')
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
