@extends(LAYOUT_FRONT.'app')

@section('title', $project->title.' | '.APP_DISPLAY)
@section('description', $project->extract)
@section('author', 'DVS360')
@section('keywords', $project->tags->implode('name',', '))
@section('image', $project->title)

@section('breadcrumb')
            @include('frontend.layout.includes.breadcrumb', [
                'title' => 'Proyectos', 
                'subtitle' => 'Proyectos del tipo '.$project->type->name,
                'links' => array(
                    ['icon' => 'icon-copy', 'name' => 'Inicio', 'url' => route('home')],
                    ['icon' => 'icon-add', 'name' => 'Proyectos', 'url' => route('projects.index', $project->type->id)],
                    ['icon' => 'icon-add', 'name' => $project->title, 'url' => ''],
                )
            ])
@endsection

@section('content')

    <!-- GRIDS -->
    <!--===============================================================-->
    <div class="container">
      <div class="row">
        <!-- GRID PROJECTS -->
        <!--===============================================================-->
        <div class="col-sm-8 grid-posts">
          <!-- PROJECT ITEM 1 -->
          <div class="row">
            <div class="col-sm-12">
              <div class="wrapper-post">
                <a href="{{ $project->link() }}" class="text-theme display-block">
                  <img src="{{ asset($project->imagen()) }}" class="img-responsive full-width" alt="{{ $project->url }}">
                </a>
                <div class="wrapper-post-text">
                  <h2 class="title-lg text-uppercase text-theme"><a href="{{ $project->link() }}">{{ $project->title }}</a></h2>
                  <ul class="list-unstyled list-inline text-theme post-date-author">
                    <li>
                      <a href="#"><i class="fa fa-comment-o"></i>{{ $project->title }}</a>
                    </li>
                    <li>
                      <a class="link-colored" href="#"><i class="fa fa-tag"></i>{{ $project->category->name }}</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-calendar"></i>{{ $project->created_at }}</a>
                    </li>
                  </ul>
                  <p>
                    {{ $project->extract }}
                  </p>
                  <p>
                    {!! $project->body !!}
                  </p>
                  @include('frontend.projects._carrousel')
                </div>
              </div>
            </div>
          </div>

        {{-- @include('frontend.projects._comments') --}}
        

        </div>
        <!-- GRID PROJECTS END -->
        <!--===============================================================-->
        @include('frontend.projects._sidebarProject')

      </div>
    </div>




@endsection

@push('styles')
    
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

@endpush

@push('scripts')
    {{-- datos estructurados --}}
    {{-- <script type="application/ld+json">
    { "@context": "http://schema.org", 
    "@type": "BlogPosting",
    "headline": "{{ $post->title }}",
    "alternativeHeadline": "{{ $post->extract }}",
    "image": "{{ asset($post->imagen()) }}",
    "editor": "{{ $post->escritor() }}", 
    "keywords": "{{ $post->tags->implode('name',', ') }}", 
    "url": "{{ url()->current() }}",
    "publisher": "{{ $post->escritor() }}",
    "datePublished": "{{ $post->published_at }}",
    "dateCreated": "{{ $post->created_at }}",
    "dateModified": "{{ $post->updated_at }}",
    "description": "{{ $post->extract }}",
    "articleBody": "{{ $post->body }}",
    "author": {
        "@type": "Person",
        "name": "{{ $post->escritor() }}"
    }
    }
    </script> --}}

@endpush
