<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function index(){
        $generos = Genero::Select('id', 'genero')->get();
        return $generos;
    }
    
}
