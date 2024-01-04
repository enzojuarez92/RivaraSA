            <div class="navbar-default">
                <!-- start top search -->
                <div class="top-search bg-theme">
                    <div class="container">
                        <form class="search-form" action="search.html" method="GET" accept-charset="utf-8">
                            <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search font-size18 text-white" type="submit"></button>
                                </span>
                                <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                                <span class="input-group-addon close-search"><i class="fas fa-times font-size18 line-height-10 margin-5px-top"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end top search -->
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area alt-font">
                                <nav class="navbar navbar-expand-lg navbar-light no-padding current">

                                    <div class="navbar-header navbar-header-custom">
                                        <!-- start logo -->
                                        <a href="{{ route('home') }}" class="navbar-brand"><img id="logo" src="{{ asset(LOGO) }}" alt="logo"></a>
                                        <!-- end logo -->
                                    </div>
                                    <div class="navbar-toggler"></div>
                                    <!-- menu area -->
                                    <ul class="navbar-nav ml-auto" id="nav" style="display: none;">
                                        <li>
                                            <a href="{{ route('home') }}">@lang('home.home')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('nosotros') }}">@lang('home.about_us')</a>
                                        </li>
                                        <li>
                                            <a href="#">@lang('home.granos')</a>
                                            <ul>
                                                <li><a href="{{ route('servicios.subservicios', ['servicio' => 'granos', 'subservicio' => 'acopio-logistica-comercializacion']) }}">@lang('home.granos-1')</a></li>
                                                <li><a href="{{ route('servicios.subservicios', ['servicio' => 'granos', 'subservicio' => 'arrendamientos-asociaciones']) }}">@lang('home.granos-2')</a></li>
                                            </ul>
                                        </li>                                        
                                        @if (Session::get('locale') == 'es')
                                        <li>
                                            <a href="#">@lang('home.insumos')</a>
                                            <ul>
                                                <li><a href="{{ route('servicios.subservicios', ['servicio' => 'insumos', 'subservicio' => 'agroquimicos-fertilizantes']) }}">@lang('home.insumos-1')</a></li>
                                                <li><a href="{{ route('servicios.subservicios', ['servicio' => 'insumos', 'subservicio' => 'combustibles']) }}">@lang('home.insumos-2')</a></li>
                                            </ul>
                                        </li>                                                                                        
                                        @endif
                                        <li>
                                            <a href="{{ route('servicios.alimentos') }}">@lang('home.alimentos')</a></li>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog.index') }}">@lang('home.recipes')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contacto') }}">@lang('home.contact')</a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://clientes.rivara.com.ar/">
                                                <img style="width: 25px;" src="{{ asset('/img/profile-user.svg') }}" alt="login">
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- end menu area -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

