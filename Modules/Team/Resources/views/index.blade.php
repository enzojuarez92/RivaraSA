@extends(config('team.layout'))

@section('content')

    @include('flash::message')
    

	{{--  Content  --}}
	<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Equipo
                        <a href="{{ route('team.create') }}" class="btn btn-primary float-right">Agregar Miembro</a>
                    </div>
                    <div class="card-body">
                        @include('team::_list')
                    </div>
                </div>
            </div>
        </div>
	</div>



@endsection
