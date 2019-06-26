<div class="modal" tabindex="-1" role="dialog" id="addUsuario">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo Miembro</h4>
            </div>
            <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="modal-body">
                    @include('admin.team._form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar Colaborador</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
