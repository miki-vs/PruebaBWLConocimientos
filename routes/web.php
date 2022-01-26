<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\InicioController;


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
    return view('home');
})->middleware('auth');


Route::get('/registro',  [RegistroController::class, 'create'])->middleware('guest')-> name('registro.index');
Route::post('/registro',  [RegistroController::class, 'store'])-> name('registro.store');
Route::get('/login',  [InicioController::class, 'create'])->middleware('guest')-> name('login.index');
Route::post('/login',  [InicioController::class, 'store'])-> name('login.store');
Route::get('/logout',  [InicioController::class, 'destroy'])->middleware('auth')-> name('login.destroy');
Route::get('/usuarios',  [InicioController::class, 'usuarios'])->middleware('auth')-> name('login.usuarios');
Route::get('/dashboard',  [InicioController::class, 'dash'])->middleware('auth')-> name('login.dash');