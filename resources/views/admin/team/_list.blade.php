<table class="table table-stripped" id="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Servicios</th>
            <th>Email</th>
            <th>Cargo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($miembros as $r)
        <tr>
            <td>{{ $r->id }}</td>
            <td><img style="width:25px;" class="img-circle" src="/{{ $r->image ?? 'assets/img/default-avatar.png' }}" alt="imagen"></td>
            <td>{{ $r->name }}</td>
            <td>{{ $r->lastname }}</td>
            <td>
                @foreach($r->servicios as $s)
                    <span class="label label-primary">{{ $s }}</span>
                @endforeach    
            </td>
            <td>{{ $r->email }}</td>
            <td>{{ $r->role }}</td>
            <td class="col-lg-2">
                <a href="{{ url('admin/team/'.$r->id.'/edit' ) }}" class="btn btn-info"><i class="fa fa-search"></i></a>
                <a href="" class="btn btn-danger" data-toggle="modal" data-target="#usuario-delete-{{$r->id}}"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach($miembros as $r)
    @include('admin.team._delete')
@endforeach