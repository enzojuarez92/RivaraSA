@extends(LAYOUT_FRONT.'app')

@section('title', 'Noticias | '.APP_DISPLAY)
@section('description', 'Portal de Novedades y Noticias de DVS360.')
@section('author', APP_DISPLAY)
@section('keywords', 'desarrollo web, desarrollo mobile, laravel, .net')
@section('image', LOGO_REDES)

@section('breadcrumb')
            @include('frontend.layout.includes.breadcrumb', [
                'title' => 'Blog', 
                'subtitle' => 'Blog Noticias',
                'links' => array(
                    ['icon' => 'icon-copy', 'name' => 'Inicio', 'url' => route('home')],
                    ['icon' => 'icon-add', 'name' => 'Blog', 'url' => route('blog.index')],
                )
            ])
@endsection

@section('content')

    <!-- GRIDS -->
    <!--===============================================================-->
    <div class="container">
      <div class="row">

		@include('frontend.blog._sidebarBlog')

        <!-- GRID POSTS -->
        <!--===============================================================-->
        <div class="col-sm-8 grid-posts">
          <!-- POST -->
          @foreach ($posts as $p)
          <div class="row">
            <div class="col-sm-12">
              <div class="wrapper-post">
                <a href="{{ $p->link() }}" class="text-theme display-block">
                  <img src="{{ asset($p->imagen()) }}" class="img-responsive full-width" alt="img-theme">
                </a>
                <div class="wrapper-post-text">
                  <h3 class="title-lg text-uppercase text-theme"><a href="{{ $p->link() }}">{{ $p->title }}</a></h3>
                  <ul class="list-unstyled list-inline text-theme post-date-author">
                    <li>
                      <a href="#"><i class="fa fa-comment-o"></i>{{ $p->escritor() }}</a>
                    </li>
                    <li>
                      <a class="link-colored" href="{{ $p->category->link() }}"><i class="fa fa-tag"></i>{{ $p->category->name }}</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-calendar"></i>{{ $p->created_at }}</a>
                    </li>
                  </ul>
                  <p>
                    {{ $p->extract }}
                  </p>
                  <a href="{{ $p->link() }}" class="text-theme btn btn-primary btn-md">Ver Más</a>
                </div>
              </div>
            </div>
          </div>              
          @endforeach

          {{-- {{ $posts->links() }} --}}
          
        </div>
        <!-- GRID POSTS END -->
        <!--===============================================================-->
      </div>
    </div>

@endsection

@push('styles')
    
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

@endpush

@push('scripts')
  
@endpush