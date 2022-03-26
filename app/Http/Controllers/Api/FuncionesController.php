<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Funcion;
use Illuminate\Http\Request;

class FuncionesController extends Controller
{
    public function index(){
        $funciones = Funcion::Select('id', 'id_pelicula', 'id_sala', 'fecha', 'hora')->get();
        return $funciones;
    }

}
