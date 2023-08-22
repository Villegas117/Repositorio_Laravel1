<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController;
use App\Http\Controllers\MaestrosController;

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
    // comentamos para que no ralize este returnreturn view('welcome');
    return "Hola como estas";
});


//Rutas para acceso a los controladores
//Route::get('/usuarios',[EjemploController::class,'index']);
//Route::get('/usuarios/create',[EjemploController::class,'create']);
//Route::get('/usuarios/{idusuario},/{Nombre?}',[EjemploController::class,'otro']);
Route::resource('maestros',MaestrosController::class);
Route::get('/Maestros/create', [MaestrosController::class,'create']);
Route::get('/Maestros/edit',[MaestrosController::class,'edit']);
