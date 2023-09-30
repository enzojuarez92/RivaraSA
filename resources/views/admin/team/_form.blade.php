<div class="row">
    <div class="col-lg-12">

        {{-- alerta de errores validacion laravel --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <h6>Por favor corrige los errores debajo:</h6>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>                        
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-lg-12">
            <label for="">Imagen de Perfil</label> {!! $errors->first('image','<span class=error>:message</<span>') !!}
            <br>
            <img style="width:100px;" src="/{{ $team->image ?? 'assets/img/default-avatar.png' }}" alt="imagenPerfil">
            <input type="file" name="image">
        </div>

        <div class="col-lg-4">
            <label for="">Nombre</label> {!! $errors->first('name','<span class=error>:message</<span>') !!}
            <input type="text" name="name" id="" class="form-control" value="{{ $team->name ?? old('name')}}">
        </div>

        <div class="col-lg-4">
            <label for="">Apellido</label> {!! $errors->first('lastname','<span class=error>:message</<span>') !!}
            <input type="text" name="lastname" id="" class="form-control" value="{{ $team->lastname ?? old('lastname')}}">
        </div>

        <div class="col-lg-4">
            <label for="">Teléfono</label> {!! $errors->first('phone','<span class=error>:message</<span>') !!}
            <input type="text" name="phone" id="" class="form-control" value="{{ $team->phone ?? old('phone')}}">
        </div>

        <div class="col-lg-12">
            <label for="">Descripcion breve</label> {!! $errors->first('description','<span class=error>:message</<span>') !!}
            <textarea class="form-control" name="description" id="" cols="30" rows="5">{{ $team->description ?? old('description')}}</textarea>
        </div>

        <div class="col-lg-6">
            <label for="">Email</label> {!! $errors->first('email','<span class=error>:message</<span>') !!}
            <input type="text" name="email" id="" class="form-control" value="{{ $team->email ?? old('email')}}">
        </div>

        <div class="col-lg-6">
            <label for="">Cargo</label> {!! $errors->first('role','<span class=error>:message</<span>') !!}
            <input type="text" name="role" id="" class="form-control" value="{{ $team->role ?? old('role')}}">
        </div>

        <div class="col-lg-6">
            <label for="">Facebook</label> {!! $errors->first('facebook','<span class=error>:message</<span>') !!}
            <input type="url" placeholder="cargar url del perfil" name="facebook" id="" class="form-control" value="{{ $team->facebook ?? old('facebook')}}">
        </div>

        <div class="col-lg-6">
            <label for="">Instagram</label> {!! $errors->first('instagram','<span class=error>:message</<span>') !!}
            <input type="url" placeholder="cargar url del perfil" name="instagram" id="" class="form-control" value="{{ $team->instagram ?? old('instagram')}}">
        </div>

        <div class="col-lg-6">
            <label for="">Twitter</label> {!! $errors->first('twitter','<span class=error>:message</<span>') !!}
            <input type="url" placeholder="cargar url del perfil" name="twitter" id="" class="form-control" value="{{ $team->twitter ?? old('twitter')}}">
        </div>

        <div class="col-lg-6">
            <label for="">Linkedin</label> {!! $errors->first('linkedin','<span class=error>:message</<span>') !!}
            <input type="url" placeholder="cargar url del perfil" name="linkedin" id="" class="form-control" value="{{ $team->linkedin ?? old('linkedin')}}">
        </div>

        {{-- checkbox foreach ConfigHelper::getServicios() --}}
        <div class="col-lg-12">
            <label for="">Servicios</label> {!! $errors->first('services','<span class=error>:message</<span>') !!}
            <br>
            @if (!$team)
                @foreach (App\Helpers\ConfigHelper::getServicios() as $key => $value)
                    <input type="checkbox" name="servicios[]" value="{{ $key }}" {{ (is_array(old('servicios')) and in_array($key, old('servicios'))) ? ' checked' : '' }}> {{ $value['titulo'] }}<br>
                @endforeach                
            @else
                @foreach (App\Helpers\ConfigHelper::getServicios() as $key => $value)
                    <input type="checkbox" name="servicios[]" value="{{ $key }}" {{ (is_array($team->servicios) and in_array($key, $team->servicios)) ? ' checked' : '' }}> {{ $value['titulo'] }}<br>
                @endforeach
            @endif
        </div>

       

    </div>
</div>
