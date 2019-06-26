@extends(LAYOUT_FRONT.'app')

@section('title', 'Noticias | '.APP_DISPLAY)
@section('description', 'Portal de Proyectos de DVS360.')
@section('author', APP_DISPLAY)
@section('keywords', 'desarrollo web, desarrollo mobile, laravel, .net')
@section('image', LOGO_REDES)

@section('breadcrumb')
            @include('frontend.layout.includes.breadcrumb', [
                'title' => 'Proyectos', 
                'subtitle' => 'Portal de Proyectos',
                'links' => array(
                    ['icon' => 'icon-copy', 'name' => 'Inicio', 'url' => route('home')],
                    ['icon' => 'icon-add', 'name' => 'Proyectos', 'url' => route('projects.index')],
                )
            ])
@endsection

@section('content')

    <!-- GRIDS -->
    <!--===============================================================-->
    <div class="container">
      <div class="row">
		    @include('frontend.projects._sidebarProject')
        <!-- GRID POSTS -->
        <!--===============================================================-->
        <div class="col-sm-8 grid-posts">
          <!-- POST -->
          @foreach ($projects as $project)
          <div class="row">
            <div class="col-sm-12">
              <div class="wrapper-post">
                <a href="{{ $project->link() }}" class="text-theme display-block">
                  <img src="{{ asset($project->imagen()) }}" class="img-responsive full-width" alt="img-theme">
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