@extends('base')
@section('contenido')
<div class="container card">
    <div class="text-center mt-5">
        <h1 class="fw-bold titleColor">Actualizar datos de Tarea</h1>                
    </div>
    <hr class="bg-dark border-2 border-top border-dark">
    <form action="{{route('tareas.update',$tareas->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <div class="row g-3">
                <div class="col">
                    <label for="proyecto" class="form-label">Proyecto</label>
                    <select class="form-select form-select-md mb-3" name="proyecto" id="proyecto">
                    
                        @foreach ($proyectos as $item)
                                <option value="{{$item->id}}">{{$item->Nombre}}</option>
                            @endforeach
                      </select>
                </div>
                
                <div class="col">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$tareas->Descripcion}}">
                </div>
            </div>
            <br>
            <div class="row g-3">  
                <div class="col">
                    <label for="fecha" class="form-label">Fecha Limite</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" value="{{$tareas->Fecha}}">
                </div>
                <div class="col">
                    <label for="colaborador" class="form-label">Colaborador</label>
                    <select class="form-select form-select-md mb-3" name="colaborador" id="colaborador">
                    
                        @foreach ($desarrolladores as $item)
                                <option value="{{$item->id}}">{{$item->Nombre}}</option>
                            @endforeach
                      </select>
                </div>
            </div>
            <br>
            <div class="row g-3">  
                <div class="col">
                    <label for="estado" class="form-label">Estado</label>
                    <select class="form-select form-select-md mb-3" name="estado" id="estado" value="{{$tareas->Estado}}">
                        <option value="Estancado">Estancado</option>
                        <option value="En proceso">En proceso</option>
                        <option value="Listo">Listo</option>
                      </select>
                </div>
                <div class="col">
                    <label for="avance" class="form-label">Avance</label>
                    <input type="text" class="form-control" id="avance" name="avance" value="{{$tareas->Avance}}">
                </div>
            </div>
            <br>
        </div><button class="btn btn-primary">Actualizar Tarea</button>
    </form>
    <br><br><br>
</div>
@endsection