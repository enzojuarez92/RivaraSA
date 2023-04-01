<table class="table table-stripped" id="lista">
    <thead>
        <tr>
            <th>Id</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Descripción</th>
            <th>Email</th>
            <th>Cargo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($miembros as $m)
        <tr>
            <td>{{ $m->id }}</td>
            <td>
                <img width="25px" src="{{ $m->image }}" class="img-thumbnail rounded-circle" alt="">
            </td>
            <td>{{ $m->name }}</td>
            <td>{{ $m->lastName }}</td>
            <td>{{ substr( $m->description, 0, 200) }} ...</td>
            <td>{{ $m->role }}</td>
            <td>
                {{-- <a target="_blank" href="{{ route('verPost',$most->url) }}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a> --}}
                <a href="{{ route('team.edit',$m) }}" class="mr-2"><i class="fa fa-pencil fa-2x"></i></a>
                <a href='#' class='text-danger' data-toggle='modal' data-target='#borrar{{ $m->id }}'>
                <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
                </a>
                <div class='modal fade' tabindex='-1' role='dialog' id='borrar{{ $m->id }}'>
                    <div class='modal-dialog modal-lg' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                Eliminar miembro de Equipo
                            </div>
                            <div class='modal-body'>
                                <form action="{{ route('team.delete', $m) }}" method="post" style="display:inline">
                                    @csrf
                                    ¿Seguro desea eliminar a {{ $m->name }}? Esta acción no puede revertirse
                                    <hr>
                                    <div class="float-right">
                                        <button class="btn btn-xs btn-danger" type="submit">
                                            Eliminar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>




@push('scripts')
    {{-- <script src="{{ asset('limitless/global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script> --}}
    <script>
        $(document).ready(function(){
            $('#lista').dataTable({
                language: datatableLang,
                responsive: true,
            });
        });
    </script>
@endpush
