<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Vintage') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
    .navbar {
		-webkit-box-shadow: 0 8px 6px -6px #999;
		-moz-box-shadow: 0 8px 6px -6px #999;
		box-shadow: 0 8px 6px -6px #999;
    }

    .sidenav {
        font-family: "Courier New", Courier, monospace;
        width: 130px;
        position: fixed;
        z-index: 1;
        overflow-x: hidden;
        padding: 8px 0;
    }

    .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #000F00;
        display: block;
    }

    .sidenav a:hover {
        color: #064579;
    }
    
    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
    }    

    th{
      color: #808080;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 200px;
    }

    li a {
      display: block;
      color: #124;
      padding: 8px 16px;
      text-decoration: none;
    }

    /* Change the link color on hover */
    li a:hover {
      background-color: #555;
      color: white;
    }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="images/vintage.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

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
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row" style="padding-top:30px;">
                    <div class="col-2">
                        {{--
                        <ul class="nav nav-pills flex-column sidenav">
                            <h4 style="text-align:center">MENU</h4>
                            <li class="nav-item">
                            <a class="nav-link" href="#">PRODUCTS</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">ORDERS</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">CUSTOMERS</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">ANALITYCS</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">DISCOUNTS</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">APPS</a>
                            </li>
                        </ul>
                        --}} 

                        <div class="sidenav flex-column">
                            <a href="#">About</a>
                            <a href="#">Services</a>
                            <a href="#">Clients</a>
                            <a href="#">Contact</a>
                        </div>    
                    </div>

                    <div class="col-10">
                        @yield('editable_content')
                    </div>
                </div>
            
                

        </main>
    </div>

    {{-- Added by Christian --}}
    <footer class="footer font-medium pt-2">
        <div class="footer-copyright text-center py-3">© 2018 Vintage - All rights reserved</div>
    </footer>
</body>
</html>
