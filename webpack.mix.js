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

/* El primer argumento es archivo que se va a compilar y el segundo
es dónde se va a almacenar el resultado, esto para js() y postCss() */
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        // Estos son los componentes requeridos para aplicar estilos
        require("tailwindcss"),
    ]);
