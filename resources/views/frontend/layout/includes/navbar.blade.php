    <!-- NAVBAR -->
    <!--===============================================================-->
    <div id="header">
      <nav id="nav" class="{{ (request()->routeIs('home')) ? 'navbar navbar-inverse navbar-fixed-top navbar-transparent' : 'navbar navbar-default navbar-static-top' }}">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><img class="img-responsive" src="{{ asset((request()->routeIs('home')) ? LOGO_ALTERNATIVO : LOGO) }}" alt="Logo {{ APP_DISPLAY }}"></a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="{{ route('home') }}" class="" data-toggle="" aria-expanded="false">@lang('home.home')</a>
              </li>
              <li class="">
                <a href="{{ route('nosotros') }}" class="" data-toggle="" aria-expanded="false">@lang('home.about_us')</a>
              </li>
              @if (Config::PostExist())
              <li class="">
                <a href="{{ route('blog.index') }}" class="" data-toggle="" aria-expanded="false">@lang('home.blog')</a>
              </li>                  
              @endif
              @if (Config::ProjectsExist())
              <li class="">
                <a href="{{ route('projects.index') }}" class="" data-toggle="" aria-expanded="false">@lang('home.projects')</a>
              </li>                  
              @endif
              <li class="li-mega-menu dropdown">
                 {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">¿Que Hacemos?</a>  --}}
                <div class="wrapper-mega-menu v2 stop-prop" role="menu">
                  <div class="mega-menu">
                    <div class="container">
                      <div class="wrapper-row">
                        <div class="row">
                          <div class="col-sm-4 col-md-3">
                            <h3 class="title-sm hr-full">¿Por que elegirnos?</h3>
                            <ul class="list-unstyled list-lg">
                              <li><i class="fa fa-check"></i>Cumplimos con los tiempos</li>
                              <li><i class="fa fa-check"></i>Soporte 7/24</li>
                              <li><i class="fa fa-check"></i>Experiencia</li>
                              <li><i class="fa fa-check"></i>Trabajo en equipo</li>
                              <li><i class="fa fa-check"></i>Comunicación constante</li>
                            </ul>
                          </div>
                          <div class="col-sm-2 col-md-3">
                            <h3 class="title-sm hr-full"><span class="hidden-sm">Blog</span> Ultimos Posteos</h3>
                            <div class="post-xs-side">
                              <img class="img-responsive" src="/z-theme/assets/images/placeholder/80x80.gif" alt="theme-img">
                              <a href="#" class="category">MUSIC</a>
                              <p class="title hidden-sm">Lorem ipsum dolor amet</p>
                              <p class="meta hidden-md hidden-sm">January 1, 2014</p>
                            </div>
                            <div class="post-xs-side">
                              <img class="img-responsive img-thumb" src="/z-theme/assets/images/placeholder/80x80.gif" alt="theme-img">
                              <a href="#" class="category">VIDEO</a>
                              <p class="title hidden-sm">Lorem ipsum dolor amet</p>
                              <p class="meta hidden-md hidden-sm">January 1, 2014</p>
                            </div>
                          </div>
                          <div class="col-sm-4 col-md-3">
                            <h3 class="title-sm hr-full">Clientes</h3>
                            <!-- SLIDER -->
                            <div class="wrapper-slider text-theme">
                              <div id="slider-mega-menu" class="carousel slide" data-ride="carousel" data-interval="false">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                  <div class="item active">
                                    <img class="img-slide" src="/z-theme/assets/images/portfolio/800x600.gif" alt="theme-img">
                                  </div>
                                  <div class="item">
                                    <img class="img-slide" src="/z-theme/assets/images/portfolio/800x600.gif" alt="theme-img">
                                  </div>
                                  <div class="item">
                                    <img class="img-slide" src="/z-theme/assets/images/portfolio/800x600.gif" alt="theme-img">
                                  </div>
                                  <div class="item">
                                    <img class="img-slide" src="/z-theme/assets/images/portfolio/800x600.gif" alt="theme-img">
                                  </div>
                                </div>
                                <!-- Controls -->
                                <a href="#slider-mega-menu" role="button" data-slide="prev">
                                  <i class="fa fa-angle-left fa-2x btn-prev"></i>
                                </a>
                                <a href="#slider-mega-menu" role="button" data-slide="next">
                                  <i class="fa fa-angle-right fa-2x btn-next"></i>
                                </a>
                              </div>
                            </div>
                            <!-- SLIDER END-->
                            <p class="text-theme">Trabajamos en equipo junto a nuestros clientes, somos parte del desarrollo desde la idea hasta la implementación.</p>
                            <a href="{{ route('contacto') }}" class="text-theme btn btn-md btn-primary">Contanos tu idea</a>
                          </div>

                          <div class="col-sm-2 col-md-3">
                            <h3 class="title-sm hr-full">Ultimos trabajos</h3>
                              <div class="row">
                                <div class="col-sm-12 col-md-6">
                                  <a href="#" class="img-wrapper rounded">
                                    <img class="img-responsive" src="/z-theme/assets/images/portfolio/800x600.gif" alt="theme-img">
                                  </a>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                  <a href="#" class="img-wrapper rounded">
                                    <img class="img-responsive" src="/z-theme/assets/images/portfolio/800x600.gif" alt="theme-img">
                                  </a>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12 col-md-6">
                                  <a href="#" class="img-wrapper rounded">
                                    <img class="img-responsive" src="/z-theme/assets/images/portfolio/800x600.gif" alt="theme-img">
                                  </a>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                  <a href="#" class="img-wrapper rounded">
                                    <img class="img-responsive" src="/z-theme/assets/images/portfolio/800x600.gif" alt="theme-img">
                                  </a>
                                </div>
                              </div>
                              <div class="row hidden-sm">
                                <div class="col-sm-12 col-md-6">
                                  <a href="#" class="img-wrapper rounded">
                                    <img class="img-responsive" src="/z-theme/assets/images/portfolio/800x600.gif" alt="theme-img">
                                  </a>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                  <a href="#" class="img-wrapper rounded">
                                    <img class="img-responsive" src="/z-theme/assets/images/portfolio/800x600.gif" alt="theme-img">
                                  </a>
                                </div>
                              </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li class="">
                <a href="{{ route('contacto') }}" class="" data-toggle="" aria-expanded="false">@lang('home.contact')</a>
              </li>
              <li class="dropdown">
                  <a href="#" class="" data-toggle="" aria-expanded="false">@lang('home.lenguage') (@lang('home.lang_'.app()->getLocale()))</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item">
                      <a href="{{route('locale', 'es')}}">@lang('home.lang_es')(Spanish)</a>
                    </li>
                    <li class="dropdown-item">
                      <a href="{{route('locale', 'en')}}">@lang('home.lang_en')(English)</a>
                    </li>
                  </ul>
              </li>
              {{--  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog</a>
                <ul class="dropdown-menu dropdown-menu-left" role="menu">
                  <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                  <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                  <li><a href="blog-bg-intro.html">Blog Background Intro</a></li>
                  <li><a href="timeline-center.html">Blog Timeline</a></li>
                  <li><a href="blog-post-option-1.html">Blog Post</a></li>
                  <li><a href="blog-post-option-2.html">Blog Post Bg Intro</a></li>
                </ul>
              </li>  --}}

              {{--  <li class="li-search">
                <form class="nav-search">
                  <label for="focus-input"><i class="fa fa-search"></i></label>
                  <input id="focus-input" class="container" type="search" name="s" placeholder="To Search, Type and Hit Enter">
                </form>
              </li>  --}}

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
    </div>
    <!-- NAVBAR END -->
