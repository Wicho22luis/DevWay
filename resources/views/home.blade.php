@extends('base')
@section('contenido')
    <div class="card ms-3 me-3 mt-3 mb-3">
        <div class="row ms-3 me-3 mt-3 mb-3">
            <div class="col">
                <div class="">
                    <h4 class="titleColor">Eventos</h4>
                    <hr class="bg-dark border-2 border-top border-dark">
                    <div style="height: 300px; overflow:auto;">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Proyecto</th>
                                    <th scope="col">Lugar</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Responsable</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($eventos as $item)
                                <tr>
                                    <td>{{$item->proyectos->Nombre}}</td>
                                    <td>{{$item->Lugar}}</td>
                                    <td>{{$item->Fecha}}</td>
                                    <td>{{$item->desarrolladores->Nombre}}</td>
                                    <td><form action="{{route('eventos.edit',$item->id)}}" method="GET">
                                        <button type="submit" class="btn btn-success">Editar</button>
                                     </form></td>
                                    <td><form action="{{ route('eventos.destroy', $item->id) }}" method="POST">
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
            </div>
            
        </div>
        <div class="row ms-3 me-3 mt-3 mb-3">
            <div class="col">
                <div class="">
                    <h4 class="titleColor">Clientes</h4>
                    <hr class="bg-dark border-2 border-top border-dark">
                    <div style="height: 300px; overflow: auto; color: #757575">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Numero</th>
                                    <th scope="col">Correo</th>
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
                                    <td><form action="{{route('clientes.edit',$item->id)}}" method="GET">
                                       <button type="submit" class="btn btn-success">Editar</button>
                                    </form></td>
                                    <td><form action="{{ route('clientes.destroy', $item->id) }}" method="POST">
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
            </div>
        </div>
        <div class="row ms-3 me-3 mt-3 mb-3">
            <h4 class="titleColor">Tareas</h4>
            <hr class="bg-dark border-2 border-top border-dark">
            <div class="col" style="height: 300px; overflow:auto;">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Proyecto</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Fecha limite</th>
                            <th scope="col">Colaborador</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Avance</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tareas as $item)
                        <tr>
                            <td>{{$item->proyectos->Nombre}}</td>
                            <td>{{$item->Descripcion}}</td>
                            <td>{{$item->Fecha}}</td>
                            <td>{{$item->desarrolladores->Nombre}}</td>
                            <td>{{$item->Estado}}</td>
                            <td>{{$item->Avance}}</td>
                            <td><form action="{{route('tareas.edit',$item->id)}}" method="GET">
                                <button type="submit" class="btn btn-success">Editar</button>
                             </form></td>
                            <td><form action="{{ route('tareas.destroy', $item->id) }}" method="POST">
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
    </div>
@endsection
