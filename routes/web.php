<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController;

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
    //return view('welcome');
    return "hola como estas";
});

/*
Route::get('/usuarios', function(){
return"Hol esta es la ruta de los usuarios";
});

Route::get('/usuarios/create',function(){
return"Hola esto es la página de crear usuarios";
});

Route::get('/usuarios/[{IdUsuario}/{Nombre?}',function($idusuario,$nombre=null){
    if($nombre){

        return "Tu número de id es : " . $idusuario ." usuario ".$nombre;
    }
    else{
        return"Tu id es " .$idusuario;
    }

});*/


Route::get('/usuarios',[EjemploController::class,'index']);
Route::get('/usuarios/create',[EjemploController::class,'create']);
Route::get('/usuarios/{idusuario},/{Nombre?}',[EjemploController::class,'otro']);