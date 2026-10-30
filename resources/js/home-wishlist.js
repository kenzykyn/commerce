document.querySelectorAll('.home-product-wishlist').forEach(button => {
    button.addEventListener('click', function () {
        const active = this.classList.toggle('is-active');

        this.setAttribute('aria-pressed', active);
        this.setAttribute(
            'aria-label',
            active ? 'Remove from wishlist' : 'Add to wishlist'
        );
    });
});