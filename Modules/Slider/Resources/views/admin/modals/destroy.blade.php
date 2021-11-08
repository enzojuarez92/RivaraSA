<div class="modal fade" id="modal-delete-slider-{{ $slider->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="modal-destroy-slider-title">
                    <i class="ti-trash"></i> Eliminar Slider</strong>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('slider::admin.forms.destroy')
            </div>
        </div>
    </div>
</div>
