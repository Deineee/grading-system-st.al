<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
    <body>
        <x-app-layout>
            <div class="wrapper">
                <aside id="sidebar">
                    @include('sidebar.sidebar')
                </aside>
                <div class="main-content">
                    <p>This is the dashboard</p>
                </div>
            </div>
        </x-app-layout>
    </body>
</html>
