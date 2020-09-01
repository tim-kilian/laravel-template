const mix = require('laravel-mix');
const fs = require('fs');

require('laravel-mix-purgecss');

mix.js(
    'resources/js/app.js',
    'public/js',
).postCss(
    'resources/css/app.css',
    'public/css',
    require('tailwindcss'),
);

if (fs.existsSync('resources/fonts')) {
    mix.copyDirectory('resources/fonts', 'public/fonts');
}

mix.webpackConfig({
    plugins: [
        new (require('copy-webpack-plugin'))({
            patterns: [
                { from: 'resources/images', to: 'images/' },
            ],
        }),
        new (require('imagemin-webpack-plugin').default)({
            test: /\.(jpe?g|png|gif|svg)$/i,
            pngquant: { quality: '80-90' },
            plugins: [
                require('imagemin-gifsicle')({ interlaced: false }),
                require('imagemin-mozjpeg')({ arithmetic: false }),
                require('imagemin-pngquant')({ floyd: 0.5, speed: 2 }),
                require('imagemin-svgo')({
                    plugins: [
                        { removeTitle: true },
                        { convertPathData: false },
                    ],
                }),
            ],
        }),
    ],
});

if (mix.inProduction()) {
    mix.version().purgeCss();
}
