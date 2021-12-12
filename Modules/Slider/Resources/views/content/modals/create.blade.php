<div class="modal fade" id="modal-create-slider-content" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-create-slider-title">
                    <i class="icon-plus"></i> Nuevo Elemento
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('slider::content.forms.create')
            </div>
        </div>
    </div>
</div>
@push('scripts')
    @if(count($errors) > 0)
        <script type="text/javascript">
            jQuery(document).ready(function($){
                $('#modal-create-slider-content').modal('show');
            });
        </script>
    @endif
@endpush
