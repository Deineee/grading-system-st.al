<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body>
    <x-app-layout>
        <div id="nav">
            @include('layouts.navigation')
        </div>
        <div class="wrapper">
            <div id="sidebar">
                @include('sidebar.sidebar')
            </div>
            <div class="main-content">
                <p>This is the dashboard</p>
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                @component('components.application-logo')
                @endcomponent
            </div>
        </div>
    </x-app-layout>
</body>
</html>
