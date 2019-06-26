<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar título de la nueva publicación</h5>
      </div>
      <div class="modal-body">
        <form action="{{ route('admin.posts.store', '#create') }}" method="POST">
                @csrf
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <input autofocus required autocomplete="false" class="form-control" type="text" name="title" value="{{ old('title') }}">
                {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Crear Publicación</button>
      </div>
        </form>
    </div>
  </div>
</div>
