<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <title>Profile</title>
</head>
<body>
    <x-app-layout>
        <div class="flex h-screen overflow-hidden">
            <!-- Sidebar -->
            <aside id="sidebar">
                @include('sidebar.sidebar')
            </aside>
            <!-- Main Content -->
            <div class="main-content-inner-profile">
                <div class="form-container-profile">
                    @include('profile.partials.update-profile-information-form')
                </div>

                <div class="form-container-profile mt-4">
                    @include('profile.partials.update-password-form')
                </div>

                <div class="form-container-profile mt-4">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>
