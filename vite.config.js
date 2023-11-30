import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'public/css/acceuil.css', 'public/css/bootstrap-min.css'],
            refresh: true,
        }),
    ],
});
