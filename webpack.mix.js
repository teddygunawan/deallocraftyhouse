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

mix.js([
    'resources/js/jquery-3.2.1.min.js',
    'resources/js/jquery.cookie.js',
    'resources/js/app.js',
    'resources/js/bootstrap.min.js',
    'resources/js/bootstrap-hover-dropdown.js',
    'resources/js/front.js',
    'resources/js/owl.carousel.min.js',
    'resources/js/sweetalert2.min.js',
    'resources/js/modernizr.js',
    'resources/js/waypoints.min.js'
], 'public/js/bundle.js');

mix.styles([
    'resources/css/app.scss', 
    'resources/css/animate.min.css', 
    'resources/css/bootstrap.min.css', 
    'resources/css/font-awesome.min.css', 
    'resources/css/owl.carousel.css', 
    'resources/css/owl.theme.css', 
    'resources/css/owl.transitions.css', 
    'resources/css/style.css', 
    'resources/css/sweetalert2.min.css', 

], 'public/css/bundle.css');
