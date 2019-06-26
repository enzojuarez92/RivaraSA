<form enctype="multipart/form-data" action="{{$action}}" method="POST">
    {{ csrf_field() }}
    {{ method_field($method ?? 'POST')}}
    <input id="project_type_id" name="project_type_id" type="hidden" value="{{$project_type->id}}">
    <div class="col-md-8">
        <div class="box box-warning">
            <div class="box-body">
                @isset($project)
                <a target="_blank" href="{{ $project->link() }}" class="btn btn-xs btn-default pull-right"><i class="fa fa-eye"></i> Ver Proyecto</a>                    
                @endisset
                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                    <label for="">Título</label> 
                    <input class="form-control" type="text" name="title" id="title" value="{{$project->title ?? old('title')}}">
                    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                    <label for="">Contenido completo</label>
                    <textarea id="editor" class="form-control" name="body" id="" cols="30" rows="20">{{ $project->body ?? old('body') }}</textarea>
                    {!! $errors->first('body', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
            <div class="box-footer">
                <h4>Especificaciones</h4>
                @foreach ($project_type->fields ?? $project_type->fields as $f)
                <div class="form-group {{ $errors->has($f->name) ? 'has-error' : '' }}">
                    <label for="{{$f->name}}">{{$f->label}}</label> {!! $errors->first("$f->label",'<span class=error>:message</span>') !!}
                    <input class="form-control" type="{{$f->type}}" min="{{$f->min}}" inputmode="{{$f->mode}}"
                            max="{{$f->max}}" minlength="{{$f->minlength}}" maxlength="{{$f->maxlength}}" name="{{$f->name}}"
                            id="{{$f->name}}" placeholder="{{$f->placeholder}}" value="{{$project->data[$f->name] ?? old($f->name)}}">
                    {!! $errors->first($f->name, '<span class="help-block">:message</span>') !!}
                </div>
                @endforeach
                <button class="btn btn-block btn-primary" type="submit">Guardar</button>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="box box-primary">
            <div class="box-body">
                <div class="form-group">
                    <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                        <label for="">Selecciona una categoria</label>
                        <select class="form-control select2" name="category_id" id="category_id">
                            <option value="">Seleccionar categoria</option>
                            @foreach ($categorias as $categoria)
                                <option {{ isset($project) ? 
                                (((old('category_id', $project->category_id)) == $categoria->id) ? 'selected' : '') : 
                                ((old('category_id') == $categoria->id) ? 'selected' : '') }} 
                                value="{{$categoria->id}}">{{$categoria->name}}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('category_id', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('extract') ? 'has-error' : '' }}">
                    <div class="form-group">
                        <label for="">Extracto</label>
                        <textarea class="form-control" name="extract" id="extract" cols="30" rows="10">{{ $project->extract ?? old('extract') }}</textarea>
                        {!! $errors->first('extract', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('tags') ? 'has-error' : '' }}">
                    <label>Etiquetas</label>
                    <select name="tags[]" class="form-control select2" multiple="multiple" data-placeholder="Seleccionar etiquetas" style="width: 100%;">
                        @foreach ($tags as $tag)
                        <option {{ isset($project) ?
                         collect(old('tags', $project->tags->pluck('id')))->contains($tag->id) ? 'selected' : '' :
                         collect(old('tags'))->contains($tag->id) ? 'selected' : '' }} 
                         value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                    {!! $errors->first('tags', '<span class="help-block">:message</span>') !!}
                </div>
                @isset($project)
                <div class="form-group">
                    <label>Añadir fotos</label>                    
                    <div class="dropzone"></div>
                </div>
                @endisset
            </div>
        </div>
    </div>
</form>

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
<script src="/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script> --}}
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
        url: "{{ isset($project) ? route('admin.projects.addFoto', $project) : '' }}",
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
    CKEDITOR.config.height =600; --}}
    

    var editor = CKEDITOR.replace( 'editor' );
    CKFinder.setupCKEditor( editor );
</script>

@endpush