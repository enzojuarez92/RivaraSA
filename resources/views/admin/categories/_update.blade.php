    <form enctype="multipart/form-data" action="{{ route('admin.categories.update', $category->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT')}}
    <fieldset>
        @include('admin.categories._form')
    </fieldset>
    <hr>
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar Cambios</button>

    </form>