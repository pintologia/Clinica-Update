<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('layouts.site');
})->name('welcome');*/

/** routes site */
Route::get('/', 'App\Http\Controllers\PrincipalController@index')->name('inicio');
Route::get('/sobreNos', 'App\Http\Controllers\SobreNosController@index')->name('sobreNos');
Route::get('/servico', 'App\Http\Controllers\ServicoController@index')->name('servico');
Route::get('/siteDepartamento', 'App\Http\Controllers\DepartamentoController@siteDepartamento')->name('site.departamento');
Route::get('/siteBlog', 'App\Http\Controllers\BlogueController@siteBlog')->name('site.blog');
/** end routes site */

/**routes auth */
Auth::routes();
/**end auth routes */

/**app routes */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route:: resource('/departamento', 'App\Http\Controllers\DepartamentoController');
Route:: resource('/blogue', 'App\Http\Controllers\BlogueController');
Route:: resource('/user', 'App\Http\Controllers\UserController');
Route:: resource('/contacto', 'App\Http\Controllers\ContactoController');
Route:: resource('/consulta', 'App\Http\Controllers\ConsultaController');
/**end app routes */