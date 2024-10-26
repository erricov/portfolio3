import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: {
                frontend: 'resources/frontend/js/app.js',
                backend: 'resources/backend/js/app.js',
            },
            ssr: [
                'resources/frontend/js/ssr.js',
                'resources/backend/js/ssr.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources/frontend/js',
            '@backend': '/resources/backend/js',
            '@img': '/public/media'
        },
    },
});
