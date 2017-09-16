<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Paubra</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navigation.css') }}" rel="stylesheet">
    @stack('styles')

</head>
<body>
    <div id="navigation">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">Paubra</a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{url('/profile/employer')}}"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Profile</a></li>
                        <!-- <li><a href="{{url('/profile/worker')}}"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Profile</a></li> -->
                        <li><a href="{{url('/notifications')}}"><span class="glyphicon glyphicon-bell"></span>&nbsp;&nbsp;Notifications</a></li>
                        <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;Logout</a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>

    @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
