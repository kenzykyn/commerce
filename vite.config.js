import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/auth/auth.css',
                'resources/css/home.css',
                'resources/css/navbar.css',
                'resources/css/home-slider.css',
                'resources/css/home-categories.css',
                'resources/css/home-new-arrivals.css',
                'resources/css/home-brands.css',
                'resources/css/home-best-sellers.css',
                'resources/css/home-special-offers.css',
                'resources/css/home-bottom-nav.css',
                'resources/js/app.js',
                'resources/js/auth.js',
                'resources/js/home-slider.js',
                'resources/js/home-wishlist.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
