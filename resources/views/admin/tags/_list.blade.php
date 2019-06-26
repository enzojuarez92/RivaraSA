<table class="table table-stripped" id="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tags as $tag)
        <tr>
            <td>{{ $tag->id }}</td>
            <td>{{ $tag->name }}</td>
            <td class="col-lg-2">
                <a href="{{ url('admin/tags/'.$tag->id.'/edit' ) }}" class="btn btn-info"><i class="fa fa-search"></i></a>
                <a href="" class="btn btn-danger" data-toggle="modal" data-target="#usuario-delete-{{$tag->id}}"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach($tags as $t)
    @include('admin.tags._delete')
@endforeach