<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;

use App\Models\Proyectos;
use App\Models\Desarrolladores;

class TareasController extends Controller
{
    public function index()
    {
    
    }

    public function store(Request $request)
    {  
        $tareas = new Tareas();
        $tareas->proyectos_id = $request->post('proyecto');
        $tareas->Descripcion = $request->post('descripcion');
        $tareas->Fecha = $request->post('fecha');
        $tareas->desarrolladores_id = $request->post('colaborador');
        $tareas->Estado = $request->post('estado');
        $tareas->Avance = $request->post('avance');
        $tareas->save();
        return redirect()->route("home");

    }
    public function destroy($id){

        $tareas = Tareas::find($id);
        $tareas->delete();
        return back();

    }

    
    public function edit($id)
    {   $proyectos=Proyectos::all();
        $desarrolladores=Desarrolladores::all();
        $tareas=Tareas::find($id);
        return view('actualizarTareas', [
 
         'tareas' => $tareas,
         'desarrolladores'=> $desarrolladores,
         'proyectos'=>$proyectos
 
     ]);
       
    }
    
    public function update(Request $request,$id)
    {
        $tareas = Tareas::find($id);
        $tareas->proyectos_id = $request->post('proyecto');
        $tareas->Descripcion = $request->post('descripcion');
        $tareas->Fecha = $request->post('fecha');
        $tareas->desarrolladores_id = $request->post('colaborador');
        $tareas->Estado = $request->post('estado');
        $tareas->Avance = $request->post('avance');
        $tareas->save();
        return redirect()->route("home");
    }
}
