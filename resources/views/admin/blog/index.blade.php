@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Blog', 
                'icon' => 'fa-rss', 
                'subtitle' => 'Posteos de blog', 
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
                        ['url' => '#', 'icon' => 'fa-rss', 'name' => 'Blog'],
                        ['url' => '#', 'icon' => null, 'name' => 'Posteos']
                    )
            ])

@endsection



@section('content')
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de Obras</h3>
              <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary pull-right">Crear Nuevo</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="post-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Titulo</th>
                  <th>Extracto</th>
                  <th>Categoria</th>
                  <th>Cargado por</th>
                  <th>Publicado</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->extract }}</td>
                        <td>{{ $post->category->name ?? '' }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->published_at }}</td>
                        <td>
                            <a target="_blank" href="{{ $post->link() }}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('admin.posts.edit',$post->id) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post" style="display:inline">
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
