<table class="table">
    <thead>
    <tr>
        <th>Orden</th>
        <th>Imagen</th>
        <th>URL/Acción</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($slider->content->sortBy('order') as $item)
            <tr>
                <td>{{ $item->order }}</td>
                <td>
                    <img style="width: 100px" src="{{ $item->imageShow() }}" class="img-fluid" alt="">
                </td>
                <td>{{ $item->url }} / {{ $item->action_call }}</td>
                <td>{{ ($item->visible) ? 'Visible' : 'Oculto' }}</td>
                <td>
                    <a href="{{ route('slider.content.edit',$item) }}">
                        <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                    </a>
                    <a href="#" data-toggle="modal" data-target="#modal-delete-slider-element-{{ $item->id }}">
                        <i class="fa fa-trash-o fa-2x mr-1 text-danger" ></i>
                    </a>
                    @include('slider::content.modals.destroy')
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
