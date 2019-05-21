<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Not So Dropbox')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ asset('/js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

  </head>
  <body>
  <div id="app">
      <nav class="navbar navbar-expand-md {{ Auth::check()?'navbar-dark bg-dark':'navbar-light' }} navbar-laravel">
        <a class="navbar-brand" href="/">Not So Dropbox</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{route('files.index') }}">Listado de Archivos</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link" href="{{ route('files.create') }}">Subir Archivo</a>
              </li>
              @endauth
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>     
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"> {{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item">
                    <a class="nav-link" href="route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                </li>
                @endguest
            </ul>
          </div>
          </nav>
          <div class="container">
            <main class="py-4">
                @yield('content')
            </main>
        </div>

    </div>
</body>
</html>