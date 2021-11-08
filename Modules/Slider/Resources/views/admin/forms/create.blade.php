<form action="{{ route('slider.admin.store') }}" method="post">
    @csrf
    @method('POST')
    <div class="row">
        <div class="col-md-12">
            @include('slider::admin.forms.fields')
            @include('slider::layouts.shared.buttons.modal')
        </div>
    </div>
</form>
