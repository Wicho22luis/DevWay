<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desarrolladores;
use App\Models\Proyectos;

class AgregarTareasController extends Controller
{
    public function index()
    {
       $proyectos=Proyectos::all();
       $desarrolladores=Desarrolladores::all();
       return view('agregarTarea', [

        'proyectos' => $proyectos,
        'desarrolladores'=> $desarrolladores

    ]);
    }
}
