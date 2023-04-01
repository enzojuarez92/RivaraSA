<form action="{{ route('slider.content.update', $content) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <img width="150px;" src="{{ $slidercontent->imageShow() }}" class="img-fluid" alt="">
        <div class="form-group">
            <label for="image">Imagen Slider</label>
            <input type="file"
                   class="dropify"
                   name="image"
                   id="image"
                   aria-describedby="fileHelpId"
                   placeholder="" />
            <small id="fileHelpId" class="form-text text-muted">{{ $content->slider->image_help }}</small>
        </div>
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text"
                   name="title"
                   id="title"
                   class="form-control"
                   value="{{ $content->title }}"
                   aria-describedby="helpTitulo"
                   placeholder="Ingrese el contenido principal del slider" />
            <small id="helpTitulo" class="form-text text-muted">Ej: Ofertas de Marzo</small>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <input type="text"
                   name="description"
                   id="description"
                   class="form-control"
                   value="{{ $content->description }}"
                   aria-describedby="helpDescription"
                   placeholder="Texto descriptivo" />
            <small id="helpDescription" class="form-text text-muted">Ej: Elegí tu producto hasta 10% OFF</small>
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="text"
                   value="{{ $content->url }}"
                   class="form-control"
                   name="url"
                   id="url"
                   aria-describedby="helpurl"
                   placeholder="Destino en url." />
            <small id="helpurl" class="form-text text-muted">Ej: /ofertas</small>
        </div>
        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label for="action_call">Texto Botón / Link</label>
                    <input type="text"
                           value="{{ $content->action_call }}"
                           name="action_call"
                           id="action_call"
                           class="form-control"
                           aria-describedby="helpActionCall"
                           placeholder="Texto de link" />
                    <small id="helpActionCall" class="form-text text-muted">Ej: Ver Ofertas!</small>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="order">Orden</label>
                    <input type="number"
                           value="{{ $content->order }}"
                           name="order"
                           id="order"
                           class="form-control"
                           aria-describedby="helpOrder"
                           min="0"
                           placeholder="Orden del slider" />
                    <small id="helpOrder" class="form-text text-muted">Ej: 1</small>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Visible</label>
            <input type="checkbox"
                   name="visible"
                   class="js-switch"
                   id="visible"
                   value="{{ $content->visible }}" {{ $content->visible ? 'checked' : '' }} />
            <span class="badge badge-light" id="visible-check-change">{{ $content->visible ? 'SI' : 'NO' }}</span>
        </div>
    </div>
    @include('slider::layouts.shared.buttons.form', ['cancelar' => route('slider.admin.edit', $content->slider) ])
</form>

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

