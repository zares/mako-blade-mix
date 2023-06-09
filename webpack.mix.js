const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.setPublicPath('public')
    .version()
    .js('app/resources/js/app.js', 'public/assets/js')
    .postCss('app/resources/css/app.css', 'public/assets/css', [
        //
    ]);
	
