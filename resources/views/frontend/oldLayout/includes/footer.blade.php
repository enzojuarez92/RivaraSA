    <!-- SECTION FOOTER -->
    <!--===============================================================-->
    <div class="section footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <div class="logo-footer text-theme">
              <img src="{{ asset(LOGO_ALTERNATIVO) }}" alt="logo {{ APP_DISPLAY }}">
            </div>
            <p class="text-theme">Empresa de Desarrollo Web, Mobile, especialistas en Laravel, .NET, VUE.js, JavaScript.</p>
            {{--  <div class="text-theme">
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook fa-round"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-round"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble fa-round"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin fa-round"></i></a></li>
              </ul>
            </div>  --}}
          </div>
          <div class="col-sm-4 col-sm-offset-1 col-xs-6">
            <h3 class="text-theme title-sm hr-left">Mapa</h3>
            <ul class="list-unstyled text-theme">
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
              <li><a href="{{ route('blog.index') }}">Blog</a></li>
              <li><a href="{{ route('contacto') }}">Contacto</a></li>
            </ul>
          </div>
          <div class="col-sm-4 col-xs-12">
            <h3 class="text-theme title-sm hr-left">Suscribite a Nuestas Novedades</h3>
            <div class="input-group text-theme">
                <form id="newsletter-footer" action="{{ route('contacto.registro') }}" method="post">
                @csrf
                <input type="email" name="email" required class="form-control input-lg" placeholder="E-mail">
                <span class="input-group-btn">
                  <button style="margin-top: 5px"
                          type="submit"
                          class="btn btn-primary input-lg btn-z-index btn-key g-recaptcha"
                          data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"
                          data-callback='onSubmitNewsLetter'>
                      <i class="fa fa-paper-plane"></i>Suscrbirme
                  </button>
                </span>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--SECTION FOOTER BOTTOM -->
    <!--===============================================================-->
    <div class="section footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center col-footer-bottom">
            <a id="scroll-top" href="#"><i class="fa fa-angle-up fa-2x"></i></a>
            <p class="copyright">2019 &copy; dvs360.com. Todos los derechos reservados</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    @push('scripts')
        <script type="text/javascript" charset="utf-8">
            function onSubmitNewsLetter(token) {
                document.getElementById("newsletter-footer").submit();
            }
            function onSubmitContacto(token) {
                document.getElementById("contacto").submit();
            }
        </script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endpush