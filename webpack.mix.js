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



mix.js('resources/assets/js/app.js', 'public/js').sourceMaps().version();
mix.sass('resources/assets/sass/style.scss', 'public/css');
mix.copy('node_modules/vuetify/dist/vuetify.min.css', 'public/css');

mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.vue', '.json', '.scss'],
        alias: {
            '@': __dirname + '/resources/assets/js',
            '@article': __dirname + '/Modules/Article/Resources/assets/js',
            '@cart': __dirname + '/Modules/Cart/Resources/assets/js',
            '@catalog': __dirname + '/Modules/Catalog/Resources/assets/js',
            '@file': __dirname + '/Modules/Files/Resources/assets/js',
            cartScss: path.resolve(__dirname + '/Modules/Cart/Resources/assets/scss'),
            articleScss: path.resolve(__dirname + '/Modules/Article/Resources/assets/scss')
        }
    }
})
