<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KPI Dashboard') }}</title>

    <!-- Scripts -->
    <script src="/js/chart.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="/home">
                <img src="/img/ongc-logo.png" width="30" height="30" class="d-inline-block align-top mx-2" alt="">
                {{-- {{ config('app.name', 'KPI Dashboard') }}  --}}
                Vision Tracker - KPI Dashboard
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    {{-- <li class="nav-item active">
                        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                    </li> --}}
                </ul>
                @auth
                <ul class="navbar-nav">
                    {{-- <li class="nav-item dropdown active">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> 
                            <i data-feather="user"></i> 
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">
                                User Profile    
                            </a>
                        </div>
                    </li> --}}
                    <li class="nav-item active">
                    <a class="nav-link" href="/roadmap"> <i data-feather="edit"></i> </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/roadmap/create"> <i data-feather="plus-circle"></i> </a>
                    </li>
                    <li class="nav-item active">
                        <a  class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"> 
                            <i data-feather="log-out"></i> 
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
                @endauth
            </div>
        </nav>

        <main class="py-2">

            @auth
                @include('components.nav', [ "id" => isset($id) ? $id : 0 ] )   
            @endauth

            @include('components.alert')

            @yield('content')
        </main>
    </div>
</body>
</html>
