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

mix.sass('resources/sass/app.scss', 'public/css').sass('resources/sass/clientArea.scss', 'public/css');

// clientarea
mix.combine(['resources/js/jquery.js', 'resources/js/bootstrap.min.js', 'resources/js/clientArea.js'], 'public/js/clientArea.js');
mix.styles(['resources/css/bootstrap.min.css', 'resources/css/boxicons.min.css'], 'public/css/clientAreaLibraries.css');

// main-area
mix.combine(['resources/js/jquery.js', 'resources/js/bootstrap.min.js', 'resources/js/app.js'], 'public/js/app.js');
mix.styles(['resources/css/bootstrap.min.css', 'resources/css/boxicons.min.css',], 'public/css/mainpage.css');

