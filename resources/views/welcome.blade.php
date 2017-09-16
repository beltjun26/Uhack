<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            *{
                box-sizing: border-box;
            }

            html, body {
                background-color: #e5b024;
                color: white;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                width: 100vw;
            }

            .home-main-container{
                width: 100vw;
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
                transform: translate(-1.5%, 0);
                width: 100%;
                text-align: center;
                padding: 0 1.5em;
            }

            .title {
                font-size: 4em;
                text-align: center;
                /* font-family: Oswald; */
                /* font-weight: bold; */
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .logo{
                width: 10em;
                height: 10em;
                object-position: center;
                object-fit: cover;
            }

            .login-form{
                /* margin: auto; */
            }

            .login-form > input[type="text"],
            .login-form > input[type="password"]{
                width: 100%;
            }

            input[type="text"],
            input[type="password"]{
                border-radius: 1em;
                padding: 0.5em 1em;
                display: block;
                border: 1px solid rgba(255, 255, 255, 0.8);
                /* border: 1px solid #555; */
                margin: auto;
                font-size: 1em;
                /* font-family: "Oswald Light"; */
                font-family: Roboto;
                /* letter-spacing: 0.025em; */
                /* font-weight: bold; */
                background-color: transparent;
                color: white;
            }

            input[type="text"]::placeholder,
            input[type="password"]::placeholder{
                color: rgba(255, 255, 255, 0.8);
            }

            input[type="text"]:focus,
            input[type="password"]:focus{
                border-color: white;
                outline: none;
            }

            .login-btn{
                /* background-color: white; */
                /* color: #e5b024; */
                /* background-color: #555;
                color: white; */
                color: #555;
                border: none;
                border-radius: 3px;
                padding: 0.5em 2em;
                font-size: 1em;
                font-family: Roboto;
                /* font-family: "Oswald"; */
                /* font-weight: bold; */
                /* letter-spacing: 0.1em; */
                /* text-transform: uppercase; */
                width: 100%;
                border-radius: 1em;
                background-color: white;
            }

            form > :not(:last-child){
                margin-bottom: 0.75em;
            }

        </style>
    </head>
    <body>
        <div class="home-main-container flex-center full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <!-- <a href="{{ url('/home') }}">Home</a> -->
                    @else
                        <!-- <a href="{{ route('login') }}">Login</a> -->
                        <!-- <a href="{{ route('register') }}">Register</a> -->
                    @endauth
                </div>
            @endif

            <div class="content">
                <!-- <div class="logo"></div> -->
                <!-- <img src=""> -->
                <img class="logo" src="{{asset('uploads/logo.png')}}">
                <div class="title m-b-md">Pa'ubra</div>
                <form class="login-form" action="{{url('/home')}}">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit" class="login-btn">Login</button>
                </form>
                <!-- <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
        </div>
    </body>
</html>
