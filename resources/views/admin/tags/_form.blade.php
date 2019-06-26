<div class="row">
    <div class="col-lg-12 form-group">
        <label for="">Nombre</label> {!! $errors->first('name','<span class=error>:message</<span>') !!}
        <input type="text" name="name" id="" class="form-control" value="{{ $tag->name ?? old('name')}}">
    </div>
</div>
