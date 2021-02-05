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

mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/owl.carousel.min.css',
    'resources/css/magnific-popup.css',
    'resources/css/font-awesome.min.css',
    'resources/css/themify-icons.css',
    'resources/css/gijgo.css',
    'resources/css/nice-select.css',
    'resources/css/flaticon.css',
    'resources/css/slicknav.css',
    'resources/css/style.css',
],'public/front/css/all.css');


mix.scripts([
    'resources/js/vendor/modernizr-3.5.0.min.js',
    'resources/js/vendor/jquery-1.12.4.min.js',
    'resources/js/popper.min.js',
    'resources/js/bootstrap.min.js',
    'resources/js/owl.carousel.min.js',
    'resources/js/isotope.pkgd.min.js',
    'resources/js/ajax-form.js',
    'resources/js/waypoints.min.js',
    'resources/js/jquery.counterup.min.js',
    'resources/js/imagesloaded.pkgd.min.js',
    'resources/js/scrollIt.js',
    'resources/js/jquery.scrollUp.min.js',
    'resources/js/wow.min.js',
    'resources/js/gijgo.min.js',
    'resources/js/nice-select.min.js',
    'resources/js/jquery.slicknav.min.js',
    'resources/js/jquery.magnific-popup.min.js',
    'resources/js/plugins.js',
    'resources/js/contact.js',
    'resources/js/jquery.ajaxchimp.min.js',
    'resources/js/jquery.form.js',
],'public/front/js/all.js');


mix.styles([
    'resources/back/css/bootstrap.css',
    'resources/back/vendors/linericon/style.css',
    'resources/back/css/font-awesome.min.css',
    'resources/back/css/magnific-popup.css',
    'resources/back/vendors/owl-carousel/owl.carousel.min.css',
    'resources/back/vendors/lightbox/simpleLightbox.css',
    //'resources/back/vendors/nice-select/css/nice-select.css',
    'resources/back/vendors/jquery-ui/jquery-ui.css',
    'resources/back/vendors/animate-css/animate.css',
    'resources/back/css/style.css',
    /* chosen select
    'resources/back/css/choisen/chosen.css',
    'resources/back/css/choisen/prsim.css',
    'resources/back/css/choisen/style.css',*/
],'public/back/css/all.css');

mix.scripts([
    'resources/back/js/jquery-3.2.1.min.js',
    'resources/back/js/popper.js',
    'resources/back/js/bootstrap.min.js',
    'resources/back/js/stellar.js',
    'resources/back/js/jquery.magnific-popup.min.js',
    'resources/back/vendors/lightbox/simpleLightbox.min.js',
    //'resources/back/vendors/nice-select/js/jquery.nice-select.min.js',
    'resources/back/vendors/owl-carousel/owl.carousel.min.js',
    'resources/back/vendors/jquery-ui/jquery-ui.js',
    'resources/back/js/jquery.ajaxchimp.min.js',
    'resources/back/vendors/counter-up/jquery.waypoints.min.js',
    'resources/back/vendors/counter-up/jquery.counterup.js',
    'resources/back/js/mail-script.js',
    'resources/back/js/gmaps.min.js',
    'resources/back/js/theme.js',
    /* chosen select
    'resources/back/js/chosen.jquery.js',
    'resources/back/js/init.js',
    'resources/back/js/prism.js',*/
],'public/back/js/all.js');
