<fieldset>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="">Imagen de Perfil</label>
                <br>
                <img style="width:150px;" src="{{ asset($team->image ?? 'modules/team/img/default-avatar.png') }}" alt="imagenPerfil" class="img-circle">
                <br><br>
                <input type="file" name="image" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Nombre</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $team->name ?? old('name')}}">
                @error('name')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Apellido</label>
                <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" value="{{ $team->lastname ?? old('lastname')}}">
                @error('lastname')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Cargo</label>
                <input type="text" name="role" class="form-control @error('role') is-invalid @enderror" value="{{ $team->role ?? old('role')}}">
                @error('role')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Email</label>
                <input type="text" name="email" id="" class="form-control @error('email') is-invalid @enderror" value="{{ $team->email ?? old('email')}}">
                @error('email')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Descripcion breve</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5">{{ $team->description ?? old('description')}}</textarea>
                @error('description')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>
</fieldset>
<fieldset>
    <legend>
        <i class="fa fa-facebook-official"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-linkedin"></i> Redes Sociales
    </legend>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label"><i class="fa fa-facebook-official"></i> Facebook</label>
                <input type="url" placeholder="cargar url del perfil" name="facebook" class="form-control @error('facebook') is-invalid @enderror" value="{{ $team->facebook ?? old('facebook')}}">
                @error('facebook')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label"><i class="fa fa-instagram"></i> Instagram</label>
                <input type="url" placeholder="cargar url del perfil" name="instagram" class="form-control @error('instagram') is-invalid @enderror" value="{{ $team->instagram ?? old('instagram')}}">
                @error('instagram')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label"><i class="fa fa-twitter"></i> Twitter</label>
                <input type="url" placeholder="cargar url del perfil" name="twitter" class="form-control @error('twitter') is-invalid @enderror" value="{{ $team->twitter ?? old('twitter')}}">
                @error('twitter')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label"><i class="fa fa-linkedin"></i> Linkedin</label>
                <input type="url" placeholder="cargar url del perfil" name="linkedin" id="" class="form-control @error('linkedin') is-invalid @enderror" value="{{ $team->linkedin ?? old('linkedin')}}">
                @error('linkedin')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>
</fieldset>
