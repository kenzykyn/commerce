
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TVC Trading | Trading Platform</title>

    <meta name="theme-color" content="#faf9f6">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap"
        rel="stylesheet"
    >

    @vite(['resources/css/home.css'])
</head>
<body class="home-page">

    <div class="home-container">

        <header class="home-navbar">
            <a href="{{ url('/') }}" class="home-brand">
                <span class="home-brand-mark">T</span>

                <span class="home-brand-copy">
                    <span class="home-brand-name">TVC Trading</span>
                    <span class="home-brand-caption">TRADING PLATFORM</span>
                </span>
            </a>

            <nav class="home-nav-actions" aria-label="Main navigation">
                <a href="{{ route('login') }}" class="home-nav-link">
                    Login
                </a>

                <a href="{{ route('register') }}"
                   class="home-nav-link home-nav-link-primary">
                    Get Started
                </a>
            </nav>
        </header>

        <main>
            <section class="home-hero">

                <div class="home-hero-content">
                    <div class="home-eyebrow">
                        <span class="home-eyebrow-dot"></span>
                        Your Trading Journey Starts Here
                    </div>

                    <h1 class="home-title">
                        Trade with<br>
                        <span>Confidence.</span>
                    </h1>

                    <p class="home-description">
                        Welcome to TVC Trading. Discover a modern trading
                        platform designed to give you a clear, focused,
                        and seamless trading experience.
                    </p>

                    <div class="home-hero-actions">
                        <a href="{{ route('register') }}" class="home-button">
                            Create Account
                        </a>

                        <a href="{{ route('login') }}"
                           class="home-button home-button-outline">
                            Sign In
                        </a>
                    </div>
                </div>

                <div class="home-preview">
                    <div class="home-preview-header">
                        <div>
                            <div class="home-preview-label">
                                PLATFORM OVERVIEW
                            </div>
                            <div class="home-preview-title">
                                Trading Dashboard
                            </div>
                        </div>

                        <span class="home-preview-status">
                            Preview
                        </span>
                    </div>

                    <div class="home-chart" aria-label="Decorative chart preview">
                        <svg viewBox="0 0 400 180"
                             xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             aria-hidden="true">
                            <defs>
                                <linearGradient id="chartFill"
                                                x1="200"
                                                y1="20"
                                                x2="200"
                                                y2="180"
                                                gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#3b82f6"
                                          stop-opacity=".22"/>
                                    <stop offset="1"
                                          stop-color="#3b82f6"
                                          stop-opacity="0"/>
                                </linearGradient>
                            </defs>

                            <path d="M0 130 L35 118 L65 132 L100 92
                                     L132 108 L166 72 L195 88 L228 50
                                     L260 68 L295 38 L330 54 L365 24
                                     L400 34 L400 180 L0 180 Z"
                                  fill="url(#chartFill)"/>

                            <path d="M0 130 L35 118 L65 132 L100 92
                                     L132 108 L166 72 L195 88 L228 50
                                     L260 68 L295 38 L330 54 L365 24
                                     L400 34"
                                  stroke="#2563eb"
                                  stroke-width="3"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"/>

                            <circle cx="365" cy="24" r="5"
                                    fill="#2563eb"/>
                            <circle cx="365" cy="24" r="9"
                                    stroke="#2563eb"
                                    stroke-opacity=".2"
                                    stroke-width="3"/>
                        </svg>
                    </div>

                    <p class="home-preview-note">
                        A visual preview of the platform experience.
                        Market data and trading features are not connected yet.
                    </p>
                </div>

            </section>
        </main>

        <footer class="home-footer">
            &copy; {{ date('Y') }} TVC Trading. All rights reserved.
        </footer>

    </div>

</body>
</html>
