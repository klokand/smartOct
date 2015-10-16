var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
		'vendor/css/bootstrap.min.css',
		'vendor/css/jquery.myelinSilder.css',
		'vendor/css/font-awesome.min.css',
		'vendor/css/colorbox.css',
		'css/app.css'
	],'public/output/final.css','resources/assets');
	mix.scripts([
		'vendor/js/jquery.min.js',
		'vendor/js/bootstrap.min.js',
		'vendor/js/jquery.myelinSilder.js',
		'vendor/js/jquery.tubber.min.js',
		'vendor/js/jquery.colorbox-min.js',
		'js/app.js'
	],'public/output/final.js','resources/assets');
	mix.copy('resources/assets/img','public/img');
	mix.copy('resources/assets/video','public/video');
	mix.copy('resources/assets/vendor/img','public/output/img');
	mix.copy('resources/assets/fonts','public/fonts');;
});
