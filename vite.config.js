import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.css',
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/newsapi.js'
            ],
            refresh: true,
        }),
    ],
});
