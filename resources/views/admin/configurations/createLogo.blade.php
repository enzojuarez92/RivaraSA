@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Configuraciones', 
                'icon' => 'fa-gears', 
                'subtitle' => 'Logos utilizados en la web.', 
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
                        ['url' => route('admin.configuraciones'), 'icon' => 'fa-gears', 'name' => 'Configuraciones'],
                        ['url' => '#', 'icon' => null, 'name' => 'Logos']
                    )
            ])

@endsection

@section('content')

	{{--  Content  --}}
	<div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">Logos</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>Foto</td>
                            <td>Espacio</td>
                            <td>Borrar</td>
                        </tr>
                        @foreach ($config->fotos as $f)
                        <tr>
                            <td><img style="max-width:100px;" src="{{ asset('img/'.$f->url) }}" alt="logo"></td>
                            <td>{{ $f->espacio }}</td>
                            <td>
                                <a href='#' class='btn btn-xs btn-info' data-toggle='modal' data-target='#foto{{ $f->id }}'>
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.configuraciones.logo.borrar', $f->id) }}" method="post" style="display:inline">
                                    @csrf
                                    {{ method_field('DELETE')}}
                                    <button onclick="return confirm('¿Seguro desea eliminar?')" class="btn btn-xs btn-danger" type="submit"><i class="fa fa-times"></i></button>
                                </form>
                            </td>
                        </tr>   
                        
                        <div class='modal fade' tabindex='-1' role='dialog' id='foto{{ $f->id }}'>
                            <div class='modal-dialog modal-lg' role='document'>
                                <div class='modal-content'>
                                    <form action="{{ route('admin.configuraciones.logo.espacio') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="foto" value="{{ $f->id }}">
                                    <div class='modal-header'>
                                        Asignar nuevo espacio donde mostrar el logo
                                    </div>
                                    <div class='modal-body'>
                                        <label for="">Espacio</label>
                                        <select class="form-control" name="espacio" id="">
                                            <option value="n/c">Sin Espacio</option>
                                            <option value="principal">Principal</option>
                                            <option value="alternativo">Alternativo</option>
                                            <option value="redes">Redes</option>
                                        </select>
                                        <br>
                                        <button type="submit" class="btn btn-success">Cambio de espacio</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </table>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <form style="padding:15px;" action="{{ route('admin.configuraciones.logo') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <input type="file" name="foto" id="">
                        <br>
                        <label for="">Espacio</label>
                        <select class="form-control" name="espacio" id="">
                            <option value="n/c">Sin Espacio</option>
                            <option value="principal">Principal</option>
                            <option value="alternativo">Alternativo</option>
                            <option value="redes">Redes</option>
                        </select>
                        <br>

                        <button type="submit" class="btn btn-warning">Subir Logo</button>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Espacios:</h3>
                    </div>
                    <div class="box-body">
                        <ul>
                            <li>Logo Principal: Es el logo que aparecera por defecto en todos los correos, panel de control, y home.</li>
                            <li>Logo Alternativo: Logo principal con color invertido.</li>
                            <li>Logo Redes: Logo que aparece cuando compartimos la nota en redes o canales de mensajeria.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        


    </div>

@endsection

{{-- @section('script')
	@include('includes.common.script_modal_error', ['modal_id' => 'addUsuario'])
@endsection  --}}


@push('styles')


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
