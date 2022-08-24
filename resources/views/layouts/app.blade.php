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

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/now-ui-dashboard.css') }}" rel="stylesheet" />
</head>
<body style="background:linear-gradient(45deg,rgb(250, 37, 37) 0 50%,rgb(255, 238, 238) 50% 100%)">
    <div >

                    <main class="container py-5" style="margin-top:120px">
                        @yield('content')
                    </main>
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
</body>
</html>
