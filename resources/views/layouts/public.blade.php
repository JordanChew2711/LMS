<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AllCourseCentral') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css'])

    <!-- Add additional stylesheets here or use inline styles if needed -->
</head>
<body class="antialiased">
    <div id="app">
        <!-- Public navigation - you can use include if you have a separate blade file for navigation -->
        @include('components.public-navigation')

        <!-- Main content where you yield to the content of different pages -->
        <main>
            @yield('content')
        </main>

        <!-- Footer - you can also use include here -->
        @include('components.footer')

        <!-- Add your scripts here -->
        @vite(['resources/js/app.js'])
    </div>
</body>
</html>
