const mix = require('laravel-mix')

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

const root = `${__dirname}/resources/js/`

mix.webpackConfig({
  resolve: {
    extensions: ['.js', '.jsx', '.json'],
    alias: {
      '~base': `${root}/base/`,
    },
  },
})

mix
  .react('resources/js/app.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css')

mix
  .react('resources/js/app-admin.js', 'public/js')
  .sass('resources/sass/app-admin.scss', 'public/css')

mix.sass('resources/sass/print.scss', 'public/css')

mix
  .react('resources/js/app-comptroller.js', 'public/js')
  .sass('resources/sass/app-comptroller.scss', 'public/css')
