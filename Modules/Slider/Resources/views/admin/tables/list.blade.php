<table class="table table-stripped" id="tabla-sliders">
    <thead>
    <tr>
        <th>Id</th>
        <th>Alias</th>
        <th>Título</th>
        <th>Descripción</th>
        <th>Visible</th>
        <th>Fecha Creación</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($sliders as $slider)
        <tr>
            <td>{{ $slider->id }}</td>
            <td>{{ $slider->key }}</td>
            <td>{{ $slider->title }}</td>
            <td>{{ $slider->description }}</td>
            <td>{{ $slider->visible ? 'SI' : 'NO' }}</td>
            <td>{{ $slider->created_at->format('d/m/Y') }}</td>
            <td>
                <a href="{{ route('slider.admin.edit', $slider) }}"><i class="fa fa-pencil-square-o fa-2x mr-1"></i></a>
                <a href="#" data-toggle="modal" data-target="#modal-delete-slider-{{ $slider->id }}">
                    <i class="fa fa-trash-o fa-2x mr-1 text-danger" ></i>
                </a>
                @include('slider::admin.modals.destroy')
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#tabla-sliders').DataTable();
        });
    </script>
@endpush
