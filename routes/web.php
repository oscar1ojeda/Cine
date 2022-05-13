<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\CategoriaController;

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
    return view('welcome');
});

Route::get('/pelicula', function () {
    return view('pelicula.index');
});

Route::get('/pelicula/create',[PeliculaController::class,'create']);
*/

//forma automatizada de acceder a todas las vistas 
Route::resource('pelicula', PeliculaController::class);
Route::resource('categoria', CategoriaController::class);