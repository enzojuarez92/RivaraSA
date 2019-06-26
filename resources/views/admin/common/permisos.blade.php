@foreach ($permissions as $id=> $name)
    <div class="checkbox">
    <label for="ch-{{$name}}">
        <input {{$model->permissions->contains($id) ? 'checked' : ''}} type="checkbox" name="permissions[]" id="ch-{{$name}}" value="{{$name}}">
        {{$name}}
    </label>
    </div>
@endforeach
