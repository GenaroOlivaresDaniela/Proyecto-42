<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\CuatrimestreController;
use App\Http\Controllers\TypeuserController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LibroregistroController;

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


Route::get('/', function () {
    return view('welcome');
});



Route::resource('categorias',CategoriaController::class);
Route::resource('carrera', CarreraController::class);
Route::resource('type', TypeuserController::class);
Route::resource('cuatrimestre', CuatrimestreController::class);
Route::resource('libros', LibroController::class);
Route::resource('usuario', UsuarioController::class);
Route::resource('registro', RegistroController::class);