<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ClientesController extends Controller
{
    public function index()
    {
      
    }

    public function store(Request $request)
    {  
        $clientes = new Clientes();
        $clientes->Nombre = $request->post('nombre');
        $clientes->Telefono = $request->post('telefono');
        $clientes->Correo = $request->post('correo');
        $clientes->Empresa = $request->post('empresa');
        $clientes->save();
        return redirect()->route("home");

    }
    public function destroy($id){

        $clientes = Clientes::find($id);
        $clientes->delete();
        return back();

    }
    public function edit($id)
    {
        $cliente=Clientes::find($id);
        return view("actualizarCliente", compact('cliente'));
    }
    
    public function update(Request $request,$id)
    {
        $clientes = Clientes::find($id);
        $clientes->Nombre = $request->post('nombre');
        $clientes->Telefono = $request->post('telefono');
        $clientes->Correo = $request->post('correo');
        $clientes->Empresa = $request->post('empresa');
        $clientes->save();
        return redirect()->route("home");
    }
}
