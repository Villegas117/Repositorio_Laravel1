<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //Aqui creamos la logica y acciones
    public function index(){
        return "Bienvenido a usuario controlador ";
    }
    
public function create(){
    return"Hola esto es la pagina de crear usuarios de controlador";

    
}

public function otro($idusuario,$nombre= null){
    if($nombre){
        return "Tu número de id es ".$idusuario ." usuario ".$nombre." Controlador " ;

    }
    else{
        return"Tu id es ".$idusuario ." Controlador";
    }

}

}
