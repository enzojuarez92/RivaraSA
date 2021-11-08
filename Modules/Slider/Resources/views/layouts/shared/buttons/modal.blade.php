<button type="submit" class="btn btn-{{ $btn ?? 'primary' }} pull-right form-submit">
    {!! $save ?? 'Guardar Cambios' !!}
</button>

<button type="button" class="btn btn-primary disabled form-loader hidden pull-right">
    <i class="fa fa-cog fa-spin"></i> {{ $load ?? 'Guardando ...' }}
</button>

<button type="button" class="btn btn-light pull-right mr-3" data-dismiss="modal">
    <i class="fa fa-close"></i> Cerrar
</button>

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.form-submit')
                .parents('form')
                .on('submit', function(event){
                    event.preventDefault();

                    $(event.target)
                        .find('.form-submit')
                        .addClass('hidden');

                    $(event.target)
                        .find('.form-loader')
                        .removeClass('hidden');

                    this.submit();
                });
        });
    </script>
@endpush
