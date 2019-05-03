<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
     <!-- <link href="{{ asset('css/favorite.css') }}" rel="stylesheet">  -->
     <!-- <link href="{{ asset('css/web.css') }}" rel="stylesheet">  -->
    <!-- <link href="{{ asset('css/book.css') }}" rel="stylesheet"> -->
    <script type="text/javascript" src="{{ asset('../../js/app.js') }}"></script>

</head>
<body>
<nav class="navbar navbar-expand-md bg-primary navbar-light  blue circleBehind">
        <img src="{{ asset('imgs/logo.gif') }}"  alt="Smiley face" height="55" width="60">
        <ul class="navbar-nav mr-auto ">
            <li class="navbar-brand">
                <a class="nav-link" href="/webBooks" style="Color:#FFF"> Home </a>
            </li>
            <li class="navbar-brand">
                <a class="nav-link" href="/getLeased" style="Color:#FFF"> My Books </a>
            </li>
            <li class="navbar-brand">
                <a class="nav-link" href="/favorite" style="Color:#FFF"> Favourites </a>
            </li>
         
        </ul>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:#ff9514;  font-weight: bold; font-size:20px;">

                     @if (Auth::check())
                     {{ Auth::user()->name }}
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                    @endif
                    <!--  -->
                    
                     <span class="caret"></span>
                </a>

               
            </li>
        </ul>
        </div>

    </nav>
        <main class="py-4">
            <!-- <div class="container"> --> 
            @yield('content')
            <!-- </div> -->
        </main> 
    <!-- </div> -->
    <footer>
        <span>Maktabty(C) All rights Reserved</span>
        </footer>
    </body>
</html>