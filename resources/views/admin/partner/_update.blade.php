    <form enctype="multipart/form-data" action="{{ route('partner.update',$team) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT')}}
    <fieldset>
        @include('admin.partner._form')
    </fieldset>
    <hr>
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar Cambios</button>

    </form>