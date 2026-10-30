
<nav class="home-bottom-nav" aria-label="Main navigation">
    <div class="home-bottom-nav__bar">

        <!-- Home -->
        <a href="{{ url('/') }}"
           class="home-bottom-nav__item home-bottom-nav__item--active"
           aria-current="page">
            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M3 10.5L12 3L21 10.5V20H14.5V14H9.5V20H3V10.5Z"
                      stroke="currentColor"
                      stroke-width="1.7"
                      stroke-linejoin="round"/>
            </svg>
            <span>Home</span>
        </a>

        <!-- Market -->
        <a href="{{ url('/market') }}" class="home-bottom-nav__item">
            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M3 17L8 12L12 15L21 6"
                      stroke="currentColor"
                      stroke-width="1.7"
                      stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M15 6H21V12"
                      stroke="currentColor"
                      stroke-width="1.7"
                      stroke-linecap="round"
                      stroke-linejoin="round"/>
            </svg>
            <span>Market</span>
        </a>

        <!-- Center Trade Button -->
        <a href="{{ url('/trade') }}"
           class="home-bottom-nav__trade"
           aria-label="Trade">
            <span class="home-bottom-nav__trade-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M7 7H17M17 7L13.5 3.5M17 7L13.5 10.5"
                          stroke="currentColor"
                          stroke-width="1.8"
                          stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M17 17H7M7 17L10.5 13.5M7 17L10.5 20.5"
                          stroke="currentColor"
                          stroke-width="1.8"
                          stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </span>
            <span class="home-bottom-nav__trade-label">Trade</span>
        </a>

        <!-- Wallet -->
        <a href="{{ url('/wallet') }}" class="home-bottom-nav__item">
            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <rect x="3" y="5" width="18" height="15" rx="2"
                      stroke="currentColor" stroke-width="1.7"/>
                <path d="M3 9H21M16 15H17"
                      stroke="currentColor"
                      stroke-width="1.7"
                      stroke-linecap="round"/>
            </svg>
            <span>Wallet</span>
        </a>

        <!-- Profile -->
        <a href="{{ url('/profile') }}" class="home-bottom-nav__item">
            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <circle cx="12" cy="8" r="4"
                        stroke="currentColor" stroke-width="1.7"/>
                <path d="M4 21C4 16.6 7.6 14 12 14C16.4 14 20 16.6 20 21"
                      stroke="currentColor"
                      stroke-width="1.7"
                      stroke-linecap="round"/>
            </svg>
            <span>Profile</span>
        </a>

    </div>
</nav>
