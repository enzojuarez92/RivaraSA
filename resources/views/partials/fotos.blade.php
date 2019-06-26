<div id="project-carousel" class="carousel carousel-fade slide" data-ride="carousel">							
    <div class="carousel-inner">

        
        @foreach ($post->fotos as $foto)
        <div class="item {{ $loop->first ? 'active' : '' }}">
            <img class="img-responsive" src="{{ asset('img/'.$foto->url) }}" alt="">
        </div>
        @endforeach

    </div>
    <ol class="project-indicators">
        
        @foreach ($post->fotos as $foto)
        <li data-target="#project-carousel" data-slide-to="{{ $loop->index }}" class="active">
            <img class="img-responsive" src="{{ asset('img/'.$foto->url) }}" alt="" />
        </li>
            
        @endforeach
        
    </ol>
</div>
