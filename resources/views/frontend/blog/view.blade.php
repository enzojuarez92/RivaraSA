@extends(LAYOUT_FRONT.'app')

@section('title', $post->title.' | '.APP_DISPLAY)
@section('description', $post->extract)
@section('author', $post->escritor())
@section('keywords', $post->tags->implode('name',', '))
@section('image', $post->imagenRedes())

@section('breadcrumb')
            @include('frontend.layout.includes.breadcrumb', [
                'title' => 'Blog', 
                'subtitle' => 'Blog Noticias',
                'links' => array(
                    ['icon' => 'icon-copy', 'name' => 'Inicio', 'url' => route('home')],
                    ['icon' => 'icon-add', 'name' => 'Blog', 'url' => route('blog.index')],
                    ['icon' => 'icon-add', 'name' => $post->title, 'url' => ''],
                )
            ])
@endsection

@section('content')

    <!-- GRIDS -->
    <!--===============================================================-->
    <div class="container">
      <div class="row">
        <!-- GRID POSTS -->
        <!--===============================================================-->
        <div class="col-sm-8 grid-posts">
          <!-- POST ITEM 1 -->
          <div class="row">
            <div class="col-sm-12">
              <div class="wrapper-post">
                <a href="{{ $post->link() }}" class="text-theme display-block">
                  <img src="{{ asset($post->imagen()) }}" class="img-responsive full-width" alt="{{ $post->url }}">
                </a>
                <div class="wrapper-post-text">
                  <h2 class="title-lg text-uppercase text-theme"><a href="{{ $post->link() }}">{{ $post->title }}</a></h2>
                  <ul class="list-unstyled list-inline text-theme post-date-author">
                    <li>
                      <a href="#"><i class="fa fa-comment-o"></i>{{ $post->escritor() }}</a>
                    </li>
                    <li>
                      <a class="link-colored" href="#"><i class="fa fa-tag"></i>{{ $post->category->name }}</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-calendar"></i>{{ $post->created_at }}</a>
                    </li>
                  </ul>
                  <p>
                    {{ $post->extract }}
                  </p>
                  <p>
                    {!! $post->body !!}
                  </p>
                  @include('frontend.blog._carrousel')
                </div>
              </div>
            </div>
          </div>

        {{-- @include('frontend.blog._comments') --}}
        

        </div>
        <!-- GRID POSTS END -->
        <!--===============================================================-->
        @include('frontend.blog._sidebarBlog')

      </div>
    </div>




@endsection

@push('styles')
    
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

@endpush

@push('scripts')
    {{-- datos estructurados --}}
    <script type="application/ld+json">
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
    </script>

@endpush
