import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/sass/main.scss',
                'resources/js/app.js',
                'resources/js/codigo_lote.js',
                'resources/js/home.js',
                'resources/js/registro.js',
            ],
            refresh: true,
        }),
    ],
});
