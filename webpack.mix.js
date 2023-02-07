// webpack.mix.js
let mix = require('laravel-mix');
const theme = 'presi'

mix
.options({
  processCssUrls: false
})
.sass(`${theme}/src/scss/app.scss`, `wp-content/themes/${theme}/assets/css/`)
.js(`${theme}/src/js/app.js`, `wp-content/themes/${theme}/assets/js/`)

mix.browserSync({
  proxy: `http://localhost:8888/${theme}/`,
  files: [`wp-content/themes/${theme}/**/*.css`, `wp-content/themes/${theme}/**/*.php`, `wp-content/themes/${theme}/**/*.js`],
});