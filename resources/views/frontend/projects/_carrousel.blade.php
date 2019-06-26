@if ($project->fotos->count() > 1)
    
<div id="carousel-example-generic-{{$project->id}}" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  {{-- <ol class="carousel-indicators">
    @foreach ($post->fotos as $f)
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    @endforeach
  </ol> --}}

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    @foreach ($project->fotos as $f)
        <div class="item @if ($loop->first) active @endif">
        <img src="{{ asset('img/'.$f->url) }}" alt="Galeria de Imágenes">
        <div class="carousel-caption">
            ...
        </div>
        </div>        
    @endforeach
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic-{{$project->id}}" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic-{{$project->id}}" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Proximo</span>
  </a>
</div>

@endif
