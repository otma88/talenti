let mix = require('laravel-mix');

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
//Mix sass
mix.sass('resources/assets/sass/app.scss', 'public/css').sourceMaps();


//Mix JS
/*
mix.scripts(['resources/assets/mdb/js/jquery-3.3.1.min.js',
        'resources/assets/mdb/js/popper.min.js',
        'resources/assets/mdb/js/bootstrap.min.js',
        'resources/assets/mdb/js/mdb.min.js'], 'public/js/app.js').sourceMaps();
*/


