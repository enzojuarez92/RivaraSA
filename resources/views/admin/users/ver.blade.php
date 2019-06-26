@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Usuarios', 
                'icon' => 'fa-users', 
                'subtitle' => 'Ver Usuario', 
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
                        ['url' => '#', 'icon' => null, 'name' => 'Ver usuario']
                    )
            ])

@endsection



@section('content')

<div class="row">
    <div class="col-md-4">
      <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ isset($user->avatar)? asset('img/'.$user->avatar) : asset('img/admin/avatarPerfil/default.png') }}" alt="{{ $user->name }}">

              <h3 class="profile-username text-center">{{ $user->name }}</h3>

              <p class="text-muted text-center">{{ $user->getRoleNames()->implode(', ') }}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Correo</b> <a class="pull-right">{{ $user->email }}</a>
                </li>
                <li class="list-group-item">
                  <b>Posteos</b> <a class="pull-right">{{ $user->posts()->count() }}</a>
                </li>
              </ul>

              <a href="{{ route('admin.users.edit',$user) }}" class="btn btn-primary btn-block"><b>Editar</b></a>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
    <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Publicaciones</h3>
        </div>
        <div class="box-body">
            
            @foreach ($user->posts as $post)
              <strong>{{ $post->title }}</strong> 
              <br>
            @endforeach
            
        </div>
      </div>
    </div>
    <div class="col-md-3">Roles del Usuario</div>
    <div class="col-md-2">Permisos</div>
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

