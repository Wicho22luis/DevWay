<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventos;

use App\Models\Proyectos;
use App\Models\Desarrolladores;
class EventosController extends Controller
{
    public function store(Request $request)
    {  
        $eventos = new Eventos();
        $eventos->proyectos_id = $request->post('proyecto');
        $eventos->Lugar = $request->post('lugar');
        $eventos->Fecha = $request->post('fecha');
        $eventos->desarrolladores_id = $request->post('responsable');
        $eventos->save();
        return redirect()->route("home");

    }
    public function destroy($id){

        $eventos = Eventos::find($id);
        $eventos->delete();
        return back();

    }
    public function edit($id)
    {   $proyectos=Proyectos::all();
        $desarrolladores=Desarrolladores::all();
        $eventos=Eventos::find($id);
        return view('actualizarEventos', [
 
         'eventos' => $eventos,
         'desarrolladores'=> $desarrolladores,
         'proyectos'=>$proyectos
 
     ]);
       
    }
    
    public function update(Request $request,$id)
    {
        $eventos = Eventos::find($id);
        $eventos->proyectos_id = $request->post('proyecto');
        $eventos->Lugar = $request->post('lugar');
        $eventos->Fecha = $request->post('fecha');
        $eventos->desarrolladores_id = $request->post('responsable');
        $eventos->save();
        return redirect()->route("home");
    }
}
