
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TVC Trading | Secure Access</title>

    <meta name="theme-color" content="#080d18">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" >

    @vite(['resources/css/app.css', 'resources/css/auth/auth.css', 'resources/js/app.js', 'resources/js/auth.js'])
</head>

<body class="auth-body">
    <main class="auth-page">
        <div class="auth-glow auth-glow-one"></div>
        <div class="auth-glow auth-glow-two"></div>

        <div class="auth-container">
            <a href="{{ url('/') }}" class="auth-brand">
                <span class="auth-brand-mark" aria-hidden="true">T</span>
                <span class="auth-brand-name">TVC Trading</span>
                <span class="auth-brand-caption">Masuk dan lanjutkan hal hebat yang kamu mulai.</span>
            </a>

            <nav class="auth-tabs" aria-label="Authentication">
                <a href="{{ route('login') }}" class="auth-tab {{ request()->routeIs('login') ? 'active' : '' }}" @if (request()->routeIs('login')) aria-current="page" @endif >Login</a>
                <a href="{{ route('register') }}" class="auth-tab {{ request()->routeIs('register') ? 'active' : '' }}" @if (request()->routeIs('register')) aria-current="page" @endif >Register</a>
            </nav>

            <section class="auth-card">
                {{ $slot ?? '' }}
            </section>

        </div>

        <div class="auth-copyright">
            &copy; {{ date('Y') }} TVC Trading. All rights reserved.
        </div>
    </main>
</body>
</html>