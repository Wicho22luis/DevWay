@extends('base')
@section('contenido')
    <div class="container card">
        <div class="row ms-3 me-3 mt-3 mb-3">
            <h4 class="titleColor">Desarrolladores</h4>
            <hr class="bg-dark border-2 border-top border-dark">
            <div class="col" style="height: 300px; overflow:auto;">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Area</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                        <tr>
                            <td>{{$item->Nombre}}</td>
                            <td>{{$item->Telefono}}</td>
                            <td>{{$item->Correo}}</td>
                            <td>{{$item->Area}}</td>
                            <td><form action="{{route('desarrolladores.edit',$item->id)}}" method="GET">
                                <button type="submit" class="btn btn-success">Editar</button>
                             </form></td>
                            <td><form action="{{ route('desarrolladores.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form></td>
                        </tr>
                    @endforeach 
                    </tbody>
                </table>
            </div>

        </div>
        <a class="btn btn-primary ms-3 mb-3" href="/agregarDesarrollador" style="width: 15%">Agregar Desarrollador</a>
    </div>
@endsection
