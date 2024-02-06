import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // CSS
                'resources/css/main.css',
                'resources/css/chat.css',
                'resources/css/lp.css',
                'resources/sass/app.scss',

                // JS
                'resources/js/app.js',
                'resources/js/card_button.js',
                'resources/js/wedding_photos_slider.js',
                'resources/js/image_button.js'
            ],
            refresh: true,
        }),
    ],
});
