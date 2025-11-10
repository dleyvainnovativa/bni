import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js','resources/js/search.js','resources/js/business.js', 'resources/css/theme.css'],
            refresh: true,
        }),
    ],
});
