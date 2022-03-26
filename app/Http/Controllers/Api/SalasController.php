<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Sala;
use Illuminate\Http\Request;

class SalasController extends Controller
{
    public function index(){
        $salas = Sala::Select('id', 'sala')->get();
        return $salas;
    }


}
