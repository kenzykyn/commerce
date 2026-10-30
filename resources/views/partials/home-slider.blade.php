
<section class="home-slider-section home-container" aria-label="Featured banners">

    <div class="home-slider" id="home-slider" aria-roledescription="carousel" aria-label="Featured promotions">

        {{-- Slides --}}
        <div class="home-slider-track">

            {{-- Slide 1 --}}
            <article class="home-slide active" aria-roledescription="slide" aria-label="1 of 5">
                <img src="{{ asset('images/banners/banner-1.webp') }}" alt="Discover the TVC Trading platform" class="home-slide-image" fetchpriority="high">

                <div class="home-slide-overlay"></div>

                <div class="home-slide-content">
                    <span class="home-slide-eyebrow"> WELCOME TO TVC TRADING </span>
                    <h2>Discover Your Next Opportunity</h2>
                    <p> Explore a platform designed around your trading journey. </p>
                    <a href="{{ route('register') }}" class="home-slide-button">
                        Get Started
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </article>

            {{-- Slide 2 --}}
            <article class="home-slide" aria-roledescription="slide" aria-label="2 of 5" aria-hidden="true">
                <img src="{{ asset('images/banners/banner-2.webp') }}" alt="Explore market insights" class="home-slide-image" loading="lazy">

                <div class="home-slide-overlay"></div>

                <div class="home-slide-content">
                    <span class="home-slide-eyebrow">MARKET INSIGHTS</span>
                    <h2>See the Market Differently</h2>
                    <p> Discover market information in one convenient place. </p>
                    <a href="#features" class="home-slide-button">
                        Explore Platform
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </article>

            {{-- Slide 3 --}}
            <article class="home-slide" aria-roledescription="slide" aria-label="3 of 5" aria-hidden="true">
                <img src="{{ asset('images/banners/banner-3.webp') }}" alt="Your trading journey" class="home-slide-image" loading="lazy">

                <div class="home-slide-overlay"></div>

                <div class="home-slide-content">
                    <span class="home-slide-eyebrow">YOUR JOURNEY</span>
                    <h2>Take the Next Step</h2>
                    <p> Build your experience as you discover the platform. </p>
                    <a href="{{ route('register') }}" class="home-slide-button">
                        Create Account
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </article>

            {{-- Slide 4 --}}
            <article class="home-slide" aria-roledescription="slide" aria-label="4 of 5" aria-hidden="true">
                <img src="{{ asset('images/banners/banner-4.webp') }}" alt="Explore the TVC Trading experience" class="home-slide-image" loading="lazy">

                <div class="home-slide-overlay"></div>

                <div class="home-slide-content">
                    <span class="home-slide-eyebrow">THE TVC EXPERIENCE</span>
                    <h2>Everything Starts With a Step</h2>
                    <p> Get to know the tools and information available to you. </p>
                    <a href="#features" class="home-slide-button">
                        Learn More
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </article>

            {{-- Slide 5 --}}
            <article class="home-slide" aria-roledescription="slide" aria-label="5 of 5" aria-hidden="true">
                <img src="{{ asset('images/banners/banner-5.webp') }}" alt="Join the TVC Trading platform" class="home-slide-image" loading="lazy">

                <div class="home-slide-overlay"></div>

                <div class="home-slide-content">
                    <span class="home-slide-eyebrow">START TODAY</span>
                    <h2>Your Journey Begins Here</h2>
                    <p> Create your account and get started with TVC Trading. </p>
                    <a href="{{ route('register') }}" class="home-slide-button">
                        Get Started
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </article>

        </div>

        {{-- Desktop arrows --}}
        <button type="button" class="home-slider-arrow home-slider-prev" aria-label="Previous slide" aria-controls="home-slider">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="m15 18-6-6 6-6"/>
            </svg>
        </button>

        <button type="button" class="home-slider-arrow home-slider-next" aria-label="Next slide" aria-controls="home-slider">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="m9 18 6-6-6-6"/>
            </svg>
        </button>

    </div>

    {{-- Indicators: outside the banner --}}
    <div class="home-slider-indicators" role="group" aria-label="Choose a slide">

        <button type="button" class="home-slider-indicator active" aria-label="Go to slide 1" aria-current="true" aria-controls="home-slider"></button>
        <button type="button" class="home-slider-indicator" aria-label="Go to slide 2" aria-controls="home-slider"></button>
        <button type="button" class="home-slider-indicator" aria-label="Go to slide 3" aria-controls="home-slider"></button>
        <button type="button" class="home-slider-indicator" aria-label="Go to slide 4" aria-controls="home-slider"></button>
        <button type="button" class="home-slider-indicator" aria-label="Go to slide 5" aria-controls="home-slider"></button>

    </div>

</section>