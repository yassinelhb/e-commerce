<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylehome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
    <div id="app">
       <!-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                   <!-- <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                   <!-- <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                       <!-- @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
        </nav>-->

           <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
               <div class="container">
                   <a class="navbar-brand" href="#">
                       <img src="{{ asset('img/logo.jpg') }}">
                       Y.S.L TECHNO
                   </a>
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                   </button>
                   <form method="get" action="/search">
                       <search-header></search-header>
                   </form>

                   <div class="navbar-nav ml-auto">
                       <div class="yl-phone">
                         <img src="{{asset('img/call.png')}}">
                           Appelez nous : +216-299-026-60
                       </div>

                   </div>
                   <!--<div class="collapse navbar-collapse" id="navbarResponsive">

                       <ul class="navbar-nav ml-auto">
                           <li class="nav-item active">
                               <a class="nav-link" href="#">Home
                                   <span class="sr-only">(current)</span>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="#">About</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="#">Services</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="#">Contact</a>
                           </li>
                       </ul>
                   </div>-->
               </div>
           </nav>

           <section class="yl_content_cat">
               @yield('yl_content_cat')
           </section>

           <section class="container">

                @yield('content')

               <chats></chats>
           </section>

    </div>
    <section class="yl_foot_sp">
        <div class="container">
            <div class="row">
                <img src="{{asset('img/ktech.jpg')}}">
                <img src="{{asset('img/ktech.jpg')}}">
                <img src="{{asset('img/ktech.jpg')}}">
                <img src="{{asset('img/ktech.jpg')}}">
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2>À PROPOS DU Y.S.L TECHNO</h2>
                    <span class="yl_hr_foot"></span>
                    <ul>
                        <li><p>7016 Rue Habib Bourguiba, El Alia, Bizerte</p></li>
                        <li><p class="yl_info_foot">y.s.ltechno@gmail.com</p></li>
                        <li><p class="yl_info_foot">+216 29 902 660</p></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h2>CATÉGORIES</h2>
                    <span class="yl_hr_foot"></span>
                    <ul>
                        <li><a href="/informatique">Informatique</a></li>
                        <li><a href="/vehicule">Véhicules</a></li>
                        <li><a href="/Immobilier">Immobilier</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h2>MAPS</h2>
                    <span class="yl_hr_foot"></span>
                    <ul>
                        <li>
                            <maps></maps>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h2>NOS RÉSEAUX SOCIAUX</h2>
                    <span class="yl_hr_foot"></span>
                    <ul>
                       <li><a href="#"><i class="fa fa-facebook-official"></i> Notre page Facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <span id="btn-scroll" onclick="hello();">
        <i class="fa fa-angle-up"></i>
    </span>
</body>
</html>
