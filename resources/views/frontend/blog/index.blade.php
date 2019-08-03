@extends(LAYOUT_FRONT.'app')

@section('title', 'Noticias | '.APP_DISPLAY)
@section('description', 'Portal de Novedades y Noticias de '.APP_DISPLAY)
@section('author', APP_DISPLAY)
@section('keywords', '')
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

		{{--  @include('frontend.blog._sidebarBlog')  --}}


        <!-- start blog grid section -->
        <section class="blogs ">
            <div class="container">
                <div class="row">
                    <!--  start blog left-->
                    <div class="col-lg-9 col-md-12 padding-30px-right xs-padding-15px-right">
                        <div class="row">
                          @foreach ($posts as $p)
                            <!-- start post -->
                            <div class="col-lg-6 col-md-12 margin-30px-bottom sm-margin-20px-bottom">
                                <div class="blog-grid">
                                    <div class="blog-grid-img position-relative"><img src="{{ $p->imagen() }}" alt="{{ $p->title }}" /></div>
                                    <div class="blog-grid-text padding-25px-all sm-padding-20px-all ">
                                        <h4><a href="{{ $p->link() }}">{{ $p->title }}</a></h4>
                                        <p>{{ $p->extract }}</p>
                                        {{-- <div class="meta border-top border-color-medium-gray padding-15px-top xs-padding-10px-top">
                                            <ul class="no-margin">
                                                <li><a href="javascript:void(0)"><i class="fas fa-calendar-alt "></i> {{ $p->published_at }}</a></li>
                                                <li><a href="javascript:void(0)"><i class="fas fa-user"></i> {{ $p->escritor() }}</a></li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- end post -->                              
                          @endforeach
                        </div>
                    </div>
                    <!--  end blog left-->
                    @include('frontend.blog._sidebarBlog')
                </div>
            </div>
        </section>
        <!-- end blog grid section -->

        </div>
      </div>



@endsection

@push('styles')
    
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

@endpush

@push('scripts')
  
@endpush