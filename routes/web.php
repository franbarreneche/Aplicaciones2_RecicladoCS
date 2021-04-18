<?php

use App\Http\Controllers\CentroController;
use App\Http\Controllers\CiudadanoController;
use App\Http\Controllers\RecicladoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('dashboard', 'dashboard')
	->name('dashboard')
	->middleware(['auth', 'verified']);


Route::middleware(['auth'])->group(function() {
    Route::resource('/ciudadanos',CiudadanoController::class);
    Route::resource('/centros',CentroController::class);
    Route::resource('/reciclados',RecicladoController::class);
});




