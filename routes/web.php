<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\ProfileController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('personas',PersonaController::class);
Route::get('personas-delete/{persona}',[PersonaController::class,'delete'])->name('personas.delete');


Route::resource('RouteVenta',VentasController::class);
Route::get('ventas-delete/{Ven}',[VentasController::class,'delete'])->name('ventas.delete');








