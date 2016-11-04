<!DOCTYPE html>
<html>
  <head>
    <title>Jardin des essences</title>
    <link rel="stylesheet" href="{{ elixir('css/unsemantic.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <script src="{{ elixir('js/jquery.min.js') }}"></script>
    <script src="{{ elixir('js/app.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta viewport="">
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Préstations</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    <div class="banner">
      <div class="opacity">
        <h1>Au jardin des essences</h1>
        <h2>Salon de massage ayurveda</h2>
      </div>
    </div>
    <div class="grid-container">
      <div class="panel grid-80 suffix-10 prefix-10"">
        <div class="panel-banner" style="background-image: url('{{ elixir('images/info.jpg') }}"')>
          <div class="opacity">
            <h1>informations</h1>
          </div>
        </div>
        <div class="panel-content">
          <h2>Qui suis-je ?</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p><p> Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur.</p><p> Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="panel grid-80 suffix-10 prefix-10"">
        <div class="panel-banner" style="background-image: url('{{ elixir('images/desc.jpg') }}"')>
          <div class="opacity">
            <h1>entreprise</h1>
          </div>
        </div>
        <div class="panel-content">
          <h2>Description de l'entreprise</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p><p> Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur.</p><p> Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </body>
</html>