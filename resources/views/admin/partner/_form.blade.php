<div class="row">
    <div class="col-lg-12">

        <div class="col-lg-12">
            <label for="">Imagen de Perfil</label> {!! $errors->first('image','<span class=error>:message</<span>') !!}
            <br>
            <img style="width:100px;" src="/{{ $team->image ?? 'assets/img/default-avatar.png' }}" alt="imagenPerfil">
            <input type="file" name="image">
        </div>

        <div class="col-lg-12">
            <label for="">Nombre</label> {!! $errors->first('name','<span class=error>:message</<span>') !!}
            <input type="text" name="name" id="" class="form-control" value="{{ $team->name ?? old('name')}}">
        </div>


        <div class="col-lg-12">
            <label for="">Descripcion breve</label> {!! $errors->first('description','<span class=error>:message</<span>') !!}
            <textarea class="form-control" name="description" id="" cols="30" rows="5">{{ $team->description ?? old('description')}}</textarea>
        </div>

    </div>
</div>
