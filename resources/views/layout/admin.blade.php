<!DOCTYPE html>
<html>
<head>
  <title>News site</title>
  {{-- Bootstrap --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-3/css/bootstrap.min.css') }}" />
  {{-- Main Css --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />
  {{-- Jquery Script --}}
  <script type="text/javascript" src="{{ asset('lib/jquery-3.3.1.min.js') }}"></script>
  {{-- Bootstrap 3 Script --}}
  <script type="text/javascript" src="{{ asset('lib/bootstrap-3/js/bootstrap.min.js') }}"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/admin') }}">Admin - News site</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('admin') }}">Dashboard</a></li>
        <li><a href="{{ url('/') }}" target="_blank">Frontend</a></li>
        <li><a href="{{ url('/admin/signout') }}">Signout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </header>

  @yield('content')

<footer class="container margin-top20">
  {{-- <p class="text-center">All Right Reserved. Copyright 2019</p> --}}
</footer>
</body>
</html>