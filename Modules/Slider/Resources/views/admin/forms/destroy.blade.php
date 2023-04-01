<form action="{{ route('slider.admin.destroy', $slider) }}" method="post">
    @csrf
    @method('DELETE')
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <p class="text-center">Está seguro que desea eliminar el slider <strong>{{ $slider->key }}</strong>?</p>
                <p class="text-center text-danger"><i class="fa fa-exclamation-circle"></i> Esta acción no puede revertirse.</p>
                <button type="submit" class="btn btn-danger pull-right">
                    <i class="ti-trash"></i> Eliminar
                </button>
                <button type="button" class="btn btn-light pull-right mr-2" data-dismiss="modal">
                    <i class="ti-close"></i> Cancelar
                </button>
            </div>
        </div>
    </div>
</form>
