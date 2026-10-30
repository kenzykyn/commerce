<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'TVC Trading | Trading Platform')</title>

    <meta name="theme-color" content="#faf9f6">
    <meta name="description" content="@yield('description', 'Explore the markets and discover your trading journey with TVC Trading.')">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js',])
</head>

<body class="home-page">
    @include('partials.home-navbar')

    {{-- Main content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="home-footer">
        <p>&copy; {{ date('Y') }} TVC Trading. All rights reserved.</p>
    </footer>
</body>
</html>