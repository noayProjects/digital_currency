let mix = require('laravel-mix');
//const CopyWebpackPlugin = require('copy-webpack-plugin')

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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/style.scss', 'public/css')
    .disableNotifications()
    .options({
        processCssUrls: false
    })
    .sourceMaps()
    .browserSync({
        proxy: process.env.APP_URL,
        files: [
            'app/**/*.php',
            'resources/views/**/*.php',
            'resources/assets/**/*.js',
            'resources/assets/**/*.scss',
            'public/js/**/*.js',
            'public/css/**/*.css'
        ]
    })


mix.webpackConfig({
    plugins: [
        // new BundleAnalyzerPlugin()  // if you want analyze bundle use this
        // new CopyWebpackPlugin([ {
        //     from:'node_modules/font-awesome/fonts', to: 'public/fonts/font-awesome'
        // } ])
    ]

})