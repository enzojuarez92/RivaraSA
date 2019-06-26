@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Usuarios', 
                'icon' => 'fa-users', 
                'subtitle' => 'Editar Usuario', 
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
                        ['url' => '#', 'icon' => null, 'name' => 'Editar']
                    )
            ])

@endsection



@section('content')

<div class="row">
  <div class="col-md-6">
    <div class="box box-primary">
      <div class="box-body">
        
        @if ($errors->any())
        <ul class="list-group">
          
          @foreach ($errors->all() as $error)
            <li class="list-group-item list-grpup-item-danger">
              {{$error}}
            </li>
          @endforeach
          
        </ul>
          
        @endif
        
        <form action="{{ route('admin.users.update', $user) }}" method="post" enctype="multipart/form-data">
          @csrf
          {{ method_field('PUT') }}
          <p>
            <label>Foto Actual</label> <br>
            <img style="max-width: 100px;" class="img-responsive" src="{{ isset($user->avatar)? asset('img/'.$user->avatar) : asset('img/admin/avatarPerfil/default.png') }}" alt="" srcset="">
          </p>
          <label for="">Subir nueva foto Perfil</label>
          <input type="file" name="avatar" id="">
          <label for="">Nombre</label>
          <input class="form-control" type="text" name="name" value="{{ old('name', $user->name)}}">
          <label for="">Correo</label>
          <input class="form-control" type="text" name="email" value="{{ old('email', $user->email)}}">

          <label for="">Contraseña</label>
          <input class="form-control" type="password" name="password" value="">
          <span class="help-block">Dejar en blanco si no desea cambiar la contraseña</span>

          <label for="">Repetir Contraseña</label>
          <input class="form-control" type="password" name="password_confirmation" value="">

          <button class="btn btn-primary btn-block" type="submit">Actualizar Usuario</button>

        </form>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Roles</h3>
        </div>
        <div class="box-body">
        @role('Admin')
          <form action="{{route('admin.users.roles.update',$user)}}" method="post">
            @csrf
            {{ method_field('PUT') }}
              @include('admin.common.roles')
              <button class="btn btn-primary btn-block" type="submit">Guardar Roles</button>
            </form>
        @else
            <ul class="list-group">
              @forelse ($user->roles as $role)
                  <li class="list-group-item">
                    {{$role->name}}
                  </li>
              @empty
                  <li class="list-group-item">No tiene roles asignados</li>
              @endforelse
            </ul>
        @endrole
        </div>
    </div>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Permisos</h3>
        </div>
        <div class="box-body">
        @role('Admin')
          <form action="{{route('admin.users.permissions.update',$user)}}" method="post">
            @csrf
            {{ method_field('PUT') }}
            @include('admin.common.permisos', ['model' => $user])
            <button class="btn btn-primary btn-block" type="submit">Guardar Permisos</button>
          </form>
        @else
            <ul class="list-group">
              @forelse ($user->permissions as $permission)
                  <li class="list-group-item">
                    {{$permission->name}}
                  </li>
              @empty
                  <li class="list-group-item">No tiene permisos asignados</li>
              @endforelse
            </ul>
        @endrole
        </div>
    </div>
  </div>
</div>

@stop

@push('styles')

  <!-- dropzone -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="/adminlte/bower_components/select2/dist/css/select2.min.css">

@endpush

@push('scripts')


<!-- dropzone -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<!-- bootstrap datepicker -->
<script src="/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
<!-- Select2 -->
<script src="/adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>

<script>
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
    //Initialize Select2 Elements
    $('.select2').select2({
        tags: true
    });
    {{--  new Dropzone('.dropzone', {
      url: '/admin/posts/{{$post->id}}/fotos',
      paramName: 'photo',
      acceptedFiles: 'image/*',
      maxFilesize: 2,
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}',
      },
      dictDefaultMessage: 'Arrastrar fotos aqui para subirlas',
    });
    Dropzone.autoDiscover = false;  --}}
</script>




@endpush

