

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [

                // 🔹 GLOBAALSED
                'resources/css/app.css',
                'resources/js/app.js',

                // 🔹 LEHEPÕHISED CSS-id
                'resources/css/pages/brandilehed.css',
                'resources/css/pages/index.css',
                'resources/css/pages/teenustelehed.css',
                'resources/css/pages/tootelehed.css',
                'resources/css/pages/tootelehedala.css',
                'resources/css/pages/worksleht.css',

                'resources/css/ettevottest.css',
                'resources/css/contact.css',

                // 🔹 LEHEPÕHISED JS-id
                'resources/js/pages/index.js',
                'resources/js/pages/teenustelehed.js',
                'resources/js/contact.js',



            ],
            refresh: true,
        }),
    ],
});
