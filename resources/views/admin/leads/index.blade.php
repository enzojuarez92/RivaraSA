@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Contactos', 
                'icon' => 'fa-address-book', 
                'subtitle' => 'Contactos y registros', 
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
                        ['url' => '#', 'icon' => 'fa-address-book', 'name' => 'Contactos'],
                        ['url' => '#', 'icon' => null, 'name' => 'Listado']
                    )
            ])

@endsection



@section('content')
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de Contactos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="post-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Teléfono</th>
                  <th>Fuente</th>
                  <th>Como Conocio</th>
                  <th>Mensaje</th>
                  <th>Fecha</th>
                  {{-- <th>Acciones</th> --}}
                </tr>
                </thead>
                <tbody>
                
                @foreach ($leads as $lead)
                    <tr>
                        <td>{{ $lead->id }}</td>
                        <td>{{ $lead->name }}</td>
                        <td><a href="mailto:{{ $lead->email }}" data-toggle="tooltip" title="Enviar Correo">{{ $lead->email }}</a></td>
                        <td>
                          <a href="https://api.whatsapp.com/send?phone=549{{$lead->telefono}}" data-toggle="tooltip" title="Enviar WhatsApp" target="_blank">{{$lead->telefono}}</a>
                        </td>
                        <td>{{ $lead->fuente }}</td>
                        <td>{{ $lead->comoConocio->titulo ?? 'Sin Datos' }}</td>
                        <td>{{ $lead->message }}</td>
                        <td>{{ $lead->created_at }}</td>
                        {{-- <td>
                            <a target="_blank" href="{{ route('verPost',$post->url) }}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('admin.posts.edit',$post->id) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post" style="display:inline">
                                @csrf
                                {{ method_field('DELETE')}}
                                <button onclick="return confirm('¿Seguro desea eliminar?')" class="btn btn-xs btn-danger" type="submit"><i class="fa fa-times"></i></button>
                            </form>
                        </td> --}}
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
    $('#post-table').DataTable({
      'order': [ 0, "desc" ]
    })
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

<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });
</script>


@endpush
