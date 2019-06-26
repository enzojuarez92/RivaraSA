    <div class="box box-warning">
        <div class="box-header">
            <label for="">Fotos</label>
        </div>
        <div class="box-body">
            @foreach ($fotos as $foto)
            <form autocomplete="off" action="{{ route('admin.foto.destroy',$foto->id) }}" method="post">
                {{ method_field('delete') }}
                @csrf
                <div class="col-md-2">
                    <button type="submit" class="btn btn-danger btn-xs" style="position: absolute">
                        <i class="fa fa-remove"></i>
                    </button>
                    <img style="height:100px;" class="img-responsive" src="{{ asset('img/'.$foto->url) }}" alt="">
                </div>                                
            </form>
            @endforeach
        </div>
    </div>
