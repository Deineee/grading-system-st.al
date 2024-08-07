<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('st.al-logo.ico') }}">
</head>
<body>
    <div class="content">
        <h1 class="text-3xl font-semibold mb-4">{{ config('app.name', 'Grading-System') }}</h1>
        <div class="flex justify-center">
            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="btn btn-blue">Login</a>
            @endif

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-blue">Register</a>
            @endif
        </div>
    </div>
</body>
</html>
