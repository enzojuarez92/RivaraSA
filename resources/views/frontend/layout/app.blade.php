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
  @include('frontend.layout.includes.styles')
  @stack('styles')
</head>

<body>
	{!! ADMIN_TAGMANAGER_NOSCRIPT !!}
  <div class="wrapper-body">

  @include('frontend.layout.includes.navbar')

    @yield('breadcrumb')

    @yield('content')



  @include('frontend.layout.includes.footer')

  @include('frontend.layout.includes.scripts')
  @stack('scripts')
</body>

</html>
