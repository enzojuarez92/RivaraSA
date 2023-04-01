<form action="{{ route('slider.admin.update',$slider) }}" method="post">
    @csrf
    @method('PUT')
    <div class="row mb-3">
        <div class="col-12">
            @include('slider::admin.forms.fields')
        </div>
    </div>
    @include('slider::layouts.shared.buttons.form', ['cancelar' => route('slider.admin.index') ])
</form>
