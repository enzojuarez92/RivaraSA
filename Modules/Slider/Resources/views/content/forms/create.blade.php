<form action="{{ route('slider.content.store',$slider) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="mb-3">
        <div class="form-group">
            <label for="image">Imagen Slider</label>
            <input type="file"
                   name="image"
                   id="image"
                   class="form-control-file dropify"
                   aria-describedby="fileHelpId"
                   required />
            <small id="fileHelpId" class="form-text text-muted">{{ $slider->image_help }}</small>
            @error('image')
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
                   class="form-control @error('title') is-invalid @enderror"
                   aria-describedby="helpTitulo"
                   placeholder="Ingrese el contenido principal del slider" />
            <small id="helpTitulo" class="form-text text-muted">Ej: Ofertas de Marzo</small>
            @error('title')
            <div class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Descripción</label>
            <input type="text"
                   name="description"
                   id="description"
                   class="form-control @error('description') is-invalid @enderror"
                   aria-describedby="helpDescription"
                   placeholder="Texto descriptivo" />
            <small id="helpDescription" class="form-text text-muted">Ej: Elegí tu producto hasta 10% OFF</small>
            @error('title')
            <div class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="url">URL</label>
            <input type="text"
                   name="url"
                   id="url"
                   class="form-control @error('url') is-invalid @enderror"
                   aria-describedby="helpurl"
                   placeholder="Destino en url." />
            <small id="helpurl" class="form-text text-muted">Ej: /ofertas</small>
            @error('url')
            <div class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>

        <div class="row">
            <div class="form-group col-md-8">
                <label for="action_call">Texto Botón / link</label>
                <input type="text"
                       name="action_call"
                       id="action_call"
                       class="form-control @error('action_call') is-invalid @enderror"
                       aria-describedby="helpActionCall"
                       placeholder="Texto de link" />
                <small id="helpActionCall" class="form-text text-muted">Ej: Ver Ofertas!</small>
                @error('action_call')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="order">Orden</label>
                <input type="number"
                       name="order"
                       id="order"
                       class="form-control"
                       aria-describedby="helpOrder"
                       min="0"
                       placeholder="Orden del slider" />
                <small id="helpOrder" class="form-text text-muted">Ej: 1</small>
            </div>
            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox"
                               class="form-check-input"
                               name="visible"
                               id="visible"
                               value="1" /> Visible
                    </label>
                </div>
            </div>
            <div class="col-md-12">
                @include('slider::layouts.shared.buttons.modal')
            </div>
        </div>
    </div>
</form>
