@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Configuraciones', 
                'icon' => 'fa-gears', 
                'subtitle' => 'Configuraciones generales de la WEB', 
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
                        ['url' => '#', 'icon' => null, 'name' => 'Listado']
                    )
            ])

@endsection

@section('content')

	{{--  Content  --}}
	<div class="container-fluid">

        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                    <h3 class="box-title">Notificaciones y correos</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{ route('admin.configuraciones.notificaciones') }}" method="post">
                    @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Encabezado de Notificaciones</label>
                        <input type="text" class="form-control" id="name" placeholder="Ingrese su correo" name="app_name" value="{{ old('app_name',$config->app_name) }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email donde quiere recibir notificaciones</label>
                        <input type="email" class="form-control" id="email" placeholder="Ingrese su correo" name="email_notification" value="{{ old('email_notification',$config->email_notification) }}">
                    </div>
                    <div class="form-group">
                        <label for="email_sender">Email que veran los clientes al recibir notificaciones</label>
                        <input type="email" name="email_sender" value="{{ old('email_sender',$config->email_sender) }}" class="form-control" id="email_sender" placeholder="Ejemplo: no-reply@suEmpresa.com">
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-info">Guardar</button>
                </div>
                </form>
                <!-- /.box-body -->
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-success">
                    <div class="box-header with-border">
                    <h3 class="box-title">Google Tag Manager / Analytics</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{ route('admin.configuraciones.tag') }}" method="post">
                    @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">ID Tag Manager</label>
                        <input value="{{ old('admin_tagmanager',$config->admin_tagmanager) }}" class="form-control" placeholder="Ej: GTM-ORWXXWT" name="admin_tagmanager" id="" cols="30" rows="10"></>
                    </div>
                    <div class="form-group">
                        <label for="name">ID Vista Analytics</label>
                        <input value="{{ old('id_analytics',$config->id_analytics) }}" class="form-control" placeholder="Ej: 12345678" name="id_analytics" id="" cols="30" rows="10"></>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
                </form>
                <!-- /.box-body -->
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col-md-6">
                    <div class="box box-warnign">
                        <div class="box-header with-border">
                        <h3 class="box-title">Redes Sociales</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="{{ route('admin.configuraciones.redes') }}" method="post">
                        @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Facebook</label>
                            <input type="url" value="{{ old('facebook',$config->facebook) }}" class="form-control" placeholder="Ej: www.facebook.com/tu-facebook" name="facebook" id="" cols="30" rows="10"></>
                        </div>
                        <div class="form-group">
                            <label for="name">Twitter</label>
                            <input type="url" value="{{ old('twitter',$config->twitter) }}" class="form-control" placeholder="Ej: www.twitter.com/tu-twitter" name="twitter" id="" cols="30" rows="10"></>
                        </div>
                        <div class="form-group">
                            <label for="name">Instagram</label>
                            <input type="url" value="{{ old('instagram',$config->instagram) }}" class="form-control" placeholder="Ej: www.instagra.com/tu-instagram" name="instagram" id="" cols="30" rows="10"></>
                        </div>
                        <div class="form-group">
                            <label for="name">Youtube</label>
                            <input type="url" value="{{ old('youtube',$config->youtube) }}" class="form-control" placeholder="Ej: www.youtube.com/tu-youtube" name="youtube" id="" cols="30" rows="10"></>
                        </div>
                        <div class="form-group">
                            <label for="name">Linkedin</label>
                            <input type="url" value="{{ old('linkedin',$config->linkedin) }}" class="form-control" placeholder="Ej: www.linkedin.com/tu-linkedin" name="linkedin" id="" cols="30" rows="10"></>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                    </form>
                    <!-- /.box-body -->
                    </div>
            </div>

            <div class="col-md-6">
                <div class="box box-warning">
                    <div class="box-header with-border">
                    <h3 class="box-title">Datos de contacto</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{ route('admin.configuraciones.contacto') }}" method="post">
                    @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Correo</label>
                        <input type="email" value="{{ old('correo',$config->correo) }}" class="form-control" placeholder="Ej: info@dominio.com" name="correo" id="" cols="30" rows="10"></>
                    </div>
                    <div class="form-group">
                        <label for="name">Teléfono</label>
                        <input type="text" value="{{ old('telefono',$config->telefono) }}" class="form-control" placeholder="Ej: 1157179900" name="telefono" id="" cols="30" rows="10"></>
                    </div>
                    <div class="form-group">
                        <label for="name">Horario de Atención</label>
                        <input type="text" value="{{ old('horario',$config->horario) }}" class="form-control" placeholder="Ej: Lunes - Sábado 9 a 18 Hs." name="horario" id="" cols="30" rows="10"></>
                    </div>
                    <div class="form-group">
                        <label for="name">Dirección</label>
                        <input type="text" value="{{ old('direccion',$config->direccion) }}" class="form-control" placeholder="Ej: Calle 123" name="direccion" id="" cols="30" rows="10"></>
                    </div>
                    <div class="form-group">
                        <label for="name">Mapa</label>
                        <textarea placeholder="colocar script de google maps" class="form-control" name="mapa" id="" cols="30" rows="10">{{ old('mapa',$config->mapa) }}</textarea>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
                </form>
                <!-- /.box-body -->
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
