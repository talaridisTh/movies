const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js/app.js')
    .js('resources/js/custom.js', 'public/js/custom.js')
    .sass('resources/sass/all.scss', "public/css/style.css")
    .browserSync("http://127.0.0.1:8000/")
    // .version();




/node_modules
/public/hot
/public/storage
/storage/*.key
/vendor
.env
.htaccess
robots.txt
.idea
.env.backup
.phpunit.result.cache
Homestead.json
Homestead.yaml
npm-debug.log
yarn-error.log
