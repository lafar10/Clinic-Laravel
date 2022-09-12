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
                <form class="d-flex" role="search">

                        <a href="{{route('login')}}" class="btn btn-outline-danger">Login</a>
                        <a class="btn btn-danger" href="{{route('register')}}">Register</a>
                      </form>

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
