const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    //mix.sass('app.scss');
    //mix.webpack('app.js');
    mix.styles('./bower_components/lumx/dist/lumx.css');
    mix.styles('./bower_components/mdi/css/materialdesignicons.css');
    mix.scripts('./bower_components/jquery/dist/jquery.js');
    mix.scripts('./bower_components/velocity/velocity.js');
    mix.scripts('./bower_components/moment/min/moment-with-locales.js');
    mix.scripts('./bower_components/angular/angular.js');
    mix.scripts('./bower_components/lumx/dist/lumx.js');
    mix.copy('./bower_components/mdi/fonts', 'public/fonts');

});
