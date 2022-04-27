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

mix.js('resources/js/score_create.js', 'public/js')
    .js('resources/js/history_detail.js', 'public/js')
    .js('resources/js/graph.js', 'public/js')
    .postCss('resources/css/index.css', 'public/css')
    .postCss('resources/css/history_detail.css', 'public/css')
    .postCss('resources/css/score_create.css', 'public/css');


if (mix.inProduction()) {
    mix.version();
}
