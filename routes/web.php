<?php

use App\Http\Controllers\CitasController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EspecialistasController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\UsuariosController;
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

Route::resource('especialistas',EspecialistasController::class);
Route::resource('citas',CitasController::class);
Route::resource('pacientes',PacientesController::class);
Route::resource('servicios',ServiciosController::class);
Route::resource('usuarios',UsuariosController::class);
