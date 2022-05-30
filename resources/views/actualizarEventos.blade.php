@extends('base')
@section('contenido')
<div class="container card">
    <div class="text-center mt-5">
        <h1 class="fw-bold titleColor">Actualizar datos de Evento</h1>                
    </div>
    <hr class="bg-dark border-2 border-top border-dark">
    <form action="{{route('eventos.update',$eventos->id)}}" method="POST">
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
                    <label for="lugar" class="form-label">Lugar</label>
                    <input type="text" class="form-control" id="lugar" name="lugar" value="{{$eventos->Lugar}}">
                </div>
            </div>
            <br>
            <div class="row g-3">
                
                <div class="col">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" value="{{$eventos->Fecha}}">
                </div>
                <div class="col">
                    <label for="responsable" class="form-label">Responsable</label>
                    <select class="form-select form-select-md mb-3" name="responsable" id="responsable">
                    
                        @foreach ($desarrolladores as $item)
                                <option value="{{$item->id}}">{{$item->Nombre}}</option>
                            @endforeach
                      </select>
                </div>
            </div>
            <br>
        </div><button class="btn btn-primary" id="liveToastBtn">Actualizar Evento</button>
    </form>
    <br><br><br>
</div>
@endsection