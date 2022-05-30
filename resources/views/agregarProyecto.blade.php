@extends('base')
@section('contenido')
<div class="container card">
    <div class="text-center mt-5">
        <h1 class="fw-bold titleColor">Datos de Proyecto</h1>                
    </div>
    <hr class="bg-dark border-2 border-top border-dark">
    <form action="{{route('proyectos.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <div class="row g-3">
                <div class="col">
                    <label for="nombreProyecto" class="form-label">Nombre de proyecto</label>
                    <input type="text" class="form-control" id="nombreProyecto" name="nombreProyecto">
                </div>
                
                <div class="col">
                    <label for="empresa" class="form-label">Empresa</label>
                    <input type="text" class="form-control" id="empresa" name="empresa">
                </div>
            </div>
            <br>
            <div class="row g-3">
                
                <div class="col">
                    <label for="cliente" class="form-label">Cliente</label>
                    <select class="form-select form-select-md mb-3" name="cliente" id="cliente">
                        
                        @foreach ($clientes as $item)
                                <option value="{{$item->id}}">{{$item->Nombre}}</option>
                            @endforeach
                      </select>
                </div>
                <div class="col">
                    <label for="liderProyecto" class="form-label">Lider de Proyecto</label>
                    <select class="form-select form-select-md mb-3" name="liderProyecto" id="liderProyecto">
                    
                        @foreach ($desarrolladores as $item)
                                <option value="{{$item->id}}">{{$item->Nombre}}</option>
                            @endforeach
                      </select>
                </div>
                <div class="col">
                    <label for="fechaEntrega" class="form-label">Fecha de Entrega</label>
                    <input type="date" class="form-control" id="fechaEntrega" name="fechaEntrega">
                </div>
            </div>
            <br>
        </div><button class="btn btn-primary" >Guardar Proyecto</button>
    </form>
    <br><br><br>
</div>
@endsection