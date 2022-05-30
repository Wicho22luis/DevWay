<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\Desarrolladores;

class AgregarProyectoController extends Controller
{
    public function index()
    {
       $clientes=Clientes::all();
       $desarrolladores=Desarrolladores::all();
       return view('agregarProyecto', [

        'clientes' => $clientes,
        'desarrolladores'=> $desarrolladores

    ]);
    }
}
