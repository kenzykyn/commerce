
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.getElementById('home-slider');

    // Halaman ini tidak memiliki slider.
    if (!slider) return;

    const slides = Array.from(
        slider.querySelectorAll('.home-slide')
    );

    const indicators = Array.from(
        document.querySelectorAll('.home-slider-indicator')
    );

    const prevButton = slider.querySelector('.home-slider-prev');
    const nextButton = slider.querySelector('.home-slider-next');

    if (slides.length === 0) return;

    // Pastikan jumlah indicator sesuai jumlah slide.
    if (indicators.length !== slides.length) {
        console.warn(
            'Home slider: jumlah indicator harus sama dengan jumlah slide.'
        );
    }

    const indicatorCount = Math.min(
        indicators.length,
        slides.length
    );

    const AUTO_SLIDE_INTERVAL = 5000;

    const prefersReducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    );

    let currentIndex = Math.max(
        0,
        slides.findIndex((slide) => slide.classList.contains('active'))
    );

    let autoSlideTimer = null;
    let isPaused = false;

    // Tampilkan slide berdasarkan index.
    function showSlide(index) {
        currentIndex =
            (index + slides.length) % slides.length;

        slides.forEach((slide, i) => {
            const isActive = i === currentIndex;

            slide.classList.toggle('active', isActive);
            slide.setAttribute(
                'aria-hidden',
                String(!isActive)
            );

            // Mencegah elemen pada slide tersembunyi
            // menerima fokus keyboard.
            if ('inert' in slide) {
                slide.inert = !isActive;
            }
        });

        indicators.forEach((indicator, i) => {
            const isActive = i === currentIndex;

            indicator.classList.toggle('active', isActive);

            if (isActive) {
                indicator.setAttribute('aria-current', 'true');
            } else {
                indicator.removeAttribute('aria-current');
            }
        });
    }

    // Navigasi slide.
    function nextSlide() {
        showSlide(currentIndex + 1);
    }

    function prevSlide() {
        showSlide(currentIndex - 1);
    }

    // Hentikan timer auto-slide.
    function stopAutoSlide() {
        if (autoSlideTimer !== null) {
            window.clearInterval(autoSlideTimer);
            autoSlideTimer = null;
        }
    }

    // Jalankan auto-slide jika diizinkan.
    function startAutoSlide() {
        stopAutoSlide();

        if (
            isPaused ||
            prefersReducedMotion.matches ||
            slides.length < 2
        ) {
            return;
        }

        autoSlideTimer = window.setInterval(() => {
            nextSlide();
        }, AUTO_SLIDE_INTERVAL);
    }

    // Mulai ulang timer setelah interaksi manual.
    function restartAutoSlide() {
        startAutoSlide();
    }

    // Tombol panah.
    if (nextButton) {
        nextButton.addEventListener('click', () => {
            nextSlide();
            restartAutoSlide();
        });
    }

    if (prevButton) {
        prevButton.addEventListener('click', () => {
            prevSlide();
            restartAutoSlide();
        });
    }

    // Indicator slide.
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            if (index >= slides.length) return;

            showSlide(index);
            restartAutoSlide();
        });
    });

    // Jeda ketika pointer berada di dalam slider.
    slider.addEventListener('mouseenter', () => {
        isPaused = true;
        stopAutoSlide();
    });

    slider.addEventListener('mouseleave', () => {
        isPaused = false;
        startAutoSlide();
    });

    // Jeda saat pengguna memfokuskan elemen slider
    // menggunakan keyboard.
    slider.addEventListener('focusin', () => {
        isPaused = true;
        stopAutoSlide();
    });

    slider.addEventListener('focusout', (event) => {
        if (!slider.contains(event.relatedTarget)) {
            isPaused = false;
            startAutoSlide();
        }
    });

    // Jangan menjalankan auto-slide ketika tab tidak aktif.
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopAutoSlide();
        } else {
            startAutoSlide();
        }
    });

    // Hormati preferensi reduced motion pengguna.
    prefersReducedMotion.addEventListener('change', () => {
        startAutoSlide();
    });

    // Inisialisasi carousel.
    showSlide(currentIndex);
    startAutoSlide();
});
