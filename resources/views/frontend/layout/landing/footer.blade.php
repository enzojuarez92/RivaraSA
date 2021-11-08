        <!-- start footer section -->
        <footer class="no-padding-top">

            <div class="footer-top-bar margin-50px-bottom xs-margin-30px-bottom">
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 sm-margin-30px-bottom">

                        <img style="max-width:70%" alt="footer-logo" src="{{ asset(LOGO_ALTERNATIVO) }}">
                        <p class="margin-25px-top margin-20px-bottom"></p>
                        <ul class="footer-list">
                            <li>
                                <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-map-marker-alt text-theme-color"></i></span>
                                <span style="color:white;" class="d-inline-block width-85 vertical-align-top padding-10px-left">{{ Config::get('direccion') ?? 'Sin datos' }}</span>
                            </li>
                            <li>
                                <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-mobile-alt text-theme-color"></i></span>
                                <span style="color:white;" class="d-inline-block width-85 vertical-align-top padding-10px-left">{{ Config::get('telefono') ?? 'Sin datos' }}</span>
                            </li>
                            <li>
                                <span class="d-inline-block vertical-align-top font-size18"><i class="far fa-envelope text-theme-color"></i></span>
                                <span style="color:white;" class="d-inline-block width-85 vertical-align-top padding-10px-left">{{ Config::get('correo') ?? 'Sin datos' }}</span>
                            </li>
                        </ul>

                    </div>

                    {{-- <div class="col-lg-4 col-md-6 sm-margin-30px-bottom">
                        <h3 class="footer-title-style3">Sitio</h3>
                        <div class="row">
                            <div class="col-md-6 no-padding-right xs-padding-15px-right">
                                <ul class="footer-list xs-margin-5px-bottom">
                                    <li><a style="color:white;" href="{{ route('home') }}">@lang('home.home')</a></li>
                                    <li><a style="color:white;" href="{{ route('servicios', 'granos') }}">@lang('home.granos')</a></li>
                                    @if (Session::get('locale') == 'es')
                                    <li><a style="color:white;" href="{{ route('servicios', 'insumos') }}">@lang('home.insumos')</a></li>
                                    @endif
                                    <li><a style="color:white;" href="{{ route('servicios', 'alimentos') }}">@lang('home.alimentos')</a></li>
                                    <li><a style="color:white;" href="{{ route('blog.index') }}">Blog</a></li>
                                    <li><a style="color:white;" href="{{ route('contacto') }}">@lang('home.contact')</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
 --}}
                    <div class="col-lg-4 col-md-6 sm-margin-30px-bottom">
                        <h3 class="footer-title-style3">@lang('home.blog-follow')</h3>
                        <div class="row">
                            <div class="col-md-6 no-padding-right xs-padding-15px-right">
                                <ul class="footer-list xs-margin-5px-bottom">
                                    <li><a style="color:white;" target="_blank" href="{{FACEBOOK}}"> Facebook</a></li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <h3 class="footer-title-style3">@lang('home.login')</h3>
                        <div class="row">
                            <div class="col-md-6 no-padding-right xs-padding-15px-right">
                                <ul class="footer-list xs-margin-5px-bottom">
                                    <li><a style="color:white;" target="_blank" href="https://clientes.rivara.com.ar/"> @lang('home.login_link')</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="footer-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left xs-text-center xs-margin-5px-bottom">
                            {{--  <div class="footer-social-icons small">
                                <ul>
                                    @if (FACEBOOK != '')
                                        <li><a target="_blank" href="{{FACEBOOK}}"><i class="fab fa-facebook-f"></i></a></li>
                                    @endif
                                    @if (TWITTER != '')
                                        <li><a target="_blank" href="{{TWITTER}}"><i class="fab fa-twitter"></i></a></li>
                                    @endif
                                    @if (INSTAGRAM != '')
                                        <li><a target="_blank" href="{{INSTAGRAM}}"><i class="fab fa-instagram"></i></a></li>
                                    @endif
                                    @if (YOUTUBE != '')
                                        <li><a target="_blank" href="{{YOUTUBE}}"><i class="fab fa-youtube"></i></a></li>
                                    @endif
                                    @if (LINKEDIN != '')
                                        <li><a target="_blank" href="{{LINKEDIN}}"><i class="fab fa-linkedin-in"></i></a></li>
                                    @endif
                                </ul>
                            </div>  --}}
                        </div>
                        <div class="col-md-6 text-right xs-text-center">
                            <p class="xs-margin-5px-top xs-font-size13">&copy; 2019 Powered by <a target="_blank" href="http://rominacico.com.ar">rominacico.com</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- end footer section -->
