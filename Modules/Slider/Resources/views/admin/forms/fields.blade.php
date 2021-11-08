<div class="form-group">
    <label for="key">Alias</label>
    <input type="text"
           name="key"
           id="key"
           class="form-control @error('key') is-invalid @enderror"
           aria-describedby="helpKey"
           placeholder="Ingrese texto sin espacios..."
           value="{{ old('key', $slider->key ?? '') }}"
           @isset($slider) disabled @endisset
           required />
    <small id="helpKey" class="form-text text-muted">Nombre para identificar el slider. Ej: slider-home</small>
    @error('key')
    <div class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="title">Título</label>
    <input type="text"
           name="title"
           id="title"
           class="form-control"
           aria-describedby="helpTitle"
           placeholder="Ingrese el título..."
           value="{{ old('titulo', $slider->title ?? '') }}"
           required />
    <small id="helpTitle" class="form-text text-muted">Ej: Slider Home / Slider Página Nosotros</small>
    @error('title')
    <div class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="image_help">Tamaño Imágenes</label>
    <input type="text"
           name="image_help"
           id="image_help"
           class="form-control @error('image_help') is-invalid @enderror"
           aria-describedby="helpimage_help"
           placeholder="Indicá de que tamaño serán las imágenes..."
           value="{{ old('image_help', $slider->image_help ?? '') }}"
           required />
    <small id="helpimage_help" class="form-text text-muted">Ej: 300x300</small>
    @error('image_help')
    <div class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="description">Descripción</label>
    <textarea name="description" id="description" class="form-control" rows="3" required>{{ old('description', $slider->description ?? '') }}</textarea>
    @error('description')
    <div class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </div>
    @enderror
</div>
@isset($slider)
    <div class="form-group">
        <label class="control-label">Visible</label>
        <input type="checkbox"
               name="visible"
               class="js-switch"
               id="visible"
               value="{{ $slider->visible }}" {{ $slider->visible ? 'checked' : '' }} />
        <span class="badge badge-light" id="visible-check-change">{{ $slider->visible ? 'SI' : 'NO' }}</span>
    </div>
@endisset

@push('scripts')
    <script type="text/javascript">
        let visibleSwitch = new Switchery(document.querySelector("#visible"));

        $("#visible").on("change", function(){
            changeLabel($(this), $("#visible-check-change"));
        });

        function changeLabel(checkbox, label){
            checkbox.prop('checked')
                ? label.html("SI")
                : label.html("NO");
        }
    </script>
@endpush
