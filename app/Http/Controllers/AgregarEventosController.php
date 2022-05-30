<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desarrolladores;
use App\Models\Proyectos;

class AgregarEventosController extends Controller
{
    public function index()
    {
    $proyectos=Proyectos::all();
       $desarrolladores=Desarrolladores::all();
       return view('agregarEvento', [

        'proyectos' => $proyectos,
        'desarrolladores'=> $desarrolladores

    ]);
    }
}
