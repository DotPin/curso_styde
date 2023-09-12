<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    /*public function saludo($name,$apodo=null){
        $name = ucfirst($name);
        $apodo= ucfirst($apodo);
        if($apodo){
            return "Bienvenido {$name}, tu apodo es {$apodo}";
        }else{
            
        }
    }*/

    public function saludoNombre($name){
        $name=ucfirst($name);
        return "Bienvenido {$name}, sin apodo";
    }

    public function saludoNombreApodo($name,$apodo=null){
        $name=ucfirst($name);
        $apodo=ucfirst($apodo);
        return "Bienvenido {$name}, tu apodo es {$apodo}";
    }
}
