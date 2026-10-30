
{{-- SPECIAL OFFERS SECTION --}}
<section class="home-special-offers">

    {{-- SECTION HEADER --}}
    <div class="home-special-offers-header">
        <div class="home-special-offers-heading">
            <span class="home-eyebrow">LIMITED TIME DEALS</span>

            <h2>Special Offers</h2>

            <p>Enjoy exclusive deals and special prices on selected products.</p>
        </div>

        <a href="#" class="home-special-offers-view-all">
            View All
            <span aria-hidden="true">&rarr;</span>
        </a>
    </div>

    {{-- PRODUCT GRID --}}
    <div class="home-special-offers-grid">

        @foreach ([
            [
                'name' => 'Premium Trading Headset',
                'image' => 'images/products/product-1.webp',
                'old_price' => 'RM 189.00',
                'price' => 'RM 129.00',
                'discount' => '32%',
                'rating' => '4.9',
                'sold' => '120'
            ],
            [
                'name' => 'Professional Trading Keyboard',
                'image' => 'images/products/product-2.webp',
                'old_price' => 'RM 249.00',
                'price' => 'RM 179.00',
                'discount' => '28%',
                'rating' => '4.8',
                'sold' => '95'
            ],
            [
                'name' => 'Wireless Gaming Mouse',
                'image' => 'images/products/product-3.webp',
                'old_price' => 'RM 159.00',
                'price' => 'RM 99.00',
                'discount' => '38%',
                'rating' => '4.7',
                'sold' => '86'
            ],
            [
                'name' => 'Ultra HD Monitor',
                'image' => 'images/products/product-4.webp',
                'old_price' => 'RM 899.00',
                'price' => 'RM 699.00',
                'discount' => '22%',
                'rating' => '4.9',
                'sold' => '64'
            ],
        ] as $product)

            <article class="home-special-product-card">

                {{-- PRODUCT IMAGE --}}
                <a href="#" class="home-special-product-image-link">
                    <div class="home-special-product-image">

                        <img
                            src="{{ asset($product['image']) }}"
                            alt="{{ $product['name'] }}"
                            loading="lazy"
                        >

                        <span class="home-special-product-badge">
                            -{{ $product['discount'] }}
                        </span>

                    </div>
                </a>

                {{-- PRODUCT INFORMATION --}}
                <div class="home-special-product-info">

                    <h3>
                        <a href="#">
                            {{ $product['name'] }}
                        </a>
                    </h3>

                    {{-- PRICE --}}
                    <div class="home-special-product-pricing">
                        <span class="home-special-product-old-price">
                            {{ $product['old_price'] }}
                        </span>

                        <span class="home-special-product-price">
                            {{ $product['price'] }}
                        </span>
                    </div>

                    {{-- RATING & SOLD --}}
                    <div class="home-special-product-meta">

                        <span class="home-special-product-rating">
                            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M12 2.5l2.9 5.9 6.5.9-4.7 4.6 1.1 6.5-5.8-3.1-5.8 3.1 1.1-6.5-4.7-4.6 6.5-.9L12 2.5z"/>
                            </svg>

                            {{ $product['rating'] }}
                        </span>

                        <span class="home-special-product-divider"></span>

                        <span class="home-special-product-sold">
                            {{ $product['sold'] }} Terjual
                        </span>

                    </div>

                    {{-- ADD TO CART --}}
                    <button type="button" class="home-special-product-add">
                        Add to Cart
                    </button>

                </div>

            </article>

        @endforeach

    </div>

</section>
