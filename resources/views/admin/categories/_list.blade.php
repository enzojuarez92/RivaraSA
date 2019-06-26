<table class="table table-stripped" id="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td class="col-lg-2">
                <a href="{{ url('admin/categories/'.$category->id.'/edit' ) }}" class="btn btn-info"><i class="fa fa-search"></i></a>
                <a href="" class="btn btn-danger" data-toggle="modal" data-target="#usuario-delete-{{$category->id}}"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach($categories as $c)
    @include('admin.categories._delete')
@endforeach