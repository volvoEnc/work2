const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.scripts(['resources/admin/js/scripts.js'], 'public/js/admin.js');
mix.scripts(['resources/js/script.js'], 'public/js/main.js');

mix.styles(['resources/admin/css/styles.css'], 'public/css/admin.css');
mix.styles([
    'resources/css/header.css',
    'resources/css/footer.css',
    'resources/css/main.css',
    'resources/css/sign.css'
], 'public/css/main.css');
