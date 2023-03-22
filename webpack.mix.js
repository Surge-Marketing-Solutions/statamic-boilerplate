const mix = require('laravel-mix');
const fs = require('fs');

const getFiles = (dir) => {
    return fs.readdirSync(dir).filter(file => {
        return fs.statSync(`${dir}/${file}`).isFile();
    });
}

mix.setPublicPath('public');

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

// JS
getFiles('resources/js').forEach(filepath => {
    if (filepath[0] != '_') {
        mix.js('resources/js/' + filepath, 'public/js');
    }
})
getFiles('resources/js/partials').forEach(filepath => {
    if (filepath[0] != '_') {
        mix.js('resources/js/partials/' + filepath, 'public/js/partials');
    }
})

// SASS
getFiles('resources/sass').forEach(filepath => {
    if (filepath[0] != '_') {
        mix.sass('resources/sass/' + filepath, 'public/css');
    }
})
getFiles('resources/sass/partials').forEach(filepath => {
    if (filepath[0] != '_') {
        mix.sass('resources/sass/partials/' + filepath, 'public/css/partials');
    }
})
getFiles('resources/sass/templates').forEach(filepath => {
    if (filepath[0] != '_') {
        mix.sass('resources/sass/templates/' + filepath, 'public/css/templates');
    }
})

// CSS
mix.postCss('resources/css/tailwind.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss/nesting'),
    require('tailwindcss'),
])

if (mix.inProduction()) {
   mix.version();
}

/*
 |--------------------------------------------------------------------------
 | Statamic Control Panel
 |--------------------------------------------------------------------------
 |
 | Feel free to add your own JS or CSS to the Statamic Control Panel.
 | https://statamic.dev/extending/control-panel#adding-css-and-js-assets
 |
 */

// mix.js('resources/js/cp.js', 'public/vendor/app/js')
//    .postCss('resources/css/cp.css', 'public/vendor/app/css', [
//     require('postcss-import'),
//     require('tailwindcss/nesting'),
//     require('tailwindcss'),
// ])
