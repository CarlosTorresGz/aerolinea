<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoAsientoController;

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

Route::get('/', [TipoAsientoController::class,'home'])->name('tipoasiento.home');

Route::get('/tipoAsientos/editar', [TipoAsientoController::class, 'editar'])->name('tipoasiento.editar');

Route::get('/tipoAsientos/crear', [TipoAsientoController::class, 'crear'])->name('tipoasiento.crear');


