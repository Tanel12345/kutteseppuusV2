import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'
                ,'resources/css/contact.css', 'resources/js/accordeon.js'
                ,'resources/css/cookies.css', 'resources/js/bootstrap.js'
                ,'resources/css/ettevottest.css', 'resources/js/carousel.js'
                ,'resources/css/footer.css', 'resources/js/contact.js'
                ,'resources/css/indexCarousel.css', 'resources/js/cookies.js'
                ,'resources/css/navbar.css', 'resources/js/hamburger.js'
                ,'resources/css/piltlingid.css', 'resources/js/imagePopup.js'
                ,'resources/css/staticCarousel.css', 'resources/js/lazyLoading.js'
                ,'resources/css/staticCarouselkuttesepp.css', 'resources/js/lenis.js'
                ,'resources/css/teenused.css', 'resources/js/navbar.js'
                ,'resources/css/teenusedStatic.css', 'resources/js/upscroller.js'
                ,'resources/css/tootesektsioon.css'
                ,'resources/css/tootjasektsioon.css'
                ,'resources/css/tootjasektsioon2.css'
                ,'resources/css/upscroller.css'
            ],
            refresh: true,
        }),
    ],
});
