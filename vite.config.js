import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                 'resources/js/app.js',
                 'public/js/main.js',
                 'public/css/carousel/carousel.css',
                 'public/js/bootstrap.bundle.min.js', 'public/css/carousel/bootstrap.min.css'
                
                ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
});
