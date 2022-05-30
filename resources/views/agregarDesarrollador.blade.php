@extends('base')
@section('contenido')
<div class="container card">
    <div class="text-center mt-5">
        <h1 class="fw-bold titleColor">Datos de Desarrollador</h1>                
    </div>
    <hr class="bg-dark border-2 border-top border-dark">
    <form action="{{route('desarrolladores.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <div class="row g-3">
                <div class="col">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                
                <div class="col">
                    <label for="area" class="form-label">Area</label>
                    <input type="text" class="form-control" id="area" name="area">
                </div>
            </div>
            <br>
            <div class="row g-3">
                
                <div class="col">
                    <label for="telefono" class="form-label">Numero Telefonico</label>
                    <input type="number" class="form-control" id="telefono" name="telefono">
                </div>
                <div class="col">
                    <label for="correo" class="form-label">Correo electronico</label>
                    <input type="mail" class="form-control" id="correo" name="correo">
                </div>
            </div>
            <br>
        </div><button class="btn btn-primary" id="liveToastBtn">Guardar Desarrollador</button>
    </form>
    <br><br><br>
</div>
@endsection