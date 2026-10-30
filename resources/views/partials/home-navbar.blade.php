
<header class="home-navbar">
    <nav class="home-nav-container" aria-label="Main navigation">

        {{-- Brand --}}
        <a href="{{ route('home') }}" class="home-brand">
            {{-- <img src="{{ asset('images/tvc-logo.svg') }}" alt="TVC Trading" class="home-brand-logo" > --}}

            <span class="home-brand-text">
                <strong>TVC Trading</strong>
                <small>Trade with clarity.</small>
            </span>
        </a>

        {{-- Search Box --}}
        <form action="#" method="GET" class="home-search">
            <input type="search" name="q" placeholder="Search products..." aria-label="Search products" >

            <button type="submit" aria-label="Search products">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <circle cx="11" cy="11" r="7"/>
                    <path d="m20 20-4-4"/>
                </svg>
            </button>
        </form>

        {{-- Actions --}}
        <div class="home-nav-actions">

            {{-- Cart with notification --}}
            <a href="/cart" class="home-nav-icon home-cart-link" aria-label="Shopping cart, 2 items">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M3 3h2l2.4 12.4a2 2 0 0 0 2 1.6h8.8a2 2 0 0 0 2-1.6L22 8H6"/>
                    <circle cx="10" cy="21" r="1"/>
                    <circle cx="19" cy="21" r="1"/>
                </svg>

                <span class="home-cart-badge">12</span>
            </a>

            {{-- Login icon --}}
            <a href="{{ route('login') }}" class="home-nav-icon" aria-label="Sign in">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <circle cx="12" cy="8" r="4"/>
                    <path d="M5 21v-2a7 7 0 0 1 14 0v2"/>
                </svg>
            </a>

        </div>

    </nav>
</header>