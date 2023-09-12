<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite('resources/css/app.css')
</head>

<body class="hold-transition {{ (Route::is('register') ? 'register-page' : 'login-page') }}">
    <div class="{{ (Route::is('register') ? 'register-box' : 'login-box') }}">
        <div class="{{ (Route::is('register') ? 'register-logo' : 'login-logo') }}">
            <a href="{{ route('/') }}"><b>Admin</b>LTE</a>
        </div>

        @yield('content')
    </div>

    @vite('resources/js/app.js')
</body>

</html>
