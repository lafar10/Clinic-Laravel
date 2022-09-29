<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/now-ui-dashboard.css') }}" rel="stylesheet" />
</head>
<body >


        <nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
            <div class="container-fluid">
              <button class="navbar-toggler border-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">//</span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('/')}}"><h5 style="font-style:italic">LR10 Clinic</h5>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#doc">Doctors</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#serv">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#about">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#cont">Contact Us</a>
                  </li>
                </ul>
                <ul class="navbar-nav">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item" >
                                <a href="{{route('login')}}" class="btn btn-outline-danger">Login</a>
                            </li>    
                        @endif
                        @if (Route::has('register'))
                           <li class="nav-item">
                                <a class="btn btn-danger" href="{{route('register')}}">Register</a>
                           </li>
                        @endif
                    @else

                        <li class="nav-item">
                              <a id="navbarDropdown" class="dropdown-toggle" style="color:orange;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                              </svg> {{ Auth::user()->name }}
                              </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                 

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color:orange;"  width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                    </svg>   Logout
                                </a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                             @csrf
                                   </form>
                                </div>
                    </li>
                @endguest
                    </ul>

                    </div>

                </div>
          </nav>
                    <main  >
                        @yield('content')
                    </main>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <!--   Core JS Files   -->
    <script src="{{asset('/assets/js/core/jquery.min.js')}}"></script>
    <script src="{{ asset('/assets/js/core/popper.min.js')}}"></script>
    <script src="{{ asset('/assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{ asset('/assets/js/plugins/chartjs.min.js')}}"></script>
    <script src="{{ asset('/assets/js/plugins/bootstrap-notify.js')}}"></script>
    <script src="{{ asset('/assets/js/now-ui-dashboard.min.js?v=1.5.0')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        });
    </script>
</body>
</html>
