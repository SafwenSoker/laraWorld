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
    .sass('resources/sass/app.scss', 'public/css/app.css')
    .styles('resources/css/dashboard.css',
     'public/css/admin-dashboard.css')
    .scripts('resources/js/scripts.js', 'public/js/scripts.js')
    .scripts('resources/js/datatables-simple-demo.js', 'public/js/datatables-simple-demo.js')
    .scripts('node_modules/chart.js/dist/chart.js','public/js/chartjs.js')
    .scripts('resources/js/feather.js', 'public/js/feather.js')
    .scripts('resources/js/bootstrap.js', 'public/js/bootstrap.js')
    .copy('node_modules/@fortawesome/fontawesome-free/webfonts','public/webfonts')
    .sourceMaps();
