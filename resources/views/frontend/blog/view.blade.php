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
       


        <!-- start blog post section -->
        <section class="blogs">
            <div class="container">
                <div class="row">

                    <!--  start blog left-->
                    <div class="col-lg-9 col-md-12 padding-30px-right xs-padding-15px-right sm-margin-30px-bottom">
                        <div class="posts">
                            <!--  start post-->
                            <div class="post">
                                <div class="post-img">
                                    <a href="javascript:void(0);" class="width-100">
                                        <img src="{{ asset($post->imagen()) }}" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="blog-list-simple-text">
                                        <div class="post-title">
                                            <h5>{{ $post->title }}</h5>
                                        </div>
                                        <ul class="meta">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i aria-hidden="true" class="fa fa-user"></i> {{ $post->escritor() }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i aria-hidden="true" class="fa fa-folder-open"></i> {{ $post->category->name }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i aria-hidden="true" class="fas fa-calendar-alt"></i> {{ $post->published_at }} 
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-cont">
                                        <p class="special">{{ $post->extract }}</p>
                                        {{ $post->body }}
                                    </div>
                                    <div class="share-post">
                                        <span>Compartir</span>
                                            <ul>
                                                <li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fab fa-youtube"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                    </div>
                                </div>
                            </div>
                            <!--  start post-->

                            <!--  start comment-->
                            <div class="comments-area">
                                <div class="title-g mb-50">
                                    <h3>Comments</h3>
                                </div>
                                <div class="comment-box">
                                    <div class="author-thumb">
                                        <img src="img/blog/01.png" alt="" class="rounded-circle width-85 xs-width-100">
                                    </div>
                                    <div class="comment-info">
                                        <h6><a href="javascript:void(0);">Alex Joyrina</a></h6>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <div class="reply">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-reply" aria-hidden="true"></i> Reply
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end comment-->

                        </div>
                    </div>
                    <!--  end blog left-->

                    <!--  start blog right-->
                    @include('frontend.blog._sidebarBlog')
                    <!--  end blog right-->

                </div>
            </div>
        </section>
        <!-- end blog post section -->



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
