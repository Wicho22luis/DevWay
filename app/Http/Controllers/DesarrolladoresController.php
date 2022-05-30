<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desarrolladores;

class DesarrolladoresController extends Controller
{
    public function index()
    {
        $datos = Desarrolladores::all();
        return view('desarrolladores', compact('datos'));
    }
    public function store(Request $request)
    {  
        $desarrolladores = new Desarrolladores();
        $desarrolladores->Nombre = $request->post('nombre');
        $desarrolladores->Telefono = $request->post('telefono');
        $desarrolladores->Correo = $request->post('correo');
        $desarrolladores->Area = $request->post('area');
        $desarrolladores->save();
        return redirect()->route("desarrolladores");  
    }

    public function destroy($id){

        $desarrolladores = Desarrolladores::find($id);
        $desarrolladores->delete();
        return back();

    }

    public function edit($id)
    {
        $desarrolladores=Desarrolladores::find($id);
        return view("actualizarDesarrollador", compact('desarrolladores'));
    }
    
    public function update(Request $request,$id)
    {
        $desarrolladores = Desarrolladores::find($id);
        $desarrolladores->Nombre = $request->post('nombre');
        $desarrolladores->Telefono = $request->post('telefono');
        $desarrolladores->Correo = $request->post('correo');
        $desarrolladores->Area = $request->post('area');
        $desarrolladores->save();
        return redirect()->route("desarrolladores"); 
    }
}
