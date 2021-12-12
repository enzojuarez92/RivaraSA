@if (!is_null($cancelar))
<a href="{{ $cancelar }}" role="button" class="btn btn-light mr-3 ml-2">
    <i class="ti-close"></i> Cancelar
</a>    
@endif

<button type="submit" class="btn btn-{{ $color ?? 'primary' }} form-submit">
    <i class="ti-save"></i> {{ $text ?? 'Guardar Cambios' }}
</button>

<button type="button" class="btn btn-{{ $color ?? 'primary' }} disabled form-loader hidden">
    <i class="fa fa-spinner fa-spin" aria-hidden="true"></i> {{ $load ?? 'Guardando ...' }}
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
