    <form enctype="multipart/form-data" action="{{ route('admin.tags.update', $tag->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT')}}
    <fieldset>
        @include('admin.tags._form')
    </fieldset>
    <hr>
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar Cambios</button>

    </form>