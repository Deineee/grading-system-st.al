<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Grading-System') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset('image/background.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 100vh; /* Ensure full viewport height */
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Align items to the top of the flex container */
            font-family: 'Nunito', sans-serif; /* Change font to default Laravel font */
        }

        .content {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Slightly transparent white background */
            border-radius: 8px;
            text-align: center;
            margin-top: 10vh; /* Margin from the top of the viewport */
        }

        /* Style for buttons */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            text-decoration: none; 
            margin: 10px; 
        }

        .btn-blue {
            background-color: #3490dc;
            color: #fff;
        }

        .btn-blue:hover {
            background-color: #2779bd;
        }
    </style>

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
