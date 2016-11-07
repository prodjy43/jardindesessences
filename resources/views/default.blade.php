<!DOCTYPE html>
<html>
  <head>
    <title>Jardin des essences - {{ $title }}</title>
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/unsemantic.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/font-awesome.min.css') }}">
    <script src="{{ elixir('js/jquery.min.js') }}"></script>
    <script src="{{ elixir('js/app.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta viewport="">
  </head>
  <body>
    <nav>
      <ul class="big hide-on-mobile hide-on-tablet">
        <li><a href="/">Accueil</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Préstations</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
      <div class="menu-btn hide-on-desktop">
        <i class="fa fa-bars"></i>
      </div>
      <ul class="small hide-on-desktop">
        <li><a href="/">Accueil</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Préstations</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </nav>
      @yield('content')
    <footer>
      <p>Copyright &copy; aujardindesessences.ch made by Ivan&nbsp;Biedermann</p>
    </footer>
  </body>
</html>