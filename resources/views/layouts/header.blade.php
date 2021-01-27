<style>
        *{
            margin: 0px;
            padding: 0px;
        }
        nav.navbar{
            padding:40px;
            background: linear-gradient(-135deg,#f0fff0,#fffff0, #f0fff0);
            border-bottom:solid 3px #7fffd4;
            box-shadow: 2px 2px 4px -2px gray inset;
        }
        a.navbar-brand{
            font-size:250%;
            font-weight:bold;
            font-family: 'Montserrat', sans-serif;
        }
        li{
            margin-left:90px;
            font-size:150%;
        }
        span.headanc{
                color:#0000cd;
                font-size:130%;
                font-family: 'Sawarabi Mincho', sans-serif;
                font-weight:bolder;
            }
</style>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet"> <!--さわらび明朝-->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
<link rel = "stylesheet" type="text/css" href="{{asset('css/background.css')}}">

@yield('head')
    <header>
    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
        @yield('back')
            <div class="container">
                <a class="navbar-brand" href="toppage">
                    {{ config('app.name', 'WebSourcing') }}
                </a>
                <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <!--
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     Left Side Of Navbar 
                    <ul class="navbar-nav mr-auto">

                    </ul> 

                     Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto"> 
                        <!-- Authentication Links -->
                        @guest
                            <!--<li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else

                            <li class="nav-item DM">
                                    @yield('create_work')    
                            </li>

                            <li class="nav-item mypage">
                                @yield('mypage')
                            </li>

                            <li class="nav-item logout">
                                @yield('logout')
                            </li>

                            <li class="nav-item DM">
                                @yield('DM')
                            </li>
                        
                        <!--
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
                            </li> -->
                            @yield('nav-right')
                        @endguest
                    </ul>
                <!--</div>-->
            </div>
        </nav>
    </header>
    @yield('main')