<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style>
        
        .navbar-light .navbar-nav .nav-link {
            color: rgba(0,0,0,.5);
        }

        @media (min-width: 992px){
        .navbar-toggleable-md .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem;
        }
        }
        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0;
        }
        .nav-link {
            display: block;
            padding: .5em 1em;
        }
        [role=button], a, area, button, input, label, select, summary, textarea {
            -ms-touch-action: manipulation;
            touch-action: manipulation;
        }
    </style>
</head>
<body>
    <div id="app">
        <topo titulo="{{ config('app.name', 'Laravel') }}" url="{{ url('/') }}">

            <!-- Authentication Links -->
            @guest
                <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">Registrar</a></li>
            @else
                <li class="dropdown">
                    <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <i class="fas fa-sort-down"></i>
                    </a>
    
                    <ul class="dropdown-menu" role="menu">
                      @can('usuario')
                        <li class="nav-item">
                          <a class="nav-link" href="{{route('admin')}}">Restrito</a>
                        </li>
                      @endcan
    
    
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Sair
                            </a>
    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
    
          </topo>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
