@extends(config('team.layout'))

@section('content')

    @include('flash::message')
    

	{{--  Content  --}}
	<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Editar {{ $team->name.' '.$team->lastName }}</h4>
                  </div>
                  <div class="card-body">
                    <form action="{{ route('team.update',$team) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('team::_form')

                        <a href="{{ route('team.index') }}" class="btn btn-muted">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
	</div>



@endsection
