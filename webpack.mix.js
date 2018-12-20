// Set the mix variable
/* global path */
const mix = require('laravel-mix');

/* Mix Plugins */
require('laravel-mix-purgecss');
require('laravel-mix-tailwind');
require('laravel-mix-banner');
require('laravel-mix-eslint');
require('laravel-mix-critical');

/**
 * Start the Mix function
 */
mix
    .setPublicPath('./web/dist')
    .babelConfig({ 'presets': ['env'] })
    .js('./src/js/site.js', './web/dist/js/').eslint({ cache: true })
    .sass('./src/scss/site.scss', './web/dist/css').tailwind()
    /*.critical({
        urls: [
            { src: process.env.BASE_URL + '/', dest: './templates/index_critical.min.css' },
        ],
        options: {
            minify: true,
            width: 1200,
            height: 1200,
        },*/
    .version();