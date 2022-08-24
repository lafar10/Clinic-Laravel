<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="../../public/assets/img/apple-icon.png">

    <title>@yield('title')</title>

    <!--     Fonts and icons     -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/now-ui-dashboard.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" />

</head>
<body style="background-color:white;">

    <div  class="wrapper">
        <div class="sidebar" data-color="red">
            <div class="logo">
              <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                <i class="now-ui-icons education_atom"></i>
              </a>
              <a href="{{route('dashboard')}}" class="simple-text logo-normal">
                Clinic Chifaa
              </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
              <ul class="nav">
                <li class="{{Request::is('Dashboard') || Request::is('/') ? 'active':''}}">
                  <a href="{{route('dashboard')}}">
                    <i class="now-ui-icons design_app"></i>
                    <p>Dashboard</p>
                  </a>
                </li>
                <li class="{{Request::is('Appointments') ? 'active':''}}">
                  <a href="{{route('appointments')}}">
                    <i class="now-ui-icons ui-1_calendar-60"></i>
                    <p>Appointments</p>
                  </a>
                </li>
                <li class="{{Request::is('Reports') ? 'active':''}}">
                    <a href="{{route('reports')}}">
                      <i class="now-ui-icons files_paper"></i>
                      <p>Reports</p>
                    </a>
                  </li>
                <li class="{{Request::is('Doctors') ? 'active':''}}">
                  <a href="{{route('doctors')}}">
                    <i class="now-ui-icons business_badge"></i>
                    <p>Doctors</p>
                  </a>
                </li>
                <li class="{{Request::is('Patients') ? 'active':''}}">
                  <a href="{{route('patients')}}">
                    <i class="now-ui-icons media-2_sound-wave"></i>
                    <p>Patients</p>
                  </a>
                </li>
                @if(auth()->check() && auth()->user()->role_as == '2')
                <li class="{{Request::is('Users') ? 'active':''}}">
                  <a href="{{route('users')}}">
                    <i class="now-ui-icons users_single-02"></i>
                    <p>Users </p>
                  </a>
                </li>
                @endif
                <li class="{{Request::is('Payments') ? 'active':''}}">
                  <a href="{{route('payments')}}">
                    <i class="now-ui-icons business_money-coins"></i>
                    <p>Payments</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="main-panel" id="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-sm navbar-dark  bg-dark  navbar-absolute">
                    <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        @if(Request::is('Dashboard'))
                            <a class="navbar-brand" href="{{route('dashboard')}}">Dashboard</a>
                        @elseif(Request::is('Appointments') || Request::is('Search-Appointment'))
                            <a class="navbar-brand" href="{{route('appointments')}}">Appointments</a>
                        @elseif(Request::is('Users') || Request::is('Search-User'))
                            <a class="navbar-brand" href="{{route('users')}}">Users</a>
                        @elseif (Request::is('Doctors') || Request::is('Search-Doctor'))
                            <a class="navbar-brand" href="{{route('doctors')}}">Doctors</a>
                        @elseif(Request::is('Patients') || Request::is('Search-Patient'))
                            <a class="navbar-brand" href="{{route('patients')}}">Patients</a>
                        @elseif(Request::is('Payments') || Request::is('Search-Payment'))
                            <a class="navbar-brand" href="{{route('payments')}}">Payements</a>
                        @elseif(Request::is('Reports') || Request::is('Search-Report'))
                        <a class="navbar-brand" href="{{route('reports')}}">Reports</a>
                        @endif
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                         @if(Request::is('Patients') || Request::is('Search-Patient'))
                            <form action="{{route('search.patients')}}" method="get">
                                @csrf
                                @include('pages.Search')
                            </form>
                         @elseif(Request::is('Users') || Request::is('Search-User'))
                            <form action="{{route('search.user')}}" method="get">
                                @csrf
                                @include('pages.Search')
                            </form>
                        @elseif(Request::is('Doctors') || Request::is('Search-Doctor'))
                            <form action="{{route('search.doctor')}}" method="get">
                                @csrf
                                @include('pages.Search')
                            </form>
                        @elseif(Request::is('Appointments') || Request::is('Search-Appointment'))
                            <form action="{{route('search.appointments')}}" method="get">
                                @csrf
                                @include('pages.Search')
                            </form>
                         @elseif(Request::is('Payments') || Request::is('Search-Payment'))
                            <form action="{{route('search.payments')}}" method="get">
                                @csrf
                                @include('pages.Search')
                            </form>
                         @elseif(Request::is('Reports') || Request::is('Search-Report'))
                            <form action="{{route('search.reports')}}" method="get">
                                @csrf
                                @include('pages.Search')
                            </form>
                        @elseif(Request::is('Dashboard'))

                        @endif


                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons users_single-02"></i> {{auth()->user()->name}}
                                <p>
                                    <span class="d-lg-none d-md-block"></span>
                                </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button class="dropdown-item" type="submit"><i class="now-ui-icons arrows-1_minimal-right"></i> LogOut</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    </div>
                </nav>
                <br>
                <br>
                <br>
                <br>
                <!-- End Navbar -->
                    <main class="py-4">
                        @yield('content')
                    </main>

            <footer class="footer bottom" style="position:">
                <br>
                <br>
                <div class=" container-fluid ">
                    <div class="copyright" id="copyright">
                    &copy; <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Lafar Ayoub</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Lafar Ayoub</a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>



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
    @include('sweetalert::alert')
</body>
</html>
