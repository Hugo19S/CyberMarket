const mix = require('laravel-mix');

mix.copy('node_modules/swiper/swiper-bundle.min.js', 'public/js')
    .copy('node_modules/swiper/swiper-bundle.min.css', 'public/css');


