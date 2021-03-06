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


mix.copyDirectory('resources/images', 'public/images');

//Compile table vendors
mix.scripts([
    'node_modules/datatables.net/js/jquery.dataTables.js',
    'node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js'
], 'public/js/vendor/table.js').styles([
    'node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css'
], 'public/css/vendor/table.css');

//Compile sweet alert
mix.scripts([
    'node_modules/sweetalert2/dist/sweetalert2.js',
], 'public/js/vendor/sweetalert2.js').styles([
    'node_modules/sweetalert2/dist/sweetalert2.css',
], 'public/css/vendor/sweetalert2.css');

mix.copyDirectory('resources/plugins', 'public/plugins');
