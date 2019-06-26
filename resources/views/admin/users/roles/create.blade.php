@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Roles', 
                'icon' => 'fa-block', 
                'subtitle' => 'Crear Rol', 
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
                        ['url' => '#', 'icon' => 'fa-users', 'name' => 'Roles'],
                        ['url' => '#', 'icon' => null, 'name' => 'Crear']
                    )
            ])

@endsection


@section('content')

<div class="row">
      <div class="col-md-6">
    <div class="box box-primary">
      <div class="box-body">
        
        
        @include('admin.common.mensajesError')
        
        <form action="{{ route('admin.roles.store') }}" method="POST">
          @csrf

          <div class="form-group">
            <label for="">Identificador</label>
            <input class="form-control" type="text" name="name" value="{{ old('name')}}">
            <label for="">Nombre</label>
            <input class="form-control" type="text" name="display_name" value="{{ old('display_name')}}">
            <label for="">Guard</label>
            <select class="form-control" name="guard_name" id="">
                
                @foreach (config('auth.guards') as $guardName => $guard)
                    <option value="{{$guardName}}">{{$guardName}}</option>
                @endforeach
                
            </select>
          </div>

          <div class="form-group col-md-6">
              <label for="">Permisos</label>
              @include('admin.common.permisos', ['model' => $role])
          </div>
            

          <button class="btn btn-primary btn-block" type="submit">Crear Rol</button>

        </form>
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

