<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- Styles -->
        @stack('css')
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <ul class="username-and-logout">
                            <li>
                                @if( Auth::user()->user_type==0)
                                    <a class="mr-4" href="{{ route('dashboard') }}">
                                        {{ Auth::user()->name }}--Admin
                                    </a>
                                @endif

                                @if( Auth::user()->user_type==1)
                                    <a class="mr-4" href="#">
                                        {{ Auth::user()->name }}--Doctor
                                    </a>
                                @endif

                                @if( Auth::user()->user_type==2)
                                    <a class="mr-4" href="#">
                                        {{ Auth::user()->name }}--Patient
                                    </a>
                                @endif
                            </li>

                            <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>  
                            </li>
                        <ul>            
                         
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <!-- Top Menu bar Navigation -->
            <nav class="top-bar" data-topbar role="navigation">
            <ul class="title-area">
                <li class="name">
                <h1><a href="">Mehmet Medicare</a></h1>
                </li>
            </ul>
            </nav>

            <!-- Hero Unit -->
          
        </div> 

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>
