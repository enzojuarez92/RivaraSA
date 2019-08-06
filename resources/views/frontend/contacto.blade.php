@extends(LAYOUT_FRONT.'app')

@section('title', 'Contacto | '.APP_DISPLAY)
@section('description', 'Contactanos, estamos esperando tu consulta.')
@section('author', APP_DISPLAY)
@section('keywords', '')
@section('image', LOGO_REDES)

@section('breadcrumb')
            @include('frontend.layout.includes.breadcrumb', [
                'title' => 'Contacto', 
                'subtitle' => 'Subtitulo',
                'links' => array(
                    ['icon' => 'icon-copy', 'name' => 'Inicio', 'url' => route('home')],
                    ['icon' => 'icon-add', 'name' => 'Contacto', 'url' => route('contacto')],
                )
            ])
@endsection

@section('content')


        <!-- start advice form section -->
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-12 sm-margin-30px-bottom">

                        <div class="padding-30px-right sm-no-padding-right">
                            <div class="row">
                                <div class="col-12">

                                    <div class="section-heading left half">
                                        <h4 class="font-weight-600">Nuestros Datos</h4>
                                    </div>

                                </div>

                                <div class="col-12 margin-5px-top">
                                    <div class="padding-25px-bottom sm-padding-20px-bottom border-bottom border-color-medium-gray">
                                        <span class="d-inline-block font-size26 sm-font-size22 xs-font-size20 line-height-30 text-theme-color vertical-align-top width-30px xs-width-25px"><i class="fas fa-phone vertical-align-top"></i></span>
                                        <div class="d-inline-block vertical-align-top padding-10px-left width-75">
                                            <h5 class="margin-5px-bottom text-uppercase font-size15 xs-font-size14">Teléfono</h5>
                                            <p class="no-margin line-height-normal">{{ Config::get('telefono') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="padding-25px-tb sm-padding-20px-tb border-bottom border-color-medium-gray">
                                        <span class="d-inline-block font-size26 sm-font-size22 xs-font-size20 line-height-30 text-theme-color vertical-align-top width-30px xs-width-25px"><i class="fas fa-map-marker-alt vertical-align-top"></i></span>
                                        <div class="d-inline-block vertical-align-top padding-10px-left width-75">
                                            <h5 class="margin-5px-bottom text-uppercase font-size15 xs-font-size14">Dirección</h5>
                                            <p class="no-margin line-height-normal">{{ Config::get('direccion') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="padding-25px-tb sm-padding-20px-tb">
                                        <span class="d-inline-block font-size26 sm-font-size22 xs-font-size20 line-height-30 text-theme-color vertical-align-top width-30px xs-width-25px"><i class="far fa-envelope vertical-align-top"></i></span>
                                        <div class="d-inline-block vertical-align-top padding-10px-left width-75">
                                            <h5 class="margin-5px-bottom text-uppercase font-size15 xs-font-size14">Email</h5>
                                            <p class="no-margin line-height-normal">{{ Config::get('correo') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="padding-25px-tb sm-padding-20px-tb">
                                        <span class="d-inline-block font-size26 sm-font-size22 xs-font-size20 line-height-30 text-theme-color vertical-align-top width-30px xs-width-25px"><i class="fab fa-facebook-f vertical-align-top"></i></span>
                                        <div class="d-inline-block vertical-align-top padding-10px-left width-75">
                                            <h5 class="margin-5px-bottom text-uppercase font-size15 xs-font-size14">Seguinos</h5>
                                            <a target="_blank" href="{{FACEBOOK}}">@RivaraSA</a>
                                        </div>
                                    </div>
                                </div>

                                {{--  <div class="col-12">
                                    <div class="margin-10px-top">
                                        <ul class="social-icon-style7">
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
                                    </div>
                                </div>  --}}

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="contact-form-box">
              

                    {{--  <div class="section-heading left half">
                        <h4 class="font-weight-600">Contactenos.</h4>
                    </div>  --}}

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3267.010089687986!2d-60.283448284214366!3d-35.031477487764754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bec149e591d371%3A0xc7ad7bc7ea7d9fa0!2sRivara+S.A.!5e0!3m2!1ses!2sar!4v1563225537145!5m2!1ses!2sar" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                            {{--  <form method="post" action="bat/rd-mailform.php" class="mailform off2">
                                <input type="hidden" name="form-type" value="contact">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" name="name" placeholder="Nombre:" data-constraints="@LettersOnly @NotEmpty">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone" placeholder="Teléfono:" data-constraints="@Phone">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="email" placeholder="Email:" data-constraints="@Email @NotEmpty">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="message" rows="5" placeholder="Mensaje:" data-constraints="@NotEmpty"></textarea>
                                    </div>
                                    <div class="mfControls col-md-12">
                                        <button type="submit" class="butn theme">Enviar</button>
                                    </div>
                                </div>
                            </form>  --}}
                        </div>
                    </div>

                </div>
                <hr>
                @include('frontend._sucursales')
            </div>
        </section>
        <!-- end advice form section -->

        <!-- start map section -->
        {{-- <div id="map"></div> --}}
        <!-- end map section -->



@endsection

@push('styles')
    
   <!-- map js -->
   <script src="/crizal/js/map.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZtTj2tvwsorp_DNPh3ZN_pMlSniet5h4&amp;callback=initMap" async defer></script>

@endpush