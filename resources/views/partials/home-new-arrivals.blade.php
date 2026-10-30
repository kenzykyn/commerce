<section class="home-new-arrivals home-container" id="new-arrivals">

    {{-- SECTION HEADER --}}
    <div class="home-new-arrivals-header">
        <div class="home-new-arrivals-heading">
            <span class="home-eyebrow">JUST LANDED</span>
            <h2>New Arrivals</h2>
            <p>Discover our latest products.</p>
        </div>

        <a href="#" class="home-new-arrivals-view-all">
            View All
            <span aria-hidden="true">&rarr;</span>
        </a>
    </div>

    {{-- PRODUCT GRID --}}
    <div class="home-new-arrivals-grid">

        @php
            $newArrivals = [
                [
                    'name' => 'HONOR X9E PRO 5G',
                    'price' => '199.00',
                    'original_price' => '249.00',
                    'image' => 'product-1.webp',
                ],
                [
                    'name' => 'Samsung Z Fold 8 Ultra',
                    'price' => '249.00',
                    'original_price' => '299.00',
                    'image' => 'product-2.webp',
                ],
                [
                    'name' => 'Samsung Z Fold 8 Ultra',
                    'price' => '299.00',
                    'original_price' => '349.00',
                    'image' => 'product-3.webp',
                ],
                [
                    'name' => 'REALME C100X 5G',
                    'price' => '159.00',
                    'original_price' => '349.00',
                    'image' => 'product-4.webp',
                ],
            ];
        @endphp

        @foreach ($newArrivals as $product)
            <article class="home-product-card">

                {{-- PRODUCT IMAGE --}}
                <div class="home-product-image">

                    <a href="#" class="home-product-image-link">
                        <img src="{{ asset('images/products/' . $product['image']) }}" alt="{{ $product['name'] }}" loading="lazy" >
                    </a>

                    <span class="home-product-badge">NEW</span>

                    {{-- WISHLIST BUTTON --}}
                    <button type="button" class="home-product-wishlist" aria-label="Add to wishlist" aria-pressed="false" >
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1.1-1.1a5.5 5.5 0 0 0-7.8 7.8l1.1 1.1L12 21l7.8-7.5 1.1-1.1a5.5 5.5 0 0 0-.1-7.8Z"/>
                        </svg>
                    </button>

                </div>

                {{-- PRODUCT DETAILS --}}
                <div class="home-product-info">

                    <h3>
                        <a href="#">{{ $product['name'] }}</a>
                    </h3>

                    <div class="home-product-price">
                        <span class="home-product-old-price">
                            RM {{ $product['original_price'] }}
                        </span>

                        <span class="home-product-current-price">
                            RM {{ $product['price'] }}
                        </span>
                    </div>

                </div>

            </article>
        @endforeach

    </div>
</section>