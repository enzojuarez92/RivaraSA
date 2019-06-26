@extends(LAYOUT_ADMIN.'.app')


@section('header')

            @include(LAYOUT_ADMIN.'.includes.title', [
                'title' => 'Editar Posteo', 
                'icon' => 'fa-edit', 
                'subtitle' => 'Editar Posteo', 
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
                        ['url' => '#', 'icon' => null, 'name' => 'Editar']
                    )
            ])

@endsection




@section('content')

        @if($post->fotos->count() > 0)
        @include('admin.fotos._delete', [
            'fotos' => $post->fotos
        ])
        @endif

<form action="{{ route('admin.posts.update',$post->id) }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-body">
                    <a target="_blank" href="{{ $post->link() }}" class="btn btn-xs btn-default pull-right"><i class="fa fa-eye"></i> Ver Post</a>
                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                        <label for="">Título</label>
                        <input class="form-control" type="text" name="title" value="{{ $post->title ?? old('title') }}">
                        {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                        <label for="">Contenido completo</label>
                        <textarea id="editor" class="form-control" name="body" id="" cols="30" rows="20">{{ $post->body ?? old('body') }}</textarea>
                        {!! $errors->first('body', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('iframe') ? 'has-error' : '' }}">
                        <label for="">Contenido Embebido</label>
                        <textarea placeholder="Colocar contenido de video o audio" class="form-control" name="iframe" id="" cols="30" rows="2">{{ $post->iframe ?? old('iframe') }}</textarea>
                        {!! $errors->first('iframe', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-body">
                        <div class="form-group {{ $errors->has('published_at') ? 'has-error' : '' }}">
                        <label>Fecha de publicación:</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                            </div>
                            <input name="published_at" type="text" class="form-control pull-right" id="datepicker" value="{{ $post->published_at ?? old('published_at') }}">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                            <label for="">Selecciona una categoria</label>
                            <select class="form-control select2" name="category_id" id="">
                                <option value="">Seleccionar categoria</option>
                                @foreach ($categorias as $categoria)
                                    <option {{ old('category_id',$post->category_id) == $categoria->id ? 'selected' : '' }} value="{{$categoria->id}}">{{$categoria->name}}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('category_id', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('extract') ? 'has-error' : '' }}">
                        <div class="form-group">
                            <label for="">Extracto</label>
                            <textarea class="form-control" name="extract" id="" cols="30" rows="10">{{ $post->extract ?? old('extract') }}</textarea>
                            {!! $errors->first('extract', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('tags') ? 'has-error' : '' }}">
                        <label>Etiquetas</label>
                        <select name="tags[]" class="form-control select2" multiple="multiple" data-placeholder="Seleccionar etiquetas" style="width: 100%;">
                            @foreach ($tags as $tag)
                                <option {{ collect(old('tags', $post->tags->pluck('id')))->contains($tag->id) ? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('tags', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <label>Añadir fotos</label>                    
                        <div class="dropzone"></div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
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
    new Dropzone('.dropzone', {
      url: "{{route('admin.posts.addFoto', $post)}}",
      paramName: 'photo',
      acceptedFiles: 'image/*',
      maxFilesize: 2,
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}',
      },
      dictDefaultMessage: 'Arrastrar fotos aqui para subirlas',
    });
    Dropzone.autoDiscover = false;
</script>


@include('ckfinder::setup')

<script>
	{{-- CKEDITOR.replace( 'editor' );
    CKEDITOR.config.height =400; --}}
    

    var editor = CKEDITOR.replace( 'editor' );
    CKFinder.setupCKEditor( editor );
</script>

@endpush

