<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clientes;
use App\Models\Tareas;
use App\Models\Eventos;
use App\Models\Desarrolladores;
use App\Models\Proyectos;

class HomeController extends Controller
{
    public function index()
    {
        $datos = Clientes::all();
        $tareas = Tareas::with(['desarrolladores', 'proyectos'])->get();
        $eventos= Eventos::with(['desarrolladores', 'proyectos'])->get();
        return view('home', [

            'datos' => $datos,
            'tareas'=> $tareas,
            'eventos'=>$eventos

        ]);
    }
}
