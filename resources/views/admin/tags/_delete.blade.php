<div class="modal fade" id="usuario-delete-{{ $t->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('admin.tags.destroy',$t->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE')}}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-chevron-right"></i> Eliminar Etiqueta</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="text-danger">
                            Está seguro que desea eliminar la etiqueta <strong>{{ $t->name }}</strong> ?
                        </h5>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
            </div>
            </form>
        </div>
    </div>
</div>