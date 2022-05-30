<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Proyectos;
use App\Models\Clientes;
use App\Models\Desarrolladores;

class ProyectosController extends Controller
{
    public function index()
    {
        $datos = Proyectos::with(['clientes', 'desarrolladores'])->get();
        return view ('/proyectos', compact('datos'));
    }

    public function store(Request $request)
    {  
        $proyectos = new Proyectos();
        $proyectos->Nombre = $request->post('nombreProyecto');
        $proyectos->Empresa = $request->post('empresa');
        $proyectos->clientes_id = $request->post('cliente');
        $proyectos->desarrolladores_id = $request->post('liderProyecto');
        $proyectos->FechaEntrega = $request->post('fechaEntrega');
        $proyectos->save();
        return redirect()->route("proyectos");

    }

    public function destroy($id){

        $proyectos = Proyectos::find($id);
        $proyectos->delete();
        return back();

    }

    public function edit($id)
    {   $clientes=Clientes::all();
        $desarrolladores=Desarrolladores::all();
        $datos = Proyectos::with(['clientes', 'desarrolladores'])->get();
        $proyectos=Proyectos::find($id);
        return view('actualizarProyecto', [
 
         'clientes' => $clientes,
         'desarrolladores'=> $desarrolladores,
         'datos'=> $datos,
         'proyectos'=>$proyectos
 
     ]);
       
    }
    
    public function update(Request $request,$id)
    {
        $proyectos = Proyectos::find($id);
        $proyectos->Nombre = $request->post('nombreProyecto');
        $proyectos->Empresa = $request->post('empresa');
        $proyectos->clientes_id = $request->post('cliente');
        $proyectos->desarrolladores_id = $request->post('liderProyecto');
        $proyectos->FechaEntrega = $request->post('fechaEntrega');
        $proyectos->save();
        return redirect()->route("proyectos");
    }
}
