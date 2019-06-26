<!DOCTYPE html>
<html lang="en">

<head>

    {!! ADMIN_TAGMANAGER !!}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">
    <meta property="og:url"content="{{ url()->current() }}">
    <meta property="og:type"content="website">
    <meta property="og:title"content="@yield('title')">
    <meta property="og:description"content="@yield('description')">
    <meta property="og:image"content="@yield('image')">
    <link rel="canonical" href="{{ url()->current() }}" />

    @include(LAYOUT_FRONT.'.includes.styles')
    
    @stack('styles')
    
    
  </head>
  
  <body>
    
    <!-- start page loading -->
    <div id="preloader">
      <div class="row loader">
        <div class="loader-icon"></div>
      </div>
    </div>
    <!-- end page loading -->
    
    <!-- start main-wrapper section -->
    <div class="main-wrapper">
      
      @include(LAYOUT_FRONT.'.includes.navbar')
      
      @yield('breadcrumb')

      @yield('content')
      
      @include(LAYOUT_FRONT.'.includes.footer')

    </div>
    <!-- end main-wrapper section -->

    <!-- start scroll to top -->
    <a href="javascript:void(0)" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
    <!-- end scroll to top -->

    <!-- all js include start -->

    <!-- jquery -->
    <script src="/crizal/js/jquery.min.js"></script>

    <!-- modernizr js -->
    <script src="/crizal/js/modernizr.js"></script>

    <!-- bootstrap -->
    <script src="/crizal/js/bootstrap.min.js"></script>

    <!-- navigation -->
    <script src="/crizal/js/nav-menu.js"></script>

    <!-- serch -->
    <script src="search/search.js"></script>

    <!-- tab -->
    <script src="/crizal/js/easy.responsive.tabs.js"></script>
    
    <!-- owl carousel -->
    <script src="/crizal/js/owl.carousel.js"></script>

    <!-- jquery.counterup.min -->
    <script src="/crizal/js/jquery.counterup.min.js"></script>

    <!-- stellar js -->
    <script src="/crizal/js/jquery.stellar.min.js"></script>

    <!-- waypoints js -->
    <script src="/crizal/js/waypoints.min.js"></script>

    <!-- tab js -->
    <script src="/crizal/js/tabs.min.js"></script>

    <!-- countdown js -->
    <script src="/crizal/js/countdown.js"></script>

    <!-- jquery.magnific-popup js -->
    <script src="/crizal/js/jquery.magnific-popup.min.js"></script>

    <!-- isotope.pkgd.min js -->
    <script src="/crizal/js/isotope.pkgd.min.js"></script>

    <!--  chart js -->
    <script src="/crizal/js/chart.min.js"></script>

    <!-- revolution slider js files start -->
    <script src="/crizal/js/rev_slider/jquery.themepunch.tools.min.js"></script>
    <script src="/crizal/js/rev_slider/jquery.themepunch.revolution.min.js"></script>
    <script src="/crizal/js/rev_slider/extensions/revolution.extension.actions.min.js"></script>
    <script src="/crizal/js/rev_slider/extensions/revolution.extension.carousel.min.js"></script>
    <script src="/crizal/js/rev_slider/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/crizal/js/rev_slider/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/crizal/js/rev_slider/extensions/revolution.extension.migration.min.js"></script>
    <script src="/crizal/js/rev_slider/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/crizal/js/rev_slider/extensions/revolution.extension.parallax.min.js"></script>
    <script src="/crizal/js/rev_slider/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/crizal/js/rev_slider/extensions/revolution.extension.video.min.js"></script>
    <!-- revolution slider js files end -->

    <!-- map js -->
    <script src="/crizal/js/map.js"></script>

    <!-- custom scripts -->
    <script src="/crizal/js/main.js"></script>

    <!-- contact form scripts -->
    <script src="/crizal/js/mailform/jquery.form.min.js"></script>
    <script src="/crizal/js/mailform/jquery.rd-mailform.min.c.js"></script>

    <!-- all js include end -->

</body>

</html>