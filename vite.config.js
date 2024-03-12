import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/js/core.js",
                "resources/js/tracking.js",
                "resources/css/design.css",
                "resources/sass/bootstrap.scss",
            ],
            refresh: true,
        }),
    ],
});
