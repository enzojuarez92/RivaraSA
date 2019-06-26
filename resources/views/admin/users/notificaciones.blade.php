@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Panel de Notificaciones', 
                'icon' => 'fa-belss', 
                'subtitle' => '', 
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
                        ['url' => '#', 'icon' => 'fa-belss', 'name' => 'Notificaciones'],
                        ['url' => '#', 'icon' => null, 'name' => 'Panel']
                    )
            ])

@endsection


@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="title">No Leidas</h3>
            </div>
            <div class="box-body">
                <ul class="list-group">                    
                @foreach ($noLeidas as $noLeida)
                    <li class="list-group-item">
                        <a href="{{$noLeida->data['link']}}"><i class="{{ $noLeida->data['icon'] }}"></i> {{ $noLeida->data['texto'] }}</a>
                        <form class="pull-right" action="{{ route('notificaciones.leida',$noLeida->id) }}" method="post">
                            {{method_field('PATCH')}}
                            @csrf
                            <button class="btn btn-xs" type="submit"><i class="fa fa-check"></i></button>
                        </form>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="title">Leidas</h3>
            </div>
            <div class="box-body">
                <ul class="list-group">                    
                @foreach ($leidas as $leida)
                    <li class="list-group-item">
                        <a href="{{$leida->data['link']}}"><i class="{{ $leida->data['icon'] }}"></i> {{ $leida->data['texto'] }}</a>
                        <form class="pull-right" action="{{ route('notificaciones.leida',$leida->id) }}" method="post">
                            {{method_field('delete')}}
                            @csrf
                            <button class="btn btn-xs" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
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
