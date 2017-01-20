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

//* elixir is our predefined mixins to perform common tasks.  Here we can use sass, less...it only needs to be added to mix.{sass, less...(only one tho)}
//* Even tho this is avaailable to us right out of the box, dependencies still need to be added (package.json) with node and npm.
//* Node packages (npm install) will be installed inside node_modules directory.
elixir((mix) => {
    mix.sass('app.scss')
       .webpack('app.js')
       .version('css/app.css'); //* Compiles our scss and versions (gives a unique hash) the resulting file (cache busting).  You'll still need to add laravel's elixir function in the layout.blade.php file.
});
