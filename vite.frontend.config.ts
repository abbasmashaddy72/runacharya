import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import liveReload from "vite-plugin-live-reload";

export default defineConfig({
    plugins: [
        liveReload("./app/Http/**/*.php"),
        laravel({
            input: [
                "resources/css/frontend/app.scss",
                "resources/js/frontend/app.ts",
            ],
            buildDirectory: '/frontendAssets',
        }),
        {
            name: "blade",
            handleHotUpdate({ file, server }) {
                if (file.endsWith(".blade.php")) {
                    server.ws.send({
                        type: "full-reload",
                        path: "*",
                    });
                }
            },
        },
    ],
    css: {
        postcss: {
            plugins: [
                require("postcss-import"),
                require("postcss-advanced-variables"),
                require("tailwindcss/nesting"),
                require("tailwindcss")({
                    config: "./tailwind-frontend.config.js",
                }),
                require("autoprefixer"),
            ],
        },
    },
});
