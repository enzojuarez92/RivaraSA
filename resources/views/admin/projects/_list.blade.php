<table class="table table-stripped" id="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Url</th>
            <th>Tipo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->title }}</td>
            <td>{{ $p->url }}</td>
            <td>{{ $p->type->name }}</td>
            <td class="col-lg-3">
                <a href="{{ $p->Link() }}" target="_blank" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                <a href="{{ route('admin.projects.edit', $p) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                <a href="" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#usuario-delete-{{$p->id}}"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach($projects as $p)
    @include('admin.projects._delete')
@endforeach